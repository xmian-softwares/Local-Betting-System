<?php 
$name = $_GET["name"];
$con = new mysqli("localhost","root","","betting");

$con->query("INSERT INTO user (Id,Odd,Described) VALUES('$name',1,'List Of Games and Bets')");
$sel = $con->query("SELECT * FROM bet");
$sel_sh = $con->query("SELECT * FROM confirm WHERE us_id='$name'");
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
<body style="background:#f5e6bd">
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

<?php $selper = $con->query("SELECT * FROM permanent WHERE `User`='$name'");
$rowper = $selper->fetch_array();
if($selper->num_rows > 0):?>
<center><h5 style="border:1px solid gray;box-shadow:2px 2px 2px 2px gray;background:black;color:white;padding-top:1%;padding-bottom:1%;padding-right:3%;padding-left:3%;">
Permanent Account : <?php echo $rowper['User'];?><br><br><span style="color:yellow;">Saving : $<?php echo $rowper['Amount'];?> Birr</span><br></h5></center>
<?php endif;?>


<h5 style="background:#DAA520;color:white;padding-top:1%;padding-bottom:1%;padding-right:3%;padding-left:3%">
<span style="float:right">Maximum Win: $25,000</span>Minimum Amount: $20</h5>
  <center><form method="post" action="update_amm_t.php?name=<?php echo $name?>">
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
        <li class="dropdown"><a style="border:5px solid white;background:linear-gradient(to right, #DAA520,black);" class="dropdown-toggle" data-toggle="dropdown" href="#">
        
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
           <form method="post" action="del_bet_t.php?name=<?php echo $name?>&Id=<?php echo $row_info['bet_id']?>">
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
        <li class="dropdown"><a style="border:5px solid white;background:linear-gradient(to right, #DAA520,black);" class="dropdown-toggle" data-toggle="dropdown" href="#">
        
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
           <form method="post" action="del_bet_t.php?name=<?php echo $name?>&Id=<?php echo $row_info['bet_id']?>">
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
  
<?php $name=$_GET['name'];?>
      <div style="background:linear-gradient(to top,Black,#DAA520,black);margin-bottom:10%;box-shadow:4px 4px 4px 4px gray;"><br>
      <a style="width:50%;" href="Main.php?name=<?php echo $name?>&cata=Champions League">
        <img src="1.jpg" style="border:3px solid white;width:47%;height:150px;margin-left:2%;margin-bottom:5%;">
      </a>
      
      <a style="float:right;width:47%;margin-bottom:5%;margin-right:2%" href="Main.php?name=<?php echo $name?>&cata=European League">
       <img src="Europe.jpg" style="border:3px solid white;width:100%;float:right;height:150px;">
      </a><br>
      </div>
    
    <div style="background:linear-gradient(to top,Black,black);margin-bottom:10%;box-shadow:4px 4px 4px 4px gray"><br>
    
    <a style="" href="Main.php?name=<?php echo $name?>&cata=Premier League">
        <img src="PR.png" style="border:3px solid white;width:47%;height:170px;margin-left:2%">
      </a>

      <a href="Main.php?name=<?php echo $name?>&cata=La Liga">
        <img src="LaLiga.jpg" style="border:3px solid white;width:47%;float:right;height:170px;margin-right:2%">
      </a><br><br>

     <a href="Main.php?name=<?php echo $name?>&cata=Bundes Liga">
        <img src="Bundes.png" style="border:3px solid white;width:97%;height:200px;margin-left:1%">
      </a><br><br>
    </div>
    
    <div style="background:linear-gradient(to top,Black,black);margin-bottom:10%;box-shadow:4px 4px 4px 4px gray"><br>

    <div style="float:right;width:47%;margin-right:2%">
    <a href="Main.php?name=<?php echo $name?>&cata=Seria A">
      <img src="1663632356596.png" style="border:3px solid white;width:100%;height:140px">
    </a><br><br>

    <a href="Main.php?name=<?php echo $name?>&cata=ERE Diviese">
     <img src="1663632877485.png" style="border:3px solid white;width:100%;height:140px">
    </a></div>
    
    <a href="Main.php?name=<?php echo $name?>&cata=France League 1">
      <img src="400026500412_209036.jpg" style="border:3px solid white;width:47%;height:300px;margin-left:2%">
    </a><br><br>
    </div>
    
    <div style="background:#F5F5F5;margin-bottom:10%;box-shadow:10px 10px 10px 10px gray">
    <center><a href="Main.php?name=<?php echo $name?>&cata=Others">
      <img src="ball.ico" style="float:left;height:58px;margin:2%">
      <img src="ball.ico" style="float:right;height:58px;margin:2%">
      <h1 style="font-weight:bold;color:#660066;background-image:url('16633299332742.png');width:100%;padding-top:17px;padding-bottom:15px;">Others</h1>
    </a></center>
    </div>

  <div style="background:#F5F5F5;box-shadow:4px 4px 4px 4px gray" hidden>
  <center><h3 style="background:linear-gradient(to right,blue,green);color:white">ኣድራሻና/Our Location</h3></center>
     <h4 class="glyphicon glyphicon-envelope"> 16 ቀበሌ ሮማናት ክለብ</h4>
     <h4 class="glyphicon glyphicon-envelope"> 16 Kebelle/Romanat Club</h4>
  </div>


    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>
</html>
<?php endif;?>

<?php if($sel_cont->num_rows > 0){
  header("location:index.php");
}?>