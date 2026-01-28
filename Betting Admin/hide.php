<?php
$Id = $_GET['Id'];
$con = new mysqli("localhost","root","","betting");

$sel_chk = $con->query("SELECT * FROM bet WHERE `Id` = '$Id'");
$row_chk = $sel_chk->fetch_array();
if($row_chk['Hidden'] == 0){
    $con->query("UPDATE bet SET `Hidden` = '1' WHERE Id = '$Id'");
}else{
    $con->query("UPDATE bet SET `Hidden` = '0' WHERE Id = '$Id'");
}

$user = $_POST['admin'];
$pwd = $_POST['pwd'];

$sel_s = $con->query("SELECT * FROM admins WHERE User = '$user' AND `Password` = '$pwd'");

if($sel_s->num_rows > 0 || $sel_ss->num_rows > 0):
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EXPECT Betting Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div style="margin-top:50%;box-shadow:1px 1px 1px 1px gray">
<center><h1 style="background:Green;color:White;">Done</h1>
<p>Game Hidden Successfully</p></center>
<form method="post" action="Games.php">
      <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
      <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
      <input type="submit" value='Continue' style="width:100%;background:#990099;color:white;height:50px">
    </form><br></div>
</body>
</html>

<?php endif;?>