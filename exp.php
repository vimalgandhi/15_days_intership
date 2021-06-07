<?php
    $conn = mysqli_connect('localhost','root','','db_internship');
    $sql = "select * from tbl_student";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <div class="div1">
    <h1>CRUD OPERATION</h1>
      <form  method="post">
          <table border="1px solid">
            <tr>
               <th>Id</th>
               <th>Name</th>
               <th>Gender</th>
               <th>DOB</th>
               <th>Email</th>
               <th>Mobile Number</th>
               <th>Password</th>
               <th>Area</th>
               <th>Address</th>
               <th>Pincode</th>
               <th>Bloodgroup</th>
			   <th>Action</th>
            </tr>
            <?php
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <tr>
              <td><?php echo $row['st_id'] ?></td>
              <td><?php echo $row['st_name'] ?></td>
              <td><?php echo $row['st_gender'] ?></td>
              <td><?php echo $row['st_dob'] ?></td>
              <td><?php echo $row['st_email'] ?></td>
              <td><?php echo $row['st_mobile'] ?></td>
              <td><?php echo $row['st_address'] ?></td>
              <td><?php echo $row['st_password'] ?></td>
              <td><?php echo $row['st_area'] ?></td>
              <td><?php echo $row['st_pincode'] ?></td>
              <td><?php echo $row['st_bloodgroup'] ?></td>
            </tr>
          <?php } ?>
          </table>
        <?php } ?>
              <button><a href="niraj.php">Insert</button></a>
    </form>
  </div>
</body>
</html>