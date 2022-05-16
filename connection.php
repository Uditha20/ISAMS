<?php
$conn=new mysqli("localhost","root","","isams");

if ($conn->connect_error){
    die($conn->connect_error);
}

?>