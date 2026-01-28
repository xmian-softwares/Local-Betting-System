<?php 
$user = $_POST['admin'];
$pwd = $_POST['pwd'];

$usr = $_POST['usr'];
$pass = $_POST['pass'];

$con = new mysqli("localhost","root","","betting");
$con->query("DELETE FROM sub_admins WHERE `User` = '$usr' AND `Password` = '$pass'");
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
<p>Sub Admin Has Been Deleted</p></center>
<form method="post" action="manage_admin.php">
      <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
      <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
      <input type="submit" value='Continue' style="width:100%;background:#990099;color:white;height:50px">
    </form><br></div>
</body>
</html>