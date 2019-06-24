<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
        請輸入學號:<input type="text" name="ID" placeholder="學號"><br/>
    </form>


</body>
</html>

<?php
$link=mysqli_connect('localhost','root','a3806993','phpproject');
$id=$_GET['ID'];

$SQLemail="SELECT v.visitor_email AS email FROM visitor v WHERE v.ID='$id'";
$resultemail=mysqli_query($link,$SQLemail);
$row2=mysqli_fetch_assoc($resultemail);


$SQLname="SELECT v.name AS name FROM visitor v WHERE v.ID='$id'";
$resultID=mysqli_query($link,$SQLname);
while($row=mysqli_fetch_assoc($resultID)){
            echo "哈囉!<br>";
            echo $row['name']."你好，需要借用什麼器材?";
            echo "<form action='#' method='GET'>";
                echo "<select name='type'>";
                    echo "<option value='輪椅'>輪椅</option>";
                    echo "<option value='拐杖'>拐杖</option>";
                    echo "<option value='熱敷袋'>熱敷袋</option>";
                echo "</select>";
            echo "</form>";
            echo "<input type='submit'>";
}


$borrowE=$_GET['type'];

$sqlminus="UPDATE equipment SET e_number=e_number-1 WHERE e_type='$borrowE' ";
$updateminus = mysqli_query($link,$sqlminus);

$sqlregister="INSERT INTO borrowed (stu_ID,stu_name,stu_mail,e_type) VALUES ('$id','$row[name]','$row2[email]','$borrowE')";
$updateregister = mysqli_query($link,$sqlregister);



?>