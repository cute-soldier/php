<?php
session_start();
    unset($_SESSION["check"]);
        header("Location:home.php");
?>