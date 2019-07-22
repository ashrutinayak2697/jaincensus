<?php
ob_start();
session_start();
if(!isset($_SESSION["id"])){
echo "<script>alert('You must login first');document.location='../index.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Jaincount | Dashboard </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="index.php" class="nav-link">Home</a> -->
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
          <a href="logout.php" class="btn btn-primary pull-right" style="color:white;width:80px;margin-left:770px;" target="_blank">Logout</a>
          &nbsp;&nbsp;
          <a href="changepassword.php" class="btn btn-primary pull-right" style="color:white;" target="_blank">Change Password</a>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <!-- <ul class="navbar-nav ml-auto">
      
      
    </ul> -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <strong> Global Jain Census </strong>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['name'];?></a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <br/>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="view_member.php" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Members Details
                
              </p>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Charts
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tree"></i>
              <p>
                UI Elements
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-edit"></i>
              <p>
                Forms
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Tables
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Data Tables</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-envelope-o"></i>
              <p>
                Mailbox
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Pages
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-plus-square-o"></i>
              <p>
                Extras
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-info"></i>
              <p>Informational</p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
<?php 
    include_once("../connection.php");
    $obj=new connection();
    $obj->connect();
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <h2><center>Analytics Dashboard</center> </h2>
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Number of Members by Country</h1>
          </div><!-- /.col -->
         <!--  <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div> --><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box">
              <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where country_id=1";
              $obj->select($obj->sql);
              $indrowno=mysqli_num_rows($obj->res);
              $indrow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-info elevation-1"><img src="../images/ind.png"></span>

              <div class="info-box-content">
                <span class="info-box-text">India</span>
                <span class="info-box-number">
                  <?php
                  if($indrowno>0)
                  {
                    echo $indrow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?>
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
            <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where country_id=2";
              $obj->select($obj->sql);
              $usarowno=mysqli_num_rows($obj->res);
              $usarow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-danger elevation-1"><img src="../images/US.png"></span>

              <div class="info-box-content">
                <span class="info-box-text">USA</span>
                <span class="info-box-number">
                <?php
                  if($usarowno>0)
                  {
                    echo $usarow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
               <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where country_id=3";
              $obj->select($obj->sql);
              $ukrowno=mysqli_num_rows($obj->res);
              $ukrow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-success elevation-1"><img src="../images/uk.png"></span>

              <div class="info-box-content">
                <span class="info-box-text">UK</span>
                <span class="info-box-number">
                  <?php
                  if($ukrowno>0)
                  {
                    echo $ukrow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
               <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where country_id=4";
              $obj->select($obj->sql);
              $ukrowno=mysqli_num_rows($obj->res);
              $ukrow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-secondary elevation-1"><img src="../images/AUS.png"></span>

              <div class="info-box-content">
                <span class="info-box-text">AUS</span>
                <span class="info-box-number">
                  <?php
                  if($ukrowno>0)
                  {
                    echo $ukrow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
              <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where country_id!=1 and country_id!=2 and country_id!=3 and country_id!=4";
              $obj->select($obj->sql);
              $regrowno=mysqli_num_rows($obj->res);
              $regrow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Other</span>
                <span class="info-box-number">
                  <?php
                  if($regrowno>0)
                  {
                    echo $regrow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          </div>
        <!-- /.row -->

              </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Number of Members by Sampraday</h1>
          </div><!-- /.col -->
         <!--  <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div> --><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">


          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box">
              <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where sampraday='Derawasi'";
              $obj->select($obj->sql);
              $smrowno=mysqli_num_rows($obj->res);
              $smrow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Derawasi</span>
                <span class="info-box-number">
                  <?php
                  if($smrowno>0)
                  {
                    echo $smrow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?>
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
            <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where sampraday='Sthanakwasi'";
              $obj->select($obj->sql);
              $strowno=mysqli_num_rows($obj->res);
              $strow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sthanakwasi</span>
                <span class="info-box-number">
                <?php
                  if($strowno>0)
                  {
                    echo $strow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
               <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where sampraday='Digambar'";
              $obj->select($obj->sql);
              $dirowno=mysqli_num_rows($obj->res);
              $dirow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Digambar</span>
                <span class="info-box-number">
                  <?php
                  if($dirowno>0)
                  {
                    echo $dirow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
               <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where sampraday='Terapanthi'";
              $obj->select($obj->sql);
              $tarowno=mysqli_num_rows($obj->res);
              $tarow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-secondary elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Terapanthi</span>
                <span class="info-box-number">
                  <?php
                  if($tarowno>0)
                  {
                    echo $tarow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
              <?php 

              $obj->sql="SELECT count('reg_id') as reg_id FROM `register_members`";
              $obj->select($obj->sql);
              $otrowno=mysqli_num_rows($obj->res);
              $otrow=mysqli_fetch_array($obj->res);
              $Derawasi=$smrow["reg_id"];
              $Sthanakwasi=$strow["reg_id"];
              $Digambar=$dirow["reg_id"];
              $Terapanthi=$tarow["reg_id"];
              $total=$Derawasi+$Sthanakwasi+$Digambar+$Terapanthi;
              $total1=$otrow['reg_id'];
              $other=$total1-$total;
              // echo $other;die();
            ?>
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Other</span>
                <span class="info-box-number">
                  <?php
                  if($otrowno>0)
                  {
                    echo $other;
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          </div>
        <!-- /.row -->

              </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Number of Members by State</h1>
          </div><!-- /.col -->
         <!--  <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div> --><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">

          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box">
              <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where state_id=12";
              $obj->select($obj->sql);
              $gjrowno=mysqli_num_rows($obj->res);
              $gjrow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Gujarat</span>
                <span class="info-box-number">
                  <?php
                  if($gjrowno>0)
                  {
                    echo $gjrow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?>
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
            <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where state_id=2";
              $obj->select($obj->sql);
              $aprowno=mysqli_num_rows($obj->res);
              $aprow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Andhra Pradesh </span>
                <span class="info-box-number">
                <?php
                  if($aprowno>0)
                  {
                    echo $aprow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
               <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where state_id=21";
              $obj->select($obj->sql);
              $mhrowno=mysqli_num_rows($obj->res);
              $mhrow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Maharashtra</span>
                <span class="info-box-number">
                  <?php
                  if($mhrowno>0)
                  {
                    echo $mhrow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
               <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where state_id=20";
              $obj->select($obj->sql);
              $mprowno=mysqli_num_rows($obj->res);
              $mprow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-secondary elevation-1"><i class="fa fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Madyapradesh</span>
                <span class="info-box-number">
                  <?php
                  if($mprowno>0)
                  {
                    echo $mprow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
              <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where state_id=29";
              $obj->select($obj->sql);
              $rjrowno=mysqli_num_rows($obj->res);
              $rjrow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Rajsthan</span>
                <span class="info-box-number">
                  <?php
                  if($rjrowno>0)
                  {
                    echo $rjrow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box">
              <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where state_id=31";
              $obj->select($obj->sql);
              $tnrowno=mysqli_num_rows($obj->res);
              $tnrow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Tamilnadu</span>
                <span class="info-box-number">
                  <?php
                  if($tnrowno>0)
                  {
                    echo $tnrow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?>
                  
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
            <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where state_id=17";
              $obj->select($obj->sql);
              $ktrowno=mysqli_num_rows($obj->res);
              $ktrow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Karnataka</span>
                <span class="info-box-number">
                <?php
                  if($ktrowno>0)
                  {
                    echo $ktrow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
               <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where state_id=5";
              $obj->select($obj->sql);
              $birowno=mysqli_num_rows($obj->res);
              $birow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-success elevation-1"><i class="fa fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Bihar</span>
                <span class="info-box-number">
                  <?php
                  if($birowno>0)
                  {
                    echo $birow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
               <?php 

              $obj->sql="select count('reg_id') as reg_id from register_members where state_id=16";
              $obj->select($obj->sql);
              $jarowno=mysqli_num_rows($obj->res);
              $jarow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-secondary elevation-1"><i class="fa fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Jarkhand</span>
                <span class="info-box-number">
                  <?php
                  if($jarowno>0)
                  {
                    echo $jarow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-2 col-md-2" style="margin-left: 30px">
            <div class="info-box mb-3">
              <?php 

              $obj->sql="SELECT count('reg_id') as reg_id FROM `register_members` where state_id!=12 and state_id!=2 and state_id!=21 and state_id!=20 and state_id!=29 and state_id!=31 and state_id!=17 and state_id!=5 and state_id!=16";
              $obj->select($obj->sql);
              $othrowno=mysqli_num_rows($obj->res);
              $othrow=mysqli_fetch_array($obj->res);
            ?>
              <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-flag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Other</span>
                <span class="info-box-number">
                  <?php
                  if($othrowno>0)
                  {
                    echo $othrow["reg_id"];
                                                
                  } 
                  else
                  {
                    $a=0;
                    echo $a; 
                  }  
                ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

              </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    
    <!-- Default to the left -->
    <center><strong>Copyright &copy; 2019 <a href="https://vnurture.in">Vnurture Technologies</a>. All rights reserved.</strong></center>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<!-- <script src="plugins/sparkline/jquery.sparkline.min.js"></script> -->
<!-- jVectorMap -->
<!-- <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
<!-- SlimScroll 1.3.0 -->
<!-- <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script> -->
<!-- ChartJS 1.0.2 -->
<!-- <script src="plugins/chartjs-old/Chart.min.js"></script> -->

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
