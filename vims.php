<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title> cafe today </title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">

</head>
<body>
    <!<!-- header -->
<?php
include './Include/manu.php';
?>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- content body -->
    <?php
    include './Include/image.php';
    ?>
    <!-- main content -->
    <?php
    include './Include/content.php';
    ?>
    <!-- right column -->
    <?php
    include './Include/rightside.php';
    ?>
    <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<?php
    include './Include/footer.php';
?>
</body>
</html>