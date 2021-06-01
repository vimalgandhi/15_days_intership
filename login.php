<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title> cafe today </title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<link rel="stylesheet" href="styles/style1.css" type="text/css">
</head>
<body>
    <!<!-- header -->
<?php
include './Include/manu.php';
?>
  <div class="wrapper row2">
  <div id="container" class="clear">

         <h2>Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="get" action="login.php">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="button" name="log" id="log" value="Log In Here">       
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
        Forgot <a href="#">Password</a>    
    </form>     

</div>
</div>
<!-- Footer -->
<?php
    include './Include/footer.php';
?>
</body>
</html>