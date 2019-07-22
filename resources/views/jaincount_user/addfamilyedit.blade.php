<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
  <title>Jain Census | Jain Count Register</title>
  <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

  <link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="public/css2/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="public/css2/skill.css">
  <link rel="stylesheet" type="text/css" href="public/css2/stylesheet.css">
  <link rel="stylesheet" type="text/css" href="public/css/jquery-ui.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="public/css3/style.css">
  <link rel="stylesheet" type="text/css" href="public/css3/animate.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type='text/javascript' src='https://vnurture.in/wp-content/themes/betheme/assets/animations/animations.min.js?ver=20.7.6'></script>
 <style>
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
.text-center {
    text-align: center;
    width: 100%;
    float: left;
}

.form-inline {
    text-align: left;
    width: 90%;
    background-color: #f9f9f9;
    padding: 22px 24px;
    border-radius: 10px;
    margin: 0 auto;
    overflow-x: unset;
    box-shadow: 0px 0px 5px;
    margin-top: 10px;
}
 input[type=submit] {
    margin-top: 20px;
    padding: 10px 100px;
    background-color: #073e6e;
    border: none;
    color: white;
    font-size: 20px;
    margin-bottom: 20px;
    letter-spacing: 1px;
}
    #b{
    display: none;
  }
  #c{
    display: none;
  }
  </style>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</script>
<script type="text/javascript">
function CheckSampraday(val){
 var element=document.getElementById('drpsampraday');
 if(val=='Other')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script>
<script>
function validation () 
{
  var err = 0;
  var ext_err = 0;
  var ck_name = /^[a-zA-Z ]*$/;
  var pat=/^([0-9]{10,13})+$/;
  var pat1=/^([0-9]{12})+$/;
   var ck_alphanum1 = /^([a-zA-Z0-9]){1,24}$/;
  var ck_alphanum = /^([a-zA-Z0-9_-]){1,12}$/;
  var ck_alphanum2 = /^[a-z0-9]+$/i;
  var bdate=/^\d{1,2}\-\d{1,2}\-\d{4}$/;
  // var ck_num = /^\-{0,1}(?:[0-9]+){0,1}(?:\.[0-9]+){0,1}$/i;
  var err_flag = true;

   if (!ck_name.test(document.getElementById("txtfname").value.trim()) ) 
  {
    document.getElementById('txtfname_err').innerHTML = 'Please enter valid name';
    var err_flag = false;
    }
  if (document.getElementById("txtfname").value.trim()=="")
  {
    document.getElementById('txtfname_err').innerHTML = ' required';
    var err_flag = false;
    }

    if (!ck_name.test(document.getElementById("txtlname").value.trim()) ) 
  {
    document.getElementById('txtlname_err').innerHTML = 'Please enter valid name';
    var err_flag = false;
    }
    if (document.getElementById("txtlname").value.trim()=="")
  {
    document.getElementById('txtlname_err').innerHTML = 'required';
    var err_flag = false;
    }  
    if (!ck_name.test(document.getElementById("txtmname").value.trim()) ) 
  {
    document.getElementById('txtmname_err').innerHTML = 'Please enter valid name';
    var err_flag = false;
    }
    if (document.getElementById("txtmname").value.trim()=="")
  {
    document.getElementById('txtmname_err').innerHTML = 'required';
    var err_flag = false;
    }  
if (!pat.test(document.getElementById("txtmobileno").value.trim())) 
  {
    document.getElementById('txtmobileno_err').innerHTML = 'Enter valid number';
    var err_flag = false;
    }

if (document.getElementById("txtmobileno").value.trim()=="")
  {
    document.getElementById('txtmobileno_err').innerHTML = 'required';
    var err_flag = false;
    }
      
  if (document.getElementById("txtdate").value=="")
      {
        document.getElementById('txtdate_err').innerHTML = 'required';
        var err_flag = false;
      } 
  
  
    
  if(err_flag == false)
  {
    return false;
  }
  else
  {
    document.frmstf_add.submit();
  }
}
</script>

<!-- Compelete validation -->
<script>
function onblur_validation(id,msgid,MSG) {
   msg=document.getElementById(id).value;
   if(msg=="")
  {
  document.getElementById(msgid).innerHTML = MSG;
  return false;
  }
  else
  {
   document.getElementById(msgid).innerHTML ="";
  }
}
</script>
<style type="text/css">
  #b{
    display: none;
  }
  #c{
    display: none;
  }
</style>

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
   
<li class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Edit Profile
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href=" {{url('otpverifymobile')}}">Edit Profile Mobile Number</a></li>
      <li><a href="{{ url('verification') }}">Edit Profile Register Number</a></li>
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
@if(isset($msg))

<div class="alert alert-success">
<strong>{{ $msg}}</strong>
</div>
@endif 
  <!--START FORM-->
  <div class="bgimg" style="background-color: #e3ecf5;">
<div class="container">
  <div class="row">
    <div class="title text-center"><h1>Jain Census Add Family Member Form</h1></div>
    <div class="title text-center"><h3>(જૈન વસ્તી ગણના)</h3></div>
    <div class="title text-center"><h4 style="color: red; ">(Field marked with * are mandatory)</h4>
    </div>

</div>
  <form  role="form" method="post" action="{{ route('addMembereditPost') }}" enctype="multipart/form-data" class="form-inline" name="frmstf_add" id="frmstf_add" >
                 {{ csrf_field() }}
   
