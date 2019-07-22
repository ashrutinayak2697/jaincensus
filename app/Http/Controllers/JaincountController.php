<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register_member;
use GuzzleHttp\Client;
use Input;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
class JaincountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('jaincount_user/message');

    } 
    public function otpverification(Request $req)
    {
      $otp = Session::get('otp');
      $reg = Session::get('reg');
      // dd($reg);
      $otpenter=$req->txtotp;

       if ($otpenter==$otp) 
       {
        $client = new Client();
        $response = $client->request('POST','http://192.168.1.16/jaincountapi/public/api/viewmemberdetails',[
        'form_params'=>[
            'family_id'=>$reg
          ]
         ]);
           $response = $response->getBody();
         $res = json_decode($response,true);
         // dd($res['userdetails'][0]['family_id']);
         // $id=Session::put('');
         return view ('jaincount_user/dashboardjc')->with([
        "family"=>$res['userdetails']
      ]);
            }
            else
            {
                return view('jaincount_user/verification')->with(["msg"=>"Invaild OTP."]);
            }
    }
    public function index1(Request $req)
    {
      $reg=Session::get('reg_details');
        if(empty($reg))
        {
          return view('jaincount_user/verificationmobile');
        }
        else
        {
             return view('jaincount_user/test');
        
        }
    }
    public function viewperson($cid)
    {
      if (empty($cid)) 
      {
        return view('jaincount_user/verificationmobile');
      }
      else
      {
        

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id=Session::get("id");
        if(empty($id))
        {
          return view('jaincount_user/verification');
        }
        else
        {
          $client = new Client();
          $response = $client->request('POST','http://192.168.1.16/jaincountapi/public/api/viewmember',[
            'form_params'=>[
                'register_id'=>$id
            ]
            ]);
            $response = $response->getBody();
            $res=json_decode($response,true);
            $first_name=$res['first_name'];
            $reg_id=$res['reg_id'];
            $family_id=$res['family_id'];// dd($res['first_name']);
            $middle_name=$res['middle_name'];
            $last_name=$res['last_name'];
            $birthday=date('d-m-Y', strtotime($res['birthday']));
            $mobile_code=$res['mobile_code'];
            $mobile=$res['mobile'];
            $email=$res['email'];
            $address=$res['address'];
            $landmark=$res['landmark'];
            $area=$res['area'];
            $gender=$res['gender'];
            $pincode=$res['pincode'];
            $city_name=$res['city_name'];
            $state_id=$res['state_id'];
            $country_id=$res['country_id'];
            $sampraday=$res['sampraday'];
            $other=$res['other'];
            $register_number=$res['register_number'];
            $relation=$res['relation'];
            $countries = DB::table("country")->pluck("country_name","country_id");
            $mobilecode=DB::table('countrycode')->get(); 
            $countries = DB::table("country")->pluck("country_name","country_id");
            return view('jaincount_user/editdetails',compact('family_id','first_name','middle_name','countries','last_name','birthday','mobile_code','mobile','email','address','landmark','area','gender','pincode','city_name','state_id','country_id','sampraday','other','reg_id','countries','mobilecode','register_number','relation'));
          }
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function otpverify(Request $req)
    {
        $otp = Session::get('otp');
        $reg_id = Session::get('reg_id');
        // dd($otp);
        // $countries = DB::table("country")->pluck("country_name","country_id");
        $otpenter=$req->txtotp;

        if ($otpenter==$otp) 
        {
            // dd($reg_id);
            return redirect()->action('JaincountController@create')->with([
                "id"=>$reg_id
            ]);
            // return redirect()->action('HomeController@index');
        }
        else
        {
            return view('jaincount_user/verification')->with(["msg"=>"Invaild OTP."]);
        }
    }
    public function makeRequest(Request $req)
    {
            $client = new Client();
            $digits = 6;
            $otp=rand(pow(10, $digits-1), pow(10, $digits)-1);
            // dd($otp);
            Session::put('otp',$otp);
            // $user=new Register_member();
           
            $data = array('register_number'=>$req->txtadharnumber,'otp'=>$otp);
// dd($data);
            try {
            $response = $client->request('POST',"http://192.168.1.16/jaincountapi/public/api/otpregisternumber",[
            'form_params'=>$data,
            'headers' => [
            'Accept'     => 'application/json'
            ]
            ]);
            $response = $response->getBody();
            } catch (RequestException $e) {
                dd($e->getMessage());
            }
            $res=json_decode($response,true);
              // dd($res);
            if ($res["status"] == 1) {
              $reg_id=$res['userid'];
            // dd($reg_id);
            Session::put('reg_id',$reg_id);
            }
            return  $res;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function duplication(Request $req)
    {
        // // ahiya mane e user nu id male?
        // nahi ye instant valdition register time ka he ajax ke sath kiya tha vo
        $adhar=$req->txtaname;
        $pass=$req->txtpnumber;
        $query = Register_member::whereNotNull("reg_id");
        if (!empty($adhar)) {
            $query = $query->where("adharcardnumber",$adhar);
        }
        if (!empty($pass)) {
            $query = $query->where("passport",$pass);
        }
        $regi_members =$query->count();
        // dd($regi_members);
        if ($regi_members == 0) {
        return response()->json(["status"=>true]);
        }
        return response()->json(["status"=>false]);

    }
    public function duplicationedit(Request $req)
    {
      $adhar=$req->txtaname;
      $pass=$req->txtpnumber;
      $reg_id=$req->txtreg_id; 
      $query = Register_member::where("reg_id","<>",$reg_id);
      if (!empty($adhar)) 
      {
        $query = $query->where("adharcardnumber",$adhar);
      }
      if (!empty($pass)) 
      {
        $query = $query->where("passport",$pass);
      }
      $regi_members =$query->count();
        // dd($regi_members);
      if ($regi_members < 0) 
      {
        return response()->json(["status"=>true]);
      }
      return response()->json(["status"=>false]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
     // dd($req);
      $client = new Client();
      $data=['reg_id'=>$req->txtreg_id,'first_name'=>$req->txtfname,'middle_name'=>$req->txtmname,'last_name'=>$req->txtlname,'relation'=>$req->drprelation,'birthday'=>$req->txtdate,'mobilecode'=>$req->drpcode,'mobilenumber'=>$req->txtmobileno,'email'=>$req->txtemail,'address'=>$req->txtaddress,'landmark'=>$req->txtland,'area'=>$req->txtarea,'gender'=>$req->gender,'pincode'=>$req->txtpincode,'city_name'=>$req->city,'state_id'=>$req->state,'country_id'=>$req->country,'sampraday'=>$req->drpsampraday,'other'=>$req->sampraday];
      $response = $client->request('POST','http://192.168.1.16/jaincountapi/public/api/updatemember',[
            'form_params'=>$data,
            'headers' => [
            'Accept'     => 'application/json'
            ]
          ]);
            // dd($response);
            $response = $response->getBody();
            // dd($response);
            return redirect()->action('JaincountController@vieweditdetails')->with([
                "id"=>$data['reg_id']]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function vieweditdetails()
    {
      return view ('jaincount_user/editmessage');
        // dd($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function otp(Request $req)
    {
          // dd($req);
          $client = new Client();
          $digits = 6;
          $otp=rand(pow(10, $digits-1), pow(10, $digits)-1);
            // dd($otp);
          Session::put('otp',$otp);
            // $user=new Register_member();
           
          $data = array('mobilecode'=>$req->drpcode,'mobilenumber'=>$req->txtnumber,'otp'=>$otp);
         // dd($data);
          try 
          {
            $response = $client->request('POST',"http://192.168.1.16/jaincountapi/public/api/otpsms",[
            'form_params'=>$data,
            'headers' => [
            'Accept'     => 'application/json'
            ]
            ]);
            $response = $response->getBody();
            
          } catch (RequestException $e) 
          {
                dd($e->getMessage());
            
          }
            $res=json_decode($response,true);
              // dd($res);
            if ($res["status"] == 1) 
            {
                $reg_id=$res['familyid'];
                Session::put('reg',$reg_id);
             
            }
            return $res;
    }
// public function otpverification1(Request $req)
// {
//    $otp = Session::get('otp');
//    // dd($otp);
//    $otpenter=$req->txtotp;
//    // dd($otpenter);
//    if ($otpenter==$otp) 
//    {
//     dd($reg);
//             // return redirect()->action('JaincountController@create')->with([
//                 "id"=>$reg_id
//             ]);
//             // return redirect()->action('HomeController@index');
//         }
//         else
//         {
//             return view('jaincount_user/verification');
//         }
// }
}

