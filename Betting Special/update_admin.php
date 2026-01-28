<?php 
$user = $_POST['admin'];
$pwd = $_POST['pwd'];

$ou = $_POST['OU'];
$nu = $_POST['NU'];

$op = $_POST['OP'];
$np = $_POST['NP'];
$rp = $_POST['RP'];

$con = new mysqli("localhost","root","","betting");
$sel_s = $con->query("SELECT * FROM admins WHERE User = '$user' AND `Password` = '$pwd'");
if($sel_s->num_rows > 0 && $np == $rp && $user == $ou && $pwd == $op){
    $con->query("UPDATE admins SET `User` = '$nu', `Password` = '$np' WHERE User = '$ou' AND `Password` = '$op'");
    header("location:index.php");
}
if($sel_s->num_rows > 0):?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EXPECT Betting Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body> 
<?php if($np != $rp):?>
<div style="margin-top:50%;box-shadow:1px 1px 1px 1px gray">
<center><h1 style="background:Red;color:White;">Failed</h1>
<p>Password Not Confirmed Correctly</p></center>
<form method="post" action="admin.php">
  <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>"> 
  <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
  <input type="submit" value="Go Back" style="height:40px;width:100%;background:Black;color:white;margin-top:40px">
</form></div>
<?php endif;?>

<?php if($user != $ou):?>
<div style="margin-top:50%;box-shadow:1px 1px 1px 1px gray">
<center><h1 style="background:Red;color:White;">Failed</h1>
<p>Old Admin Incorrect</p></center>
<form method="post" action="admin.php">
  <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>"> 
  <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
  <input type="submit" value="Go Back" style="height:40px;width:100%;background:Black;color:white;margin-top:40px">
</form></div>
<?php endif;?>

<?php if($pwd != $op):?>
<div style="margin-top:50%;box-shadow:1px 1px 1px 1px gray">
<center><h1 style="background:Red;color:White;">Failed</h1>
<p>Old Password Incorrect</p></center>
<form method="post" action="admin.php">
  <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>"> 
  <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
  <input type="submit" value="Go Back" style="height:40px;width:100%;background:Black;color:white;margin-top:40px">
</form></div>
<?php endif;?>

</body>
</html>
<?php endif;?>
