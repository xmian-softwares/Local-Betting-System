<?php 
$nau = $_POST['NAU'];
$nap = $_POST['NAP'];
$rap = $_POST['RAP'];

$con = new mysqli("localhost","root","","betting");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EXPECT Betting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php if($nap != $rap):?>
<div style="margin-top:50%;box-shadow:1px 1px 1px 1px gray">
<center><h1 style="background:Red;color:White;">Failed</h1>
<p>Password Not Confirmed Correctly</p></center>
<form method="post" action="signup.php">
  <input type="submit" value="Go Back" style="height:40px;width:100%;background:Black;color:white;margin-top:40px">
</form></div>
<?php endif;?>

<?php if($con->query("INSERT INTO permanent (`User`,`Password`) VALUES('$nau','$nap')") == FALSE):?>
<div style="margin-top:50%;box-shadow:1px 1px 1px 1px gray">
<center><h1 style="background:Red;color:White;">Failed</h1>
<p>Username Already In Use</p></center>
<form method="post" action="signup.php">
  <input type="submit" value="Go Back" style="height:40px;width:100%;background:Black;color:white;margin-top:40px">
</form></div>
<?php endif;?>

<?php if($nap == $rap && $con->query("INSERT INTO permanent (`User`,`Password`) VALUES('$nau','$nap')") == TRUE):?>
<div style="margin-top:50%;box-shadow:1px 1px 1px 1px gray">
<center><h1 style="background:Green;color:White;">Done</h1>
<p>Sub Admin Inserted Successfully</p></center>
<form method="post" action="index.php">
  <input type="submit" value="Continue" style="height:40px;width:100%;background:Orange;color:white;margin-top:40px">
</form></div>
<?php endif;?>

<?php if($nap == $rap){
  $con->query("INSERT INTO permanent (`User`,`Password`) VALUES('$nau','$nap')");
}?>
</body>
</html>