<?php
      header("Content-Type: text/html; charset=utf-8");
      $link=mysql_connect("localhost","root","steven871202") or die("連接失敗");
      if(mysql_select_db("phproject")) { 
            mysql_query("DROP TABLE IF EXISTS tb2");
            $sqlstr="create table tb2(message varchar(10)) charset=utf8";
            mysql_query($sqlstr) or die("資料表建立失敗");  
            echo "資料表重新建立成功";
      }else{$sqlstr="create table tb2(message varchar(10)) charset=utf8";
        mysql_query($sqlstr) or die("資料表建立失敗");  
        echo "資料表重新建立成功";}
        echo "<a href='home.php'>回首頁</a>"
?>