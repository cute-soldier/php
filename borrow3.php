<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="all.css">  
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
     <div class="content">
    <?php 
    if(!isset($_SESSION[login])){
        if(!isset($_GET["ID"])){ ?>
            <form action="#" method="get" id="a">
               請輸入學號:<input type="text" name="ID" id="aa" placeholder="學號"><br/>
            </form>
        <?php }elseif(!isset($_POST["type"])){ ?>
            <form action='#' method='POST' id='b'>
                <select name='type' style="font-size:20px ;font-family:Microsoft JhengHei;font-weight:bold;">;
                    <option value='輪椅'>輪椅</option>
                    <option value='拐杖'>拐杖</option>
                    <option value='熱敷袋'>熱敷袋</option>
                </select>
                <input type='hidden' name='id' value='<?php $_GET['ID']?>'>
                <input type='submit'style="font-size:20px ;font-family:Microsoft JhengHei;font-weight:bold;">
            </form>
        <?php }else{echo "<div class='info'><p>已收到借用申請</p></div>";} }
        
    ?>
        </div>
    </div>
</body>
</html>

<?php
$link=mysqli_connect('localhost','root','steven871202','phpproject');
$id=$_GET['ID'];

$SQL="SELECT *  FROM visitor";
$result=mysqli_query($link,$SQL);
$row=mysqli_fetch_assoc($result);

$SQLemail="SELECT visitor_email  FROM visitor  WHERE ID='$id'";
$resultemail=mysqli_query($link,$SQLemail);
$row2=mysqli_fetch_assoc($resultemail);

$SQLname="SELECT name AS name FROM visitor v WHERE ID='$id'";
$resultname=mysqli_query($link,$SQLname);

if(isset($_POST['type'])){
    $borrowE=$_POST['type'];
    $leftnum=mysqli_query($link,"select e_number from equipment where e_type='$borrowE'");
    $row3=mysqli_fetch_assoc($leftnum);

    if($row3['e_number']>=1){
    $sqlminus="UPDATE equipment SET e_number=e_number-1 WHERE e_type='$borrowE' ";
    $updateminus = mysqli_query($link,$sqlminus);


    $sqlregister="INSERT INTO borrowed (stu_ID,stu_name,stu_mail,e_type) VALUES ('$id','$row[name]','$row2[visitor_email]','$borrowE')";
    $updateregister = mysqli_query($link,$sqlregister);
}
}

?>