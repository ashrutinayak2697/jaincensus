<!DOCTYPE html>
<html>
<head>
	<title>Thankyou</title>
	<link rel="stylesheet" type="text/css" href="public/css/style1.css">
  <link rel="icon" href="../../images/Jain Sangh Directory logo.png" type="image/png" sizes="16x16">
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
	<script src="https://use.fontawesome.com/16871262b2.js"></script>
	<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
</head>
<body>

<div id="overlay"></div>
<div class="wrapper">
  <div class="container">
    <div class="pop-up">
     <!--  @if(isset($msg))
            <div class="alert alert-success">
              <strong>{{ $msg}}</strong>
            </div>
          @endif -->
      <div class="pop-body">
           
        <div style="text-align: center;">
        	<img src="images/logo.png" style="width: 100px; height: 100px;">
        	<h2>JAIN Sankhya</h2>
        </div>
        <div style="text-align: center;">
        <h3 >Dear {{ $userName }},<br>Thank you for Registering in Jain Census. Your Global Jain Census Registration ID is : {{ $regNumber }}</h3>
        <a href="https://jainsankhya.org/" style="border: 1px solid #ccc;
    padding: 10px;
    background: #073e6e;
    color: #fff;
    text-decoration: none;
    border: none;">Main Menu</a>
          <a href="{{ url('dashborad') }}" style="padding: 10px;
    letter-spacing: 2px;
    font-weight: normal;
    text-transform: capitalize;
    border: none;
    color: #fff;
    text-decoration: none;
    border: 1px solid #ccc;
    border-radius: 0;
    background: #073e6e;
    border: none;">Add Family Member</a>
         <h5 >An Initiative By </h5>
        <img src="images/samast.png" style="width: 260px; height: 100px;">
      </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>