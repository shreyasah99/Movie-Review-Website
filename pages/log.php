<?php
session_start();
/* Attempt MySQL server connection.*/ 
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "movies";
$link = mysqli_connect($servername, $username, $password);
mysqli_select_db($link, $dbname);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
//$name= mysqli_real_escape_string($link,$_REQUEST['name']);
$password = mysqli_real_escape_string($link, $_REQUEST['loginPassword']);
echo $password."            ";
$email = mysqli_real_escape_string($link, $_REQUEST['loginEmail']);
echo $email;
// Attempt insert query execution
$sql = "select * from user where emailid = '$email' && password = '$password'";
$result = mysqli_query($link, $sql);
$num = mysqli_num_rows($result);
if($num ==1){
    echo "<script> alert('login succesfully!')</script> ";	
   echo "<script> window.location.assign('index.html')</script>";	
    echo "<script>  checklog($email);  </script> ";
}
else{
    echo "<script> alert('invalid login')</script>";
    echo "<script> window.location.assign('login.php')</script>";	
}
// Close connection
mysqli_close($link);
?>