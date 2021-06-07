<?php 
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
//connection function 
$connection = mysqli_connect($host,$username,$passwd,$dbname);
$q = mysqli_query($connection, 
"insert into tbl_user(user_name,user_gender,user_mobile) values ('ronak','male','123')")
or die("Error".mysqli_error($connection));
if($q)
{
	echo "<script> alert('Record Added successfully !!');</script>";
	echo $q;
}
?>