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
<form method="post" action="update_lst.php?Id=<?php echo $Id?>">
    <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
    <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">

    <center><div style="border:2px solid black;margin:5px;">
     <br>Home Team: <input type="text" name="HomeTeam" value="<?php echo $row['Home'];?>"><br><br>
     Away Team: <input type="text" name="AwayTeam" value="<?php echo $row['Away'];?>"><br><br>
    </div><br><br></center>
   
    <center><div style="border:2px solid black;margin:5px;">
     <br>1: <br><input type="text" name="HomeWin" value="<?php echo $row['Home Win'];?>"><br><br>
     x: <br><input type="text" name="Draw" value="<?php echo $row['Draw'];?>"><br><br>
     2: <br><input type="text" name="AwayWin" value="<?php echo $row['Away Win'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>GG: <br><input type="text" name="GG" value="<?php echo $row['GG'];?>"><br><br>
     No GG: <br><input type="text" name="NoGG" value="<?php echo $row['No GG'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>1 & GG: <br><input type="text" name="GGHome" value="<?php echo $row['GG Home'];?>"><br><br>
     x & GG: <br><input type="text" name="GGDraw" value="<?php echo $row['GG Draw'];?>"><br><br>
     2 & GG: <br><input type="text" name="GGAway" value="<?php echo $row['GG Away'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>1 & No GG: <br><input type="text" name="NoGGHome" value="<?php echo $row['No GG Home'];?>"><br><br>
     x & No GG: <br><input type="text" name="NoGGDraw" value="<?php echo $row['No GG Draw'];?>"><br><br>
     2 & No GG: <br><input type="text" name="NoGGAway" value="<?php echo $row['No GG Away'];?>"><br><br>
    </div><br><br></center>
    
    <center><div style="border:2px solid black;margin:5px;">
    <br>First Half Over 0.5 <br><input type="text" name="FHOverA" style="margin-bottom:5px;" value="<?php echo $row['FH Over 0.5'];?>"><br><br>
     First Half Over 1.5 <br><input type="text" name="FHOverB" style="margin-bottom:5px;" value="<?php echo $row['FH Over 1.5'];?>"><br><br>
     First Half Over 2.5 <br><input type="text" name="FHOverC" style="margin-bottom:5px;" value="<?php echo $row['FH Over 2.5'];?>"><br><br>
     First Half Over 3.5 <br><input type="text" name="FHOverD" style="margin-bottom:5px;" value="<?php echo $row['FH Over 3.5'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
    <br>First Half Under 0.5 <br><input type="text" name="FHUnderA" style="margin-bottom:5px;" value="<?php echo $row['FH Under 0.5'];?>"><br><br>
     First Half Under 1.5 <br><input type="text" name="FHUnderB" style="margin-bottom:5px;" value="<?php echo $row['FH Under 1.5'];?>"><br><br>
     First Half Under 2.5 <br><input type="text" name="FHUnderC" style="margin-bottom:5px;" value="<?php echo $row['FH Under 2.5'];?>"><br><br>
     First Half Under 3.5 <br><input type="text" name="FHUnderD" style="margin-bottom:5px;" value="<?php echo $row['FH Under 3.5'];?>"><br><br>
     </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
    <br>Second Half Over 0.5 <br><input type="text" name="SHOverA" style="margin-bottom:5px;" value="<?php echo $row['SH Over 0.5'];?>"><br><br>
     Second Half Over 1.5 <br><input type="text" name="SHOverB" style="margin-bottom:5px;" value="<?php echo $row['SH Over 1.5'];?>"><br><br>
     Second Half Over 2.5 <br><input type="text" name="SHOverC" style="margin-bottom:5px;" value="<?php echo $row['SH Over 2.5'];?>"><br><br>
     Second Half Over 3.5 <br><input type="text" name="SHOverD" style="margin-bottom:5px;" value="<?php echo $row['SH Over 3.5'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>Second Half Under 0.5 <br><input type="text" name="SHUnderA" style="margin-bottom:5px;" value="<?php echo $row['SH Under 0.5'];?>"><br><br>
     Second Half Under 1.5 <br><input type="text" name="SHUnderB" style="margin-bottom:5px;" value="<?php echo $row['SH Under 1.5'];?>"><br><br>
     Second Half Under 2.5 <br><input type="text" name="SHUnderC" style="margin-bottom:5px;" value="<?php echo $row['SH Under 2.5'];?>"><br><br>
     Second Half Under 3.5 <br><input type="text" name="SHUnderD" style="margin-bottom:5px;" value="<?php echo $row['SH Under 3.5'];?>"><br><br>
    </div><br><br></center>

     <center><div style="border:2px solid black;margin:5px;">
     <br>First Half/Full Time '1/1': <br><input type="text"  name="oneone" value="<?php echo $row['1/1'];?>"><br><br>
     First Half/Full Time '1/x': <br><input type="text"  name="onex" value="<?php echo $row['1/x'];?>"><br><br>
     First Half/Full Time '1/2': <br><input type="text"  name="onetwo" value="<?php echo $row['1/2'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>First Half/Full Time 'x/1': <br><input type="text"  name="xone" value="<?php echo $row['x/1'];?>"><br><br>
     First Half/Full Time 'x/x': <br><input type="text"  name="xx" value="<?php echo $row['x/x'];?>"><br><br>
     First Half/Full Time 'x/2': <br><input type="text"  name="xtwo" value="<?php echo $row['x/2'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>First Half/Full Time '2/1' <br><input type="text"  name="twoone" value="<?php echo $row['2/1'];?>"><br><br>
     First Half/Full Time '2/x': <br><input type="text"  name="twox" value="<?php echo $row['2/x'];?>"><br><br>
     First Half/Full Time '2/2': <br><input type="text"  name="twotwo" value="<?php echo $row['2/2'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>Full Time Over 0.5 <br><input type="text" name="OverA" style="margin-bottom:5px;" value="<?php echo $row['Over 0.5'];?>"><br><br>
     Full Time Over 1.5 <br><input type="text" name="OverB" style="margin-bottom:5px;" value="<?php echo $row['Over 1.5'];?>"><br><br>
     Full Time Over 2.5 <br><input type="text" name="OverC" style="margin-bottom:5px;" value="<?php echo $row['Over 2.5'];?>"><br><br>
     Full Time Over 3.5 <br><input type="text" name="OverD" style="margin-bottom:5px;" value="<?php echo $row['Over 3.5'];?>"><br><br>
     Full Time Over 4.5 <br><input type="text" name="OverE" style="margin-bottom:5px;" value="<?php echo $row['Over 4.5'];?>"><br><br>
    </div><br><br></center>
    
    <center><div style="border:2px solid black;margin:5px;">
     <br>Full Time Under 0.5 <br><input type="text" name="UnderA" style="margin-bottom:5px;" value="<?php echo $row['Under 0.5'];?>"><br><br>
     Full Time Under 1.5 <br><input type="text" name="UnderB" style="margin-bottom:5px;" value="<?php echo $row['Under 1.5'];?>"><br><br>
     Full Time Under 2.5 <br><input type="text" name="UnderC"style="margin-bottom:5px;" value="<?php echo $row['Under 2.5'];?>"><br><br>
     Full Time Under 3.5 <br><input type="text" name="UnderD" style="margin-bottom:5px;" value="<?php echo $row['Under 3.5'];?>"><br><br>
     Full Time Under 4.5 <br><input type="text" name="UnderE" style="margin-bottom:5px;" value="<?php echo $row['Under 4.5'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>1 & Over 1.5 <br><input type="text"  name="HomeWinOverA" style="margin-bottom:5px;" value="<?php echo $row['Home Win Over 1.5'];?>"><br><br>
     1 & Over 2.5 <br><input type="text"  name="HomeWinOverB" style="margin-bottom:5px;" value="<?php echo $row['Home Win Over 2.5'];?>"><br><br>
     1 & Over 3.5 <br><input type="text"  name="HomeWinOverC" style="margin-bottom:5px;" value="<?php echo $row['Home Win Over 3.5'];?>"><br><br>
     1 & Over 4.5 <br><input type="text"  name="HomeWinOverD" style="margin-bottom:5px;" value="<?php echo $row['Home Win Over 4.5'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>1 & Under 1.5 <br><input type="text"  name="HomeWinUnderA" style="margin-bottom:5px;" value="<?php echo $row['Home Win Under 1.5'];?>"><br><br>
     1 & Under 2.5 <br><input type="text"  name="HomeWinUnderB" style="margin-bottom:5px;" value="<?php echo $row['Home Win Under 2.5'];?>"><br><br>
     1 & Under 3.5 <br><input type="text"  name="HomeWinUnderC" style="margin-bottom:5px;" value="<?php echo $row['Home Win Under 3.5'];?>"><br><br>
     1 & Under 4.5 <br><input type="text"  name="HomeWinUnderD" style="margin-bottom:5px;" value="<?php echo $row['Home Win Under 4.5'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>x & Over 1.5 <br><input type="text"  name="DrawOverA" style="margin-bottom:5px;" value="<?php echo $row['Draw Over 1.5'];?>"><br><br>
     x & Over 2.5 <br><input type="text"  name="DrawOverB" style="margin-bottom:5px;" value="<?php echo $row['Draw Over 2.5'];?>"><br><br>
     x & Over 3.5 <br><input type="text"  name="DrawOverC" style="margin-bottom:5px;" value="<?php echo $row['Draw Over 3.5'];?>"><br><br>
     x & Over 4.5 <br><input type="text"  name="DrawOverD" style="margin-bottom:5px;" value="<?php echo $row['Draw Over 4.5'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>x & Under 1.5 <br><input type="text"  name="DrawUnderA" style="margin-bottom:5px;" value="<?php echo $row['Draw Under 1.5'];?>"><br><br>
     x & Under 2.5 <br><input type="text"  name="DrawUnderB" style="margin-bottom:5px;" value="<?php echo $row['Draw Under 2.5'];?>"><br><br>
     x & Under 3.5 <br><input type="text"  name="DrawUnderC" style="margin-bottom:5px;" value="<?php echo $row['Draw Under 3.5'];?>"> <br><br>
     x & Under 4.5 <br><input type="text"  name="DrawUnderD" style="margin-bottom:5px;" value="<?php echo $row['Draw Under 4.5'];?>"> <br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>2 & Over 1.5 <br><input type="text"  name="AwayWinOverA" style="margin-bottom:5px;" value="<?php echo $row['Away Win Over 1.5'];?>"><br><br>
     2 & Over 2.5 <br><input type="text"  name="AwayWinOverB" style="margin-bottom:5px;" value="<?php echo $row['Away Win Over 2.5'];?>"><br><br>
     2 & Over 3.5 <br><input type="text"  name="AwayWinOverC" style="margin-bottom:5px;" value="<?php echo $row['Away Win Over 3.5'];?>"><br><br>
     2 & Over 4.5 <br><input type="text"  name="AwayWinOverD" style="margin-bottom:5px;" value="<?php echo $row['Away Win Over 4.5'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>2 & Under 1.5 <br><input type="text"  name="AwayWinUnderA" style="margin-bottom:5px;" value="<?php echo $row['Away Win Under 1.5'];?>"><br><br>
     2 & Under 2.5 <br><input type="text"  name="AwayWinUnderB" style="margin-bottom:5px;" value="<?php echo $row['Away Win Under 1.5'];?>"><br><br>
     2 & Under 3.5 <br><input type="text"  name="AwayWinUnderC" style="margin-bottom:5px;" value="<?php echo $row['Away Win Under 2.5'];?>"><br><br>
     2 & Under 4.5 <br><input type="text"  name="AwayWinUnderD" style="margin-bottom:5px;" value="<?php echo $row['Away Win Under 3.5'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>First Half 1 <br><input type="text" name="FHHomeWin" style="margin-bottom:5px;" value="<?php echo $row['FH Home Win'];?>"><br><br>
     First Half x <br><input type="text" name="FHDraw" style="margin-bottom:5px;" value="<?php echo $row['FH Draw'];?>"><br><br>
     First Half 2 <br><input type="text" name="FHAwayWin" style="margin-bottom:5px;" value="<?php echo $row['FH Away Win'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>Even Goals: <br><input type="text" name="Even" value="<?php echo $row['Even'];?>"><br><br>
     Odd Goals: <br><input type="text" name="Odd" value="<?php echo $row['Odd'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>First Half : <br><input type="text" name="FHMostGoals" value="<?php echo $row['FH Most Goals'];?>"><br><br>
     Both Halfs Equal Goals: <br><input type="text"  name="Equal" value="<?php echo $row['Equal'];?>"><br><br>
     Second Half : <br><input type="text" name="SHMostGoals" value="<?php echo $row['SH Most Goals'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>0-0<br><input type="text" name="ZeroZero" style="margin-bottom:5px;" value="<?php echo $row['0-0'];?>"><br><br>
     0-1 <br><input type="text" name="ZeroOne" style="margin-bottom:5px;" value="<?php echo $row['0-1'];?>"><br><br>
     0-2 <br><input type="text" name="ZeroTwo" style="margin-bottom:5px;" value="<?php echo $row['0-2'];?>"><br><br>
     0-3 <br><input type="text" name="ZeroThree" style="margin-bottom:5px;" value="<?php echo $row['0-3'];?>"><br><br>
     0-4 <br><input type="text" name="ZeroFour" style="margin-bottom:5px;" value="<?php echo $row['0-4'];?>"><br><br>
     0-5 <br><input type="text" name="ZeroFive" style="margin-bottom:5px;" value="<?php echo $row['0-5'];?>"><br><br>
     </div><br><br></center>

     <center><div style="border:2px solid black;margin:5px;">
     <br>1-0<br><input type="text" name="OneZero" style="margin-bottom:5px;" value="<?php echo $row['1-0'];?>"><br><br>
     1-1 <br><input type="text" name="OneOne" style="margin-bottom:5px;" value="<?php echo $row['1-1'];?>"><br><br>
     1-2 <br><input type="text" name="OneTwo" style="margin-bottom:5px;" value="<?php echo $row['1-2'];?>"><br><br>
     1-3 <br><input type="text" name="OneThree" style="margin-bottom:5px;" value="<?php echo $row['1-3'];?>"><br><br>
     1-4 <br><input type="text" name="OneFour" style="margin-bottom:5px;" value="<?php echo $row['1-4'];?>"><br><br>
     1-5 <br><input type="text" name="OneFive" style="margin-bottom:5px;" value="<?php echo $row['1-5'];?>"><br><br>
     </div><br><br></center>

     <center><div style="border:2px solid black;margin:5px;">
     <br>2-0<br><input type="text" name="TwoZero" style="margin-bottom:5px;" value="<?php echo $row['2-0'];?>"><br><br>
     2-1 <br><input type="text" name="TwoOne" style="margin-bottom:5px;" value="<?php echo $row['2-1'];?>"><br><br>
     2-2 <br><input type="text" name="TwoTwo" style="margin-bottom:5px;" value="<?php echo $row['2-2'];?>"><br><br>
     2-3 <br><input type="text" name="TwoThree" style="margin-bottom:5px;" value="<?php echo $row['2-3'];?>"><br><br>
     2-4 <br><input type="text" name="TwoFour" style="margin-bottom:5px;" value="<?php echo $row['2-4'];?>"><br><br>
     2-5 <br><input type="text" name="TwoFive" style="margin-bottom:5px;" value="<?php echo $row['2-5'];?>"><br><br>
     </div><br><br></center>

     <center><div style="border:2px solid black;margin:5px;">
     <br>3-0<br><input type="text" name="ThreeZero" style="margin-bottom:5px;" value="<?php echo $row['3-0'];?>"><br><br>
     3-1 <br><input type="text" name="ThreeOne" style="margin-bottom:5px;" value="<?php echo $row['3-1'];?>"><br><br>
     3-2 <br><input type="text" name="ThreeTwo" style="margin-bottom:5px;" value="<?php echo $row['3-2'];?>"><br><br>
     3-3 <br><input type="text" name="ThreeThree" style="margin-bottom:5px;" value="<?php echo $row['3-3'];?>"><br><br>
     3-4 <br><input type="text" name="ThreeFour" style="margin-bottom:5px;" value="<?php echo $row['3-4'];?>"><br><br>
     3-5 <br><input type="text" name="ThreeFive" style="margin-bottom:5px;" value="<?php echo $row['3-5'];?>"><br><br>
     </div><br><br></center>

     <center><div style="border:2px solid black;margin:5px;">
     <br>4-0 <br><input type="text" name="FourZero" style="margin-bottom:5px;" value="<?php echo $row['4-0'];?>"><br><br>
     4-1 <br><input type="text" name="FourOne" style="margin-bottom:5px;" value="<?php echo $row['4-1'];?>"><br><br>
     4-2 <br><input type="text" name="FourTwo" style="margin-bottom:5px;" value="<?php echo $row['4-2'];?>"><br><br>
     4-3 <br><input type="text" name="FourThree" style="margin-bottom:5px;" value="<?php echo $row['4-3'];?>"><br><br>
     4-4 <br><input type="text" name="FourFour" style="margin-bottom:5px;" value="<?php echo $row['4-4'];?>"><br><br>
     4-5 <br><input type="text" name="FourFive" style="margin-bottom:5px;" value="<?php echo $row['4-5'];?>"><br><br>
     </div><br><br></center>

     <center><div style="border:2px solid black;margin:5px;">
     <br>5-0 <br><input type="text" name="FiveZero" style="margin-bottom:5px;" value="<?php echo $row['5-0'];?>"><br><br>
     5-1 <br><input type="text" name="FiveOne" style="margin-bottom:5px;" value="<?php echo $row['5-1'];?>"><br><br>
     5-2 <br><input type="text" name="FiveTwo" style="margin-bottom:5px;" value="<?php echo $row['5-2'];?>"><br><br>
     5-3 <br><input type="text" name="FiveThree" style="margin-bottom:5px;" value="<?php echo $row['5-3'];?>"><br><br>
     5-4 <br><input type="text" name="FiveFour" style="margin-bottom:5px;" value="<?php echo $row['5-4'];?>"><br><br>
     5-5 <br><input type="text" name="FiveFive" style="margin-bottom:5px;" value="<?php echo $row['5-5'];?>"><br><br>
     </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>1 Or x: <br><input type="text" name="HomeOrDraw" value="<?php echo $row['Home Win Or Draw'];?>"><br><br>
     2 Or x: <br><input type="text" name="AwayOrDraw" value="<?php echo $row['AwayWin Or Draw'];?>"><br><br>
     1 Or 2: <br><input type="text" name="OneOrTwo" value="<?php echo $row['1 Or 2'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>Handi Cap 1(0,1): <br><input type="text" name="HandCapeA" value="<?php echo $row['1 (0,1)'];?>"><br><br>
     Handi Cap 1(0,2): <br><input type="text" name="HandCapeB" value="<?php echo $row['1 (0,2)'];?>"><br><br>
     Handi Cap 1(0,3): <br><input type="text" name="HandCapeC" value="<?php echo $row['1 (0,3)'];?>"><br><br>
     Handi Cap 1(0,4): <br><input type="text" name="HandCapeD" value="<?php echo $row['1 (0,4)'];?>"><br><br>
     Handi Cap 2(1,0): <br><input type="text" name="HandCapeE" value="<?php echo $row['2 (1,0)'];?>"><br><br>
     Handi Cap 2(2,0): <br><input type="text" name="HandCapeF" value="<?php echo $row['2 (2,0)'];?>"><br><br>
     Handi Cap 2(3,0): <br><input type="text" name="HandCapeG" value="<?php echo $row['2 (3,0)'];?>"><br><br>
     Handi Cap 2(4,0): <br><input type="text" name="HandCapeH" value="<?php echo $row['2 (4,0)'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>First Team To Score Home: <br><input type="text" name="HomeFirst" value="<?php echo $row['Home Score First'];?>"><br><br>
     First Team To Score Away: <br><input type="text" name="AwayFirst" value="<?php echo $row['Away Score First'];?>"><br><br>
    </div><br><br></center>
    
    <center><div style="border:2px solid black;margin:5px;">
     <br>Draw No Bet Home: <br><input type="text" name="DNBH" value="<?php echo $row['DNB Home'];?>"><br><br>
     Draw No Bet Away: <br><input type="text" name="DNBA" value="<?php echo $row['DNB Away'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;" hidden>
     VAR Yes: <input type="text" name="VarYes" value="<?php echo $row['VAR Yes'];?>">
     VAR No: <input type="text" name="VarNo" value="<?php echo $row['VAR No'];?>">
    </div></center>

    <center><div style="border:2px solid black;margin:5px;">
     <br>Red Card Yes: <br><input type="text" name="RedYes" value="<?php echo $row['Red Card Yes'];?>"><br><br>
     Red Card No: <br><input type="text" name="RedNo" value="<?php echo $row['Red Card No'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
    <br>15 Min Goal Yes: <br><input type="text" name="FMGY" value="<?php echo $row['15 Goal Yes'];?>"><br><br>
     15 Min Goal No: <br><input type="text" name="FMGN" value="<?php echo $row['15 Goal No'];?>"><br><br>
    </div><br><br></center>

    <center><div style="border:2px solid black;margin:5px;">
    <br>Second Half Home Win <br><input type="text" name="SHHomeWin" style="margin-bottom:5px;" value="<?php echo $row['SH Home Win'];?>"><br><br>
     Second Half Draw <br><input type="text" name="SHDraw" style="margin-bottom:5px;" value="<?php echo $row['SH Draw'];?>"><br><br>
     Second Half Away Win <br><input type="text" name="SHAwayWin" style="margin-bottom:5px;" value="<?php echo $row['SH Away Win'];?>"><br><br>
    </div><br><br></center>

    <input type="submit" value="Update The Data" style="width:100%;height:40px;background:Green;color:white;">
  </form>
<?php endwhile;?>

<script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</body>
</html>
<?php endif;?>


      