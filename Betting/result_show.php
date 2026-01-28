<?php 
$name = $_GET["name"];
$usr = $_POST["Username"];

$con = new mysqli("localhost","root","","betting");
$sel = $con->query("SELECT * FROM confirm WHERE us_id ='$usr'");
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
<body>
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

<form method="post" action="result_show.php?name=<?php echo $name?>">
  <input type="text" name="Username" style="width:67%;margin-left:1%" autofocus>
  <input type="submit" value="Check"  style="float:right;width:30%;margin-right:1%;color:white;background:#505050;">
</form><br>

<?php $co = 1;
$er = 0;
$res = array();
$cof = array();

while($row=$sel->fetch_array()):?>
  <?php $HT = $row['Home Team'];
  $AT = $row['Away Team'];
  $GT = $row['Game Time'];
  $LG = $row['League'];
  $CD = $row['Code'];

  $sel_rs = $con->query("SELECT * FROM result_chk WHERE `Date`='$GT' AND `League`='$LG' AND `Home Team`='$HT' AND `Away Team`='$AT'");
  if($sel_rs->num_rows > 0){
      $row_rs = $sel_rs->fetch_array();
      $co = $co*$row_rs[$CD];
      array_push($res,$row['Described']);
      array_push($cof,$row_rs[$CD]);
  }else{
      $er = 1;
      array_push($res,$row['Described']);
      array_push($cof,"No Result");
  }
  ?>

<?php endwhile;?>

<?php if($co == 0 && $sel->num_rows > 0):?>
  <div style="box-shadow: 4px 4px 4px 4px gray;background:linear-gradient(to right,black,red);color:Red">
    <center><h3 style="padding:3px;background:White;">User: <?php echo $usr?></h3></center>
    <br><center>
    <?php $cot = 0;
      while($cot < count($res)):?>
          <h5 style="border:0.5px solid white;padding:3px;color:white;background:
          <?php if($cof[$cot] == '1'){
              echo "Green";
          }elseif($cof[$cot] == '0'){
              echo "Red";
          }elseif($cof[$cot] == 'No Result'){
              echo "Blue";
          }?>">
        
        <?php echo $res[$cot]?></h5><br>
          <?php $cot++;?>
       
    <?php endwhile;?>
    <h2 style="background:White;">Lost The Bet</h2></center>
  </div>
<?php endif;?>

<?php if($co == 1 && $er == 0 && $sel->num_rows > 0):?>
  <div style="box-shadow: 4px 4px 4px 4px gray;background:linear-gradient(to right,black,green);color:Green">
    <center><h3 style="padding:3px;background:White;">User: <?php echo $usr?></h3></center>
    <br><center>
    <?php $cot = 0;
      while($cot < count($res)):?>
          <h5 style="border:0.5px solid white;padding:3px;color:white;background:
          <?php if($cof[$cot] == '1'){
              echo "Green";
          }elseif($cof[$cot] == '0'){
              echo "Red";
          }elseif($cof[$cot] == 'No Result'){
              echo "Blue";
          }?>">
        
        <?php echo $res[$cot]?></h5><br>
          <?php $cot++;?>
       
    <?php endwhile;?>
    <h2 style="background:White;">Won The Bet</h2></center>
  </div>
<?php endif;?>

<?php if($co == 1 && $er == 1 && $sel->num_rows > 0):?>
<div style="box-shadow: 4px 4px 4px 4px gray;background:linear-gradient(to right,black,blue);color:Blue"> 
    <center><h3 style="padding:3px;background:White;">User: <?php echo $usr?></h3></center>
    <br><center>
    <?php $cot = 0;
      while($cot < count($res)):?>
          <h5 style="border:0.5px solid white;padding:3px;color:white;background:
          <?php if($cof[$cot] == '1'){
              echo "Green";
          }elseif($cof[$cot] == '0'){
              echo "Red";
          }elseif($cof[$cot] == 'No Result'){
              echo "Blue";
          }?>">
        
        <?php echo $res[$cot]?></h5><br>
          <?php $cot++;?>
       
    <?php endwhile;?>
    <h3 style="background:White;">No Full Result</h3></center>
  </div>
<?php endif;?>

<?php if($sel->num_rows == 0):?>
  <center><h3>User: <?php echo $usr?> Not Found</h3></center>
<?php endif;?>

<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>
