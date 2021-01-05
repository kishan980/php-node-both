<?php
session_start();
if(!isset($_SESSION["userName"])){
    header("location:index.php");

}
echo "<h1 align='center'>".$_SESSION['userName']."</h1>";
echo "<p align='center'><a href='logout.php'>Logout</a></p>";