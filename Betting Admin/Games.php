<?php
$con = new mysqli("localhost","root","","betting");
$sel = $con->query("SELECT * FROM bet ORDER BY `Date` ASC");

$user = $_POST['admin'];
$pwd = $_POST['pwd'];

$con = new mysqli("localhost","root","","betting");
$sel_s = $con->query("SELECT * FROM admins WHERE User = '$user' AND `Password` = '$pwd'");
$sel_ss = $con->query("SELECT * FROM sub_admins WHERE User = '$user' AND `Password` = '$pwd'");

if($sel_s->num_rows > 0 || $sel_ss->num_rows > 0):
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EXPECT Betting Admin</title>
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
                   <input type="submit" value="Game Registery" style="color:white;font-size:16px;background:red;width:100%;">
                 </form>
              </li><br>
              <form method = 'post' action="payment.php" style="color:white;font-size:16px;background:red;width:100%;">
                   <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
                   <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
                   <input type="submit" value="User Managment" style="color:white;font-size:16px;background:red;width:100%;">
                 </form>
              </li><br>
              <form method = 'post' action="Games.php" style="color:white;font-size:16px;background:red;width:100%;">
                   <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
                   <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
                   <input type="submit" value="Games Data" style="color:white;font-size:16px;background:red;width:100%;">
                 </form>
              </li>
              </li>
               <li><a href="#"></a></li>
             </ul>
             <center>
              <form method="post" action="index.php">
               <input type="submit" value="Logout" style="background: linear-gradient(to left,Black,#DAA520);color:white;width:100%;font-size:20px">
              </form></center> 
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <center><form method="post" action="allgames.php">
        <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
        <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
        <input type="submit" value="All Games" style="background:Orange;color:white;width:100%;height:50px;margin-bottom:2%;">
      </form></center>
<?php while($row = $sel->fetch_array()):?>
<center>
   <div style="box-shadow:2px 2px 2px 2px black; color:
   <?php if($row['Hidden'] == 0){
          echo "black";
       }else{
          echo "White";
       }?>; 
    background:
    <?php if($row['Hidden'] == 0){
          echo "White";
       }else{
          echo "Black";
       }?>;">
      <center>
      <h3 style="margin-bottom:2px; padding-top:10%"><?php echo $row['Home']?> vs <?php echo $row['Away']?><br></h3>
      </center>
      <center><h5 style="background:Yellow;color:Black;">At <?php echo $row['Date']?></h5><br></center>
      
      <form method="post" action="update.php?Id=<?php echo $row['Id'];?>">
       <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
       <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
        <input type="submit" value="Update Odds" style="float:right;background:Blue;color:white;width:49%">
      </form>

      <form method="post" action="update_d.php?Id=<?php echo $row['Id'];?>">
       <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
       <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
       <input type="submit" value="Update Details" style="float:left;background:Green;color:white;width:49%">
      </form><br><br>
      
      <form method="post" action="result.php?Id=<?php echo $row['Id'];?>">
       <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
       <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
       <input type="submit" value="Post Result" style="background:linear-gradient(to left,#DAA520,#DAA520);color:white;width:100%;margin-bottom:2%;height:50px;">
      </form>
      
      <form method="post" action="delete.php?Id=<?php echo $row['Id'];?>">
       <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
       <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
       <input type="submit" value="Delete Game" style="background:Red;color:white;width:100%;margin-bottom:2%;height:30px;">
      </form>

      <form method="post" action="hide.php?Id=<?php echo $row['Id'];?>">
       <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
       <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
       <input type="submit" value="<?php if($row['Hidden'] == 0){
          echo "Hide Game";
       }else{
          echo "Unhide Game";
       }?>" 
       style="background:
       <?php if($row['Hidden'] == 0){
          echo "black";
       }else{
          echo "#009933";
       }?>;
       color:white;width:100%;margin-bottom:2%;height:30px;">
      </form>
      
    </div><br>
  </center>
<?php endwhile;?>

<script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</body>
</html>
<?php endif;?>


      