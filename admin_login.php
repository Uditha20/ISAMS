<?php
include("connection.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(isset($_POST["name"]) && isset($_POST["pass"])){

        $name=$_POST["name"];
        $pass=$_POST["pass"]; 

        $mysqli="SELECT * FROM admin WHERE user_name='$name' AND password='$pass'";
        $conn->query($mysqli);
        if($conn->affected_rows>0){
            include("dashboard.php");
        }
        else{
            
            echo '<script> alert("invalid login") </script>';
            include("login.php");
            if($x<10){
                echo "good";
            }
        }

       

}
}

?>