<!-- /* *****************************************
Copyright © Vnurture Technologies   All Rights Reserved. 
This work is property of Vnurture Technologies.
Unauthorized copying or modification of this file, 
via any medium is strictly prohibited
Any part of of this code can not be copied by any means, 
and can not be distributed
********************************************** */
 -->
<?php
    include_once("connection.php");
    $obj=new connection();
    $obj->connect();
 ?>
<select name="drpstate" class="form-control" >
	<option value="0">-- Select state Name--</option>
	<?php 
		$a=$_GET["q"];
		$obj->sql="select * from state where country_id='$a'";
		$obj->select($obj->sql);
		while($rows=mysqli_fetch_array($obj->res)){ ?>
		
        <option value="<?php echo $rows["state_id"]; ?>"><?php echo $rows["state_name"];?></option>
    <?php } ?>
</select>