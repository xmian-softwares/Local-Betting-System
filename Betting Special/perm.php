<?php
$user = $_POST['admin'];
$pwd = $_POST['pwd'];

$con = new mysqli("localhost","root","","betting");
$sel = $con->query("SELECT * FROM permanent");

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
<?php while($row = $sel->fetch_array()):?>
  <div style="border:1px solid black;background:#303030;color:white">
    <form method="post" action="delete_perm.php" style="float:right;margin-top:7px">
      <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
      <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
      <input type="text" name="usr" value="<?php echo $row['Id']?>" hidden>
      <input type="submit" value="Delete" style="width:50px;border:none;margin-right:5px;color:white;background:red;">
    </form>

    <h5 style="padding-left:5px">Permanent: <span style="color:yellow;padding:3px"><?php echo $row['User']?></span></h5>
    <form method="post" action="edit_perm.php" style="margin-top:7px">
      <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
      <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
      <input type="text" name="usr" value="<?php echo $row['Id']?>" hidden>
      <input type="submit" value="Change Amount" style="width:100%;border:none;margin-right:15px;color:white;background:blue">
    </form>
  </div><br> 
  
<?php endwhile?> 
</body>

<script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</html>
<?php endif;?>
