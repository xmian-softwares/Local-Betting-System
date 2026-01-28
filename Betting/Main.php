<?php 
$name = $_GET["name"];
$cata = $_GET['cata'];
$con = new mysqli("localhost","root","","betting");
$con->query("INSERT INTO user (Id,Odd,Described) VALUES('$name',1,'List Of Games and Bets')");

$sel = $con->query("SELECT * FROM bet WHERE League='$cata' ORDER BY `Date` ASC");
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
          <li><a href="chooser.php?name=<?php echo $name?>" style="border:0.5px solid white;color:white;color:white;background:linear-gradient(to right,black,#DAA520,black);width:100%;font-size:24px;"><center>Home</center></a></li><br>
            <li><a href="results.php?name=<?php echo $name?>" style="border:0.5px solid white;color:white;background:linear-gradient(to right,black,#DAA520,black);width:100%;font-size:24px;padding-bottom:20px;padding-top:20px"><center>Results</center></a></li><br>
            <li><a href="chooser.php?name=<?php echo $name?>" style="border:0.5px solid white;color:white;color:white;background:linear-gradient(to right,black,#DAA520,black);width:100%;font-size:24px;"><center>Leagues</center></a></li><br>
            <li style="color:white;background:black;width:100%;border:0.5px solid white;color:white;">
              <img src="main_emblem.png" height=40px style="padding-left:5px">
              <span style="float:right;padding-right:5px;padding-top:10px">Programmed By X-M triple A</span> 
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php $selper = $con->query("SELECT * FROM permanent WHERE `User`='$name'");
$rowper = $selper->fetch_array();
if($selper->num_rows > 0):?>
<center><h5 style="border:1px solid gray;box-shadow:2px 2px 2px 2px gray;background:black;color:white;padding-top:1%;padding-bottom:1%;padding-right:3%;padding-left:3%;">
Permanent Account : <?php echo $rowper['User'];?><br><br><span style="color:yellow;">Saving : $<?php echo $rowper['Amount'];?> Birr</span><br></h5></center>
<?php endif;?>

