<?php
  $name = $_POST['name'];
  $pwd = $_POST['password'];
  $desc1 = "List Of Games and Bets<br>\n";

  $con = new mysqli("localhost","root","","betting");
  $con = new mysqli("localhost","root","","betting");
  
  $sel = $con->query("SELECT * FROM permanent WHERE `User`='$name'");
  $row = $sel->fetch_array();
if(strpos($name,' ') == FALSE){
    if($row['Password'] == $pwd){
        header("location:chooser.php?name=$name");
    }
    else{
         header("location:error.php?name=$name");
        }
    }

else{
    header("location:error.php?name=$name");
}

?>