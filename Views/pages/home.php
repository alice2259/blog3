<?php session_start();

if (!empty($_SESSION)){
    echo "<p>Welcome ". $_SESSION['firstName']."</p>"; }
?>