<h5 style="background:#DAA520;color:white;padding-top:1%;padding-bottom:1%;padding-right:3%;padding-left:3%">
<span style="float:right">Maximum Win: $25,000</span>Minimum Amount: $20</h5>
  <center><form method="post" action="update_amm.php?name=<?php echo $name?>&cata=<?php echo $cata?>">
          <input type="Number" name="amount" style="width:60%;margin:1%;padding:1px;" 
          max='<?php if($selper->num_rows > 0)
          {echo $rowper['Amount'];}
          else{echo '25000';}?>'min=20 placeholder="Enter Your Money" required>
          <input type="submit" value="Enter Money" style="width:35%;background:#DAA520;color:white;">
    </form></center>
  <center><div style="width:90%"><?php $sel1 = $con->query("SELECT * FROM user WHERE Id='$name'");
    while($row1 = $sel1->fetch_array()):?>
     <?php if($row1['Amount'] != 1):?>
       <ul class="nav navbar-nav">
        <li class="dropdown"><a style="background:linear-gradient(to right, #DAA520,black);" class="dropdown-toggle" data-toggle="dropdown" href="#">
        
        <?php $odd = 1;
        $sel_odd = $con->query("SELECT * FROM confirm WHERE us_id='$name'");
        while($row_odd = $sel_odd->fetch_array()){
          $odd = $odd*$row_odd['Odd'];}?>
        
        <h3 style="font-weight:bold;padding:5px;background:white;font-size:18px;margin-left:5px;color:<?php if($odd*$row1['Amount']*0.90 >= 25000){
          echo "Red";
        }else{
          echo "Green";
        }?>"><?php echo "Total Win: ".($odd*$row1['Amount']*0.90." Birr");?></h3>
        <?php if($odd*$row1['Amount']*0.90 >= 25000):?>
        <p style="background:white;color:red">(Unavailable Win)</p>
        <?php endif;?>
        </a>
         <ol class="dropdown-menu">
         <center><h4 style="background:linear-gradient(to left,black,#DAA520);color:white;padding:5px">Games You Bet On : <?php echo $sel_odd->num_rows?></h4></center>
          <?php $sel_info = $con->query("SELECT * FROM confirm WHERE us_id='$name'");
          while($row_info = $sel_info->fetch_array()):?>
           <div style="border:1px solid black"><li style="margin-left:5%"> 
           <form method="post" action="del_bet.php?name=<?php echo $name?>&Id=<?php echo $row_info['bet_id']?>&cata=<?php echo $cata?>">
             <input type="submit" value="x" style="padding-left:3%;padding-right:3%;border:none;float:right;background:Red;color:white;">
           </form>
           
           <p><?php echo $row_info['Described']?></p></li>
           
           <li style="margin-left:5%;color:Red;">
           <p>Odd: <?php echo $row_info['Odd']?></p></li></div><br>
          <?php endwhile;?>
          <center>
          <?php if($sel_info->num_rows >= 3 && $odd*$row1['Amount']*0.90 < 25000):?>
            <form method="post" action="final_ass.php?name=<?php echo $name?>&odd=<?php echo $odd?>">
              <input id="bet" type="submit" value="BET" style="width:100%;background:linear-gradient(to right,#DAA520,black);color:White;height:40px;font-size:24px;">
            </form>
          <?php endif;?>

          <?php if($sel_info->num_rows < 3){
             echo "<center><p style='background:Green;color:white;'>Add More Bets To Finish Up</p>
             <p style='font-size:24px;background:Green;color:white;'>Minimum Bets: 3 Games</p></center>";
             
          }?>

          <?php if($odd*$row1['Amount']*0.90 >= 25000){
            echo "<p style='background:Red;color:white;'>Delete Some Bets Or Change Your Betting Amount</p>
            <p style='font-size:24px;background:Red;color:white;'>Maximum Win: $25,000</p>";
          }?>
          
          </center>
        </center>
        <center><h5 style="background:linear-gradient(to bottom,#DAA520,black);color:White;padding:5px">Current Betting Money Amount: <?php echo $row1['Amount']?> Birr<br><span style="color:Yellow;">Total Odd: 
        <?php $odd = 1;
        $sel_odd = $con->query("SELECT * FROM confirm WHERE us_id='$name'");
        while($row_odd = $sel_odd->fetch_array()){
          $odd = $odd*$row_odd['Odd'];}
          echo $odd; ?></span></h5></center>
        
         
         </ol>
        </li>
       </ul>
      <?php endif;?>

      <?php if($row1['Amount'] == 1):?>
      <div style="width:100%"><?php $sel1 = $con->query("SELECT * FROM user WHERE Id='$name'");
    while($row1 = $sel1->fetch_array()):?>
       <ul class="nav navbar-nav">
        <li class="dropdown"><a style="background:linear-gradient(to right, #DAA520,black);" class="dropdown-toggle" data-toggle="dropdown" href="#">
        
        <?php $odd = 1;
        $sel_odd = $con->query("SELECT * FROM confirm WHERE us_id='$name'");
        while($row_odd = $sel_odd->fetch_array()){
          $odd = $odd*$row_odd['Odd'];}?>
        
        <h3 style="font-weight:bold;padding:5px;background:white;font-size:18px;margin-left:5px;color:red">(Money Not Entered)</h3></a>
         <ol class="dropdown-menu">
         <center><h4 style="background:linear-gradient(to right, #DAA520,black);color:white;padding:5px">Games You Bet On : <?php echo $sel_odd->num_rows?></h4></center>
          <?php $sel_info = $con->query("SELECT * FROM confirm WHERE us_id='$name'");
          while($row_info = $sel_info->fetch_array()):?>
           <div style="border:1px solid black"><li style="margin-left:5%"> 
           <form method="post" action="del_bet.php?name=<?php echo $name?>&Id=<?php echo $row_info['bet_id']?>&cata=<?php echo $cata?>">
             <input type="submit" value="x" style="padding-left:3%;padding-right:3%;border:none;float:right;background:Red;color:white;">
           </form>
           <p><?php echo $row_info['Described']?></p></li>
           
           <li style="margin-left:5%;color:Red;">
           <p>Odd: <?php echo $row_info['Odd']?></p></li></div><br>
          <?php endwhile;?>
          <?php endwhile;?>
          <center><h5 style="background:linear-gradient(to bottom,#DAA520,black);color:White;padding:5px">Enter Money Amount You Will Bet: <br><span style="color:Yellow;">Total Odd: <?php $odd = 1;
           $sel_odd = $con->query("SELECT * FROM confirm WHERE us_id='$name'");
           while($row_odd = $sel_odd->fetch_array()){
          $odd = $odd*$row_odd['Odd'];}
          echo $odd?></span></h5></center>
      <?php endif;?>
  <?php endwhile;?></div></center>
  
 
  
  <center><a href="chooser.php?name=<?php echo $name?>">
     <h2 style="color:white;background:linear-gradient(to right, black,black);width:100%;padding-top:5px;padding-bottom:5px;">
      <span> <?php echo $cata?></span>
     </h2>
    </a></center>

  <?php while($row=$sel->fetch_array()):?>
   
  <a <?php if($row['Hidden'] == 1){
      echo "hidden";
  }?> href="Indv.php?Id=<?php echo $row['Id']?>&name=<?php echo $name?>&cata=<?php echo $cata?>">
  <?php
  $Id = $row['Id']; 
  $sel2 = $con->query("SELECT * FROM confirm WHERE us_id='$name' AND bet_id='$Id'");
  $sel3 = $con->query("SELECT * FROM confirm WHERE us_id='$name'");?>
  <div style="box-shadow:2px 2px 2px 2px black; color:white; 
    background:<?php $colr = $row['Id'];
    $sel_col = $con->query("SELECT * FROM confirm WHERE us_id='$name' AND bet_id='$colr'");
    if ($sel_col->num_rows > 0){
      echo "Black";
    }else{
      echo "linear-gradient(to right,#DAA520,black)";
      }?>;">
      <center>
      <h3 style="margin-bottom:2px; padding-top:10%"><?php echo $row['Home']?> vs <?php echo $row['Away']?><br></h3>
      </center>
      <center><h5 style="background:<?php $colr = $row['Id'];
    $sel_col = $con->query("SELECT * FROM confirm WHERE us_id='$name' AND bet_id='$colr'");
    if ($sel_col->num_rows > 0){
      echo "#DAA520";
    }
    else{
      echo "Black";
    }?>;">At <?php echo $row['Date']?><h5><br></center>
      
    </div>
  </a>
  <div <?php if($row['Hidden'] == 1){
      echo "hidden";
  }?>><div style="background:<?php if ($sel_col->num_rows > 0){
      echo "#DAA520";
    }
    else{
      echo "#DAA520";
    }?>;">
  <a style="background:
  <?php if ($sel_col->num_rows > 0){
      echo "Red";
    }
    else{
      echo "Green";
    }?>;
  color:white;float:left;font-size:20px;padding-right:5px;padding-left:5px;margin-right:3px;" href="Indv.php?Id=<?php echo $row['Id']?>&name=<?php echo $name?>&cata=<?php echo $cata?>">+</a>

