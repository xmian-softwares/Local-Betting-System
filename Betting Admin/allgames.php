<?php 
$con = new mysqli("localhost","root","","betting");

$sel = $con->query("SELECT * FROM bet_all ORDER BY `Date` DESC");

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
<?php while($row = $sel->fetch_array()):?>
<center>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <ul class="nav navbar-nav">
             <li class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#">
               <div>
                <center><h5 style="background:Green;color:white;padding-bottom:5px;padding-top:5px;"><?php echo $row['League']?></h5>
                <h3 style="color:White;"><?php echo $row['Home']?> vs <?php echo $row['Away']?><br></h3>
                </center>
                <center>
                <h5 style="background:Yellow;color:Black;">At <?php echo $row['Date']?></h5><br></center>
               </div>
             <ul class="dropdown-menu">
               <li>
                 <a href="#">
                   <div>
                     <span style="float:right;margin-right:5px;color:#ffffb3;">Away Wins - <span style="color:#ffb3ff"><?php echo $row['Away Win']?></span></span>
                     <span style="color:#ffffb3;">Home Wins - <span style="color:#ffb3ff"><?php echo $row['Home Win']?></span></span><br>
                     <center><span style="color:#ffffb3;">Draw - <span style="color:#ffb3ff"><?php echo $row['Draw']?></span></span><center><br><br>

                     <span style="float:right;margin-right:5px;color:white;">GG - <span style="color:#ffb3ff"><?php echo $row['GG']?></span></span>
                     <span style="float:left;color:white;">No GG - <span style="color:#ffb3ff"><?php echo $row['No GG']?></span></span><br><br>
                     
                     <span style="float:left;margin-right:5px;color:white;">GG Home - <span style="color:#ffb3ff"><?php echo $row['GG Home']?></span></span>
                     <span style="float:right;color:white;margin-right:5px;">GG Draw - <span style="color:#ffb3ff"><?php echo $row['GG Draw']?></span></span><br>
                     <span style="float:right;margin-right:5px;color:white;">GG Away - <span style="color:#ffb3ff"><?php echo $row['GG Away']?></span></span><br><br>
                     
                     <span style="float:right;margin-right:5px;color:white;">15 Min Goal Yes - <span style="color:#ffb3ff"><?php echo $row['15 Goal Yes']?></span></span>
                     <span style="float:left;color:white;">15 Min Goal No - <span style="color:#ffb3ff"><?php echo $row['15 Goal No']?></span></span><br><br>
                     
                     <span style="float:right;color:white;margin-right:5px;">First Half <span style="color:cyan;">Over 0.5</span> - <span style="color:#ffb3ff"><?php echo $row['FH Over 0.5']?></span></span>
                     <span style="float:left;color:white;">First Half <span style="color:#80ff80;">Under 0.5</span> - <span style="color:#ffb3ff"><?php echo $row['FH Under 0.5']?></span></span>
                     
                     <span style="float:right;color:white;margin-right:5px;">First Half <span style="color:cyan;">Over 1.5</span> - <span style="color:#ffb3ff"><?php echo $row['FH Over 1.5']?></span></span>
                     <span style="float:left;color:white;">First Half <span style="color:#80ff80;">Under 1.5</span> - <span style="color:#ffb3ff"><?php echo $row['FH Under 1.5']?></span></span><br>
                     
                     <span style="float:right;color:white;margin-right:5px;">First Half <span style="color:cyan;">Over 2.5</span> - <span style="color:#ffb3ff"><?php echo $row['FH Over 2.5']?></span></span>
                     <span style="float:left;color:white;">First Half <span style="color:#80ff80;">Under 2.5</span> - <span style="color:#ffb3ff"><?php echo $row['FH Under 2.5']?></span></span><br><br><br>

                     <span style="float:left;color:white;">Full Game <span style="color:cyan;">Over 0.5</span> - <span style="color:#ffb3ff"><?php echo $row['Over 0.5']?></span></span>
                     <span style="float:right;color:white;margin-right:5px;">Full Game <span style="color:#80ff80;">Under 0.5</span> - <span style="color:#ffb3ff"><?php echo $row['Under 0.5']?></span></span><br>

                     <span style="float:left;color:white;">Full Game <span style="color:cyan;">Over 1.5</span> - <span style="color:#ffb3ff"><?php echo $row['Over 1.5']?></span></span>
                     <span style="float:right;color:white;margin-right:5px;">Full Game <span style="color:#80ff80;">Under 1.5</span> - <span style="color:#ffb3ff"><?php echo $row['Under 1.5']?></span></span><br>

                     <span style="float:left;color:white;">Full Game <span style="color:cyan;">Over 2.5</span> - <span style="color:#ffb3ff"><?php echo $row['Over 2.5']?></span></span>
                     <span style="float:right;color:white;margin-right:5px;">Full Game <span style="color:#80ff80;">Under 2.5</span> - <span style="color:#ffb3ff"><?php echo $row['Under 2.5']?></span></span><br>

                     <span style="float:left;color:white;">Full Game <span style="color:cyan;">Over 3.5</span> - <span style="color:#ffb3ff"><?php echo $row['Over 3.5']?></span></span>
                     <span style="float:right;color:white;margin-right:5px;">Full Game <span style="color:#80ff80;">Under 3.5</span> - <span style="color:#ffb3ff"><?php echo $row['Under 3.5']?></span></span><br>
                     
                     <span style="float:left;color:white;">Full Game <span style="color:cyan;">Over 4.5</span> - <span style="color:#ffb3ff"><?php echo $row['Over 4.5']?></span></span>
                     <span style="float:right;color:white;margin-right:5px;">Full Game <span style="color:#80ff80;">Under 4.5</span> - <span style="color:#ffb3ff"><?php echo $row['Under 4.5']?></span></span><br><br>

                     <span style="float:left;color:white;">Home Win <span style="color:cyan;">Over 1.5</span> - <span style="color:#ffb3ff"><?php echo $row['Home Win Over 1.5']?></span></span>
                     <span style="float:right;color:white;margin-right:5px;">Away Win <span style="color:#80ff80;">Over 1.5</span> - <span style="color:#ffb3ff"><?php echo $row['Away Win Over 1.5']?></span></span><br>

                     <span style="float:left;color:white;">Home Win <span style="color:cyan;">Over 2.5</span> - <span style="color:#ffb3ff"><?php echo $row['Home Win Over 2.5']?></span></span>
                     <span style="float:right;color:white;margin-right:5px;">Away Win <span style="color:#80ff80;">Over 2.5</span> - <span style="color:#ffb3ff"><?php echo $row['Away Win Over 2.5']?></span></span><br>

                     <span style="float:left;color:white;">Home Win <span style="color:cyan;">Over 3.5</span> - <span style="color:#ffb3ff"><?php echo $row['Home Win Over 3.5']?></span></span>
                     <span style="float:right;color:white;margin-right:5px;">Away Win <span style="color:#80ff80;">Over 3.5</span> - <span style="color:#ffb3ff"><?php echo $row['Away Win Over 3.5']?></span></span><br>

                     <span style="float:left;color:white;">Home Win <span style="color:cyan;">Over 4.5</span> - <span style="color:#ffb3ff"><?php echo $row['Home Win Over 4.5']?></span></span>
                     <span style="float:right;color:white;margin-right:5px;">Away Win <span style="color:#80ff80;">Over 4.5</span> - <span style="color:#ffb3ff"><?php echo $row['Away Win Over 4.5']?></span></span><br><br>
                     
                     <span style="float:left;color:white;">First Half Home - <span style="color:#ffb3ff"><?php echo $row['FH Home Win']?></span></span>
                     <span style="float:right;color:white;margin-right:5px;">Second Half Home - <span style="color:#ffb3ff"><?php echo $row['SH Home Win']?></span></span><br><br>
                     
                     <span style="float:left;margin-right:5px;color:white;">First Half Draw - <span style="color:#ffb3ff"><?php echo $row['SH Home Win']?></span></span>
                     <span style="float:right;color:white;margin-right:5px;">Second Half Draw - <span style="color:#ffb3ff"><?php echo $row['SH Draw']?></span></span>

                     <span style="float:left;margin-right:5px;color:white;">First Half Away - <span style="color:#ffb3ff"><?php echo $row['FH Home Win']?></span></span>
                     <span style="float:right;color:white;margin-right:5px;">Second Half Away - <span style="color:#ffb3ff"><?php echo $row['SH Away Win']?></span></span>

                     <br><br><br><span style="float:right;margin-right:5px;color:yellow;">Odd - <span style="color:#ffb3ff"><?php echo $row['Odd']?></span></span>
                     <span style="float:left;color:yellow;">Even - <span style="color:#ffb3ff"><?php echo $row['Even']?></span></span><br><br>

                     <span style="float:right;background:#ffb3ff;color:black;margin-right:5px;width:40px"><?php echo $row['FH Most Goals']?></span>
                     <span style="float:left;background:white;color:black;width:200px">First Half Most Goals</span><br>

                     <span style="float:right;background:#ffb3ff;color:black;margin-right:5px;width:40px"><?php echo $row['SH Most Goals']?></span>
                     <span style="float:left;background:white;color:black;width:200px">Second Half Most Goals</span><br><br>

                     <span style="float:right;background:#ffb3ff;color:black;margin-right:5px;width:40px"><?php echo $row['Home Win Or Draw']?></span>
                     <span style="float:left;background:white;color:black;width:200px">Home Win Or Draw </span><br>

                     <span style="float:right;background:#ffb3ff;color:black;margin-right:5px;width:40px"><?php echo $row['AwayWin Or Draw']?></span>
                     <span style="float:left;background:white;color:black;width:200px">Away Win Or Draw </span><br><br><br>
                     
                     <span style="float:right;margin-right:5px;"><span style="background:Red;color:white;padding:2px">Red Card Yes</span> - <span style="color:White"><?php echo $row['Red Card Yes']?></span></span>
                     <span style="float:left;"><span style="background:Red;color:white;padding:2px">Red Card No</span> - <span style="color:White"><?php echo $row['Red Card No']?></span></span><br><br>
                     
                     
                     
                     

                   </div>
                 </a>
               </li>
               <li></li>
             </ul>
           </li>
          </ul>
        </div>
      </div>
    </nav>
<?php endwhile;?>

<script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</body>
</html>
<?php endif;?>