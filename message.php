<?php header("Content-Type:text/html; charset=utf-8"); ?>
<html>
<head>
<title>留言板</title>
<link rel="stylesheet" href="all.css">
</head>
<body>
<div class="wrap">
    <div class="header">
        <img src="http://intro.nuk.edu.tw/download/logo_2013new/logoword.jpg" alt="" width="450px" >
        <h1>衛生保健組</h1><a href="home.php">回首頁</a></div> <div class="clear"></div>
        <div class="content">
<?php 
      $link=mysql_connect("localhost","root","steven871202") or die("連接失敗");
      mysql_select_db("phpproject");
      mysql_query("SET NAMES utf8");
      $message=$_POST["message"];
      echo "<div class='info'><div class='shitt'>";
      if (!empty($message)){
            $sqlStr="insert into tb2 (message) ";
            $sqlStr.="values('$message')";
            mysql_query($sqlStr) or die("寫入失敗");
            echo "留言寫入成功<hr>"; 
      }else{
            echo "留言內容<hr>";
      }
      $q=mysql_query('select message from tb2');
      $c=1;
      while($row=mysql_fetch_row($q)){
            foreach ($row as $i){
                  echo $c++.". ".$i." ";
            }
            echo "<br>";
      } echo "</div></div>";  
?></div>

</body>
</html>