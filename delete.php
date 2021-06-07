<?php 
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
//connection function 
$connection = mysqli_connect($host,$username,$passwd,$dbname);
$id =$_GET['deletedid']
//query
$q = mysqli_query($connection, "update tbl_user set is_update where user_id='{$id}'")or die("Error".mysqli_error($connection));
if($q)
{
	echo "<script> alert('Record deleted successfully !!');window.location='selecttable.php';</script>";
}