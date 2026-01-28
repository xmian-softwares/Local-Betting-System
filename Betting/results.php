<?php 
$name = $_GET["name"];
$con = new mysqli("localhost","root","","betting");
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
</form>

<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>