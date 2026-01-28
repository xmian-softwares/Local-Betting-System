<?php
$home = $_POST['HomeTeam'];
$away = $_POST['AwayTeam'];

$league = $_POST['League'];
$time = $_POST['Date']." At ".$_POST['Time'];

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
$equal = $_POST['Equal'];

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
$con->query("INSERT INTO `bet` (`Home`, `Away`, `League`, `Date`,
`Home Win`, `Draw`, `Away Win`, `1 Or 2`,
`GG`, `No GG`,
`FH Over 0.5`, `FH Over 1.5`, `FH Over 2.5`, `FH Over 3.5`,
`FH Under 0.5`, `FH Under 1.5`, `FH Under 2.5`, `FH Under 3.5`,
`SH Over 0.5`, `SH Over 1.5`, `SH Over 2.5`, `SH Over 3.5`,
`SH Under 0.5`, `SH Under 1.5`, `SH Under 2.5`, `SH Under 3.5`,
`Over 0.5`, `Over 1.5`, `Over 2.5`, `Over 3.5`,  `Over 4.5`,
`Under 0.5`, `Under 1.5`, `Under 2.5`, `Under 3.5`, `Under 4.5`, 
`Home Win Over 1.5`, `Home Win Over 2.5`, `Home Win Over 3.5`, `Home Win Over 4.5`, 
`Home Win Under 1.5`, `Home Win Under 2.5`, `Home Win Under 3.5`, `Home Win Under 4.5`, 
`Draw Over 1.5`, `Draw Over 2.5`, `Draw Over 3.5`, `Draw Over 4.5`, 
`Draw Under 1.5`, `Draw Under 2.5`, `Draw Under 3.5`, `Draw Under 4.5`, 
`Away Win Over 1.5`, `Away Win Over 2.5`, `Away Win Over 3.5`, `Away Win Over 4.5`, 
`Away Win Under 1.5`, `Away Win Under 2.5`, `Away Win Under 3.5`, `Away Win Under 4.5`, 
`FH Home Win`, `FH Draw`, `FH Away Win`, 
`SH Home Win`, `SH Draw`, `SH Away Win`, 
`Even`, `Odd`, 
`FH Most Goals`, `SH Most Goals`,
`Home Win Or Draw`, `AwayWin Or Draw`,
`GG Home`,`GG Draw`,`GG Away`,
`Red Card Yes`,`Red Card No`,
`15 Goal Yes`,`15 Goal No`,
`Home Score First`,`Away Score First`,
`1 (0,1)`, `1 (0,2)`, `1 (0,3)`, `1 (0,4)`,
`2 (1,0)`, `2 (2,0)`, `2 (3,0)`, `2 (4,0)`, 
`DNB Home`, `DNB Away`,
`No GG Home`,`No GG Draw`,`No GG Away`,
`Equal`,
`1/1`,`1/x`,`1/2`,
`x/1`,`x/x`,`x/2`,
`2/1`,`2/x`,`2/2`,
`0-0`,`0-1`,`0-2`,`0-3`,`0-4`,`0-5`,
`1-0`,`1-1`,`1-2`,`1-3`,`1-4`,`1-5`,
`2-0`,`2-1`,`2-2`,`2-3`,`2-4`,`2-5`,
`3-0`,`3-1`,`3-2`,`3-3`,`3-4`,`3-5`,
`4-0`,`4-1`,`4-2`,`4-3`,`4-4`,`4-5`,
`5-0`,`5-1`,`5-2`,`5-3`,`5-4`,`5-5`) 
VALUES ('$home','$away','$league','$time',
$hw, $draw, $aw, $ontw,
$gg, $ngg,
$fho1, $fho2, $fho3, $fho4,
$fhu1, $fhu2, $fhu3, $fhu4,
$sho1, $sho2, $sho3, $sho4,
$shu1, $shu2, $shu3, $shu4,
$fo1, $fo2, $fo3, $fo4, $fo5,
$fu1, $fu2, $fu3, $fu4, $fu5,
$hw1, $hw2, $hw3, $hw4,
$hw5, $hw6, $hw7, $hw8,
$dw1, $dw2, $dw3, $dw4,
$dw5, $dw6, $dw7, $dw8,
$aw1, $aw2, $aw3, $aw4,
$aw5, $aw6, $aw7, $aw8,
$fhhw, $fhd, $fhaw,
$shhw, $shd, $shaw,
$even, $odd,
$fhmg, $shmg,
$hod, $aod,
$ggh, $ggd, $gga,
$rcy, $rcn,
$FMGY, $FMGN,
$hsf, $asf,
$hc1, $hc2, $hc3, $hc4, 
$hc5, $hc6, $hc7, $hc8,
$dnb1, $dnb2,
$nggh, $nggd, $ngga,
$equal,
$oo, $ox, $ot,
$xo, $xx, $xt,
$to, $tx, $tt,
$goal1, $goal2, $goal3, $goal4, $goal5, $goal6,
$goal7, $goal8, $goal9, $goal10, $goal11, $goal12,
$goal13, $goal14, $goal15, $goal16, $goal17, $goal18,
$goal19, $goal20, $goal21, $goal22, $goal23, $goal24,
$goal25, $goal26, $goal27, $goal28, $goal29, $goal30,
$goal31, $goal32, $goal33, $goal34, $goal35, $goal36)");

