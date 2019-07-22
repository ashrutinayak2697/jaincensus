<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jain Sankhiya</title>
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
</head>
<body>
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
.nav li a:hover {

    color: #fff;
    background-color: #2e3192;
    padding: 15px !important;

}
.dropdown-menu li a:hover {

   
    color: #fff !important;

}
.dropdown-menu li a {

    padding: 15px !important;
  

}
.caret {

    
    border-top: 6px dashed !important;
    border-right: 6px solid transparent !important;
    border-left: 6px solid transparent !important;

}
</style>
	<style type="text/css">
		.fixed-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%; 
    z-index: 9999;
}
ul.dropdown {
    display: none;
}
li.active:hover .dropdown {
    display: block;
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
	<li class="active"><a href="{{ url('/') }}">Home</a></li>
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
	<div class="container-fluid our-mission">
		<div class="container">
			<div class="mission wow slideInLeft" data-wow-duration="4s" style="visibility: hidden; animation-duration: 4s; animation-name: none;">
				<h1>OUR MISSION</h1>
				<hr>
				<p>Jain Community has been an affluent and recognized across the globe since ages. The families of Jain Community are known for their wisdom, discipline and respect for the religion. There are numerous Jain families residing all over the world. </p>
				<p>To make a strong and united group of our well-versed Jain community, <a href="https://www.samastmahajan.org/" target="blank">Samast Mahajan</a> has taken an initiative and have designed and launched web and mobile app representing Jain Community Count across the globe.
			</p>
			</div>
		</div>
	</div>
	<div class="container-fluid proud">
		<div class="container">
			<div class="mission infocontent wow slideInRight" data-wow-duration="2s" style=" animation-duration: 4s; animation-name: none;">
				<h1>Proud to be Jain </h1>
				<hr>
				<p style="font-weight: bold;">संघे शक्ती कलीयुगे.....</p>
				<p>
 पंचम कालमें संगठीत होना और संगठीत रहकर श्री संघ और समाज का विकास करना जरुरी हैं | सिर्फ जैन सरनेम वाले ही जैन माने जाये तो हमारी जन संख्या बहोत कम दिखती हैं | इसीलिए, धर्मसे जो जैन हैं (सरनेम कोई भी हो) उन सबको जोड़ने का माध्यम हैं, यह एप्लीकेशन | आजही नीचेकी लिंक क्लीक करें, अपनी और अपने पुरे परीवारकी माहिती दर्ज करें, और हम जैनों का अधिकार प्राप्त करने में मदद करें | 
 
 </p>
 <div class="proudbtn"><a href="{{ url('register') }}"><button class="wow pulse animated animated" style="visibility: visible; animation-duration: 1000ms; animation-iteration-count: infinite; animation-name: pulse;" data-wow-iteration="infinite" data-wow-duration="1000ms"> Register Jain Census Movement</button></a></div>
			</div>
		</div>
	</div>
	<div class="container-fluid infopart">
		<div class="container">
		<div class="infobox">
			
			<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 infocontent wow slideInLeft" data-wow-duration="2s" style=" animation-duration: 4s; animation-name: none;">
				<div class="infomain">
					<div class="infoimg">
						<img src="images/logov2_.png">
					</div>
					<div class="infotitle">
						<h1>
							Who Is Samast Mahajan? 
						</h1>
					</div>
					<div class="infotext">
						<p>
						 <b>“We go beyond limits because we care ”says Mr. Girish Jayantilal Shah , </b>Managing Trustee of Samast Mahajan, an NGO whose charitable works are helping humans, animals, birds as well as plants and the planet alike.</p>
					</div>
					<div class="more"><a href="{{ url('/contentone') }}"><button>read more</button></a></div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 infocontent wow slideInRight" data-wow-duration="2s" style=" animation-duration: 4s; animation-name: none;">
				<div class="infomain">
					<div class="infoimg">
						<img src="images/logov2_.png">
					</div>
					<div class="infotitle">
						<h1>
							Why Samast Mahajan? 
						</h1>
					</div>
					<div class="infotext">
						<p>
							Mumbai based Samast Mahajan, since 1992, is one of largest NGO in Jain Community doing so many activities in the field of Sadharmik, Vihardham, Jeevdaya, Draught Relief, Rain Water Harvesting...</p>  
					</div>
					<div class="more"><div class="more"><a href="{{ url('/contentwo') }}"><button>read more</button></a></div></div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
	<div class="container-fluid banner infocontent wow fadeInUp" data-wow-duration="2s" style="animation-duration: 4s; animation-name: none;">
		<div class="bannerpart">
			<a href="https://play.google.com/store/apps/details?id=jainism.jaincensus&hl=en" target="blank"><img src="images/banner.jpeg"></a>
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