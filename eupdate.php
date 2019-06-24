<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="all.css">
    <title>庫存查詢</title>
</head>
<body>
<div class="wrap">
<div class="header">
        <img src="http://intro.nuk.edu.tw/download/logo_2013new/logoword.jpg" alt="" width="450px" >
        <h1>衛生保健組</h1>
        <a href="home.php">回首頁</a>
        <div class="clear"></div>
     </div>
<div class="content" id="aaaaa">

</html>

<?php
echo "<div class='yaaa'>";
    $link=mysqli_connect('localhost','root','steven871202','phpproject');
    $uno=$_POST['No'];
    $unum=$_POST['num'];
   
    $sql_update="UPDATE equipment SET e_number='$unum' WHERE e_No=$uno";
    $update=mysqli_query($link,$sql_update);

    $sql="SELECT * FROM equipment";
    $result=mysqli_query($link,$sql);

    echo "<table cellpadding=5 border=3>";
    echo "<tr>";
    echo "<th>"."器材名稱"."</th>";
    echo "<th>"."器材數量"."</th>";
    echo "<th>"."操作"."</th>";
    echo "</tr>";
    echo "<br>";
    while($row=mysqli_fetch_assoc($result)){
        $no=$row['e_No'];
        echo "<tr>";
        echo "<td>".$row['e_type']."</td>";
        echo "<td>".$row['e_number']."</td>";
        echo "<td><center>"."<button onclick="."location.href='eupdate2.php?No=$no'>"."修改"."</center></button>"."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
    mysqli_close($link);
?>
<?php
echo "<div class='yaaaa'>";
    $link=mysqli_connect('localhost','root','steven871202','phpproject');
    $uno2=$_POST['No2'];
    $unum2=$_POST['num2'];
   
    $sql_update="UPDATE medicament SET med_amount='$unum2' WHERE id=$uno2";
    $update=mysqli_query($link,$sql_update);

    $sql="SELECT * FROM medicament";
    $result=mysqli_query($link,$sql);

    echo "<table cellpadding=5 border=3>";
    echo "<tr>";
    echo "<th>"."藥品名稱"."</th>";
    echo "<th>"."藥品數量"."</th>";
    echo "<th>"."操作"."</th>";
    echo "</tr>";
    echo "<br>";
    while($row=mysqli_fetch_assoc($result)){
        $no2=$row['id'];
        echo "<tr>";
        echo "<td>".$row['med_name']."</td>";
        echo "<td>".$row['med_amount']."</td>";
        echo "<td><center>"."<button onclick="."location.href='eupdate2.php?No=$no2'>"."修改"."</center></button>"."</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($link);
    echo "</div>";
?>
</div>
</div>
</body>
</html>