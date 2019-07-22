<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>form</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  

</head>
<body>
	<div class="container">
		<div class="col-md-10 col-lg-8 col-xl-8 col-lg-offset-2" style="margin-top:15px; padding: 0px; ">
			<form>
    <div class="form-group">
      <label for="AadharNumber">Aadharcard Number: *</label><br/>
      <input type="text" style="display: show;" class="form-control col-md-6 col-xl-6 custom-control-inline " id="same" placeholder="AadharNumber">
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio1">YES</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="other">
        <label class="custom-control-label" for="customRadio2">NO</label>
      </div>
<!--       Yes<input type="radio" name="answer" value="yes"/> <br><br>
      Other <input type="radio" name="answer" value="other"/><br> -->
    </div>
    <div class="form-group">
      <div style="display:none;" id="otherAnswer">
        <label for="PassPort">PassPort Number: *</label>
        <input type="text" name="passportnumber" class="form-control" placeholder="Enter PassPort Number"/>
        <label for="PassPort">OCI/PIO: *</label>
        <input type="text" name="passportnumber" class="form-control" placeholder="Enter OCI or PIO Number"/>
      </div>
    </div>
    <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer01">First name</label>
      <input type="text" class="form-control" id="validationServer01" placeholder="First name"  required>
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer02">Middle name</label>
      <input type="text" class="form-control" id="validationServer02" placeholder="Middle name">
      <div class="valid-feedback">
        
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationServer03">Last name</label>
      <input type="text" class="form-control" id="validationServer03" placeholder="Last name"  required>
      <div class="valid-feedback">
        
      </div>
    </div>
    
  </div>
<?php
//Include database configuration file
include 'dbConfig.php';

//Get all country data
$query = $db->query("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");

//Count total number of rows
$rowCount = $query->num_rows;
?>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputState">Country</label>
      <select name="country" id="country" class="form-control">
        <option value="">Select Country</option>
        <?php
if ($rowCount > 0) {
    while ($row = $query->fetch_assoc()) {
        echo '<option value="' . $row['country_id'] . '">' . $row['country_name'] . '</option>';
    }
} else {
    echo '<option value="">Country not available</option>';
}
?>
    </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">State</label>
      <select name="state" id="state" class="form-control">
        <option value="">Select country first</option>
    </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">City</label>
      <select name="city" id="city" class="form-control">
        <option value="">Select state first</option>
      </select>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
	</div>
</div>



<script src="jquery.min.js"></script>
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

$(document).ready(function(){
$("input[type='radio']").change(function(){
if($(this).val()=="other")
{
$("#otherAnswer").show();
$("#same").hide();
}
else
{
$("#otherAnswer").hide(); 
$("#same").show(); 
}
});
});
</script>
</body>
</html>
