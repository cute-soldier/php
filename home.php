<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="all.css">
  <title>健康中心</title>
</head>
<body>
  <div class="wrap">
     <div class="header">
        <img src="http://intro.nuk.edu.tw/download/logo_2013new/logoword.jpg" alt="" width="450px" >
        <h1>衛生保健組</h1>
        <?php
         session_start();
         if ( isset($_SESSION["check"]) ) {
        echo "<a href='logout.php'>登出</a>";}
        else{echo "<a href='index.php'>登入</a>";}
          
          ?>
        <div class="clear"></div>
     </div>
     <div class="content">
        <div class="com">
           <form method="POST" action="message.php">
           <h2>留言板</h2>
           <p><textarea name="message" rows="15" cols="41" background-color="#ECEAD8"></textarea></p>
         <div class="button">
           <p><input type="submit" value="送出留言"　padding="5px"> 
             　<input type="reset" value="清除留言"> </p>
         </div>
           <a href="message.php">查看回應</a>
</form>
       </div>
        <div class="info">
        <?php
$link=mysqli_connect('localhost','root','steven871202','phpproject');
$SQL="SELECT count(*) as count,med_name FROM medicament where med_amount = 0 order by med_amount asc";
$result=mysqli_query($link,$SQL);
$row=mysqli_fetch_assoc($result);

if($row['count']==0){
  echo "<h2>目前資源充足:)</h2>";
}else{
  echo "<h2>目前：".$row['med_name']."短缺，抱歉:(</h2>";
}
?>
          <?php
date_default_timezone_set("Asia/Taipei");
$time=date("m");
$link=mysqli_connect('localhost','root','steven871202','phpproject');
$SQL="SELECT count(*) as vname,in_type  FROM visitor where visitor.time like '%-$time-%' group by in_type order by vname desc limit 1";
$result=mysqli_query($link,$SQL);
$row=mysqli_fetch_assoc($result);


echo "<h2>本月受傷原因最多為：".$row['in_type']."</h2>";
echo "</br>";
?>

          
<?php
date_default_timezone_set("Asia/Taipei");
$time=date("m");
$link=mysqli_connect('localhost','root','steven871202','phpproject');
$SQL="SELECT count(*) as cname  FROM visitor where visitor.time like '%-$time-%' ";
$result=mysqli_query($link,$SQL);
$row=mysqli_fetch_assoc($result);


echo "<p>本月受傷人數：".$row['cname']."人</p>";

?>
       </div>
       
       <div class="service">
         <a href="borrow3.php">器材借用</a>
         <p nowrap>|</p>
         <a href="injury.php">傷病登記</a>
         <p nowrap>|</p>
         <a href="stime.html">服務時間</a>
         <p nowrap>|</p>
         
         
         <?php
         session_start();
         if ( isset($_SESSION["check"]) ) {
         echo "<a href='eupdate.php'>器材資訊 </a>";
       }else{
        echo "<a href='einfor.php'>器材資訊 </a>";
       }
         
       ?>
         </div>
       <div class="clear"></div>
     </div>
     <div class="footer">
       <p>81148 高雄市楠梓區高雄大學路700號</p>
       <p>700, Kaohsiung University Rd., Nanzih District, Kaohsiung 811, Taiwan, R.O.C.</p>
       <p>[傳真：07-5919079] / [校園安全緊急專線：07-5917885]</p>
    </div>
  </div>
</body>
</html>
