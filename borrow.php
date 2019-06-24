<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        請輸入學號:<input type="text" name="ID" placeholder="學號"><br/>
    </form>


</body>
</html>

<?php
$link=mysqli_connect('localhost','root','steven871202','phpproject');
$id=$_POST['ID'];
$SQLname="SELECT v.name as namev,v.visitor_email FROM visitor v WHERE v.ID='$id'";

$resultID=mysqli_query($link,$SQLname);
while($row=mysqli_fetch_assoc($resultID)){
            echo "哈囉!<br>";
            echo $row['namev']."你好，需要借用什麼器材?";
            echo "<form action='#' method='POST'>";
                echo "<select name='type'>";
                    echo "<option value='輪椅'>輪椅</option>";
                    echo "<option value='拐杖'>拐杖</option>";
                    echo "<option value='熱敷袋'>熱敷袋</option>";
                echo "</select>";
            echo "</form>";
            echo "<input type='submit'>";
}


$borrowE=$_POST['type'];

$sqlminus="UPDATE equipment SET e_number=(select e_number-1 from equipment where e_type=$borrowE) WHERE e_type=$borrowE ";
mysqli_query($link,$sqlminus);

$sqlregister="INSERT INTO `borrowed` (`stu_ID`,`stu_mail`,`stu_name`,`e_type`) VALUES ('$id','$row[visitor_email]','$row[namev]','$borrowE')";
mysqli_query($link,$sqlregister);

$SQL="SELECT * FROM equipment where e_type=$borrowE";
$result=mysqli_query($link,$SQL);

if($result=mysqli_query($link,$SQL)){
    while($row=mysqli_fetch_assoc($result)){
echo "<table border='1'>";
echo "<tr><th>器材名稱</th><th>器材數量</th><th>借用與否</th><tr/>";
echo "<tr>";
echo "<td>".$row["e_type"]."</td>"."<td>".$row["e_number"]."</td>"."<td>".$row["available"]
."</td>";
echo "</tr>";
}}

?>