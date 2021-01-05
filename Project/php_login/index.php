<!DOCTYPE html>
<html>
<head>
    <title>Webslesson Tutorial</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        #box
        {
            width:600px;
            background:gray;
            color:white;
            margin:0 auto;
            padding:10px;
            text-align:center;
        }
    </style>
</head>
<?php
session_start();
if(isset($_SESSION["userName"]))
{
    if(time() - $_SESSION['last_login_timestamp'] ) // 900 = 15 * 60
    {
        header("location:logout.php");
    }
    else
    {
        $_SESSION['last_login_timestamp'] = time();
        echo "<h1 align='center'>".$_SESSION["userName"]."</h1>";
        echo '<h1 align="center">'.$_SESSION['last_login_timestamp'].'</h1>';
        echo "<p align='center'><a href='logout.php'>Logout</a></p>";
    }
}
else
{
    header('location:login.php');
}
?>

<script>
    $(document).ready(function(){
        function check_session()
        {
            $.ajax({
                url:"check_session.php",
                method:"POST",
                success:function(data)
                {
                    if(data == '1')
                    {
                        alert('Your session has been expired!');
                        window.location.href="login.php";
                    }
                }
            })
        }
        setInterval(function(){
            check_session();
        }, 1000000);  //10000 means 10 seconds
    });
</script>