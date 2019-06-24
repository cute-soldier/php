<?php
session_start();
if(isset($_SESSION["login"])){
    unset($_SESSION["login"]);
$link=mysqli_connect('localhost','root','steven871202','phpproject');
$account=$_POST['account'];
$pwd=$_POST['pwd'];

$sql = "SELECT user_account,user_password FROM users where user_account = '$account'";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_row($result);

if($account != null && $pwd != null && $row[0] == $account && $row[1] == $pwd)
{
        $_SESSION['account'] = $account;
        echo '登入成功!';
        header("Refresh:2;url=home.php");
}
else
{
        echo '登入失敗!';
        header("Refresh:2;url=index.php");
}   
$_SESSION["check"] = 1; 
}
else{
    echo "滾<br/>";
    header("Refresh:2;url=index.php");
}

?>