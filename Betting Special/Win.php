<?php
$user = $_POST['admin'];
$pwd = $_POST['pwd'];

$con = new mysqli("localhost","root","","betting");
$sel_s = $con->query("SELECT * FROM admins WHERE User = '$user' AND `Password` = '$pwd'");
$sel_main = $con->query("SELECT * FROM user");

if($sel_s->num_rows > 0):?>

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
          <form method = 'post' action="main.php" style="color:white;font-size:16px;background:red;width:100%;">
                   <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
                   <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
                   <input type="submit" value="Winners And Losers" style="color:white;font-size:16px;background:red;width:100%;">
                 </form><br>

                 <form method = 'post' action="rmv.php" style="color:white;font-size:16px;background:red;width:100%;">
                   <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
                   <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
                   <input type="submit" value="Admin Data" style="color:white;font-size:16px;background:red;width:100%;">
                 </form><br>
                 
                 <form method = 'post' action="perm.php" style="color:white;font-size:16px;background:red;width:100%;">
                   <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
                   <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
                   <input type="submit" value="Permanent Account" style="color:white;font-size:16px;background:red;width:100%;">
                 </form>
              </li><br>
             </ul>
              <form method="post" action="index.php">
               <input type="submit" value="Logout" style="background: linear-gradient(to left,Black,#DAA520);color:white;width:100%;font-size:20px">
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<form method="post" action="Lose.php">
<input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
<input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
<input type="submit" value="Losers" style="width:30%;float:right;color:white;background:Red">
</form>

<form method="post" action="main.php">
<input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
<input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
<input type="submit" value="All" style="width:30%;float:left;color:white;background:blue">
</form>

<center><form method="post" action="Win.php">
<input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
<input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
<input type="submit" value="Winners" style="width:30%;color:white;background:Green">
</form></center><br>

<center><form method="post" action="income.php">
<input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
<input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
<input type="submit" value="Income" style="width:100%;color:white;background:Black">
</form></center>

<?php while($row_main = $sel_main->fetch_array()):?>
<?php 
$usr = $row_main['Id'];
$sel = $con->query("SELECT * FROM confirm WHERE us_id ='$usr'");
$co = 1;
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
<?php endwhile;?>
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>
<?php endif;?>
