<?php
$conn=new mysqli("localhost","root","","voting_system");

if ($conn->connect_error){
    die($conn->connect_error);
}

?>