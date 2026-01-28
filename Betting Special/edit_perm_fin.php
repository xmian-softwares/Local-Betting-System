<?php 
$id = $_POST['Id'];
$amm = $_POST['Amount'];

$user = $_POST['admin'];
$pwd = $_POST['pwd'];

$con = new mysqli("localhost","root","","betting");
$con->query("UPDATE permanent SET `Amount` = '$amm' WHERE `Id` = '$id'");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EXPECT Betting Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div style="margin-top:50%;box-shadow:1px 1px 1px 1px gray">
<center><h1 style="background:Green;color:White;">Done</h1>
<p>Sub Admin Updated Successfully</p></center>
<form method="post" action="perm.php">
  <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
  <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
  <input type="submit" value="Continue" style="height:40px;width:100%;background:Orange;color:white;margin-top:40px">
</form></div>

</body>
</html>