<?php 
$name = $_GET['name'];
$Id = $_GET['Id'];

$con = new mysqli("localhost","root","","betting");
$sel_cont = $con->query("SELECT * FROM user WHERE Id='$name' AND Click = 1");

if($sel_cont->num_rows == 0){
    $con->query("DELETE FROM confirm WHERE us_id='$name' AND bet_id='$Id'");
    header("location:chooser.php?name=$name");
}

elseif($sel_cont->num_rows > 0){
    header("location:index.php");
}
?>