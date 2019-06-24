<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="all.css">
    <title>Document</title>
</head>
<body>
    <div class="wrap">
    <div class="header">
        <img src="http://intro.nuk.edu.tw/download/logo_2013new/logoword.jpg" alt="" width="450px" >
        <h1>衛生保健組</h1><a href="home.php">回首頁</a></div> <div class="clear"></div>
        <div class="content">
            <div class="yaya">
<form action="check.php" method="post">
    <input type="text" name="account" id="yaya" placeholder="帳號"><br/>
    <input type="password" name="pwd" id="yaya" placeholder="密碼"><br/>
    <input type="submit" id="yaya" name="提交">
    <input type="reset" id="yaya2" name="重設"><br/></div>
</form>
</div>
</div>
</body>
</html>

<?php
session_start();
    if ( !isset($_SESSION["login"]) ) {
        $_SESSION["login"] = 1;
     } 
?>