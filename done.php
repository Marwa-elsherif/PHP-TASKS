<html>
<body>
thanks mr/miss <?php echo $_POST["fname"]; ?>  <?php echo $_POST["lname"]; ?><br>
please review your information:<br>
Name:<?php echo $_POST["fname"]; ?>  <?php echo $_POST["lname"]; ?><br>
Adress:<?php echo $_POST["adress"]; ?><br>


   yor skills :<?Php
//var_dump('skill');
  print_r($_POST['skill']);
?><br>


Department:<?php echo $_POST["Department"]; ?><br>
Your User Name is: <?php echo $_POST["name"]; ?><br>
Your password is: <?php echo $_POST["password"]; ?><br>
Your code is: <?php echo $_POST["code"]; ?><br>

gender:<?Php
  print_r($_POST['Gender']);
?><br>


</body>
</htm