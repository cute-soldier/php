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
$id=$_POST['ID'];
$name=$_POST['name'];
$sex=$_POST['sex'];
$mail=$_POST['mail'];
$date=$_POST['date'];
$injury=$_POST['injury'];
$location=$_POST['location'];

$sqlup = "INSERT INTO visitor (`id`,`name`,`gender`,`visitor_email`,`in_type`,`in_location`,`time`) VALUES('$id','$name','$sex','$mail','$injury','$location','$date')";
$update = mysqli_query($link,$sqlup);

$SQL="SELECT * FROM visitor where ID='$id'";
$result=mysqli_query($link,$SQL);
echo "<div class='yaa'>";
echo "<table border='1'>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["ID"]."</td>"."<td>".$row["name"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["visitor_email"]."</td>"."<td>".$row["in_type"]."</td>"."<td>".$row["in_location"]."</td>"."<td>".$row["time"]."</td>";
            echo "</tr>";
}
echo "</div>";
mysqli_close($link);

?>
</div>
</div> 
</body>
</html>
