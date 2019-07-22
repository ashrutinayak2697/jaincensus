
<?php
session_start();
session_destroy();
session_unset();
echo "<script>alert('you are logged out!');document.location='../index.php'</script>";
//header('location:login.php');
?>