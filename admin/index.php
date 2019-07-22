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
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header">Login</h3>
					</div>
					<div class="form-group">
						<label class="control-label">Username</label>
						<input type="text" class="form-control" name="username" />
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<input type="password" class="form-control" name="password" />
					</div>
					<div class="text-center">
						<input  class="btn btn-primary" type="submit" name="submit" value = "Login"/>
					</div>
				</div>
			</div>
		</div>
<?php
if(isset($_REQUEST["submit"]))
{
	// echo "hiii";die();
	$obj->sql="select * from login where email_id='".$_REQUEST['username']."' and password='".$_REQUEST['password']."'" or die("Error while fetching data");

	$obj->select($obj->sql);
	// echo $obj->sql;die();
	$rows=mysqli_fetch_array($obj->res);
	// echo $rows;die();
    $no=mysqli_num_rows($obj->res);
    if($no>0)
    {
         
        $_SESSION["id"]=$rows["login_id"];
        $_SESSION["name"]=$rows["login_name"];
        $_SESSION['email']=$rows['email_id'];
        //header("location:admin/index.php");
        echo "<script>document.location='admin/index.php';</script>";
              
    }
	else
	{
		echo "<script>alert('Invalid User Name or Password!!!')</script>";
	}
}
?>

	</div>
</div>
</form>
</body>
</html>
