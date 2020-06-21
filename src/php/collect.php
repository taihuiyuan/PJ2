<?php
session_start();
require_once ('./config.php');
$id = $_GET['id'];
global $imageID;
$imageID = $id;
global $uid;
$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql_user = "select *  from traveluser where UserName='{$_SESSION['UserName']}'";
$res = $pdo->query($sql_user);
$row_user = $res->fetch();
$uid = $row_user['UID'];
$sql = "select *  from travelimagefavor where UID='{$uid}' AND ImageID='{$imageID}'";
$res = $pdo->query($sql);
if ($res->fetch()){
    $sql_collect = "Delete from travelimagefavor where UID={$GLOBALS['uid']} and ImageID={$GLOBALS['imageID']}";
    $res2 = $pdo->query($sql_collect); //删除
    echo '<script>alert("取消收藏成功！");window.location.href = ("../details.php?id='.$id.'");</script>';
}else{
    $sql_collect = "insert into travelimagefavor(UID,ImageID) values('{$GLOBALS['uid']}','{$GLOBALS['imageID']}')";
    $res1 = $pdo->query($sql_collect); //添加
    echo '<script>alert("收藏成功！");window.location.href = ("../details.php?id='.$id.'");</script>';
}
$pdo = null;
