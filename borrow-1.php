<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        if(!isset($_GET["ID"])){ ?>
            <form action="#" method="get">
                請輸入學號:<input type="text" name="ID" placeholder="學號"><br/>
            </form>
        <?php }else{ ?>
            <form action='#' method='POST'>
                <select name='type'>;
                    <option value='輪椅'>輪椅</option>
                    <option value='拐杖'>拐杖</option>
                    <option value='熱敷袋'>熱敷袋</option>
                </select>
                <input type='hidden' name='id' value='<?php $_GET['ID']?>'>
                <input type='submit'>
            </form>
        <?php }
    ?>
    
</body>
</html>

<?php
$link=mysqli_connect('localhost','root','steven871202','phpproject');
$id=$_GET['ID'];

$SQLemail="SELECT visitor_email  FROM visitor  WHERE ID='$id'";
$resultemail=mysqli_query($link,$SQLemail);
$row2=mysqli_fetch_assoc($resultemail);



$SQLname="SELECT name AS name FROM visitor v WHERE ID='$id'";
$resultname=mysqli_query($link,$SQLname);

if(!isset($_POST['type'])){
    $borrowE=$_POST['type'];

    $sqlminus="UPDATE equipment SET e_number=e_number-1 WHERE e_type='$borrowE' ";
    $updateminus = mysqli_query($link,$sqlminus);

    if($row3['e_number']>=1){
        $sqlminus="UPDATE equipment SET e_number=e_number-1 WHERE e_type='$borrowE' ";
        $updateminus = mysqli_query($link,$sqlminus);
    
    
        $sqlregister="INSERT INTO borrowed (stu_ID,stu_name,stu_mail,e_type) VALUES ('$id','$row[name]','$row2[visitor_email]','$borrowE')";
        $updateregister = mysqli_query($link,$sqlregister);
    }
}

?>