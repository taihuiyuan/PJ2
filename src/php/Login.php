<?php
include "config.php";
session_start();
try {
    //连接数据库
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //接收用户输入
    $uid = $_POST['name'];
    $_SESSION['UserName'] = $_POST['name'];
    $pwd = $_POST['password'];
    $_SESSION['Pass'] = $_POST['password'];
    if ($uid == "" || $pwd == ""){
        echo "<script>alert('请输入用户名和密码！');history.go(-1);</script>";
    }else {
        //执行sql语句
        $sql_name = "select Pass from traveluser where UserName = '$uid'" ;
        $sql_email = "select Pass from traveluser where Email = '$uid'" ;
        $result1 = $pdo->query($sql_name);
        $result2 = $pdo->query($sql_email);
        $row1 = $result1->fetch();
        $row2 = $result2->fetch();
        if ($pwd == $row1[0] || $pwd == $row2[0]) {
            echo "<script>location.href = '../../Index.php';</script>";
        } else {
            echo "<script>alert('用户名或密码错误！');history.go(-1);</script>";
        }
    }
    $pdo = null;
}catch (PDOException $e) {
    die( $e->getMessage() );
}
?>
