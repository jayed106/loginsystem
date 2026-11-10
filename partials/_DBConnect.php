<?php
$server="localhost";
$user="root";
$password="";
$database="users";

$conn=mysqli_connect($server,$user,$password,$database);
if(!$conn){
    
//     echo "connected !";
// }
// else{
    die ("not connected");
}
?>
