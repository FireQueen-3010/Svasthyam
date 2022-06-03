<?php
$servername = "localhost";
$user = "root";
$pwd = "";
$dbname = "wt project";
$conn = new mysqli($servername,$user,$pwd,$dbname);
if($conn->connect_error){
    echo "Failed";
}else{
    echo "Connection Success";
}
?>