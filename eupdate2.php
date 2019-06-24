<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="all.css">
    <title>庫存編輯</title>
</head>
<body>
<div class="wrap">
    <div class="header">
        <img src="http://intro.nuk.edu.tw/download/logo_2013new/logoword.jpg" alt="" width="450px" >
        <h1>衛生保健組</h1><a href="home.php">回首頁</a></div> <div class="clear"></div>
        <div class="content"> <div class="info">
     <?php
    $no=$_GET['No'];
    $link=mysqli_connect('localhost','root','steven871202','phpproject');
    $sql="SELECT * FROM equipment WHERE e_No=$no";
    $result=mysqli_query($link,$sql);
    while($row=mysqli_fetch_assoc($result)){
        echo "<form action='eupdate.php' method='post'>";
        echo "<input type='hidden' name='No' value=".$row["e_No"].">";
        echo "<h2>請修改數量(預設不變)：</h2>";
        echo "<p>器材名稱: ".$row["e_type"]."</p>";
        echo "<p>修改數量: "."<input type='text' name='num' value=".$row["e_number"]."></p>";
        echo "<p><input type='submit'></p>";
        echo "</form>";
    }
    mysqli_close($link);
?>
<?php
    $no2=$_GET['No'];
    $link=mysqli_connect('localhost','root','steven871202','phpproject');
    $sql2="SELECT * FROM medicament WHERE id=$no2";
    $result=mysqli_query($link,$sql2);
    while($row=mysqli_fetch_assoc($result)){
        echo "<form action='eupdate.php' method='post'>";
        echo "<input type='hidden' name='No2' value=".$row["id"].">";
        echo "<h2>請修改數量(預設不變)：</h2>";
        echo "<p>器材名稱: ".$row["med_name"]."</p>";
        echo "<p>修改數量: "."<input type='text' name='num2' value=".$row["med_amount"]."></p>";
        echo "<p><input type='submit'></p>";
        echo "</form>";
    }
    mysqli_close($link);
?>       </div></div>
</body>
</html>


