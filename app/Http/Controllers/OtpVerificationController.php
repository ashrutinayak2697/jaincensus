<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtpVerificationController extends Controller
{
    public function otpsms(Request $request)
    {
        $adhar=request('adharcardnumber');
        $mobile_code=request('mobilecode');
        $mobile=request('mobilenumber');
        $otp=request('otp');

        $rules = array(
            'mobilecode' => 'required',
            'mobilenumber' => 'required',
            'otp'=>'required'
        );

         $validator = Validator::make($request->all(), $rules);
         if ($validator->fails()) 
         {
            // ['error'=>$validator->errors()
            return response()->json(["status"=>0,"message"=>$validator->errors()]);
        }
        else
        {
            $coun=DB::table('register_members')->select('first_name','middle_name','last_name','adharcardnumber','ocipcinumber','passport','birthday','mobilecode','mobilenumber','email',
            'address','landmark','area','gender','pincode','city_name','state_id','country_id','sampraday','other','sms')->where('mobilecode',$mobile_code)->where('mobilenumber',$mobile)->where('adharcardnumber',$adhar)->orWhere('passport',$adhar)->get();
            if(empty($coun))
           {
            return response()->json(["status"=>0,"message"=>"Your adharcard or passport not are not match."]);
           }
           if(!empty($coun))
           {
                 $ch = curl_init();
                 curl_setopt_array($ch, array(
                 CURLOPT_RETURNTRANSFER => 1,
                 CURLOPT_URL =>"http://1.rapidsms.co.in/api/push.json?apikey=5c0795850512a&route=clientsms&sender=JAINSG&mobileno=".$row["reg_t_mobileno"]."&text=Dear Jain Sangh User,%0a".$message."%0a%0aThank You %0aPlease visit,%0awww.jainsangh.in",
                 CURLOPT_USERAGENT => 'message sent successfully'
                 ));
                 $resp=curl_exec($ch);
                                                
                                                    // close cURL resource, and fr
                                                    // grab URL and pass it toee up system resources
                curl_close($ch);
                                                // echo $row["reg_t_mobileno"];
            }   
            return response()->json(["status"=>1,"memberdetails"=>$coun,"message"=>"Member Details view SuccessFully."]);
           } 
        }
}
