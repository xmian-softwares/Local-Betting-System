<?php 
$name = $_GET['name'];
$odd = $_GET['odd'];

$con = new mysqli("localhost","root","","betting");
$sel_co = $con->query("SELECT * FROM confirm WHERE us_id='$name'");

$sel_am = $con->query("SELECT * FROM user WHERE Id='$name'");
$fetcher = $sel_am->fetch_array();

$sel_per = $con->query("SELECT * FROM permanent WHERE User ='$name'");
if($sel_per->num_rows > 0){
   $row_per = $sel_per->fetch_array();
   if($row_per['Amount'] < $fetcher['Amount']){
      echo "<center><h3 style='background:red;color:white;'>No Enough Savings</h3></center>";
   }else{
      $t_am = $row_per['Amount'] - $fetcher['Amount'];
      echo "<center><h3 style='background:Green;color:white;'>You Have Enough Savings</h3></center>";
      
      $con->query("UPDATE user SET Access = 1 WHERE Id='$name'");
      $con->query("UPDATE permanent SET Amount = '$t_am' WHERE User='$name'");
   }
}

$sel_end = $con->query("SELECT * FROM user WHERE Id='$name' AND Access = 1");
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
<?php

$games = $sel_co->num_rows;
$amount = $fetcher['Amount'];
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
<h3 style='background:black;color:white;padding:5px;'>$time</h3>
<h4 style='padding-bottom:10px;padding-top:10px;box-shadow:2px 2px 2px 2px gray;'><span style='font-size:24px;color:blue;'>User : $name</span><br>   
<span style='color:red;;'>Bet Amount : $amount Birr</span></h4>  
<center><h3 style='box-shadow:2px 2px 2px 2px gray;color:#666666;background:#f5f5f5;'>Total Win : $mul Birr</h3></center> 
<center><h3 style='box-shadow:2px 2px 2px 2px gray;color:#666666;background:#f5f5f5;'>General Odd : $odd</h3></center>";

while($rows_de = $sel_co->fetch_array()){
      $ngid = $rows_de['bet_id'];
      
      $sel_co_odd = $con->query("SELECT * FROM confirm WHERE us_id='$name' AND bet_id='$ngid'");
      $row_co_odd = $sel_co_odd->fetch_array();
      
      $sel_co_date = $con->query("SELECT * FROM bet WHERE Id='$ngid'");
      $row_co_date = $sel_co_date->fetch_array();
      
      $desc = $desc."<div style='background:#ebcb7a;border:1px solid black;padding:2px;color:#101010;'>".$rows_de['Described']."<br>".$row_co_date['Date'].
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

<br><form method="post" action="index.php">
   <input type="submit" value="Restart Application" style="width:100%;height:70px;font-size:100%;background:Green;color:white;">
</form>

<div style="height:370px;overflow:scroll;"><?php include "Users/EXPECT Betting User $name.html";?></div>

<?php if($sel_end->num_rows == 0):?>
<center><h4 style="background:red;color:white;font-family: Arial, Helvetica, sans-serif;">Get Your Confirmation Before Saving</h4></center>
<?php endif;?>

<?php if($sel_end->num_rows > 0):?>
<center><h4 style="background:Green;color:white;font-family: Arial, Helvetica, sans-serif;">You Are Confirmed</h4></center>
<?php endif;?>

<form method="post" action="end.php?name=<?php echo $name?>&odd=<?php echo $odd?>">
   <input type="submit" value="Save File" style="width:100%;height:50px;font-size:100%;background:blue;color:white;">
</form>

</body>
</html>

