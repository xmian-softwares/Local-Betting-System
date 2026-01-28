<?php
$Id =$_GET['Id'];
$con = new mysqli("localhost","root","","betting");
$sel = $con->query("SELECT * FROM bet WHERE Id=$Id");

$user = $_POST['admin'];
$pwd = $_POST['pwd'];

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
<?php while($row = $sel->fetch_array()):?>
  <form method="post" action="update_gm.php?Id=<?php echo $Id;?>">
    <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
    <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
    <center><div style="border:2px solid black;margin:5px;">
       <br>Time Of Play:<br><input type="date" name="Date">
       <input type="time" name="Time"><br><br>
       League: <select name="League">
              <option value="Champions League" <?php if($row['League'] == "Champions League"){
                  echo 'selected';
              }?>>Champions League</option>
              <option value="European League" <?php if($row['League'] == "European League"){
                  echo 'selected';
              }?>>European League</option>
              <option value="Premier League"<?php if($row['League'] == "Premier League"){
                  echo 'selected';
              }?>>Premier League</option>
              <option value="La Liga"<?php if($row['League'] == "La Liga"){
                  echo 'selected';
              }?>>La Liga</option>
              <option value="Bundes Liga"<?php if($row['League'] == "Bundes Liga"){
                  echo 'selected';
              }?>>Bundes Liga</option>
              <option value="Seria A"<?php if($row['League'] == "Seria A"){
                  echo 'selected';
              }?>>Seria A</option>
              <option value="France League 1"<?php if($row['League'] == "France League 1"){
                  echo 'selected';
              }?>>France League 1</option>
              <option value="ERE Diviese"<?php if($row['League'] == "ERE Diviese"){
                  echo 'selected';
              }?>>ERE Diviese</option>
              <option value="Others"<?php if($row['League'] == "Others"){
                  echo 'selected';
              }?>>Others</option>
            </select><br><br>
    </div><br><br></center>  
    
    <center><div style="border:2px solid black;margin:5px;">
     <br>Home Team: <input type="text" required name="HomeTeam" value="<?php echo $row['Home']?>"><br><br>
     Away Team: <input type="text" required name="AwayTeam" value="<?php echo $row['Away']?>"><br><br>
    </div><br><br></center>

    <input type="submit" value='Update Game' style="width:100%;background:Green;color:white;height:50px">
</form>

<?php endwhile;?>

<script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</body>
</html>
<?php endif;?>