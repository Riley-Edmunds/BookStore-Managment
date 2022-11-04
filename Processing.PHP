<?php
session_start();
$host = "localhost"; 
$user = "root";
$password = "admin123"; 
$dbname = "zion";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    if ($username == "" && $password == ""){
        echo "Go back and Login!!";
    }


    if ($username != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$username."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $username;
            header('Location: Home.PHP');
        }else{
            echo "Invalid username and password";
        }

    }

}