<a style="background:
  <?php if ($sel_col->num_rows > 0){
      echo "Red";
    }
    else{
      echo "Green";
    }?>;
  color:white;float:right;font-size:20px;padding-right:5px;padding-left:5px;margin-left:3px;" href="Indv.php?Id=<?php echo $row['Id']?>&name=<?php echo $name?>&cata=<?php echo $cata?>">+</a>
  
  <form action="mult.php?name=<?php echo $name?>&Id=<?php echo $row['Id']?>&cata=<?php echo $cata?>" method="post">
    <input type="text" style="margin:5px" name = "Winner" value="003<?php echo $row['Away Win']?>" hidden>
    <div style="font-weight: bold;border:1px solid black;float:right;background:
    <?php 
    if ($sel_col->num_rows > 0){
      echo "white";
    }
    else{
      echo "white";
    }?>;
    color:black;width:27%">
    <input type="submit" style="background:
    <?php 
    if ($sel_col->num_rows > 0){
      echo "white";
    }
    else{
      echo "white";
    }?>;
    color:black;width:60%;" value="2" 
    <?php if($sel2->num_rows == 0 && $sel3->num_rows > 19){
        echo "disabled";
    }?>>
    <span style="color:red;float:right;margin-top:5%;padding-right:5%"><?php echo $row['Away Win']?></span></div>
  </form>
  
  <form action="mult.php?name=<?php echo $name?>&Id=<?php echo $row['Id']?>&cata=<?php echo $cata?>" method="post">
    <input type="text" style="margin:5px" name = "Winner" value="001<?php echo $row['Home Win']?>" hidden>
    <div style="font-weight: bold;border:1px solid black;float:left;background:
    <?php 
    if ($sel_col->num_rows > 0){
      echo "white";
    }
    else{
      echo "white";
    }?>;
    color:white;width:27%">
    <input type="submit" value="1" style="float:left;background:
    <?php 
    if ($sel_col->num_rows > 0){
      echo "white";
    }
    else{
      echo "white";
    }?>;
    color:black;width:60%;" <?php if($sel2->num_rows == 0 && $sel3->num_rows > 19){
        echo "disabled";
    }?>>
    <span style="color:red;float:right;margin-top:5%;padding-right:5%"><?php echo $row['Home Win']?></span>
    </div>
  </form>
  
  <center><form action="mult.php?name=<?php echo $name?>&Id=<?php echo $row['Id']?>&cata=<?php echo $cata?>" method="post">
    <input type="text" style="margin:5px" name = "Winner" value="002<?php echo $row['Draw']?>" hidden>
    <div style="font-weight: bold;border:1px solid black;background:
    <?php 
    if ($sel_col->num_rows > 0){
      echo "white";
    }
    else{
      echo "white";
    }?>;
    color:white;width:27%">
    
    <input type="submit" style="background:
    <?php 
    if ($sel_col->num_rows > 0){
      echo "white";
    }
    else{
      echo "white";
    }?>;color:black;width:60%;" value="x" <?php if($sel2->num_rows == 0 && $sel3->num_rows > 19){
      echo "disabled";
  }?>>
    <span style="color:red;float:right;margin-top:5%;padding-right:5%"><?php echo $row['Draw']?></span>
    </div>
  </form></center>
  </div>
  
  
  </div>
  
  <?php endwhile;?><br><br>

  <script src="jquery.min.js">document.getElementById('bet').setAttribute('disabled',true)</script>
  <script src="bootstrap.min.js"></script>
</body>
</html>
<?php endif;?>

<?php if($sel_cont->num_rows > 0){
  header("location:index.php");
}?>