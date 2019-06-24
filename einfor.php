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
        <h1>衛生保健組</h1>
        <a href="home.php">回首頁</a>
        <div class="clear"></div>
     </div>
     <div class="content" id="aaaa">
<?php

$link=mysqli_connect('localhost','root','steven871202','phpproject');
$SQL="SELECT * FROM equipment";
$result=mysqli_query($link,$SQL);
echo "<div class='ya'>";
echo "<table style='border:3px #cccccc solid;' cellpadding='10' border='3' rules='all'>";
echo "<tr><th>器材名稱</th><th>器材數量</th><th>借用與否</th><tr/>";
if($result=mysqli_query($link,$SQL)){
    while($row=mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>".$row["e_type"]."</td>"."<td>".$row["e_number"]."</td>"."<td>".$row["available"]
."</td>";
echo "</tr>";
}}
echo "</div>";
?>


</div>
</div>
</body>
</html>