<?php 
$con = new mysqli("localhost","root","","betting");
$sel = $con->query("SELECT * FROM user");

$user = $_POST['admin'];
$pwd = $_POST['pwd'];

$con = new mysqli("localhost","root","","betting");
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
<body style="width:100%;overflow:scroll;background:White;">
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

<div style="box-shadow:4px 4px 4px 4px gray;border:1px solid black">
<form method = 'post' action="Duplicate.php">
    <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">               
    <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
    <input Id="ouser" type="text" name="ouser" required  placeholder="Enter Old User Id" style="width:100%;" oninput="uchange()"><br><br>
    <input Id="nuser" type="text" name="nuser" required  placeholder="Enter New User Id" style="width:49%;">
    <input type="text" name="amnt" required  placeholder="Enter New Amount" style="width:49%;">
    <br><br><input type="submit" value="Duplicate" style="color:white;background:Red;width:100%;"><br>
</form></div><br>

<center><form method = 'post' action="search.php">
    <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">               
    <input type="text" name="payman" required  placeholder="Search" style="width:70%;" autofocus>
    <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
    <input type="submit" value="Search" style="color:white;background:#606060;width:27%;">
</form></center><br>

<?php while($row = $sel->fetch_array()):?>
<div style="border:1px solid white;background:Black">
  <center><h2 style="background:red;color:white">User <?php echo $row['Id']?></h2></center>
  <p style="float:right;margin-right:5px;color:white">Total Win: <?php echo $row['Odd']*$row['Amount']*0.90?> Birr<p>
  <p style="margin-left:5px;color:white">Total Odd: <?php echo $row['Odd']?><p>
  <p style="padding-left:5px;color:White;background:Green;">Betting Amount: <?php echo $row['Amount']?> Birr<p><br>

  <p style="margin-left:5px;color:white"><?php echo $row['Described']?><p>
  
  <?php if($row['Access'] == 0):?>
    <form method="post" action="pay.php?name=<?php echo $row['Id']?>">
      <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
      <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
      <input type="submit" value='Confirm Payment' style="width:100%;background:#191970;color:white;height:50px">
    </form><br>

    <form method="post" action="del_us.php?name=<?php echo $row['Id']?>">
      <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
      <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
      <input type="submit" value='Delete User' style="width:100%;background:#8B008B;color:white;height:30px">
    </form>
  <?php endif;?>

  <?php if($row['Access'] == 1):?>
    <center><h3 style="background:Green;color:white;padding:20px;">User Already Paid</h3></center>
    <?php if($sel_s->num_rows > 0):?>
    <form method="post" action="del_us.php?name=<?php echo $row['Id']?>">
      <input type="text" name="admin" required  placeholder="Enter Admin Name" hidden value="<?php echo $user?>">
      <input type="password" name="pwd" required placeholder="Enter Admin Password"hidden value="<?php echo $pwd?>">
      <input type="submit" value='Delete User' style="width:100%;background:#8B008B;color:white;height:30px">
    </form>
    <?php endif;?>
  <?php endif;?>

</div><br><br>
<?php endwhile;?>

  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script>
  function uchange(){
    var nu = document.getElementById('nuser');  
    var ou = document.getElementById('ouser');  
    nu.value = ou.value +'_'+ (Math.floor(Math.random()*9000)+1000) ;

    if(ou.value == ''){
      nu.value = '';
    }
  }
  </script>
</body>
</html>
<?php endif;?>