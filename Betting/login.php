<?php
$name = $_GET['name'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EXPECT Betting</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
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
    
    <div style="margin-top:10%;
    box-shadow:1px 1px 1px 1px gray;">
      <form method="post" action="dirc_login.php" style="margin-top:50px;"><br>
        <h5 style="padding-top:2%;margin:5%;color:blue;float:left;width:30%">User :</h5><input type="text" value="<?php echo $name?>" name="name" style="width:50%;margin:5%;color:Blue;float:right;" placeholder="Enter Your Username" required><br>
        <h5 style="padding-top:2%;margin:5%;color:blue;float:left;width:30%">Password :</h5><input type="password" name="password" style="width:50%;margin:5%;color:Blue;float:right;" placeholder="Enter Your Password" required><br><br>
        <input type="submit" value="Log In" style="height:50px;width:100%;background:Black;color:white;margin-top:20%;">
     </div>
  </center>
  </form>

  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</body>
</html>