<?php
session_start();
echo $_POST["uname"];
if( !isset( $_SESSION['username'] ) ) {
    $_SESSION['username'] = $_POST["uname"];
    echo $_SESSION['usename'];
 }
?>