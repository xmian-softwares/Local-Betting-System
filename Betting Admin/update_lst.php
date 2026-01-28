<?php
$Id = $_GET['Id'];

$home = $_POST['HomeTeam'];
$away = $_POST['AwayTeam'];

$hw = $_POST['HomeWin'];
$draw = $_POST['Draw'];
$aw = $_POST['AwayWin'];
$ontw = $_POST['OneOrTwo'];

$gg = $_POST['GG'];
$ngg = $_POST['NoGG'];

$ggh = $_POST['GGHome'];
$ggd = $_POST['GGDraw'];
$gga = $_POST['GGAway'];

$nggh = $_POST['NoGGHome'];
$nggd = $_POST['NoGGDraw'];
$ngga = $_POST['NoGGAway'];

$vy = $_POST['VarYes'];
$vn = $_POST['VarNo'];

$rcy = $_POST['RedYes'];
$rcn = $_POST['RedNo'];

$FMGY = $_POST['FMGY'];
$FMGN = $_POST['FMGN'];

$fho1 = $_POST['FHOverA'];
$fho2 = $_POST['FHOverB'];
$fho3 = $_POST['FHOverC'];
$fho4 = $_POST['FHOverD'];

$fhu1 = $_POST['FHUnderA'];
$fhu2 = $_POST['FHUnderB'];
$fhu3 = $_POST['FHUnderC'];
$fhu4 = $_POST['FHUnderD'];

$sho1 = $_POST['SHOverA'];
$sho2 = $_POST['SHOverB'];
$sho3 = $_POST['SHOverC'];
$sho4 = $_POST['SHOverD'];

$shu1 = $_POST['SHUnderA'];
$shu2 = $_POST['SHUnderB'];
$shu3 = $_POST['SHUnderC'];
$shu4 = $_POST['SHUnderD'];

$fo1 = $_POST['OverA'];
$fo2 = $_POST['OverB'];
$fo3 = $_POST['OverC'];
$fo4 = $_POST['OverD'];
$fo5 = $_POST['OverE'];

$fu1 = $_POST['UnderA'];
$fu2 = $_POST['UnderB'];
$fu3 = $_POST['UnderC'];
$fu4 = $_POST['UnderD'];
$fu5 = $_POST['UnderE'];

$hw1 = $_POST['HomeWinOverA'];
$hw2 = $_POST['HomeWinOverB'];
$hw3 = $_POST['HomeWinOverC'];
$hw4 = $_POST['HomeWinOverD'];

$hw5 = $_POST['HomeWinUnderA'];
$hw6 = $_POST['HomeWinUnderB'];
$hw7 = $_POST['HomeWinUnderC'];
$hw8 = $_POST['HomeWinUnderD'];

$dw1 = $_POST['DrawOverA'];
$dw2 = $_POST['DrawOverB'];
$dw3 = $_POST['DrawOverC'];
$dw4 = $_POST['DrawOverD'];

$dw5 = $_POST['DrawUnderA'];
$dw6 = $_POST['DrawUnderB'];
$dw7 = $_POST['DrawUnderC'];
$dw8 = $_POST['DrawUnderD'];

$aw1 = $_POST['AwayWinOverA'];
$aw2 = $_POST['AwayWinOverB'];
$aw3 = $_POST['AwayWinOverC'];
$aw4 = $_POST['AwayWinOverD'];

$aw5 = $_POST['AwayWinUnderA'];
$aw6 = $_POST['AwayWinUnderB'];
$aw7 = $_POST['AwayWinUnderC'];
$aw8 = $_POST['AwayWinUnderD'];

$fhhw = $_POST['FHHomeWin'];
$fhd = $_POST['FHDraw'];
$fhaw = $_POST['FHAwayWin'];

$shhw = $_POST['SHHomeWin'];
$shd = $_POST['SHDraw'];
$shaw = $_POST['SHAwayWin'];

$even = $_POST['Even'];
$odd = $_POST['Odd'];

$hsf = $_POST['HomeFirst'];
$asf = $_POST['AwayFirst'];

$fhmg = $_POST['FHMostGoals'];
$shmg = $_POST['SHMostGoals'];

