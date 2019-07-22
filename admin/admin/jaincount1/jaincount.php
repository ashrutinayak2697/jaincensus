<!DOCTYPE html>
<html>
<head>
	<title>Jain Count</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript">
		$('#radioBtn a').on('click', function(){
			var sel = $(this).data('title');
			var tog = $(this).data('toggle');
			$('#'+tog).prop('value', sel);
			$('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
			$('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
		})
	</script>
<script type="text/javascript">
function CheckSampraday(val){
 var element=document.getElementById('sampraday');
 if(val=='Select sampraday'||val=='Others')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script>
	<script>
		$(document).ready(function(){
			$("#Yes").click(function(){
				$("#a").show();
				$("#b").hide();
				$("#c").hide();
			});
			$("#No").click(function(){
				$("#a").hide();
				$("#b").show();
				$("#c").show();
			});
		});
	</script>
	<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>');
                }
            });
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>');
        }
    });

    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            });
        }else{
            $('#city').html('<option value="">Select state first</option>');
        }
    });
});


</script>	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 ">
				<form role="form" action="messege">
					<h2 class="title">Jain Census Population Count</h2>
					<h3 class="subtitle">(જૈન વસ્તી ગણના)</h3>
					<hr class="colorgraph">
					<h5 class="notice">(Field marked with * are mandatory)</h5>
					<h4>(Either Adharcard Number Or Passport Number is Required.)</h4>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4">							
							<div class="form-group">
								<input type="text" class="form-control input-lg" placeholder="First Name*">
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="form-group">
								<input type="text" class="form-control input-lg" placeholder="Middle Name">
							</div>
						</div><div class="col-xs-12 col-sm-12 col-md-4">
							<div class="form-group">
								<input type="text" class="form-control input-lg" placeholder="Last Name*">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 15px;">
							<div class="form-group">
								<label  class="col-sm-4 col-md-4 control-label">You have Adharcard Number? </label>
								<div class="col-sm-7 col-md-7">
									<div class="input-group">
										<div id="radioBtn" class="btn-group">
											<a class="btn btn-primary btn-sm active" data-toggle="happy" data-title="Y" id="Yes" checked="">YES</a>
											<a class="btn btn-primary btn-sm notActive" data-toggle="happy" data-title="N" id="No">NO</a>
										</div>
									</div>
								</div>
							</div>
						</div>				
					</div>					

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="form-group" id="a">
								<input type="text" class="form-control input-lg" placeholder="Adharcard Number*">
							</div>
							<div class="form-group" id="c">
								<input type="text" class="form-control input-lg" placeholder="Passport Number*">
							</div>
							<div class="form-group" id="b">
								<input type="text" class="form-control input-lg" placeholder="OCI/PIO Number">
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="form-group" id="datePicker">
								<input type="text" class="form-control input-lg" placeholder="Birthdate*">
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-1">
							<div class="form-group">
								<select  class="form-control input-lg" style="width: 90px;">
									<option value="+91">+91 IND</option>
									<option value="+61">+61 AUS</option>
									<option value="+44">+44 UK</option>
									<option value="+1">+01  USA</option>
								</select>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3">
							<div class="form-group">
								<input type="text" class="form-control input-lg" placeholder="Mobile Number">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="form-group">
								<input type="text" class="form-control input-lg" placeholder="Email ID">
							</div>
						</div>
						<!-- <div class="col-xs-12 col-sm-12 col-md-4">
							<div class="form-group">
								<select  class="form-control input-lg">
									<option>Select Sampraday</option>
									<option value="Swetamber Murtipujak">Swetamber Murtipujak</option>
									<option value="Sthanakvasi">Sthanakvasi</option>
									<option value="Digamber">Digamber</option>
									<option value="Terapanthi">Terapanthi</option>
									<option value="Other">Other</option>
								</select>
							</div>
						</div> -->
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="form-group">
								<input type="text" class="form-control input-lg" placeholder="Address">
							</div>
						</div><div class="col-xs-12 col-sm-12 col-md-4">
							<div class="form-group">
								<input type="text" class="form-control input-lg" placeholder="Landmark">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="form-group">
								<input type="text" class="form-control input-lg" placeholder="Area*">
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="form-group">
								<input type="text" class="form-control input-lg" placeholder="Pincode*">
							</div>
						</div>
						<?php
                            //Include database configuration file
                            include 'dbConfig.php';

                            //Get all country data
                            $query = $db->query("SELECT * FROM country ORDER BY country_name ASC");
 
                             //Count total number of rows
                            $rowCount = $query->num_rows;
                        ?>
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="form-group">
								<select class="form-control input-lg" name="country" id="country">
									<option value="">Select Country*</option>
									<?php
                                   if ($rowCount > 0) 
                                {
                                 while ($row = $query->fetch_assoc())
                                  {
                                 echo '<option value="' . $row['country_id'] . '">' . $row['country_name'] . '</option>';
                                   }
                                } 
                               else
                                {
                                 echo '<option value="">Country not available</option>';
                                 }
                                     ?>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="form-group">
								<select class="form-control input-lg" name="state" id="state">
								<option value="">Select Country First*</option>
								</select>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="form-group">
								<input type="text" class="form-control input-lg" placeholder="City*">
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-4">
							<div class="form-group">
								<select  class="form-control input-lg" name="sampraday" onchange='CheckSampraday(this.value);'>
									<option>Select sampraday</option>
									<option value="Swetamber Murtipujak">Swetamber Murtipujak</option>
									<option value="Sthanakvasi">Sthanakvasi</option>
									<option value="Digamber">Digamber</option>
									<option value="Terapanthi">Terapanthi</option>
									<option value="Others">Others</option>
								</select>
								<br/>
                                 <input type="text" class="form-control input-lg" name="sampraday" id="sampraday"style='display:none;'>
							</div>

						</div>
					</div>					
					
					<hr class="colorgraph">
					<div class="row">
						<div class="col-xs-12 col-md-3 col-md-offset-4"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	
</body>
</html>