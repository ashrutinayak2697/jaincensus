<!-- /* *****************************************
Copyright © Vnurture Technologies   All Rights Reserved. 
This work is property of Vnurture Technologies.
Unauthorized copying or modification of this file, 
via any medium is strictly prohibited
Any part of of this code can not be copied by any means, 
and can not be distributed
********************************************** */
 -->
<?php
	include_once("connection.php");
    $obj=new connection();
    $obj->connect();
    $obj->sql="select * from demo_sangh where sangh_id='".$_REQUEST["i"]."'";
    $obj->select($obj->sql);
    $rows=mysqli_fetch_array($obj->res);
    //for mail
 //    $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 //     $headers = "From: info@vnurture.in(JainSangh)";
	// $message="Welcome to Jain Sangh. You are approved and Now you are member of Jain Sangh";
	// mail($rows['reg_email'],"Jain Sangh Approve member !!!",$message,$headers);

    //for sms
   // $ch = curl_init();
    //curl_setopt($ch, CURLOPT_URL, "http://1.rapidsms.co.in/api/push.json?apikey=5b06a8a3f3da1&route=trans&sender=VNURTR&mobileno=".trim($rows["mobile_number"])."&text=Welcome to Bareja Jain Samaj You are approved and Now you are member of Bareja Jain Samaj");
    // curl_setopt_array($ch, array(
    //                             CURLOPT_RETURNTRANSFER => 1,
    //                             CURLOPT_URL => "http://1.rapidsms.co.in/api/push.json?apikey=5b06a8a3f3da1&route=trans&sender=VNURTR&mobileno=+91".trim($rows["mobile_number"])."&text=Welcome to  Jain Sangh You are approved and Now you are trusty of Jain Sangh",
    //                             CURLOPT_USERAGENT => 'message sent successfully'
    //                         ));
    // $resp=curl_exec($ch);
    //curl_exec($ch);
                
    // close cURL resource, and fr
    // grab URL and pass it toee up system resources
    //curl_close($ch);
    $obj->sql="insert into sangh_directory (`sangh_name`,`login_name`,`address`,`landmark`,`city`,`pincode`,`state`,`country`,`telephone`,`mobile`,`email`,`website`,`trust_reg_no`,`pan_no`) select `sangh_name`,`login_name`,`address`,`landmark`,`city`,`pincode`,`state`,`country`,`telephone`,`mobile`,`email`,`website`,`trust_reg_no`,`pan_no` from demo_sangh";
    $obj->insert($obj->sql);
    echo "<script>alert('Your detail is approved now..');document.location='memberdetail.php';</script>";
?>