<div class="row">
    <div class="col-sm-4 col-xs-12">
      <div class="form-group">
        <label for="quote">First Name <span style="color: red;">*</span></label>
        <b style="color:red;" ><label id="txtfname_err" class="error-validation errcustome"></label></b><br/>
        <input type="text" name="txtfname" placeholder="Enter First Name" id="txtfname" onblur="onblur_validation('txtfname','txtfname_err','This filed is required');"/>
      </div>
    </div>

    <div class="col-sm-4 col-xs-12">
      <div class="form-group">
        <label>Middle Name <span style="color: red;">*</span></label><b style="color:red;" ><label id="txtmname_err" class="error-validation errcustome"></label></b><br/>
        <input type="text" name="txtmname" placeholder="Enter Middle Name" id="txtmname" onblur="onblur_validation('txtmname','txtmname_err','This filed is required');"/>
      </div>
    </div>


    <div class="col-sm-4 col-xs-12">
      <div class="form-group">
        <label>Last Name <span style="color: red;">*</span></label>
         <b style="color:red;" ><label id="txtlname_err" class="error-validation errcustome"></label></b><br/>
        <input type="text"  name="txtlname" placeholder="Enter Last Name" id="txtlname" onblur="onblur_validation('txtlname','txtlname_err','This filed is required');"/>
      </div>
    </div>
</div>

  <div class="row">
   <div class="col-sm-4">
    <div class="form-group"><label>Mobile Number<span style="color: red;">*</span></label>
     <b style="color:red;" > <label id="txtmobileno_err" class="error-validation errcustome"></label></b><br/>
    <select style="height: 36px;position: relative; width: 60px !important;" name="drpcode">
           <option value="" selected>Select Country Code</option>
        @foreach($mobilecode as $key)
          @if($key->country_code_id == 1)
            <option value="{{ $key->country_code}}" selected>{{ $key->country_code}} {{ $key->country_name }} </option>
          @else
            <option value="{{ $key->country_code}}">{{ $key->country_code}} {{ $key->country_name }} </option>
          @endIf
          
      
      @endforeach
      <input type="text" name="txtmobileno" placeholder="Enter Mobile" id="txtmobileno" onblur="onblur_validation('txtmobileno','txtmobileno_err','This filed is required');" style="width: 200px;position: absolute;" >
    </select>
  </div>
   </div>
    <div class="col-sm-4 col-xs-12">
      <div class="form-group">
        <label>Birthdate(dd-mm-yyyy)<span style="color: red;">*</span></label>
         <b style="color:red;" ><label id="txtdate_err" class="error-validation errcustome"></label></b><br/>
        <input type="text"  name="txtdate" placeholder="Enter Birthdate (dd-mm-yyyy)" id="txtdate"   onchange="onblur_validation('txtdate','txtdate_err','This filed is required');" readonly="" />
      </div>
    </div>



    <div class="col-sm-4 col-xs-12">
    <div class="form-group" style="width: 100%;"><label>Gender</label> <b style="color:red;" ><label id="txtdate_err" class="error-validation errcustome"></label></b><br/>
      <div class="radio">
        <label><input type="radio" name="gender" name="gender" value="Male" checked="" id="Male">Male</label> &nbsp;&nbsp;&nbsp;&nbsp;
          <label style="margin-left: 20px"><input  type="radio" name="gender"  value="Female"  id="Female">Female</label>
      </div>
    </div>
  </div>
</div>

<div class="row">
      <div class="col-sm-4 col-xs-12">
      <div class="form-group">
        <label>Email Id</label> <b style="color:red;" ><label id="txtemail_err" class="error-validation errcustome"></label></b><br/>
        <input type="text" name="txtemail" placeholder="Enter Email" id="txtemail"  />
      </div>
    </div>
  <div class="col-sm-4 col-xs-12">
    <div class="form-group">
      <label for="inputCity">Relation</label> <b style="color:red;" ><label id="state_err" class="error-validation errcustome"></label></b><br/>
       <select style="height: 35px; width: 266px;" name="drprelation">
                  <option value="">Select Relation</option>
                  <option value="wife">Wife</option>
                  <option value="son">Son</option>
                  <option value="daughter">Daughter</option>
                  <option value="father">Father</option>
                  <option value="mother in law">Mother in Law</option>
                  <option value="father in law">Father in Law</option>
                  <option value="grandmother">Grand Mother</option>
                  <option value="grandfather">Grand Father</option>
                  <option value="sister">Sister</option>
                  <option value="brother">Brother</option>
                </select>
               
    </div>
  </div>
</div>


  </form>
  <div class="row">
  <div class="col-xs-12">
   <input type="submit" name="save" value="Submit" onclick="return validation();">
  </div>
</div>
</div>
  <!--END FORM-->

</div>

<!-- footer -->
<footer>
    <div class="container-fluid">
      <div class="container">
    <div class="copyright">
      <p>2019 All Rights Reserved © Samast Mahajan <span style="margin-left: 10px; font-weight: bold;"><a href="https://jainsankhya.org/privacy">Privacy Policy</a></span></p>
    </div>
  </div>
  </div>
  </footer>
<!-- <script type="text/javascript" src="public/js2/jquery.min.js"></script>
<script type="text/javascript" src="public/js2/bootstrap.min.js"></script> -->
<script type="text/javascript">
    $('#country').change(function(){
    var countryID = $(this).val();    
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('get-state-list')}}?country_id="+countryID,
           success:function(res){               
            if(res){
                $("#state").empty();
                $("#state").append('<option>Select State</option>');
                $.each(res,function(key,value){
                    $("#state").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#state").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        
    }      
   });

</script> 


    <script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="public/js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="public/js/bootstrap.min.js"></script>

  <script>
    $(document).ready(function(){
      var date=new Date();
      $('#txtdate').datepicker({
        dateFormat:"dd-mm-yy",
        changeMonth:true,
        changeYear:true,
        
        yearRange:"-119:+0",
        maxDate:new Date()
      });
    })
  </script>
</body>
</html>