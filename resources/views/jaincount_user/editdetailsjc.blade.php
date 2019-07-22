<!DOCTYPE html>
<html>
<head>

   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
   <title>Edit Profile</title>
   <link rel="stylesheet" href="public/css3/style.css">
  <link rel="stylesheet" type="text/css" href="../../public/css3/animate.css">
   <link rel="stylesheet" type="text/css" href="../../public/css2/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="../../public/css2/skill.css">
   <link rel="stylesheet" type="text/css" href="../../public/css2/editprofile.css">
   <link rel="stylesheet" type="text/css" href="../../public/css/jquery-ui.min.css">
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
 input[type=submit] {
    margin-top: 20px;
    padding: 10px 100px;
    background-color: #073e6e;
    border: none;
    color: white;
    font-size: 18px;
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
 
   <script type="text/javascript">
   function CheckSampraday(val)
   {
      let sampraday=
      var element=document.getElementById('drpsampraday');
      if(val=='Select sampraday'||val=='Other')
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
      if (document.getElementById("country").value.trim()=="")
      {
         document.getElementById('country_err').innerHTML = 'required';
         var err_flag = false;
      } 
      if (document.getElementById("state").value.trim()=="")
      {
         document.getElementById('state_err').innerHTML = 'required';
         var err_flag = false;
      }
      if (document.getElementById("city").value.trim()=="")
      {
         document.getElementById('city_err').innerHTML = 'required';
         var err_flag = false;
      }
      if (!ck_name.test(document.getElementById("city").value.trim()) ) 
      {
         document.getElementById('city_err').innerHTML = 'Please enter valid name';
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
      if (!bdate.test(document.getElementById("txtdate").value.trim()) ) 
      {
         document.getElementById('txtdate_err').innerHTML = 'Please enter valid formate date';
         var err_flag = false;
      }
      if (!ck_alphanum.test(document.getElementById("txtpincode").value.trim())) 
      {
         document.getElementById('txtpincode_err').innerHTML = 'Enter up to 12 characters';
         var err_flag = false;
      }
      if (document.getElementById("txtpincode").value.trim()=="")
      {
         document.getElementById('txtpincode_err').innerHTML = 'required';
         var err_flag = false;
      }  
      if (!ck_alphanum2.test(document.getElementById("txtarea").value.trim()) ) 
      {
         document.getElementById('txtarea_err').innerHTML = 'Please enter valid name';
         var err_flag = false;
      }
      if (document.getElementById("txtarea").value.trim()=="")
      {
          document.getElementById('txtarea_err').innerHTML = 'required';
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
function onblur_validation(id,msgid,MSG)
{
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
</head>
<body>
@if(isset($msg))

<div class="alert alert-success">
<strong>{{ $msg}}</strong>
</div>
@endif

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
   <!--START FORM-->
<div class="container">
   <div class="row">
      <!-- <div class="title text-center"><h1>EDIT PROFILE</h1></div> -->
      <div class="title text-center"><h2>Your Registration Number is: {{$register_number}}</h2>
    </div>
       <div class="title text-center"><h3>(જૈન વસ્તી ગણના)</h3></div>
    <div class="title text-center"><h4 style="color: red; ">(Field marked with * are mandatory)</h4>
    </div>

</div>
<form role="form" method="POST" action="{{ route('edit') }}" enctype="multipart/form-data" class="form-inline" name="frmstf_add" id="frmstf_add" >
                 {{ csrf_field() }}
<div class="row">
      <div class="col-sm-4 col-xs-12">
         <div class="form-group">
            <label>First Name <span style="color: red;">*</span></label> <b style="color:red;" ><label id="txtfname_err" class="error-validation errcustome"></label></b><br/>
            <input type="text" name="txtfname" placeholder="Enter First Name" id="txtfname" onblur="onblur_validation('txtfname','txtfname_err','This filed is required');" value="{{ $first_name }}" />
            <input type="text" name="txtreg_id" placeholder="Enter First Name" id="txtfname" value="{{ $reg_id }}" hidden="hidden" />
            <input type="text" name="txtfml_id" placeholder="Enter First Name" id="txtfname" value="{{ $family_id }}" hidden="hidden" />
         </div>
      </div>

      <div class="col-sm-4 col-xs-12">
         <div class="form-group">
            <label>Middle Name <span style="color: red;">*</span></label><b style="color:red;" ><label id="txtmname_err" class="error-validation errcustome"></label></b><br/>
            <input type="text" name="txtmname" placeholder="Enter Middle Name" id="txtmname" onblur="onblur_validation('txtmname','txtmname_err','This filed is required');" value="{{ $middle_name }}" />
         </div>
      </div>
      <div class="col-sm-4 col-xs-12">
         <div class="form-group">
            <label>Last Name <span style="color: red;">*</span></label><b style="color:red;" ><label id="txtlname_err" class="error-validation errcustome"></label></b><br/>
            <input type="text"  name="txtlname" placeholder="Enter Last Name" id="txtlname" onblur="onblur_validation('txtlname','txtlname_err','This filed is required');" value="{{ $last_name }}" />
         </div>
      </div>
</div>

<div class="row">
  
   <div class="col-sm-4 col-xs-12">
      <div class="form-group">
         <label>Birthdate<span style="color: red;">*</span></label> 
         <b style="color:red;" ><label id="txtdate_err" class="error-validation errcustome"></label></b><br/>
         <input type="text"  name="txtdate" placeholder="Enter Birthdate (dd-mm-yyyy)" id="txtdate"   onchange="onblur_validation('txtdate','txtdate_err','This filed is required');" value="{{ $birthday }}" />
      </div>
   </div>
   <div class="col-sm-4 col-xs-12">
      <div class="form-group" style="width: 100%;"><label>Gender</label><b style="color:red;" ><label id="txtdate_err" class="error-validation errcustome"></label></b><br/>
         <div class="radio">
            <label><input type="radio" name="gender" name="gender" value="Male"  id="Male" @if($gender == "Male") checked=""    @endif>Male</label> &nbsp;&nbsp;&nbsp;&nbsp;
            <label style="margin-left: 20px"><input  type="radio" name="gender"  value="Female"  id="Female" @if($gender == "Female") checked=""   @endif>Female</label>
         </div>
      </div>
   </div>

   <div class="col-sm-4">
      <div class="form-group">
         <label>Mobile Number<span style="color: red;">*</span></label><b style="color:red;" > <label id="txtmobileno_err" class="error-validation errcustome"></label></b><br/>
         <select style="height: 36px;position: relative; width: 60px !important;" name="drpcode">
           <option value="" selected disabled>Select Country Code</option>
        @foreach($mobilecode as $key)
         
            <option value="{{ $key->country_code }}" @if($key->country_code == $mobile_code) selected @endif>{{ $key->country_code}} {{ $key->country_name }} </option>
           @endforeach  
            <input type="text" name="txtmobileno" placeholder="Enter Mobile" id="txtmobileno" onblur="onblur_validation('txtmobileno','txtmobileno_err','This filed is required');" style="width: 200px;position: absolute;" value="{{ $mobile }}">
         </select>
      </div>
   </div>
 </div>
 <div class="row">
   <div class="col-sm-4 col-xs-12">
      <div class="form-group">
         <label>Email Id</label><b style="color:red;" ><label id="txtemail_err" class="error-validation errcustome"></label></b><br/>
         <input type="text" name="txtemail" placeholder="Enter Email" id="txtemail" value="{{ $email }}"/>
      </div>
   </div>
   <div class="col-sm-4 col-xs-12">
      <div class="form-group">
         <label>Address</label><br/>
         <input type="text" name="txtaddress" placeholder="Enter Home No./street name" value="{{ $address }}"/>
      </div>
   </div>
   <div class="col-sm-4 col-xs-12">
      <div class="form-group">
         <label>Landmark</label><br/>
         <input type="text" name="txtland" placeholder="Enter Landmark" value="{{ $landmark }}">
      </div>
   </div>
 </div>
 <div class="row">
   <div class="col-sm-4 col-xs-12">
      <div class="form-group">
         <label>Area <span style="color: red;">*</span></label>
         <b style="color:red;" ><label id="txtarea_err" class="error-validation errcustome"></label></b><br/>
         <input type="text" name="txtarea" placeholder="Enter Your Area" id="txtarea" onblur="onblur_validation('txtarea','txtarea_err','This filed is required');" value="{{ $area }}">
      </div>
   </div>
   <div class="col-sm-4 col-xs-12">
      <div class="form-group">
         <label>Country <span style="color: red;">*</span></label>
         <b style="color:red;" ><label id="country_err" class="error-validation errcustome"></label></b><br/>
         <select style="height: 35px; width: 266px;" id="country" name="country"  onchange="onblur_validation('country','country_err','This filed is required');">
            <option value="" selected disabled>Select Country</option>
               @foreach($countries as $key=>$country)
                  <option value="{{ $key }}" @if($key == $country_id) selected @endif>{{ $country}} </option>
               @endforeach
         </select>
      </div>
   </div>
   <div class="col-sm-4 col-xs-12">
      <div class="form-group">
         <label>State <span style="color: red;">*</span></label><b style="color:red;" ><label id="state_err" class="error-validation errcustome"></label></b><br/>
         <select name="state" id="state" style="height: 35px; width: 266px;" onchange="onblur_validation('state','state_err','This filed is required');">
            <option value="">Select State</option>
         </select>
      </div>
   </div>
 </div>
 <div class="row">
   <div class="col-sm-4 col-xs-12">
      <div class="form-group">
         <label>City <span style="color: red;">*</span></label>
         <b style="color:red;" ><label id="city_err" class="error-validation errcustome"></label></b><br/>
         <input type="text"name="city" placeholder="Enter City Name" id="city"   onblur="onblur_validation('city','city_err','This filed is required');" value="{{ $city_name }}">
      </div>
   </div>

   <div class="col-sm-4 col-xs-12">
      <div class="form-group">
         <label>Postalcode <span style="color: red;">*</span></label> 
         <b style="color:red;" ><label id="txtpincode_err" class="error-validation errcustome"></label></b><br/>
         <input type="text" name="txtpincode" placeholder="Enter  Postalcode/Zipcode" id="txtpincode" onblur="onblur_validation('txtpincode','txtpincode_err','This filed is required');" value="{{ $pincode }}">
      </div>
   </div>
   <div class="col-sm-4 col-xs-12">
      <div class="form-group">
         <label>Relation</label>
         <b style="color:red;" ><label id="state_err" class="error-validation errcustome"></label></b><br/>
         <select disabled="true" style="height: 35px; width: 266px;" name="drprelation" onchange='CheckSampraday(this.value);' >
            <option>Select Relation</option>
            <option value="Self" @if($relation == "Self") selected="selected" @endif>Self</option>
            <option value="Father" @if($relation == "Father") selected="selected" @endif>Father</option>
            <option value="Mother" @if($relation == "Mother") selected="selected" @endif>Mother</option>
            <option value="Grandson" @if($relation == "Grandson") selected="selected" @endif>Grandson</option>
            <option value="Granddaughter" @if($relation == "Granddaughter") selected="selected" @endif>Granddaughter</option>
            <option value="Daughter" @if($relation == "Daughter") selected="selected" @endif>Daughter</option>
            <option value="Son" @if($relation == "Son") selected="selected" @endif>Son</option>
            <option value="Brother" @if($relation == "Brother") selected="selected" @endif>Brother</option>
            <option value="Sister" @if($relation == "Sister") selected="selected" @endif>Sister</option>
            <option value="Wife" @if($relation == "Wife") selected="selected" @endif>Wife</option>
            <option value="Husband" @if($relation == "Husband") selected="selected" @endif>Husband</option>
            <option value="Father-in-law" @if($relation == "Father-in-law") selected="selected" @endif>Father-in-law</option>
            <option value="Sister-in-law" @if($relation == "Sister-in-law") selected="selected" @endif>Sister-in-law</option>
            <option value="Brother-in-law" @if($relation == "Brother-in-law") selected="selected" @endif>Brother-in-law</option>
            <option value="Daughter-in-law" @if($relation == "Daughter-in-law") selected="selected" @endif>Daughter-in-law</option>
            <option value="GrandMother" @if($relation == "GrandMother") selected="selected" @endif>GrandMother</option>
            <option value="GrandFather" @if($relation == "GrandFather") selected="selected" @endif>GrandFather</option>
         </select>
        </div>
      </div>
    </div>
<div class="row">
      <div class="col-sm-4 col-xs-12">
      <div class="form-group">
         <label>Sampraday</label>
         <b style="color:red;" ><label id="state_err" class="error-validation errcustome"></label></b><br/>
         <select style="height: 35px; width: 266px;" name="drpsampraday" onchange='CheckSampraday(this.value);'>
            <option>Select sampraday</option>
            <option value="Shwetambar" @if($sampraday == "Shwetambar") selected="selected" @endif>Shwetambar</option>
            <option value="Sthanakvasi" @if($sampraday == "Sthanakvasi") selected="selected" @endif>Sthanakvasi</option>
            <option value="Digamber" @if($sampraday == "Digamber") selected="selected" @endif>Digamber</option>
            <option value="Terapanthi" @if($sampraday == "Terapanthi") selected="selected" @endif>Terapanthi</option>
            <option value="Other" @if($sampraday == "Other") selected="selected" @endif>Other</option>
         </select>
         <br/>
         <input type="text" name="sampraday" id="drpsampraday" style="display: none;" placeholder="Enter Your Sampraday" value="{{ $other }}">
   </div>
</div>
</div>
   <!--END FORM-->
</form>
</div>
   <div class="row">
   <div class="col-xs-12">
      <input type="submit" name="save" value="UPDATE PROFILE" onclick="return validation();" />
   </div>
</div>
</div>
	<footer>
		<div class="container-fluid">
			<div class="container">
		<div class="copyright">
			<p>2019 All Rights Reserved © Samast Mahajan <span style="margin-left: 10px; font-weight: bold;"><a href="https://jainsankhya.org/privacy">Privacy Policy</a></span></p>
		</div>
	</div>
	</div>
	</footer>
<script type="text/javascript">
    $('#country').change(function () {
      loadState($(this).val());
    });
    $(document).ready(function () {
      loadState("{{$country_id}}");
    });
    function loadState(countryID){  
    let stateId = "{{$state_id}}"
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('get-state-list1')}}?country_id="+countryID,
           success:function(res){               
            if(res){
                $("#state").empty();
                $("#state").append('<option>Select State</option>');
                $.each(res,function(key,value){
                    $("#state").append(`<option value="${key}" ${(key == stateId ?"selected":"")}>${value}</option>`);
                });
           
            }else{
               $("#state").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        
    }      
   }
</script> 
<script type="text/javascript">
  let addharValid = false;
  let prevValue = "";
  $('document').ready(function()
  {
    
    $('#txtaname').on('blur', function()
    {

      let adhar = $('#txtaname').val();
      if (adhar != prevValue && adhar.trim() != "") {
        prevValue = adhar;
        let username_state = false;
      let token  = $("input[name=_token]").val();

      $.ajax({
        url: 'duplicationedit',
        type: 'post',
        data: {
          '_token': token ,
          'txtaname':adhar
        },
        dataType: 'JSON',
        success: function(response)
        {
          console.log("blur",response);
          if (response.status == false) {
            alert("Adhar or Passport is already registered with us.");
          }
         
        }
     });
      }
    });     
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