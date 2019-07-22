<?php 
class connection
{
	var $con,$db,$sql,$res;
	function connect()
	{
	  $this->con = mysqli_connect("localhost","root","","jaincount");
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
