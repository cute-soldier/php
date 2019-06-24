<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="all.css">
    <title>傷病登記</title>
</head>
<body>
<div class="wrap">
<div class="header">
        <img src="http://intro.nuk.edu.tw/download/logo_2013new/logoword.jpg" alt="" width="450px" >
        <h1>衛生保健組</h1>
        <a href="home.php">回首頁</a>
        <div class="clear"></div>
     </div>
<div class="content" >
<form action="visitor.php" method="post">
   <h2 class="inj">傷病登記:<h2><br>
   <div class="ha">
    學號:<input type="text" name="ID"  placeholder="學號"><br/>
    姓名:<input type="text" name="name"  placeholder="姓名"><br/>
    性別:<select name="sex" >
        <option value="man">男</option>
        <option value="woman">女</option>
    </select><br>
    信箱:<input type="text"   name="mail"><br>
    日期:<input type="date"  name="date">
    傷病類型:<select name="injury">
        <option value="中暑">中暑</option>
        <option value="拉傷">拉傷</option>
        <option value="睡死">睡死</option>
    </select>
    受傷地點:<input type="text" name="location" placeholder="地點"><br/>

<input type="submit" name="提交"  id="aaa">
 <input type="reset" name="重設" id="aaa"><br/>
</div>
</form>

</body>
</html>

<?php

$link=mysqli_connect('localhost','root','steven871202','phpproject');
$sql = "SELECT user_account,user_password FROM users where user_account = '$account'";
$result = mysqli_query($link,$sql);

?>
</div>
</div>