<?php session_start();
include_once("connection.php");
 $obj = new connection();
 $obj->connect();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Jain Count</title>
		<meta name="description" content="description">
		<meta name="author" content="Evgeniya">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="css/style_v2.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<form method="post">
<div class="container-fluid">
		<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3" style="
    		float: left;">
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header" style="padding-right: 5px">Number of Females in Jain Census:</h3>
					</div>
				</div>
			</div>
		</div>
			<?php

				// echo "hiii";die();
				$obj->sql="SELECT count('reg_id') as reg_id FROM `register_members` where gender='Female'" or die("Error while fetching data");

				$obj->select($obj->sql);
				// echo $obj->sql;die();
				$Female=mysqli_fetch_array($obj->res);
				// echo $rows;die();
			    $Feno=mysqli_num_rows($obj->res);

			?>
		<div>
			<h3 class="page-header" style="padding: 19px"><?php
				echo $Female['reg_id'];
			?>			</h3>
		</div>

	</div>
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3" style="
    		float: left;">
			
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header" style="padding-right: 5px">Number of Males in Jain Census:</h3>
					</div>
				</div>
			</div>
		</div>
			<?php

				// echo "hiii";die();
				$obj->sql="SELECT count('reg_id') as reg_id FROM `register_members` where gender='Male'" or die("Error while fetching data");

				$obj->select($obj->sql);
				// echo $obj->sql;die();
				$male=mysqli_fetch_array($obj->res);
				// echo $rows;die();
			    $mano=mysqli_num_rows($obj->res);

			?>
		<div>
			<h3 class="page-header" style="padding: 19px">
				<?php
				echo $male['reg_id'];
			?>			</h3>
		</div>

	</div>
	<div id="page-login" class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3" style="
    		float: left;">
			
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header" style="padding-right: 5px">Total Number of Jains in Jain Census:</h3>
					</div>
				</div>
			</div>
		</div>
			<?php

				// echo "hiii";die();
				$obj->sql="SELECT count('reg_id') as reg_id FROM `register_members`" or die("Error while fetching data");

				$obj->select($obj->sql);
				// echo $obj->sql;die();
				$rows=mysqli_fetch_array($obj->res);
				// echo $rows;die();
			    $no=mysqli_num_rows($obj->res);

			?>
		<div>
			<h3 class="page-header" style="padding: 19px"><?php
				echo $rows['reg_id'];
			?>			</h3>
		</div>
</div>
</form>
</body>
</html>
