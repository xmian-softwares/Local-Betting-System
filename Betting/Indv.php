<?php 
$name = $_GET['name'];
$cata = $_GET['cata'];

$Id = $_GET['Id'];
$con = new mysqli("localhost","root","","betting");

$sel = $con->query("SELECT * FROM bet WHERE Id=$Id");
$sel2 = $con->query("SELECT * FROM confirm WHERE us_id='$name' AND bet_id='$Id'");
$sel3 = $con->query("SELECT * FROM confirm WHERE us_id='$name'");
$sel4 = $con->query("SELECT * FROM confirm WHERE us_id='$name' AND DNB= 1");

$row = $sel->fetch_array();
$sel_cont = $con->query("SELECT * FROM user WHERE Id='$name' AND Click = 1");

if($sel_cont->num_rows == 0):
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EXPECT Betting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="background:#F8F8F8">
<?php if($sel2->num_rows == 0 && $sel3->num_rows > 1){
  header("location:confirm.php?name=$name&cata=$cata");
}?>
  <nav class="navbar navbar-inverse" style="border:none;background-image:url('16633299332742.png');">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="dropdown">
        
      <img src="Expect.png" style="float:left;width:30%">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-weight:bold;font-size:20px;color:#660066;margin-bottom:15px;margin-top:15px;padding-bottom:13px;padding-top:13px;">
      <center><span>EXPECT BETTING</span></center>
      </a>
          <ul class="dropdown-menu">
          <li><a href="chooser.php?name=<?php echo $name?>" style="border:2px solid white;color:white;color:white;background:linear-gradient(to right,black,#DAA520,black);width:100%;font-size:24px;"><center>Home</center></a></li><br>
            <li><a href="results.php?name=<?php echo $name?>" style="border:2px solid white;color:white;background:linear-gradient(to right,black,#DAA520,black);width:100%;font-size:24px;padding-bottom:20px;padding-top:20px"><center>Results</center></a></li><br>
            <li><a href="chooser.php?name=<?php echo $name?>" style="border:2px solid white;color:white;color:white;background:linear-gradient(to right,black,#DAA520,black);width:100%;font-size:24px;"><center>Leagues</center></a></li><br>
            <li style="color:white;background:black;width:100%;border:2px solid white;color:white;">
              <img src="main_emblem.png" height=40px style="padding-left:5px">
              <span style="float:right;padding-right:5px;padding-top:10px">Programmed By X-M triple A</span> 
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  
    <div style="height:130px;box-shadow:5px 5px 5px 5px gray;border:1px solid gray;background:#303030;">
      <br><h3 style="padding-left:10px;background:#DAA520;color:white;"><?php echo $row['Home']?> Vs <?php echo $row['Away']?></h3>
      <h4 style="border:0.5px solid white;padding-left:10px;background:Black;color:white"><?php echo $row['Date']?></h4>
    </div>
    
    <form action="mult.php?name=<?php echo $name?>&Id=<?php echo $Id?>&cata=<?php echo $cata?>" method="post">
    <div style="overflow:scroll; padding-left:1px">

      <center><br><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px">3-Way</h5></center>
      <div style="font-size:20px;border:1px solid black; margin-bottom:2px; padding-left:2%;background:white;color:black;">
      <div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px;" name = "Winner" value="001<?php echo $row['Home Win']?>">1 <span style="font-size:13px;color:red;"><?php echo $row['Home Win']?></span></span>
          <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px;" name = "Winner" value="003<?php echo $row['Away Win']?>">2 <span style="font-size:13px;color:red;"><?php echo $row['Away Win']?></span></span>
          <center><input type="radio" style="margin:5px" name = "Winner" value="002<?php echo $row['Draw']?>">x <span style="font-size:13px;color:red;"><?php echo $row['Draw']?></span><center>
      </div></div>

      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">Double Chance</h5></center>
      <div style="font-size:18px;border:1px solid black; margin-bottom:5px; background:white;color:black">
      <div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px;color:white" name = "Winner" value="038<?php echo $row['Home Win Or Draw']?>">1 Or x <span style="font-size:13px;color:red;"><?php echo $row['Home Win Or Draw']?></span></span>
          <span style="padding-right:15px;float:right;"><input type="radio" style="margin:5px;color:white" name = "Winner" value="039<?php echo $row['AwayWin Or Draw']?>">2 Or x <span style="font-size:13px;color:red;"><?php echo $row['AwayWin Or Draw']?></span></span>
          <br><center><input type="radio" style="margin:5px;color:white" name = "Winner" value="053<?php echo $row['1 Or 2']?>">1 Or 2 <span style="font-size:13px;color:red;"><?php echo $row['1 Or 2']?></span></center>
          
      </div></div>
      
      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">Both Teams To Score</h5></center>
      <div style="font-size:20px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black">
      <div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="004<?php echo $row['GG']?>">Yes <span style="font-size:13px;color:red;"><?php echo $row['GG']?></span>
        <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="005<?php echo $row['No GG']?>">No <span style="font-size:13px;color:red;"><?php echo $row['No GG']?></span></span>
      </div></div>
      
      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">Over/Under</h5></center>
      <div style="font-size:20px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black">
      <div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="012<?php echo $row['Over 0.5']?>">Over 0.5 <span style="font-size:13px;color:red;"><?php echo $row['Over 0.5']?></span>
       <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="013<?php echo $row['Over 1.5']?>">Over 1.5 <span style="font-size:13px;color:red;"><?php echo $row['Over 1.5']?></span></span>
       <br><input type="radio" style="margin:5px" name = "Winner" value="014<?php echo $row['Over 2.5']?>">Over 2.5 <span style="font-size:13px;color:red;"><?php echo $row['Over 2.5']?></span>
       <br><span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="015<?php echo $row['Over 3.5']?>">Over 3.5 <span style="font-size:13px;color:red;"><?php echo $row['Over 3.5']?></span></span>
       <input type="radio" style="margin:5px" name = "Winner" value="049<?php echo $row['Over 4.5']?>">Over 4.5 <span style="font-size:13px;color:red;"><?php echo $row['Over 4.5']?></span>
       </div>
       <br><div style="margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="016<?php echo $row['Under 0.5']?>">Under 0.5 <span style="font-size:13px;color:red;"><?php echo $row['Under 0.5']?></span>
       <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="017<?php echo $row['Under 1.5']?>">Under 1.5 <span style="font-size:13px;color:red;"><?php echo $row['Under 1.5']?></span></span>
       <br><input type="radio" style="margin:5px" name = "Winner" value="018<?php echo $row['Under 2.5']?>">Under 2.5 <span style="font-size:13px;color:red;"><?php echo $row['Under 2.5']?></span>
       <br><span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="019<?php echo $row['Under 3.5']?>">Under 3.5 <span style="font-size:13px;color:red;"><?php echo $row['Under 3.5']?></span></span>
       <input type="radio" style="margin:5px" name = "Winner" value="050<?php echo $row['Under 4.5']?>">Under 4.5 <span style="font-size:13px;color:red;"><?php echo $row['Under 4.5']?></span>
      <br></div></div>
      
      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">First Half 3-Way</h5></center>
      <div style="font-size:20px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black">
      <div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px" name = "Winner" value="028<?php echo $row['FH Home Win']?>">1 <span style="font-size:13px;color:red;"><?php echo $row['FH Home Win']?></span></span>
          <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="030<?php echo $row['FH Away Win']?>">2 <span style="font-size:13px;color:red;"><?php echo $row['FH Away Win']?></span></span>
          <center><input type="radio" style="margin:5px" name = "Winner" value="029<?php echo $row['FH Draw']?>">x <span style="font-size:13px;color:red;"><?php echo $row['FH Draw']?></span></center>
      </div></div>

      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">First Half Over/Under</h5></center>
      <div style="font-size:20px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black" >
      <div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="006<?php echo $row['FH Over 0.5']?>">Over 0.5 <span style="font-size:13px;color:red;"><?php echo $row['FH Over 0.5']?></span>
       <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="007<?php echo $row['FH Over 1.5']?>">Over 1.5 <span style="font-size:13px;color:red;"><?php echo $row['FH Over 1.5']?></span></span>
       <br><input type="radio" style="margin:5px" name = "Winner" value="008<?php echo $row['FH Over 2.5']?>">Over 2.5 <span style="font-size:13px;color:red;"><?php echo $row['FH Over 2.5']?></span>
       <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="051<?php echo $row['FH Over 3.5']?>">Over 3.5 <span style="font-size:13px;color:red;"><?php echo $row['FH Over 3.5']?></span></span>
       </div>
       <br><div style="margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="009<?php echo $row['FH Under 0.5']?>">Under 0.5 <span style="font-size:13px;color:red;"><?php echo $row['FH Under 0.5']?></span>
       <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="010<?php echo $row['FH Under 1.5']?>">Under 1.5 <span style="font-size:13px;color:red;"><?php echo $row['FH Under 1.5']?></span></span>
       <br><input type="radio" style="margin:5px" name = "Winner" value="011<?php echo $row['FH Under 2.5']?>">Under 2.5 <span style="font-size:13px;color:red;"><?php echo $row['FH Under 2.5']?></span>
       <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="052<?php echo $row['FH Under 3.5']?>">Under 3.5 <span style="font-size:13px;color:red;"><?php echo $row['FH Under 3.5']?></span></span>
      </div></div>

      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">Second Half 3-Way</h5></center>
      <div style="font-size:20px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black">
          <span style="float:left"><input type="radio" style="margin:5px" name = "Winner" value="031<?php echo $row['SH Home Win']?>">1 <span style="font-size:13px;color:red;"><?php echo $row['SH Home Win']?></span></span>
          <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="033<?php echo $row['SH Away Win']?>">2 <span style="font-size:13px;color:red;"><?php echo $row['SH Away Win']?></span></span>
          <center><input type="radio" style="margin:5px" name = "Winner" value="032<?php echo $row['SH Draw']?>">x <span style="font-size:13px;color:red;"><?php echo $row['SH Draw']?></span></center>
      </div>
      
      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">Second Half Over/Under</h5></center>
      <div style="font-size:20px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black">
      <div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="069<?php echo $row['SH Over 0.5']?>">Over 0.5 <span style="font-size:13px;color:red;"><?php echo $row['SH Over 0.5']?></span>
       <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="070<?php echo $row['SH Over 1.5']?>">Over 1.5 <span style="font-size:13px;color:red;"><?php echo $row['SH Over 1.5']?></span></span>
       <br><input type="radio" style="margin:5px" name = "Winner" value="071<?php echo $row['SH Over 2.5']?>">Over 2.5 <span style="font-size:13px;color:red;"><?php echo $row['SH Over 2.5']?></span>
       <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="072<?php echo $row['SH Over 3.5']?>">Over 3.5 <span style="font-size:13px;color:red;"><?php echo $row['SH Over 3.5']?></span></span>
       </div>
       <br><div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="073<?php echo $row['SH Under 0.5']?>">Under 0.5 <span style="font-size:13px;color:red;"><?php echo $row['SH Under 0.5']?></span>
       <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="074<?php echo $row['SH Under 1.5']?>">Under 1.5 <span style="font-size:13px;color:red;"><?php echo $row['SH Under 1.5']?></span></span>
       <br><input type="radio" style="margin:5px" name = "Winner" value="075<?php echo $row['SH Under 2.5']?>">Under 2.5 <span style="font-size:13px;color:red;"><?php echo $row['SH Under 2.5']?></span>
       <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="076<?php echo $row['SH Under 3.5']?>">Under 3.5 <span style="font-size:13px;color:red;"><?php echo $row['SH Under 3.5']?></span></span>
      </div></div>

      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">First Half / Full Time</h5></center>
      <div style="font-size:20px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black">
      <div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px;color:white" name = "Winner" value="078<?php echo $row['1/1']?>">1/1 <span style="font-size:13px;color:red;"><?php echo $row['1/1']?></span></span>
          <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px;color:white" name = "Winner" value="080<?php echo $row['1/2']?>">1/2 <span style="font-size:13px;color:red;"><?php echo $row['1/2']?></span></span>
          <center><input type="radio" style="margin:5px;color:white" name = "Winner" value="079<?php echo $row['1/x']?>">1/x <span style="font-size:13px;color:red;"><?php echo $row['1/x']?></span></center>
          
          <br><span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px;color:white" name = "Winner" value="081<?php echo $row['x/1']?>">x/1 <span style="font-size:13px;color:red;"><?php echo $row['x/1']?></span></span>
          <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px;color:white" name = "Winner" value="083<?php echo $row['x/2']?>">x/2 <span style="font-size:13px;color:red;"><?php echo $row['x/2']?></span></span>
          <center><input type="radio" style="margin:5px;color:white" name = "Winner" value="082<?php echo $row['x/x']?>">x/x <span style="font-size:13px;color:red;"><?php echo $row['x/x']?></span></center>

          <br><span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px;color:white" name = "Winner" value="084<?php echo $row['2/1']?>">2/1 <span style="font-size:13px;color:red;"><?php echo $row['2/1']?></span></span>
          <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px;color:white" name = "Winner" value="086<?php echo $row['2/2']?>">2/2 <span style="font-size:13px;color:red;"><?php echo $row['2/2']?></span></span>
          <center><input type="radio" style="margin:5px;color:white" name = "Winner" value="085<?php echo $row['2/x']?>">2/x <span style="font-size:13px;color:red;"><?php echo $row['2/x']?></span></center>
      </div></div>

      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">3 Way & Over/Under</h5></center>
      <div style="font-size:16px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black">
      <div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="020<?php echo $row['Home Win Over 1.5']?>">1 & Over 1.5 <span style="font-size:13px;color:red;"><?php echo $row['Home Win Over 1.5']?></span>
       <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="021<?php echo $row['Home Win Over 2.5']?>">1 & Over 2.5 <span style="font-size:13px;color:red;"><?php echo $row['Home Win Over 2.5']?></span></span>
       <br><span><input type="radio" style="margin:5px" name = "Winner" value="022<?php echo $row['Home Win Over 3.5']?>">1 & Over 3.5 <span style="font-size:13px;color:red;"><?php echo $row['Home Win Over 3.5']?></span></span>
       <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="023<?php echo $row['Home Win Over 4.5']?>">1 & Over 4.5 <span style="font-size:13px;color:red;"><?php echo $row['Home Win Over 4.5']?></span></span>
       </div>
       
       <br><div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="131<?php echo $row['Draw Over 1.5']?>">x & Over 1.5 <span style="font-size:13px;color:red;"><?php echo $row['Draw Over 1.5']?></span>
       <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="132<?php echo $row['Draw Over 2.5']?>">x & Over 2.5 <span style="font-size:13px;color:red;"><?php echo $row['Draw Over 2.5']?></span></span>
       <br><span><input type="radio" style="margin:5px" name = "Winner" value="133<?php echo $row['Draw Over 3.5']?>">x & Over 3.5 <span style="font-size:13px;color:red;"><?php echo $row['Draw Over 3.5']?></span></span>
       <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="134<?php echo $row['Draw Over 4.5']?>">x & Over 4.5 <span style="font-size:13px;color:red;"><?php echo $row['Draw Over 4.5']?></span></span>
       </div>
       
       <br><div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="024<?php echo $row['Away Win Over 1.5']?>">2 & Over 1.5 <span style="font-size:13px;color:red;"><?php echo $row['Away Win Over 1.5']?></span>
       <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="025<?php echo $row['Away Win Over 2.5']?>">2 & Over 2.5 <span style="font-size:13px;color:red;"><?php echo $row['Away Win Over 2.5']?></span></span>
       <br><span><input type="radio" style="margin:5px" name = "Winner" value="026<?php echo $row['Away Win Over 3.5']?>">2 & Over 3.5 <span style="font-size:13px;color:red;"><?php echo $row['Away Win Over 3.5']?></span></span>
       <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="027<?php echo $row['Away Win Over 4.5']?>">2 & Over 4.5 <span style="font-size:13px;color:red;"><?php echo $row['Away Win Over 4.5']?></span></span>
       </div>
       
       <br><div style="margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="123<?php echo $row['Home Win Under 1.5']?>">1 & Under 1.5 <span style="font-size:13px;color:red;"><?php echo $row['Home Win Under 1.5']?></span>
       <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="124<?php echo $row['Home Win Under 2.5']?>">1 & Under 2.5 <span style="font-size:13px;color:red;"><?php echo $row['Home Win Under 2.5']?></span></span>
       <br><span><input type="radio" style="margin:5px" name = "Winner" value="125<?php echo $row['Home Win Under 3.5']?>">1 & Under 3.5 <span style="font-size:13px;color:red;"><?php echo $row['Home Win Under 3.5']?></span></span>
       <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="126<?php echo $row['Home Win Under 4.5']?>">1 & Under 4.5 <span style="font-size:13px;color:red;"><?php echo $row['Home Win Under 4.5']?></span></span>
       </div>
       
       <br><div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="135<?php echo $row['Draw Under 1.5']?>">x & Under 1.5 <span style="font-size:13px;color:red;"><?php echo $row['Draw Under 1.5']?></span>
       <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="136<?php echo $row['Draw Under 2.5']?>">x & Under 2.5 <span style="font-size:13px;color:red;"><?php echo $row['Draw Under 2.5']?></span></span>
       <br><span><input type="radio" style="margin:5px" name = "Winner" value="137<?php echo $row['Draw Under 3.5']?>">x & Under 3.5 <span style="font-size:13px;color:red;"><?php echo $row['Draw Under 3.5']?></span></span>
       <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="138<?php echo $row['Draw Under 4.5']?>">x & Under 4.5 <span style="font-size:13px;color:red;"><?php echo $row['Draw Under 4.5']?></span></span>
       </div>

       <br><div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="127<?php echo $row['Away Win Under 1.5']?>">2 & Under 1.5 <span style="font-size:13px;color:red;"><?php echo $row['Away Win Under 1.5']?></span>
       <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="128<?php echo $row['Away Win Under 2.5']?>">2 & Under 2.5 <span style="font-size:13px;color:red;"><?php echo $row['Away Win Under 2.5']?></span></span>
       <br><span><input type="radio" style="margin:5px" name = "Winner" value="129<?php echo $row['Away Win Under 3.5']?>">2 & Under 3.5 <span style="font-size:13px;color:red;"><?php echo $row['Away Win Under 3.5']?></span></span>
       <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="130<?php echo $row['Away Win Under 4.5']?>">2 & Under 4.5 <span style="font-size:13px;color:red;"><?php echo $row['Away Win Under 4.5']?></span></span>
      </div></div>

      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">3 Way & Both Team Score </h5></center>
      <div style="font-size:16px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black">
      <div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;">
          <span><input type="radio" style="margin:5px" name = "Winner" value="040<?php echo $row['GG Home']?>">1 & Yes <span style="font-size:13px;color:red;"><?php echo $row['GG Home']?></span></span>
          <span style="padding-right:5px;float:right;"><input type="radio" style="margin:5px" name = "Winner" value="066<?php echo $row['No GG Home']?>">1 & No <span style="font-size:13px;color:red;"><?php echo $row['No GG Home']?></span></span>
          </div>
          
          <br><div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;">
          <span><input type="radio" style="margin:5px" name = "Winner" value="041<?php echo $row['GG Draw']?>">x & Yes <span style="font-size:13px;color:red;"><?php echo $row['GG Draw']?></span></span>
          <span style="padding-right:5px;float:right;"><input type="radio" style="margin:5px" name = "Winner" value="067<?php echo $row['No GG Draw']?>">x & No <span style="font-size:13px;color:red;"><?php echo $row['No GG Draw']?></span></span>
          </div>

          <br><div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;">
          <span><input type="radio" style="margin:5px" name = "Winner" value="042<?php echo $row['GG Away']?>">2 & Yes <span style="font-size:13px;color:red;"><?php echo $row['GG Away']?></span></span>
          <span style="padding-right:5px;float:right;"><input type="radio" style="margin:5px" name = "Winner" value="068<?php echo $row['No GG Away']?>">2 & No <span style="font-size:13px;color:red;"><?php echo $row['No GG Away']?></span></span>
          <br></div>
        </div>

      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">Even - Odd</h5></center>
      <div style="font-size:20px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black">
      <div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="034<?php echo $row['Even']?>">Even <span style="font-size:13px;color:red;"><?php echo $row['Even']?></span>
          <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="035<?php echo $row['Odd']?>"> Odd <span style="font-size:13px;color:red;"><?php echo $row['Odd']?></span></span>
      </div></div>

      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">Highest Scoring Half</h5></center>
      <div style="font-size:16px;border:1px solid black; margin-bottom:5px; background:white;color:black">
      <div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px" name = "Winner" value="036<?php echo $row['FH Most Goals']?>">1st Half <span style="font-size:13px;color:red;"><?php echo $row['FH Most Goals']?></span></span>
          <span style="float:right;"><input type="radio" style="margin:5px" name = "Winner" value="037<?php echo $row['SH Most Goals']?>">2nd Half <span style="font-size:13px;color:red;"><?php echo $row['SH Most Goals']?></span></span><br>
          <span><center><input type="radio" style="margin:5px" name = "Winner" value="077<?php echo $row['Equal']?>">Equal <span style="font-size:13px;color:red;"><?php echo $row['Equal']?></span></center></span>
          
      </div></div>

      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">Correct Score</h5></center>
      <div style="font-size:20px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black">
      <div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px" name = "Winner" value="087<?php echo $row['0-0']?>">0-0 <span style="font-size:13px;color:red;"><?php echo $row['0-0']?></span></span>
          <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="089<?php echo $row['0-2']?>">0-2 <span style="font-size:13px;color:red;"><?php echo $row['0-2']?></span></span>
          <center><input type="radio" style="margin:5px" name = "Winner" value="088<?php echo $row['0-1']?>">0-1 <span style="font-size:13px;color:red;"><?php echo $row['0-1']?></span></center>

          <span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px" name = "Winner" value="090<?php echo $row['0-3']?>">0-3 <span style="font-size:13px;color:red;"><?php echo $row['0-3']?></span></span>
          <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="092<?php echo $row['0-5']?>">0-5 <span style="font-size:13px;color:red;"><?php echo $row['0-5']?></span></span>
          <center><span><input type="radio" style="margin:5px" name = "Winner" value="091<?php echo $row['0-4']?>">0-4 <span style="font-size:13px;color:red;"><?php echo $row['0-4']?></span></span></center>
          </div>
          <br><div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px" name = "Winner" value="093<?php echo $row['1-0']?>">1-0 <span style="font-size:13px;color:red;"><?php echo $row['1-0']?></span></span>
          <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="095<?php echo $row['1-2']?>">1-2 <span style="font-size:13px;color:red;"><?php echo $row['1-2']?></span></span>
          <center><input type="radio" style="margin:5px" name = "Winner" value="094<?php echo $row['1-1']?>">1-1 <span style="font-size:13px;color:red;"><?php echo $row['1-1']?></span></center>

          <span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px" name = "Winner" value="096<?php echo $row['1-3']?>">1-3 <span style="font-size:13px;color:red;"><?php echo $row['1-3']?></span></span>
          <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="098<?php echo $row['1-5']?>">1-5 <span style="font-size:13px;color:red;"><?php echo $row['1-5']?></span></span>
          <center><span><input type="radio" style="margin:5px" name = "Winner" value="097<?php echo $row['1-4']?>">1-4 <span style="font-size:13px;color:red;"><?php echo $row['1-4']?></span></span></center>
          </div>
          <br><div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px" name = "Winner" value="099<?php echo $row['2-0']?>">2-0 <span style="font-size:13px;color:red;"><?php echo $row['2-0']?></span></span>
          <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="101<?php echo $row['2-2']?>">2-2 <span style="font-size:13px;color:red;"><?php echo $row['2-2']?></span></span>
          <center><input type="radio" style="margin:5px" name = "Winner" value="100<?php echo $row['2-1']?>">2-1 <span style="font-size:13px;color:red;"><?php echo $row['2-1']?></span></center>

          <span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px" name = "Winner" value="102<?php echo $row['2-3']?>">2-3 <span style="font-size:13px;color:red;"><?php echo $row['2-3']?></span></span>
          <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="104<?php echo $row['2-5']?>">2-5 <span style="font-size:13px;color:red;"><?php echo $row['2-5']?></span></span>
          <center><span><input type="radio" style="margin:5px" name = "Winner" value="103<?php echo $row['2-4']?>">2-4 <span style="font-size:13px;color:red;"><?php echo $row['2-4']?></span></span></center>
          </div>
          <br><div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px" name = "Winner" value="105<?php echo $row['3-0']?>">3-0 <span style="font-size:13px;color:red;"><?php echo $row['3-0']?></span></span>
          <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="107<?php echo $row['3-2']?>">3-2 <span style="font-size:13px;color:red;"><?php echo $row['3-2']?></span></span>
          <center><input type="radio" style="margin:5px" name = "Winner" value="106<?php echo $row['3-1']?>">3-1 <span style="font-size:13px;color:red;"><?php echo $row['3-1']?></span></center>
  
          <span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px" name = "Winner" value="108<?php echo $row['3-3']?>">3-3 <span style="font-size:13px;color:red;"><?php echo $row['3-3']?></span></span>
          <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="110<?php echo $row['3-5']?>">3-5 <span style="font-size:13px;color:red;"><?php echo $row['3-5']?></span></span>
          <center><span><input type="radio" style="margin:5px" name = "Winner" value="109<?php echo $row['3-4']?>">3-4 <span style="font-size:13px;color:red;"><?php echo $row['3-4']?></span></span></center>
          </div>
          
          <br><div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px" name = "Winner" value="111<?php echo $row['4-0']?>">4-0 <span style="font-size:13px;color:red;"><?php echo $row['4-0']?></span></span>
          <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="113<?php echo $row['4-2']?>">4-2 <span style="font-size:13px;color:red;"><?php echo $row['4-2']?></span></span>
          <center><input type="radio" style="margin:5px" name = "Winner" value="112<?php echo $row['4-1']?>">4-1 <span style="font-size:13px;color:red;"><?php echo $row['4-1']?></span></center>

          <span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px" name = "Winner" value="114<?php echo $row['4-3']?>">4-3 <span style="font-size:13px;color:red;"><?php echo $row['4-3']?></span></span>
          <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="116<?php echo $row['4-5']?>">4-5 <span style="font-size:13px;color:red;"><?php echo $row['4-5']?></span></span>
          <center><input type="radio" style="margin:5px" name = "Winner" value="115<?php echo $row['4-4']?>">4-4 <span style="font-size:13px;color:red;"><?php echo $row['4-4']?></span></center>
          </div>
          <br><div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px" name = "Winner" value="117<?php echo $row['5-0']?>">5-0 <span style="font-size:13px;color:red;"><?php echo $row['5-0']?></span></span>
          <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="119<?php echo $row['5-2']?>">5-2 <span style="font-size:13px;color:red;"><?php echo $row['5-2']?></span></span>
          <center><input type="radio" style="margin:5px" name = "Winner" value="118<?php echo $row['5-1']?>">5-1 <span style="font-size:13px;color:red;"><?php echo $row['5-1']?></span></center>

          <span style="float:left;padding-left:5px;"><input type="radio" style="margin:5px" name = "Winner" value="120<?php echo $row['5-3']?>">5-3 <span style="font-size:13px;color:red;"><?php echo $row['5-3']?></span></span>
          <span style="float:right;padding-right:5px;"><input type="radio" style="margin:5px" name = "Winner" value="122<?php echo $row['5-5']?>">5-5 <span style="font-size:13px;color:red;"><?php echo $row['5-5']?></span></span>
          <center><input type="radio" style="margin:5px" name = "Winner" value="121<?php echo $row['5-4']?>">5-4 <span style="font-size:13px;color:red;"><?php echo $row['5-4']?></span></center>
      </div></div>

      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">Handi Cap</h5></center>
      <div style="font-size:20px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black">
      <div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="056<?php echo $row['1 (0,1)']?>">1 (0:1) <span style="font-size:13px;color:red;"><?php echo $row['1 (0,1)']?></span>
          <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="057<?php echo $row['1 (0,2)']?>">1 (0:2) <span style="font-size:13px;color:red;"><?php echo $row['1 (0,2)']?></span></span><br>
          <span><input type="radio" style="margin:5px" name = "Winner" value="058<?php echo $row['1 (0,3)']?>">1 (0:3) <span style="font-size:13px;color:red;"><?php echo $row['1 (0,3)']?></span></span>
          <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="059<?php echo $row['1 (0,4)']?>">1 (0:4) <span style="font-size:13px;color:red;"><?php echo $row['1 (0,4)']?></span></span>
          </div>
          <br><div style="margin-top:5px;margin-bottom:5px;border-bottom: 1px ridge black;border-top: 1px ridge black;"><input type="radio" style="margin:5px" name = "Winner" value="060<?php echo $row['2 (1,0)']?>">2 (1:0) <span style="font-size:13px;color:red;"><?php echo $row['2 (1,0)']?></span>
          <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="061<?php echo $row['2 (2,0)']?>">2 (2:0) <span style="font-size:13px;color:red;"><?php echo $row['2 (2,0)']?></span></span><br>
          <span><input type="radio" style="margin:5px" name = "Winner" value="062<?php echo $row['2 (3,0)']?>">2 (3:0) <span style="font-size:13px;color:red;"><?php echo $row['2 (3,0)']?></span></span>
          <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="063<?php echo $row['2 (4,0)']?>">2 (4:0) <span style="font-size:13px;color:red;"><?php echo $row['2 (4,0)']?></span></span>
          
      </div></div>

      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">First Team To Score</h5></center>
      <div style="font-size:20px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black">
          <input type="radio" style="margin:5px" name = "Winner" value="054<?php echo $row['Home Score First']?>">Home <span style="font-size:13px;color:red;"><?php echo $row['Home Score First']?></span>
          <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="055<?php echo $row['Away Score First']?>">Away <span style="font-size:13px;color:red;"><?php echo $row['Away Score First']?></span></span>
          
      </div>
      
      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">Goal In The First 15 Min</h5></center>
      <div style="font-size:20px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black">
        <input type="radio" style="margin:5px" name = "Winner" value="047<?php echo $row['15 Goal Yes']?>">Yes <span style="font-size:13px;color:red;"><?php echo $row['15 Goal Yes']?></span>
        <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="048<?php echo $row['15 Goal No']?>">No <span style="font-size:13px;color:red;"><?php echo $row['15 Goal No']?></span></span>
      </div>
      
      <center><h5 style="box-shadow:2px 2px 2px 2px gray;font-size:24px;">Red Card</h5></center>
      <div style="font-size:20px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black">
        <input type="radio" style="margin:5px" name = "Winner" value="045<?php echo $row['Red Card Yes']?>">Yes <span style="font-size:13px;color:red;"><?php echo $row['Red Card Yes']?></span>
        <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="046<?php echo $row['Red Card No']?>">No <span style="font-size:13px;color:red;"><?php echo $row['Red Card No']?></span>
      </div>
      
      
      <?php if($sel4->num_rows > 0){
            echo "<center><h5 style='color:Red;box-shadow:2px 2px 2px 2px gray;font-size:24px;'>Draw No Bet 
            <br><span style='font-size:16px'>(Unavailable At The Moment)</span></h5></center>";
          }
          else{
            echo "<center><h5 style='color:black;box-shadow:2px 2px 2px 2px gray;font-size:24px;; padding-top:2px;'>Draw No Bet 
            <br><span style='font-size:16px'>(Available In Only One Game)</span></h5></center>";
          }?>
      <div style="font-size:20px;border:1px solid black; margin-bottom:5px; padding-left:2%;background:white;color:black">
          <input type="radio" style="margin:5px" name = "Winner" value="064<?php echo $row['DNB Home']?>"
          <?php if($sel4->num_rows > 0){
            echo "disabled";
          }?>>
          
          <span>Home</span> <span style="font-size:13px;color:red;"> <?php echo $row['DNB Home']?></span>
          
          
          <span style="float:right;padding-right:15px;"><input type="radio" style="margin:5px" name = "Winner" value="065<?php echo $row['DNB Away']?>"<?php if($sel4->num_rows > 0){
            echo "disabled";
          }?>>
          
          <span>Away</span> <span style="font-size:13px;color:red;"><?php echo $row['DNB Away']?></span></span>
          
      </div>

      <div style="border:1px solid black; margin-bottom:5px; padding-left:2%;" hidden>
        <br><h5 style="padding-left:1.8%; color:white;background:black; padding-top:2px;">VAR Checking</h5>
        <input type="radio" style="margin:5px" name = "Winner" value="043<?php echo $row['VAR Yes']?>">Yes <span style="font-size:10px;color:red;"><?php echo $row['VAR Yes']?></span>
        <input type="radio" style="margin:5px" name = "Winner" value="044<?php echo $row['VAR No']?>">No <span style="font-size:10px;color:red;"><?php echo $row['VAR No']?></span>
      </div>
      
    </div>
        <center><br><input type="submit" value="DONE" style="width:100%;height:40px;background:linear-gradient(to right,Black,#DAA520);color:white;"></center>
    </form>

  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</body>
</html>
<?php endif;?>

<?php if($sel_cont->num_rows > 0){
  header("location:index.php");
}?>