$hod = $_POST['HomeOrDraw'];
$aod = $_POST['AwayOrDraw'];

$hc1 = $_POST['HandCapeA'];
$hc2 = $_POST['HandCapeB'];
$hc3 = $_POST['HandCapeC'];
$hc4 = $_POST['HandCapeD'];
$hc5 = $_POST['HandCapeE'];
$hc6 = $_POST['HandCapeF'];
$hc7 = $_POST['HandCapeG'];
$hc8 = $_POST['HandCapeH'];

$goal1 = $_POST['ZeroZero'];
$goal2 = $_POST['ZeroOne'];
$goal3 = $_POST['ZeroTwo'];
$goal4 = $_POST['ZeroThree'];
$goal5 = $_POST['ZeroFour'];
$goal6 = $_POST['ZeroFive'];

$goal7 = $_POST['OneZero'];
$goal8 = $_POST['OneOne'];
$goal9 = $_POST['OneTwo'];
$goal10 = $_POST['OneThree'];
$goal11 = $_POST['OneFour'];
$goal12 = $_POST['OneFive'];

$goal13 = $_POST['TwoZero'];
$goal14 = $_POST['TwoOne'];
$goal15 = $_POST['TwoTwo'];
$goal16 = $_POST['TwoThree'];
$goal17 = $_POST['TwoFour'];
$goal18 = $_POST['TwoFive'];

$goal19 = $_POST['ThreeZero'];
$goal20 = $_POST['ThreeOne'];
$goal21 = $_POST['ThreeTwo'];
$goal22 = $_POST['ThreeThree'];
$goal23 = $_POST['ThreeFour'];
$goal24 = $_POST['ThreeFive'];

$goal25 = $_POST['FourZero'];
$goal26 = $_POST['FourOne'];
$goal27 = $_POST['FourTwo'];
$goal28 = $_POST['FourThree'];
$goal29 = $_POST['FourFour'];
$goal30 = $_POST['FourFive'];

$goal31 = $_POST['FiveZero'];
$goal32 = $_POST['FiveOne'];
$goal33 = $_POST['FiveTwo'];
$goal34 = $_POST['FiveThree'];
$goal35 = $_POST['FiveFour'];
$goal36 = $_POST['FiveFive'];

$dnb1 = $_POST['DNBH'];
$dnb2 = $_POST['DNBA'];

$equal = $_POST['Equal'];

$oo = $_POST['oneone'];
$ox = $_POST['onex'];
$ot = $_POST['onetwo'];

$xo = $_POST['xone'];
$xx = $_POST['xx'];
$xt = $_POST['xtwo'];

$to = $_POST['twoone'];
$tx = $_POST['twox'];
$tt = $_POST['twotwo'];

