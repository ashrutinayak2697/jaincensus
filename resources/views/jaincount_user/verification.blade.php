<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
   <title>Edit Profile</title>
    <link rel="stylesheet" href="public/css3/style.css">
  <link rel="stylesheet" type="text/css" href="public/css3/animate.css">
   <link rel="stylesheet" type="text/css" href="public/css2/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="public/css2/skill.css">

<style type="text/css">
  .btn-primary {

    color: #777 !important;
    background-color: transparent !important;
    border-color: transparent !important;

}
.btn.btn-primary.dropdown-toggle {

    padding: 15px;
    font-size: 13px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;

}
.active.btn.btn-primary.dropdown-toggle {

    background-color: #2e3192 !important;
    color: #fff !important;
    padding-top: 15px;
    padding-bottom: 15px;
    transition: all 1s;
    border-radius: 0 !important;

}
.dropdown-menu > li > a {

    padding: 8px 0 !important;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #777 !important;
    text-align: left;
    font-size: 13px !important;
    font-weight: bold;
    letter-spacing: 1px !important;

}
.dropdown-menu {

    
    left: 0 !important;
    
    min-width: 260px !important;
    padding:0px !important;

}
   body{
      background-image: url('images/temple copy2.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    background-size: cover;

   }
   .test{
      background-color:rgba(255, 255, 255, 0.5490196078431373);
    box-shadow: 0px 0px 9px black;
    padding: 9px 43px;
    margin: 10px 30px;
   }

   label {
    font-size: 15px;
    display: block;
margin-top: 10px;}

    form{
      background-color:rgba(255, 255, 255, 0.5490196078431373);
      box-shadow: 0px 0px 9px black;
      padding: 9px 43px;
      margin: 10px 30px;
    }

    h1{
      text-align: center;
    margin: 20px;
    }
    input[type=text]{
    height: 40px;
    width: 100%;
    padding: 5px;
    }

button.resend, button.submit {
    /*display: block;*/
    /*width: 100%;*/
    text-align: center;
    background-color: #121265;
    font-size: 15px;
    color: white;
    margin: 0 auto;
    text-decoration: none;
    margin-top: 10px;
    border-radius: 15px;
    padding: 8px;
    width: 100%;
}

a.cancle {
    display: block;
    text-align: center;
    font-size: 20px;
    color: #0a6ce8;
    margin: 0 auto;
    margin-top: 10px;
}

@media only screen and (max-width: 320px)
{

  .mobile{
    width: 68% !important;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function()
{

  $("#send").click(function()
  {
    
    let adhar = $('#adhar').val();
    let drpcode = $('#drp').val();
    let number = $('#number').val();
    let token  = $("input[name=_token]").val();
    $.ajax({
      url: 'demo',
      type:'post',
      data: {'_token': token ,'txtadharnumber':adhar,'drpcode':drpcode,'txtnumber':number},
      dataType: 'JSON',
      success: function(result)
      {
         // console.log(result);
        if(result.status == 1)
        {
           $("#b").show();
           $("#c").show();
           $("#a").show(); 
           $("#p").hide();
           $("#r").hide();
           $("#e").hide();
           $("#l").show();
        }
        if(result.status == 0)
        {
            alert(result.message);
        }
      }
    });
  });
 });
</script>
</head>
<body>
<div class="container-fluid top-header">
    <div class="container">
      
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
          <div class="topheader">
                        <ul>
                          <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span><a href="mailto:info@jainsankhya.org">info@jainsankhya.org</a></li>
                          <li><span><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:022-22060390">022-22060390</a></li>
                          
                       </ul>
          </div>
        </div>
      
    </div>
  </div>


  <header>
    <nav id="header-sroll" class="navbar navbar-default">
  <div class="container-fluid">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}"><img src="images/logo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
    
<ul class="nav navbar-nav navbar-right">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li><a href="{{ url('otp') }}">Register</a></li>
   
<li class="dropdown" class="active">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Edit Profile
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href=" {{url('otpverifymobile')}}">Edit Profile Mobile Number</a></li>
      <li class="active"><a href="{{ url('verification') }}">Edit Profile Register Number</a></li>
    </ul>
  </li>
      <li><a href="{{ url('feedback') }}">feedback</a></li>
      <li><a href="{{ url('faq') }}">faq</a></li>
      <li><a href="{{ url('contact') }}">Contact us</a></li>
      
       
    </ul>
    </div><!-- /.navbar-collapse -->
</div>
  </div><!-- /.container-fluid -->
</nav>
  </header>
  
<div class="container-fluid back" style="width:100%; float:left;">
<div class="conatiner">
   <div class="row" style="padding-bottom:5%;padding-top:5%;">
   
      <div class="col-md-3"></div>
      
   <div class="col-md-6 col-sm-12">
         <h1 style="color: #013086; font-weight: bolder;">Verification Data</h1>
        <div class="cont">
      
    </div>
            <!-- <form method="post"> -->
              <form-group>
            <div class="test" id="e" style="padding:30px 70px !important;">
             @if(isset($msg))
            <div class="alert alert-danger">
              <strong>{{ $msg}}</strong>
            </div>
          @endif
               <div id="p">
               <label>Register Number</label>
               <input type="text" name="txtadharnumber" placeholder="Enter Your Register Number" id="adhar">
               {{ csrf_field() }}
               </div>
              
               <br/>
               <div class="" id="r">
                  <button class="submit" style="background-color: #f75439"  id="send" name="Send">SEND OTP</button>
                  <!-- <a href="{{ url('Demo')}}" >SEND OTP</a> -->
               </div>
              </div>
          <form method="post" action="{{ route('otpverify') }}" id="l" style="display: none;">
            @csrf
            <!-- $userdetails=$response['userdetails']; -->
                <div id="c" style="display: none;">
                  <label>Eneter OTP</label>
                    <input type="text" name="txtotp" id="txtotp" placeholder="Enter OTP Number" >
               </div>
               <div class="" id="b" style="display: none;">
                  <button class="resend" id="resend" name="resend">SUBMIT</button>
               </div>
               <div class="" id="a" style="display: none;">
                  <a href="" class="cancle">Cancle</a>
               </div>
          </form>
          </form-group>
       
        </div>
      </div>
      <div class="col-xs-3"></div>
   </div>
</div>
</div>
<div class="container-fluid" style="padding:0px !important;">
  
    <footer>
    <div class="container-fluid">
      <div class="container">
    <div class="copyright">
      <p>2019 All Rights Reserved © Samast Mahajan <span style="margin-left: 10px; font-weight: bold;"><a href="#">Privacy Policy</a></span></p>
    </div>
  </div>
  </div>
  </footer>
  
  </div>
</body>
</html>


