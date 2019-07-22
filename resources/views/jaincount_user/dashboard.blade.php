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
    <div class="col-12 text-right"  >
      <a href="{{route('addMember')}}" class="btn btn-primary" style="margin-top: 30px;"> Add Family Member</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <table class="table table-striped table-responsive">
        <thead>  
        <tr>
          <td>Sr.No</td>
          <td>JC. No</td>
          <td>Name</td>
          <td>Mobile Number</td>
          <td>Email</td>
          <td>Action</td>
        </tr>
        </thead>

        <tbody>
          @foreach ($family as $indexKey => $f)
        <tr>
          <td>{{$indexKey+1}}</td>
          <td>{{$f['register_number']}}</td>
          <td>{{$f['first_name']}} {{$f['middle_name']}} {{$f['last_name']}}</td>
          <td>{{$f['mobilecode']}} {{$f['mobilenumber']}}</td>
          <td>{{$f['email']}}</td>
          <td>
            <a href="{{route('ViewMemberDetails',['eid'=>$f['reg_id']])}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            <a href="{{route('deleteMember',['id'=>$f['reg_id']])}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
          </td>
        </tr>
        @endforeach
        </tbody>
      </table>
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


</body>
</html>