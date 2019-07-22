<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Jaincensus/Member details</title>

	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css" rel="stylesheet">
</head>
<body>
	<?php 
    include_once("../connection.php");
    $obj=new connection();
    $obj->connect();
?>
<?php include 'header.php';?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h3 class="page-header">
                         View Members
                        </h3>
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h4 style="float: left;">List of Members</h4>
                             <a href="report/pdfmemberdetail.php" class="btn btn-primary" style="color:white;margin-left: 630px; margin-top: 18px;" target="_blank">Download Report</a>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            	<?php 
			                		$obj->sql="select * from register_members inner join country on country.country_id=register_members.country_id inner join state on state.state_id=register_members.state_id ORDER BY `register_members`.`reg_id` ASC";
			                       $obj->select($obj->sql);
			                // $row=mysqli_fetch_array($obj->res);
					                if(isset($_REQUEST["id"]))
					                {
					                 $obj->sql="delete from register_members where  reg_id='".$_REQUEST['id']."'";
					                 $obj->insert($obj->sql);
					                 echo "<script>alert('Record Deleted');document.location='view_member.php'</script>";
					                }
              					?>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Register Number</th>
                                            <th>Full Name</th>
                                            <th>Adharcard Number</th>
                                            <th>Oci/pci Number</th>
                                            <th>Passport Number</th>
                                            <th>Birthday</th>
                                            <th>Mobile Number</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Address</th>
                                            <th>Landmark</th>
                                            <th>Pincode</th>
                                            <th>Area</th>
                                            <th>Country</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Sampraday</th>
                                            
                                            <th>Delete Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
						                  $i=1;
						                  while($row=mysqli_fetch_array($obj->res))
						                  {
						                ?>
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo $i++; ?></td>
                                            <td class="center"><?php echo $row['register_number']; ?></td>
                                            <td class="center"><?php echo $row['first_name'].' '.$row['middle_name'].' '.$row['last_name']; ?></td>
                                            <td class="center"><?php echo $row['adharcardnumber']; ?></td>
                                            <td class="center"><?php echo $row['ocipcinumber']; ?></td>
                                            <td class="center"><?php echo $row['passport']; ?></td>
                                            <td class="center"><?php echo $row['birthday']; ?></td>
                                            <td class="center"><?php echo $row['mobilecode'].' '.$row['mobilenumber']; ?></td>
                                            <td class="center"><?php echo $row['email']; ?></td>
                                            <td class="center"><?php echo $row['gender']; ?></td>
                                            <td class="center"><?php echo $row['address']; ?></td>
                                            <td class="center"><?php echo $row['landmark']; ?></td>
                                            <td class="center"><?php echo $row['pincode']; ?></td>
                                            <td class="center"><?php echo $row['area']; ?></td>
							                             <td class="center"><?php echo $row['country_name'];  ?></td>
							                             <td class="center"><?php echo $row['state_name'];  ?></td>
							                             <td class="center"><?php echo $row['city_name'];  ?></td>
                                           <td class="center"><?php if($row['sampraday']!='Other')
                                           {
                                            echo $row['sampraday'];
                                          }else{
                                            echo $row['other'];
                                          }?></td>
                                           
                                            <td><a href="view_member.php?id=<?php echo $row["reg_id"]; ?>" onClick="return conformation()"> <i class="fa fa-trash-o"></i> </a></td>
                                           
                                        </tr>
                                        <?php
                                    	}?>

                <script>
                 function conformation()
                 {
                  if(confirm("are you sure you want to delete Member?"))
                      {
                        return true;
                      }
                   else
                        return false;
                  }
                 </script>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
           </div>     <!-- /. ROW  -->
           
                <!-- /. ROW  -->
        </div>
               <footer><strong><center>Copyright &copy; 2019 <a href="https://vnurture.in">Vnurture Technologies</a>. All rights reserved.</center></strong></footer>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js "></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [ 0, 1, 2,7,13,14,15 ],
                },
                     orientation: 'landscape',
                     pageSize: 'LEGAL'
            }
        ]
    } );
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
   
</body>
</html>
