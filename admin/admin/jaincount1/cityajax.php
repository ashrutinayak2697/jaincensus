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
<select name="drpcity" class="form-control">
	<option value="0">-- Select City Name--</option>
	<?php 
		$b=$_GET["q"];
		$obj->sql="select * from city where state_id='$b'";
		$obj->select($obj->sql);
		while($rows=mysqli_fetch_array($obj->res)){ ?>
		
        <option value="<?php echo $rows["city_id"]; ?>"><?php echo $rows["city_name"];?></option>
    <?php } ?>
</select>