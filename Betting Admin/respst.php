<?php 
$con = new mysqli("localhost","root","","betting");
$Id = $_GET['Id'];

$user = $_POST['admin'];
$pwd = $_POST['pwd'];

$hmt = $_POST['ResHT'];
$hmg = $_POST['ResHG'];

$awt = $_POST['ResAT'];
$awg = $_POST['ResAG'];

$fhmgg = $_POST['FHResHG'];
$shmgg = $_POST['SHResHG'];

$fawg = $_POST['FHResAG'];
$sawg = $_POST['SHResAG'];

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

$vy = $_POST['VarYes'];
$vn = $_POST['VarNo'];

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

$sel = $con->query("SELECT * FROM bet WHERE Id='$Id'");
$row = $sel->fetch_array();

$date = $row['Date'];
$league = $row['League'];

$con->query("INSERT INTO result(`Date`, `League`, `Home Team`, `Away Team`, 
`Home Goal`, `Away Goal`,
`FH Home Goal`,`SH Home Goal`,
`FH Away Goal`,`SH Away Goal`) 
VALUES ('$date','$league','$hmt','$awt',
'$hmg','$awg',
'$fhmgg','$shmgg',
'$fawg','$sawg')");

$con->query("INSERT INTO result_chk(`Date`, `League`, `Home Team`, `Away Team`,
`001`,`002`,`003`,`004`,`005`,`006`,`007`,`008`,`009`,`010`,
`011`,`012`,`013`,`014`,`015`,`016`,`017`,`018`,`019`,`020`,
`021`,`022`,`023`,`024`,`025`,`026`,`027`,`028`,`029`,`030`,
`031`,`032`,`033`,`034`,`035`,`036`,`037`,`038`,`039`,`040`,
`041`,`042`,`043`,`044`,`045`,`046`,`047`,`048`,`049`,`050`,
`051`,`052`,`053`,`054`,`055`,`056`,`057`,`058`,`059`,`060`,
`061`,`062`,`063`,`064`,`065`,`066`,`067`,`068`,`069`,`070`,
`071`,`072`,`073`,`074`,`075`,`076`,`077`,`078`,`079`,`080`,
`081`,`082`,`083`,`084`,`085`,`086`,`087`,`088`,`089`,`090`,
`091`,`092`,`093`,`094`,`095`,`096`,`097`,`098`,`099`,`100`,
`101`,`102`,`103`,`104`,`105`,`106`,`107`,`108`,`109`,`110`,
`111`,`112`,`113`,`114`,`115`,`116`,`117`,`118`,`119`,`120`,
`121`,`122`,`123`,`124`,`125`,`126`,`127`,`128`,`129`,`130`,
`131`,`132`,`133`,`134`,`135`,`136`,`137`,`138`) 
VALUES ('$date','$league','$hmt','$awt',
'$hw', '$draw', '$aw', '$gg', '$ngg', '$fho1', '$fho2', '$fho3','$fhu1', '$fhu2', 
'$fhu3','$fo1', '$fo2', '$fo3', '$fo4','$fu1', '$fu2', '$fu3', '$fu4','$hw1', 
'$hw2', '$hw3', '$hw4','$aw1', '$aw2', '$aw3', '$aw4','$fhhw', '$fhd', '$fhaw',
'$shhw', '$shd', '$shaw','$even', '$odd','$fhmg', '$shmg','$hod', '$aod','$ggh', 
'$ggd', '$gga','$vy','$vn','$rcy', '$rcn','$FMGY', '$FMGN','$fo5','$fu5',
'$fho4','$fhu4','$ontw','$hsf', '$asf','$hc1', '$hc2', '$hc3', '$hc4', '$hc5', 
'$hc6', '$hc7', '$hc8','$dnb1', '$dnb2','$nggh', '$nggd', '$ngga','$sho1', '$sho2', 
'$sho3', '$sho4','$shu1', '$shu2', '$shu3', '$shu4','$equal','$oo', '$ox', '$ot',
'$xo', '$xx', '$xt','$to', '$tx', '$tt','$goal1', '$goal2', '$goal3', '$goal4', 
'$goal5', '$goal6','$goal7', '$goal8', '$goal9', '$goal10', '$goal11', '$goal12','$goal13', '$goal14', 
'$goal15', '$goal16', '$goal17', '$goal18','$goal19', '$goal20', '$goal21', '$goal22', '$goal23', '$goal24',
'$goal25', '$goal26', '$goal27', '$goal28', '$goal29', '$goal30','$goal31', '$goal32', '$goal33', '$goal34', 
'$goal35', '$goal36','$hw5', '$hw6', '$hw7', '$hw8','$aw5', '$aw6', '$aw7', '$aw8',
'$dw1', '$dw2', '$dw3', '$dw4','$dw5', '$dw6', '$dw7', '$dw8')");
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
<p>Game Result Posted Succesefully.</p></center>
<form method="post" action="Games.php">
      <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
      <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
      <input type="submit" value='Continue' style="width:100%;background:#990099;color:white;height:50px">
    </form><br></div>
</body>
</html>