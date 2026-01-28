<?php
  $name = $_POST['name'];
  $desc1 = "List Of Games and Bets<br>\n";

  $con = new mysqli("localhost","root","","betting");
  $sel = $con->query("SELECT * FROM permanent WHERE `User`='$name'");

  if($sel->num_rows > 0){
    header("location:login.php?name=$name");
  }
  else{
     if(strpos($name,' ') == FALSE){
       if($con->query("INSERT INTO user (Id,Odd,Described) VALUES('$name',1,'$desc1')") == TRUE
       && $sel->num_rows == 0 ){
           header("location:chooser.php?name=$name");
        }else{
           header("location:error.php?name=$name");
        }
      }else{
        header("location:error.php?name=$name");
    }
}
?>