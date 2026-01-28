<?php 
 $name = $_GET['name'];
 $cata = $_GET['cata'];

 $amount = $_POST['amount'];
 $con = new mysqli("localhost","root","","betting");
 $sel_cont = $con->query("SELECT * FROM user WHERE Id='$name' AND Click = 1");

 if($sel_cont->num_rows == 0){
    $con->query("UPDATE user SET Amount = '$amount' WHERE Id='$name'");
    header("location:Main.php?name=$name&cata=$cata");
 }
 
 elseif($sel_cont->num_rows > 0){
     header("location:index.php");
 }
 ?>