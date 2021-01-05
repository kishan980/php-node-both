<?php
session_start();
$conn = mysqli_connect("localhost","root","","test");

if(isset($_POST["userName"]) && isset($_POST["userPassword"])){
    $username     = mysqli_real_escape_string($conn,$_POST["userName"]);
    $userpassword = mysqli_real_escape_string($conn,$_POST["userPassword"]);
    $sel = "select * from user where userName ='".$username."' and userPassword='".$userpassword."'";
    $result = mysqli_query($conn,$sel);
    $num_row = mysqli_num_rows($result);
    if($num_row>0){
        $data = mysqli_fetch_array($result);
        $_SESSION["userName"]= $data["userName"];
        echo $data["userName"];
    }
}