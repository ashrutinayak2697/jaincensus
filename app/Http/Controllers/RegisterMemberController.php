<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Register_member;
use Input;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
class RegisterMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $mobilecode1 = Session::get('drpcode');
       $mobile = Session::get('mobile');
       // dd($mobile);
       $email = Session::get('email');
       $countries = DB::table("country")->pluck("country_name","country_id");
       $mobilecode=DB::table('countrycode')->get();
        return view('jaincount_user.jaincount',compact('countries','mobilecode','email','mobile','mobilecode1'));
    }

    public function index1()
    {
        //
        return view('jaincount_user.jaincountvalidationtest');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('jaincount_user.otp_message');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $data =['first_name'=>$request->txtfname,'middle_name'=>$request->txtmname,'last_name'=>$request->txtlname,'birthday'=>$request->txtdate,'mobilecode'=>$request->drpcode,'mobilenumber'=>$request->txtmobileno,'email'=>$request->txtemail,'address'=>$request->txtaddress,'landmark'=>$request->txtland,'area'=>$request->txtarea,'gender'=>$request->gender,'pincode'=>$request->txtpincode,'city_name'=>$request->city,'state_id'=>$request->state,'country_id'=>$request->country,'sampraday'=>$request->drpsampraday,'other'=>$request->sampraday,'sms'=>$request->ch];

      $client = new Client();
      $response = $client->request('POST', 'http://192.168.1.16/jaincountapi/public/api/register', [
        'form_params' => $data,
        'headers' => [
            'Accept'     => 'application/json'
        ]
      ]);
      $response = $response->getBody();
      $req = json_decode($response,true);
      // dd($req['status']);
      $countries = DB::table("country")->pluck("country_name","country_id");
       $mobilecode=DB::table('countrycode')->get();
      if($req['status']==1)
      {
        $userName = $req['data']['first_name'].' '.$req['data']['middle_name'].' '.$req['data']['last_name'];
        $regNumber = $req['data']['register_number'];
        $id=$req['data']['family_id'];
        // dd($id);
        // $msg = $respo['message'];
        Session::put('family_id',$id);
        return view('jaincount_user.message',compact('userName','regNumber'));
      }
      else
      {
        //sdd($response);
        $msg='Please Required All fields.';
        return view('jaincount_user.jaincount',compact('countries','msg','mobilecode'));
      }
      //print_r(json_decode($response));die();
      
    
    }

     public function register(Request $req)
     {
            $client = new Client();
            $digits = 4;
            $otp=rand(pow(10, $digits-1), pow(10, $digits)-1);
            $email=$req->txtemail;
            $drpcode=$req->drpcode;
            $mobile=$req->txtnumber;
            // dd($otp);
            Session::put('otp',$otp);
            Session::put('email',$email);
            Session::put('drpcode',$drpcode);
            Session::put('mobile',$mobile);
            // $user=new Register_member();
           
            $data = array('email'=>$email,'mobilecode'=>$drpcode,'mobilenumber'=>$mobile,'otp'=>$otp);
// dd($data);
            try {
            $response = $client->request('POST',"http://192.168.1.16/jaincountapi/public/api/otpmsg",[
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
            // if ($res["status"] == 1) 
            // {
            //     return redirect()->action('RegisterMemberController@index'); 
            // }
            return  $res;
        
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show()
    // {
    //     return view('jaincount_user.verification');
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function otpmsg(Request $req)
    {
         $otp = Session::get('otp');
        // $reg_id = Session::get('reg_id');
        // dd($otp);
        // $countries = DB::table("country")->pluck("country_name","country_id");
        $otpenter=$req->txtotp;

        if ($otpenter==$otp) 
        {
            // dd($reg_id);
            return redirect()->action('RegisterMemberController@index');
            // return redirect()->action('HomeController@index');
        }
        else
        {
            return view('jaincount_user/otp_message');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
