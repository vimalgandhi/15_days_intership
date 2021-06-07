<html>
<center><h2>
<?php
$db_host = "localhost";
$db_uid = "root";
$db_pass = "";
$db_name = "wp";
$db_con = mysqli_connect($db_host,$db_uid,$db_pass,$db_name) or die('could not connect');
mysqli_error($db_con); if($_SERVER["REQUEST_METHOD"] == "POST")
{
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$query = "SELECT * FROM `hyy` WHERE `email`='".$email."' AND
`password` = '".$password."'";
$result = $db_con->query($query);
$rowCount =$result->num_rows; if($rowCount>0)
{
if($result)
{
while($row = mysqli_fetch_assoc($result))
{
$data[]=$row;
}
$encodedData['Status'] = "True";
$encodedData['Message'] = "Sucessfully Login";
$encodedData["response"] = $data; print (json_encode($encodedData)); session_start();
$_SESSION["loggedin"] = true;
$_SESSION["id"] = $id;
$_SESSION["email"] = $email; header("location: index1.php");

 








}
}
else
{
 



$data=array('Unsuccessful Login');
echo "Invalid Password or Account Not Existed";
 
print (json_encode($data));
}
}
mysqli_close($db_con);
?>
</h2>
</center><br><br>
<html>
<title>Login Page</title>
<head>
<style type="text/css"> body{
background-color: lightblue;
}
table{
border: 20px solid black;
}
</style>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);
?>">
<table bgcolor="lightgreen" align="center" width="30%" border="0">
<tr>
<td align="center"colspan="2"><font color="blue" size="6">Login Form</font></td>
</tr>
<tr>
<td>Enter Your Email </td>
<td><input type="email" id="email" name="email"/></td>
</tr>
<tr>
<td>Enter Your Password </td>
<td><input type="password" name="password" id="password"/></td>
</tr>
<td align="center" colspan="2"><input type="submit" value="Save" name="submit" /></td>
</table>
</form>
</body>
</html>
