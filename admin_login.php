<?php
include("connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(isset($_POST["name"]) && isset($_POST["pass"])){

        $name=$_POST["name"];
        $pass=$_POST["pass"]; 

        $mysqli="SELECT * FROM student WHERE sname='$name' AND sid='$pass'";
        $conn->query($mysqli);
        $count=$conn->affected_rows;

        echo $count;

}
}

?>