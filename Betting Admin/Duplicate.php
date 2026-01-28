<?php
$con = new mysqli("localhost","root","","betting");

$user = $_POST['admin'];
$pwd = $_POST['pwd'];

$nuser = $_POST['nuser'];
$ouser = $_POST['ouser'];
$amount = $_POST['amnt'];

$sel_s = $con->query("SELECT * FROM admins WHERE User = '$user' AND `Password` = '$pwd'");
$sel_ss = $con->query("SELECT * FROM sub_admins WHERE User = '$user' AND `Password` = '$pwd'");

$sel = $con->query("SELECT * FROM confirm WHERE us_id='$ouser'");
while($row = $sel->fetch_array()){
   $id1 = $row['us_id'];
   $id2 = $row['bet_id'];
   
   $ht = $row['Home Team'];
   $at = $row['Away Team'];
   $gt = $row['Game Time'];

   $lg = $row['League'];
   $odd = $row['Odd'];
   $desc = $row['Described'];

   $dnb = $row['DNB'];
   $cd = $row['Code'];

   $con->query("INSERT INTO confirm(`us_id`,`bet_id`,`Home Team`,`Away Team`,`Game Time`,
   `League`,`Odd`,`Described`,`DNB`,`Code`)
   VALUE('$nuser','$id2','$ht','$at','$gt','$lg','$odd','$desc','$dnb','$cd')");
}

$sel2 = $con->query("SELECT * FROM user WHERE Id='$ouser'");
while($row2 = $sel2->fetch_array()){
    $odd2 = $row2['Odd'];
    $desc2 = $row2['Described'];
    $games = $row2['Games'];
    $click = $row2['Click'];
    
    $con->query("INSERT INTO user(`Id`,`Amount`,`Odd`,`Described`,`Games`,`Click`)
    VALUE('$nuser','$amount','$odd2','$desc2','$games','$click')");
}
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
<p>File Duplicated Continue To Save</p></center>
<form method="post" action="final_ass.php">
      <input type="text" name="name" value="<?php echo $nuser?>" hidden>
      <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
      <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
      <input type="submit" value='Continue' style="width:100%;background:#990099;color:white;height:50px">
    </form><br></div>
</body>
</html>