$con->query("INSERT INTO `bet_all` (`Home`, `Away`, `League`, `Date`,
`Home Win`, `Draw`, `Away Win`, `1 Or 2`,
`GG`, `No GG`,
`FH Over 0.5`, `FH Over 1.5`, `FH Over 2.5`, `FH Over 3.5`,
`FH Under 0.5`, `FH Under 1.5`, `FH Under 2.5`, `FH Under 3.5`,
`SH Over 0.5`, `SH Over 1.5`, `SH Over 2.5`, `SH Over 3.5`,
`SH Under 0.5`, `SH Under 1.5`, `SH Under 2.5`, `SH Under 3.5`,
`Over 0.5`, `Over 1.5`, `Over 2.5`, `Over 3.5`,  `Over 4.5`,
`Under 0.5`, `Under 1.5`, `Under 2.5`, `Under 3.5`, `Under 4.5`, 
`Home Win Over 1.5`, `Home Win Over 2.5`, `Home Win Over 3.5`, `Home Win Over 4.5`, 
`Home Win Under 1.5`, `Home Win Under 2.5`, `Home Win Under 3.5`, `Home Win Under 4.5`, 
`Draw Over 1.5`, `Draw Over 2.5`, `Draw Over 3.5`, `Draw Over 4.5`, 
`Draw Under 1.5`, `Draw Under 2.5`, `Draw Under 3.5`, `Draw Under 4.5`, 
`Away Win Over 1.5`, `Away Win Over 2.5`, `Away Win Over 3.5`, `Away Win Over 4.5`, 
`Away Win Under 1.5`, `Away Win Under 2.5`, `Away Win Under 3.5`, `Away Win Under 4.5`, 
`FH Home Win`, `FH Draw`, `FH Away Win`, 
`SH Home Win`, `SH Draw`, `SH Away Win`, 
`Even`, `Odd`, 
`FH Most Goals`, `SH Most Goals`,
`Home Win Or Draw`, `AwayWin Or Draw`,
`GG Home`,`GG Draw`,`GG Away`,
`Red Card Yes`,`Red Card No`,
`15 Goal Yes`,`15 Goal No`,
`Home Score First`,`Away Score First`,
`1 (0,1)`, `1 (0,2)`, `1 (0,3)`, `1 (0,4)`,
`2 (1,0)`, `2 (2,0)`, `2 (3,0)`, `2 (4,0)`, 
`DNB Home`, `DNB Away`,
`No GG Home`,`No GG Draw`,`No GG Away`,
`Equal`,
`1/1`,`1/x`,`1/2`,
`x/1`,`x/x`,`x/2`,
`2/1`,`2/x`,`2/2`,
`0-0`,`0-1`,`0-2`,`0-3`,`0-4`,`0-5`,
`1-0`,`1-1`,`1-2`,`1-3`,`1-4`,`1-5`,
`2-0`,`2-1`,`2-2`,`2-3`,`2-4`,`2-5`,
`3-0`,`3-1`,`3-2`,`3-3`,`3-4`,`3-5`,
`4-0`,`4-1`,`4-2`,`4-3`,`4-4`,`4-5`,
`5-0`,`5-1`,`5-2`,`5-3`,`5-4`,`5-5`) 
VALUES ('$home','$away','$league','$time',
$hw, $draw, $aw, $ontw,
$gg, $ngg,
$fho1, $fho2, $fho3, $fho4,
$fhu1, $fhu2, $fhu3, $fhu4,
$sho1, $sho2, $sho3, $sho4,
$shu1, $shu2, $shu3, $shu4,
$fo1, $fo2, $fo3, $fo4, $fo5,
$fu1, $fu2, $fu3, $fu4, $fu5,
$hw1, $hw2, $hw3, $hw4,
$hw5, $hw6, $hw7, $hw8,
$dw1, $dw2, $dw3, $dw4,
$dw5, $dw6, $dw7, $dw8,
$aw1, $aw2, $aw3, $aw4,
$aw5, $aw6, $aw7, $aw8,
$fhhw, $fhd, $fhaw,
$shhw, $shd, $shaw,
$even, $odd,
$fhmg, $shmg,
$hod, $aod,
$ggh, $ggd, $gga,
$rcy, $rcn,
$FMGY, $FMGN,
$hsf, $asf,
$hc1, $hc2, $hc3, $hc4, 
$hc5, $hc6, $hc7, $hc8,
$dnb1, $dnb2,
$nggh, $nggd, $ngga,
$equal,
$oo, $ox, $ot,
$xo, $xx, $xt,
$to, $tx, $tt,
$goal1, $goal2, $goal3, $goal4, $goal5, $goal6,
$goal7, $goal8, $goal9, $goal10, $goal11, $goal12,
$goal13, $goal14, $goal15, $goal16, $goal17, $goal18,
$goal19, $goal20, $goal21, $goal22, $goal23, $goal24,
$goal25, $goal26, $goal27, $goal28, $goal29, $goal30,
$goal31, $goal32, $goal33, $goal34, $goal35, $goal36)");

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
</head>
<body>
<div style="margin-top:50%;box-shadow:1px 1px 1px 1px gray">
<center><h1 style="background:Green;color:White;">Done</h1>
<p>Game Added Successfully</p></center>
<form method="post" action="main.php">
      <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
      <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
      <input type="submit" value='Continue' style="width:100%;background:#990099;color:white;height:50px">
    </form><br></div>
</body>
</html>
<?php endif;?>
