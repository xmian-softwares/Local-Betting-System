<?php 
$name = $_POST['name'];
$user = $_POST['admin'];
$pwd = $_POST['pwd'];

$con = new mysqli("localhost","root","","betting");
$sel_co = $con->query("SELECT * FROM confirm WHERE us_id='$name'");

$sel_am = $con->query("SELECT * FROM user WHERE Id='$name'");
$row_am = $sel_am->fetch_array();
$odd = $row_am['Odd'];
$amount = $row_am['Amount'];

$sel_end = $con->query("SELECT * FROM user WHERE Id='$name' AND Access = 1");
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
<?php
$fetcher = $sel_am->fetch_array();

$games = $sel_co->num_rows;
$mul = $amount*$odd*0.90;

$closer = "</body>
</html>";

$desc_save = "List Of Games<br>\n";

$time = date("d-m-Y")."  At ".date("H:i:s");

$desc = "<!DOCTYPE html>
<html>
<head>
   <meta charset='utf-8' />
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <title>User $name Bet</title>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
<h3 style='background:black;color:white;padding:5px;'>$time</h3><br>
<center><h3 style='color:yellow;background:black;'>Total Win : $mul Birr</h3></center>
<h4><span style='color:Blue;'>User : $name</span>   
<span style='color:Red;float:right;'>Bet Amount : $amount Birr</span></h4>   
<center><h3 style='color:yellow;background:black;'>General Odd : $odd</h3></center>";

while($rows_de = $sel_co->fetch_array()){
      $ngid = $rows_de['bet_id'];
      
      $sel_co_odd = $con->query("SELECT * FROM confirm WHERE us_id='$name' AND bet_id='$ngid'");
      $row_co_odd = $sel_co_odd->fetch_array();
      
      $sel_co_date = $con->query("SELECT * FROM bet WHERE Id='$ngid'");
      $row_co_date = $sel_co_date->fetch_array();
      
      $desc = $desc."<div style='border: 1px solid black;padding:2px;color:#800000;'>".$rows_de['Described']."<br>".$row_co_date['Date'].
      "<span style='float:right;'>".$row_co_odd['Odd']."</span></div><br><br>";
      $desc_save = $desc_save."<br>\n".$rows_de['Described'];
}

$date = date("Y-m-d");
$con->query("UPDATE user SET Odd = '$odd', Described = '$desc_save', Games ='$games', Click = 1 WHERE Id='$name'");
$con->query("INSERT INTO usr_tmp (`Date`, Amount, User, Odd, Games, `Description`) VALUES('$date', '$amount', 'User $name', '$odd', '$games', '$desc_save')");

$myfile = fopen("Users/EXPECT Betting User $name.html", "w") or die("Unable to open file!");
fwrite($myfile, $desc.$closer);
fclose($myfile);

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
<p>User <?php echo $name?> Duplicated Successfully</p></center>
<form method="post" action="payment.php">
      <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
      <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
      <input type="submit" value='Continue' style="width:100%;background:#990099;color:white;height:50px">
    </form><br></div>
</body>
</html>

