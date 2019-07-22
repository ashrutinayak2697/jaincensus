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
class connection
{
	var $con,$db,$sql,$res;
	function connect()
	{
	  $this->con = mysqli_connect("localhost","jainsangh","jainsangh","jainsangh");
		//$this->db=mysqli_select_db($this->con,"workflow");
	}
	
	function insert($str)
	{
		$this->sql=$str;
		mysqli_query($this->con,$this->sql);
	}
	
	function select($str)
	{
		$this->sql=$str;
		$this->res=mysqli_query($this->con,$this->sql);
	}
}
?>
