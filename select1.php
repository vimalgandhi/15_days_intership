<?php 
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
//connection function 
$connection = mysqli_connect($host,$username,$passwd,$dbname);
//query
$q = mysqli_query($connection, "select * from tbl_user")or die("Error".mysqli_error($connection));
//below function fetch data as numerical array
echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile no.</th>";
echo "<th>Action</th>";
echo "</tr>";
$i = 0;
while($row = mysqli_fetch_row($q)){
	
	echo "<tr>";
	echo "<td>{$row['0']}</td>";
	echo "<td>{$row['1']}</td>";
	echo "<td>{$row['2']}</td>";
	echo "<td>{$row['3']}</td>";
	echo "<td><a href='delete.php?deletedid={$row['0']}'>Delete</a></td>";
	echo "</tr>";
}
echo "</table>";

echo "<a href='niraj.php'>Insert Record</a>";


?>