<?php?>

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
               <li><a href="#"></a></li>
             </ul>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div style="box-shadow:4px 4px 4px 4px gray;margin-top:20%">
<form method="post" action="main.php">
  <br><span>Administrator Identifier</span><br><input type="text" name="admin" required  placeholder="Enter Admin Name" style="width:95%"><br><br>
  <span>Administrator Password</span><br><input type="password" name="pwd" required placeholder="Enter Admin Password" style="width:95%"><br><br>
  <input type="submit" value="LogIn" style="width:100%;height:30px;background:Blue;color:white">
</form><br>
</div>

<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>