$con = new mysqli("localhost","root","","betting");
$con->query("UPDATE `bet` SET `Home`='$home', `Away`='$away',
`Home Win`='$hw', `Draw`='$draw', `Away Win`='$aw', 
`GG`='$gg', `No GG`='$ngg',
`FH Over 0.5`='$fho1', `FH Over 1.5`='$fho2', `FH Over 2.5`='$fho3',
`FH Under 0.5`='$fhu1', `FH Under 1.5`='$fhu2', `FH Under 2.5`='$fhu3',
`SH Over 0.5`='$sho1', `SH Over 1.5`='$sho2', `SH Over 2.5`='$sho3',
`SH Under 0.5`='$shu1', `SH Under 1.5`='$shu2', `SH Under 2.5`='$shu3', 
`Over 0.5`='$fo1', `Over 1.5`='$fo2', `Over 2.5`='$fo3', `Over 3.5`='$fo4', 
`Under 0.5`='$fu1', `Under 1.5`='$fu2', `Under 2.5`='$fu3', `Under 3.5`='$fu4', 
`Home Win Over 1.5`='$hw1', `Home Win Over 2.5`='$hw2', `Home Win Over 3.5`='$hw3', `Home Win Over 4.5`='$hw4',
`Home Win Under 1.5`='$hw5', `Home Win Under 2.5`='$hw6', `Home Win Under 3.5`='$hw7', `Home Win Under 4.5`='$hw8',
`Draw Over 1.5`='$dw1', `Draw Over 2.5`='$dw2', `Draw Over 3.5`='$dw3', `Draw Over 4.5`='$dw4',
`Draw Under 1.5`='$dw5', `Draw Under 2.5`='$dw6', `Draw Under 3.5`='$dw7', `Draw Under 4.5`='$dw8', 
`Away Win Over 1.5`='$aw1', `Away Win Over 2.5`='$aw2', `Away Win Over 3.5`='$aw3', `Away Win Over 4.5`='$aw4',
`Away Win Under 1.5`='$aw5', `Away Win Under 2.5`='$aw6', `Away Win Under 3.5`='$aw7', `Away Win Under 4.5`='$aw8', 
`FH Home Win`='$fhhw', `FH Draw`='$fhd', `FH Away Win`='$fhaw', 
`SH Home Win`='$shhw', `SH Draw`='$shd', `SH Away Win`='$shaw', 
`Even`='$even', `Odd`='$odd', 
`FH Most Goals`='$fhmg', `SH Most Goals`='$shmg', 
`Home Win Or Draw`='$hod', `AwayWin Or Draw`='$aod',
`GG Home`='$ggh',`GG Draw`='$ggd',`GG Away`='$gga',
`Red Card Yes`='$rcy',`Red Card No`='$rcn',
`15 Goal Yes`='$FMGY' ,`15 Goal No`='$FMGN',
`Over 4.5`='$fo5', `Under 4.5`='$fu5',
`FH Over 3.5`='$sho4', `FH Under 3.5`='$shu4',
`SH Over 3.5`='$sho4', `SH Under 3.5`='$shu4',
`Home Score First`='$hsf', `Away Score First`='$asf',`Equal`='$equal',
`1 Or 2`='$ontw',
`1 (0,1)`='$hc1',`1 (0,2)`='$hc2',`1 (0,3)`='$hc3',`1 (0,4)`='$hc4',
`2 (1,0)`='$hc5',`2 (2,0)`='$hc6',`2 (3,0)`='$hc7',`2 (4,0)`='$hc8',
`DNB Home`='$dnb1',`DNB Away`='$dnb2',
`No GG Home`='$nggh',`No GG Draw`='$nggd',`No GG Away`='$ngga',
`1/1` = '$oo',`1/x` = '$ox',`1/2` = '$ot',
`x/1` = '$xo',`x/x` = '$xx',`x/2` = '$xt',
`2/1` = '$to',`2/x` = '$tx',`2/2` = '$tt',
`0-0` = '$goal1', `0-1` = '$goal2', `0-2` = '$goal3', `0-3` = '$goal4', `0-4` = '$goal5', `0-5` = '$goal6',
`1-0` = '$goal7', `1-1` = '$goal8', `1-2` = '$goal9', `1-3` = '$goal10', `1-4` = '$goal11', `1-5` = '$goal12',
`2-0` = '$goal13', `2-1` = '$goal14', `2-2` = '$goal15', `2-3` = '$goal16', `2-4` = '$goal17', `2-5` = '$goal18',
`3-0` = '$goal19', `3-1` = '$goal20', `3-2` = '$goal21', `3-3` = '$goal22', `3-4` = '$goal23', `3-5` = '$goal24',
`4-0` = '$goal25', `4-1` = '$goal26', `4-2` = '$goal27', `4-3` = '$goal28', `4-4` = '$goal29', `4-5` = '$goal30',
`5-0` = '$goal31', `5-1` = '$goal32', `5-2` = '$goal33', `5-3` = '$goal34', `5-4` = '$goal35', `5-5` = '$goal36' WHERE Id = '$Id'");

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
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div style="margin-top:50%;box-shadow:1px 1px 1px 1px gray">
<center><h1 style="background:Green;color:White;">Done</h1>
<p>Game Odds Updated Succesefully</p></center>
<form method="post" action="Games.php">
      <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
      <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
      <input type="submit" value='Continue' style="width:100%;background:#990099;color:white;height:50px">
    </form><br></div>
</body>
</html>
<?php endif;?>