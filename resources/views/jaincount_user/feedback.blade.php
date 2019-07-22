<html>
<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Jain Sankhya</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="public/css3/style.css">
  <link rel="stylesheet" type="text/css" href="public/css3/animate.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type='text/javascript' src='https://vnurture.in/wp-content/themes/betheme/assets/animations/animations.min.js?ver=20.7.6'></script>
<body>

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
    .fixed-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%; 
    z-index: 9999;
}
  </style>

  <script>
$(window).scroll(function(){
    if ($(window).scrollTop() >= 50) {
        $('nav').addClass('fixed-header');
        $('nav div').addClass('visible-title');
    }
    else {
        $('nav').removeClass('fixed-header');
        $('nav div').removeClass('visible-title');
    }
});
</script>

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
      <li class="active"><a href="{{ url('feedback') }}">feedback</a></li>
      <li><a href="{{ url('faq') }}">faq</a></li>
      <li><a href="{{ url('contact') }}">Contact us</a></li>
      
       
    </ul>
    </div><!-- /.navbar-collapse -->
</div>
  </div><!-- /.container-fluid -->
</nav>
  </header>
<div class="container-fluid feedback">
  <div class="container">
    <div class="highlight">
  <div class="headingtitle"><h1>feedback form</h1></div>
  <form action=" {{ route('feedbackadd') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required="">
    </div>
    <div class="form-group">
      <label for="Address">Address:</label>
      <textarea rows="5" class="form-control" id="Address" placeholder="Enter Address" name="address" required=""></textarea> 
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="">
    </div>
    <div class="form-group">
      <label for="Mobile">Mobile:</label>
      <input type="telephone" class="form-control" id="mobile" placeholder="Enter mobile" name="contact" required="">
    </div>
    <div class="form-group">
      <label for="Comments">Comments:</label>
      <textarea rows="5" class="form-control" id="comments" placeholder="Enter Comments" name="comment" required=""></textarea> 
    </div>
  
    <div class="btnsub"> <a href="#"><button type="submit" class="btn btn-default">Submit</button></a></div>
  </form>
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
  <script src="public/css3/WOW.js"></script>
              <script>

              new WOW().init();
              </script>
              <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
  </script>
</body>
</html>