<?php
$con = new mysqli("localhost","root","","betting");
$Id = $_GET['Id'];

$user = $_POST['admin'];
$pwd = $_POST['pwd'];

$sel = $con->query("SELECT * FROM bet WHERE Id='$Id'");
$row = $sel->fetch_array();
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

    <center><form method="post" action="respst.php?Id=<?php echo $Id?>">
      <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
      <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
      <div style="border:1px solid black;padding-bottom:10px">
       Home Team<br><input type="text" name="ResHT" value="<?php echo $row['Home']?>"><br><br>
       Home Goals<br><input type="Number" name="ResHG"><br><br>
       First Half Home Goals<br><input type="Number" name="FHResHG"><br><br>
       Second Half Home Goals<br><input type="Number" name="SHResHG">
      </div><br><br>

      <div style="border:1px solid black;padding-bottom:10px">
       Away Team<br> <input type="text" name="ResAT" value="<?php echo $row['Away']?>"><br><br>
       Away Goals<br> <input type="Number" name="ResAG"><br><br>
       First Half Away Goals<br><input type="Number" name="FHResAG"><br><br>
       Second Half Away Goals<br><input type="Number" name="SHResAG">
      </div><br>
      </center>
      
      <div style="border:1px solid black;padding-bottom:10px"><br>
        <span style="float:left;padding-left:5px;">1: <select name="HomeWin">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">2: <select name="AwayWin">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><span>x: <select name="Draw">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center>
        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px">
      <br><span style="float:left;padding-left:5px;">GG: <select name="GG">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">No GG: <select name="NoGG">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        
      </div><br>

      
      <div style="border:1px solid black;padding-bottom:10px">
      <br><span style="float:left;padding-left:5px;">1 Or x: <select name="HomeOrDraw">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">2 Or x: <select name="AwayOrDraw">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><span>1 Or 2: <select name="OneOrTwo">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center>
        
      </div><br>
      

      <div style="border:1px solid black;padding-bottom:10px">
          <br><span style="float:left;padding-left:5px;">1 & GG: <select name="GGHome">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">x & GG: <select name="GGDraw">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        
        <br><br><span style="float:left;padding-left:5px;">2 & GG: <select name="GGAway">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px">
          <br><span style="float:left;padding-left:5px;">1 & No GG: <select name="NoGGHome">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">x & No GG: <select name="NoGGDraw">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        
        <br><br><span style="float:left;padding-left:5px;">2 & No GG: <select name="NoGGAway">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px">
      <br><span style="float:left;padding-left:5px;">FH/FT '1/1': <select name="oneone">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">FH/FT '1/x': <select name="onex">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        
        <br><br><span style="float:left;padding-left:5px;">FH/FT '1/2': <select name="onetwo">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>


        <br><br><br><span style="float:left;padding-left:5px;">FH/FT 'x/1': <select name="xone">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">FH/FT 'x/x': <select name="xx">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        
        <br><br><span style="float:left;padding-left:5px;">FH/FT 'x/2': <select name="xtwo">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>


        <br><br><br><span style="float:left;padding-left:5px;">FH/FT '2/1': <select name="twoone">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        
        <span style="float:right;padding-right:5px;">FH/FT '2/x': <select name="twox">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        
        <br><br><span style="float:left;padding-left:5px;">FH/FT '2/2': <select name="twotwo">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>

        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px">
      <br><span style="float:left;padding-left:5px;">Over 0.5: <select name="OverA">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">Over 1.5: <select name="OverB">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        <br><span style="float:left;padding-left:5px;">Over 2.5: <select name="OverC">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">Over 3.5: <select name="OverD">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        <br><span style="float:left;padding-left:5px;">Over 4.5: <select name="OverE">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px">
      <br><span style="float:left;padding-left:5px;">Under 0.5: <select name="UnderA">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">Under 1.5: <select name="UnderB">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        <br><span style="float:left;padding-left:5px;">Under 2.5: <select name="UnderC">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">Under 3.5: <select name="UnderD">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        <br><span style="float:left;padding-left:5px;">Under 4.5: <select name="UnderE">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        </div><br>

        <div style="border:1px solid black;padding-bottom:10px">
      <br><span style="float:left;padding-left:5px;">FH Over 0.5: <select name="FHOverA">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">FH Over 1.5: <select name="FHOverB">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        <br><span style="float:left;padding-left:5px;">FH Over 2.5: <select name="FHOverC">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">FH Over 3.5: <select name="FHOverD">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px">
      <br><span style="float:left;padding-left:5px;">FH Under 0.5: <select name="FHUnderA">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">FH Under 1.5: <select name="FHUnderB">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        <br><span style="float:left;padding-left:5px;">FH Under 2.5: <select name="FHUnderC">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">FH Under 3.5: <select name="FHUnderD">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        </div><br>

        <div style="border:1px solid black;padding-bottom:10px">
      <br><span style="float:left;padding-left:5px;">SH Over 0.5: <select name="SHOverA">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">SH Over 1.5: <select name="SHOverB">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        <br><span style="float:left;padding-left:5px;">SH Over 2.5: <select name="SHOverC">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">SH Over 3.5: <select name="SHOverD">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px">
      <br><span style="float:left;padding-left:5px;">SH Under 0.5: <select name="SHUnderA">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">SH Under 1.5: <select name="SHUnderB">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        <br><br><span style="float:left;padding-left:5px;">SH Under 2.5: <select name="SHUnderC">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">SH Under 3.5: <select name="SHUnderD">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        </div><br>

        <div style="border:1px solid black;padding-bottom:10px">
          <br><span style="float:left;padding-left:5px;">1 & Over 1.5: <select name="HomeWinOverA">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">1 & Over 2.5: <select name="HomeWinOverB">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        <br><br><span style="float:left;padding-left:5px;">1 & Over 3.5: <select name="HomeWinOverC">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">1 & Over 4.5: <select name="HomeWinOverD">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px">
      <br><span style="float:left;padding-left:5px;">1 & Under 1.5: <select name="HomeWinUnderA">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">1 & Under 2.5: <select name="HomeWinUnderB">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        <br><br><span style="float:left;padding-left:5px;">1 & Under 3.5: <select name="HomeWinUnderC">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">1 & Under 4.5: <select name="HomeWinUnderD">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        </div><br>

        <div style="border:1px solid black;padding-bottom:10px">
          <br><span style="float:left;padding-left:5px;">x & Over 1.5: <select name="DrawOverA">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">x & Over 2.5: <select name="DrawOverB">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        <br><br><span style="float:left;padding-left:5px;">x & Over 3.5: <select name="DrawOverC">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">x & Over 4.5: <select name="DrawOverD">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px">
      <br><span style="float:left;padding-left:5px;">x & Under 1.5: <select name="DrawUnderA">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">x & Under 2.5: <select name="DrawUnderB">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        <br><br><span style="float:left;padding-left:5px;">x & Under 3.5: <select name="DrawUnderC">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">x & Under 4.5: <select name="DrawUnderD">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        </div><br>

        <div style="border:1px solid black;padding-bottom:10px">
          <br><span style="float:left;padding-left:5px;">2 & Over 1.5: <select name="AwayWinOverA">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">2 & Over 2.5: <select name="AwayWinOverB">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        <br><br><span style="float:left;padding-left:5px;">2 & Over 3.5: <select name="AwayWinOverC">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">2 & Over 4.5: <select name="AwayWinOverD">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px">
      <br><span style="float:left;padding-left:5px;">2 & Under 1.5: <select name="AwayWinUnderA">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">2 & Under 2.5: <select name="AwayWinUnderB">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        <br><br><span style="float:left;padding-left:5px;">2 & Under 3.5: <select name="AwayWinUnderC">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">2 & Under 4.5: <select name="AwayWinUnderD">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        </div><br>

        <div style="border:1px solid black;padding-bottom:10px">
          <br><span style="float:left;padding-left:5px;">FH 1: <select name="FHHomeWin">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">FH 2: <select name="FHAwayWin">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><span>FH x: <select name="FHDraw">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center>
        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px">
      <br><span style="float:left;padding-left:5px;">Ever: <select name="Even">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">Odd: <select name="Odd">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px">
          <br><span style="float:left;padding-left:5px;">First Half: <select name="FHMostGoals">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">Second Half: <select name="SHMostGoals">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><br><br><span>Equal: <select name="Equal">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br></center>
        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px">
      <br><br><span style="float:left;padding-left:5px;">0-0: <select name="ZeroZero">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">0-2: <select name="ZeroTwo">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        
        <center><span>0-1: <select name="ZeroOne">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center>

        <br><span style="float:left;padding-left:5px;">0-3: <select name="ZeroThree">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        
        <span style="float:right;padding-right:5px;">0-5: <select name="ZeroFive">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><span>0-4: <select name="ZeroFour">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center>

        <br><span style="float:left;padding-left:5px;">1-0: <select name="OneZero">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">1-2: <select name="OneTwo">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><span>1-1: <select name="OneOne">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center>

        <br><span style="float:left;padding-left:5px;">1-3: <select name="OneThree">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        
        <span style="float:right;padding-right:5px;">1-5: <select name="OneFive">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><span>1-4: <select name="OneFour">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center>

        <br><span style="float:left;padding-left:5px;">2-0: <select name="TwoZero">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">2-2: <select name="TwoTwo">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><span>2-1: <select name="TwoOne">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center>

        <br><span style="float:left;padding-left:5px;">2-3: <select name="TwoThree">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        
        <span style="float:right;padding-right:5px;">2-5: <select name="TwoFive">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><span>2-4: <select name="TwoFour">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center>

        <br><span style="float:left;padding-left:5px;">3-0: <select name="ThreeZero">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">3-2: <select name="ThreeTwo">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><span>3-1: <select name="ThreeOne">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center>

        <br><span style="float:left;padding-left:5px;">3-3: <select name="ThreeThree">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        
        <span style="float:right;padding-right:5px;">3-5: <select name="ThreeFive">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><span>3-4: <select name="ThreeFour">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center>

        <br><span style="float:left;padding-left:5px;">4-0: <select name="FourZero">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">4-2: <select name="FourTwo">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><span>4-1: <select name="FourOne">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center>

        <br><span style="float:left;padding-left:5px;">4-3: <select name="FourThree">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        
        <span style="float:right;padding-right:5px;">4-5: <select name="FourFive">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><span>4-4: <select name="FourFour">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center>

        <br><span style="float:left;padding-left:5px;">5-0: <select name="FiveZero">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">5-2: <select name="FiveTwo">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><span>5-1: <select name="FiveOne">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center>

        <br><span style="float:left;padding-left:5px;">5-3: <select name="FiveThree">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        
        <span style="float:right;padding-right:5px;">5-5: <select name="FiveFive">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><span >5-4: <select name="FiveFour">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center><br>
        </div><br>

        <div style="border:1px solid black;padding-bottom:10px">
        <br><span style="float:left;padding-left:5px;">Handi Cap 1(0,1): <select name="HandCapeA">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">Handi Cap 1(0,2): <select name="HandCapeB">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>

        <br><span style="float:left;padding-left:5px;">Handi Cap 1(0,3): <select name="HandCapeC">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">Handi Cap 1(0,4): <select name="HandCapeD">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>

        <br><br><span style="float:left;padding-left:5px;">Handi Cap 2(1,0): <select name="HandCapeE">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">Handi Cap 2(2,0): <select name="HandCapeF">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>

        <br><span style="float:left;padding-left:5px;">Handi Cap 2(3,0): <select name="HandCapeG">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">Handi Cap 2(4,0): <select name="HandCapeH">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        
      </div><br>
      <div style="border:1px solid black;padding-bottom:10px" hidden>
        <span style="float:left;padding-left:5px;">Var Yes: <select name="VarYes">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">Var No: <select name="VarNo">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>
        
      </div>
      
      <div style="border:1px solid black;padding-bottom:10px">
      <br><span style="float:left;padding-left:5px;">Red Card Yes: <select name="RedYes">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">Red Card No: <select name="RedNo">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px">
      <br><span style="float:left;padding-left:5px;">15 Min Goal Yes: <select name="FMGY">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">15 Min Goal No: <select name="FMGN">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br>
        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px"><br>
      <center><span style="">Draw No Bet Home: <select name="DNBH">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <br><br><span style="">Draw No Bet Away: <select name="DNBA">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br></center>
        
      </div><br>

      <div style="border:1px solid black;padding-bottom:10px">
          <br><span style="float:left;padding-left:5px;">SH 1: <select name="SHHomeWin">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <span style="float:right;padding-right:5px;">SH 2: <select name="SHAwayWin">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <center><span>SH x: <select name="SHDraw">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span></center><br>
        
      </div><br>
      
      <div style="border:1px solid black;padding-bottom:10px"><br>
        <center><span style="">First Team To Score Home: <select name="HomeFirst">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span>

        <br><br><span style="">First Team To Score Away: <select name="AwayFirst">
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select></span><br></center>
        
      </div><br>

        

      <br><input type="submit" value="Post Result" style="background:Green;width:100%;color:white;height:40px;">
    </form>

  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</body>
</html>