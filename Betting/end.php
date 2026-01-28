<?php 
$name = $_GET['name'];
$odd = $_GET['odd'];

$con = new mysqli("localhost","root","","betting");
$sel = $con->query("SELECT * FROM user WHERE Id ='$name' AND Access = 1");

if($sel->num_rows > 0){
    echo "<center><h1 style='background:linear-gradient(to left,black,#DAA520);;color:white;padding:5px'>EXPECT Betting</h1></center>";

    $file_url = "http://localhost:8015/Betting/Users/EXPECT%20Betting%20User%20$name.html";  
    header('Content-Type: application/octet-stream');  
    header("Content-Transfer-Encoding: utf-8");   
    header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");   
    readfile($file_url);  
}else{
    echo"<script>alert('Get Confirmation')</script>";
    header("location:final_ass.php?name=$name&odd=$odd");
}
?>