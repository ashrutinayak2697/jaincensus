<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Register_member;
use DB;
use Session;
class AddfamilymemberController extends Controller
{
    public function addfamily()
    {
    	$countries = DB::table("country")->pluck("country_name","country_id");
       	$mobilecode=DB::table('countrycode')->get();
    	return view ('jaincount_user/addfamily',compact('countries','mobilecode'));
    }
    public function dashborad()
    {
    	if (empty(Session::get("family_id"))) {
    		return response()->redirect('/otp');
    	}
    	$family_id = Session::get("family_id");
		$client = new Client();
	    $response = $client->request('POST','http://192.168.1.16/jaincountapi/public/api/viewmemberdetails',[
	      'form_params'=>[
	          'family_id'=>$family_id
	      ]
	    ]);
		$response = $response->getBody();
	    $req = json_decode($response,true);    	
	    // dd($req);
	   	return view ('jaincount_user/dashboard')->with([
	   		"family"=>$req["userdetails"]
	   	]);
    }
    public function deleteMember(Request $req,$id)
    {
      // $Session::get()
    	$client = new Client();
	    $response = $client->request('POST','http://192.168.1.16/jaincountapi/public/api/deletemember',[
	      'form_params'=>[
	          'register_id'=>$id
	      ]
	    ]);
		$response = $response->getBody();
	    $req = json_decode($response,true);    	
	    // dd($req);
	   	return redirect()->route('familyDahsboard');
    }      
    // public function deleteMemberedit(Request $req,$id)
    // {
    //     $id=Session::get('reg');
    //     // dd($id);
    //     $client = new Client();
    //     $response = $client->request('POST','http://192.168.1.16/jaincountapi/public/api/deletemember',[
    //     'form_params'=>[
    //         'register_id'=>$id
    //     ]
    //     ]);
    //     $response = $response->getBody();
    //     $req = json_decode($response,true);  
    //     // $client = new Client();
    //     $response = $client->request('POST','http://192.168.1.16/jaincountapi/public/api/viewmemberdetails',[
    //     'form_params'=>[
    //         'family_id'=>$id
    //     ]
    //   ]);
    // $response = $response->getBody();
    //   $req = json_decode($response,true);     
    //   // dd($req);
    //   return view ('jaincount_user/dashboard')->with([
    //     "family"=>$req["userdetails"]
    //   ]);   
      

    //   // dd($req);
    // }    
    public function ViewMemberDetails(Request $req,$eid)
    {
    	$client = new Client();
            $response = $client->request('POST','http://192.168.1.16/jaincountapi/public/api/viewmember',[
              'form_params'=>[
                  'register_id'=>$eid
              ]
              ]);
              $response = $response->getBody();
              $res=json_decode($response,true);
              // dd($res);
              $first_name=$res['first_name'];
              $family_id=$res['family_id'];
              $reg_id=$res['reg_id'];
              // dd($res['first_name']);
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
              return view('jaincount_user/editdetailsjc',compact('family_id','first_name','middle_name','countries','last_name','birthday','mobile_code','mobile','email','address','landmark','area','gender','pincode','city_name','state_id','country_id','sampraday','other','reg_id','countries','mobilecode','register_number','relation'));
    }

    public function addfamilyedit()
    {
      $id=Session::get('reg');
      // dd($id);
      $client = new Client();
      $response = $client->request('POST','http://192.168.1.16/jaincountapi/public/api/viewmemberdetails',[
        'form_params'=>[
            'family_id'=>$id
        ]
      ]);
    $response = $response->getBody();
      $req = json_decode($response,true); 
        // dd($req);
        $res=$req['userdetails'];
        // $countries = DB::table("country")->pluck("country_name","country_id");
        $mobilecode=DB::table('countrycode')->get();
        return view ('jaincount_user/addfamilyedit',compact('countries','mobilecode','res')); 
    }
  public function addMembereditPost(Request $req)
  {
    $data1=$req->all();
    dd($data1);
  }

    public function addFamilyPost(Request $req)
    {
    	// dd($req->all());
    	$data = $req->all();
    	if (empty(Session::get("family_id"))) {
    		return response()->redirect('/otp');
    	}
    	$family_id = Session::get("family_id");
		  $client = new Client();
	    $response = $client->request('POST','http://192.168.1.16/jaincountapi/public/api/viewmemberdetails',[
	      'form_params'=>[
	          'family_id'=>$family_id
	      ]
	    ]);
		$response = $response->getBody();
	    $req = json_decode($response,true);   
	    if (empty($req["userdetails"])) {
	    	return response()->redirect('/otp');
	    }
	    $first_member = $req["userdetails"][0];
	     $response = $client->request('POST','http://192.168.1.16/jaincountapi/public/api/addfamilymember',[
	      'form_params'=>[
	           	"first_name"=>$data['txtfname'],
				  "middle_name"=>$data['txtmname'],
				  "last_name"=>$data['txtlname'],
				  "relation"=>$data['drprelation'],
				  "family_id"=>$family_id,
				  "birthday"=>$data['txtdate'],
				  "mobilecode"=>$data['drpcode'],
				  "mobilenumber"=>$data['txtmobileno'],
				  "email"=>$data['txtemail'],
				  "address"=>$first_member["address"],
				  "landmark"=>$first_member["landmark"],
				  "area"=>$first_member["area"],
				  "gender"=>$data['gender'],
				  "pincode"=>$first_member["pincode"],
				  "city_name"=>$first_member["city_name"],
				  "state_id"=>$first_member["state_id"],
				  "country_id"=>$first_member["country_id"],
				  "sampraday"=>$first_member["sampraday"],
				"other"=>""

	      ]
	    ]);
		$response = $response->getBody();
	    $req = json_decode($response,true);   
	    return redirect()->route('familyDahsboard');
    }
    public function edit(Request $req)
    {
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
            $res1 = json_decode($response,true);
            // dd($res1['data']['family_id']);
            $response = $client->request('POST','http://192.168.1.16/jaincountapi/public/api/viewmemberdetails',[
        	'form_params'=>[
            'family_id'=>$res1['data']['family_id']
          ]
         ]);
           $response = $response->getBody();
         $res = json_decode($response,true);
         // dd($res['userdetails']);
         return view ('jaincount_user/dashboard')->with([
        "family"=>$res['userdetails']
      ]);
    }
}
