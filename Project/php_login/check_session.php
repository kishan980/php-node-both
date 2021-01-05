<?php
session_start();
if(isset($_SESSION["userName"])){
    echo '0';
}else{
    echo '1';
}