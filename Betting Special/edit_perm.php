<?php 
$usr = $_POST['usr'];
$user = $_POST['admin'];
$pwd = $_POST['pwd'];
$con = new mysqli("localhost","root","","betting");
$sel = $con->query("SELECT * FROM permanent WHERE `Id` = '$usr'");
$row = $sel->fetch_array();

$sel_s = $con->query("SELECT * FROM admins WHERE User = '$user' AND `Password` = '$pwd'");

if($sel_s->num_rows > 0):
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
                   <input type="submit" value="Winners And Losers" style="color:white;font-size:16px;background:red;width:100%;">
                 </form><br>

                 <form method = 'post' action="rmv.php" style="color:white;font-size:16px;background:red;width:100%;">
                   <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
                   <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
                   <input type="submit" value="Admin Data" style="color:white;font-size:16px;background:red;width:100%;">
                 </form><br>
                 
                 <form method = 'post' action="perm.php" style="color:white;font-size:16px;background:red;width:100%;">
                   <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
                   <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
                   <input type="submit" value="Permanent Account" style="color:white;font-size:16px;background:red;width:100%;">
                 </form>
              </li><br>
             </ul>
              <form method="post" action="index.php">
               <input type="submit" value="Logout" style="background: linear-gradient(to left,Black,#DAA520);color:white;width:100%;font-size:20px">
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div style="box-shadow:4px 4px 4px 4px gray"><center>
<form method='post' action="edit_perm_fin.php"><br>
  <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
  <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
 Permanent Account Id<br><input type="text" name="Id" value="<?php echo $row['Id']?>"><br><br>
 Amount <br><input type="Number" name="Amount"><br><br>
 <input type="submit" value="Update" style="color:blue;background:yellow;width:100%">
</form></center></div><br>
<?php endif?>