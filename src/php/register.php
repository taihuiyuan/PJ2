<?php
include "config.php";
try {
    //连接数据库
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //接收用户输入
    $uid = $_POST['name'];
    $pwd = $_POST['password'];
    $email = $_POST['email'];
    $repwd = $_POST['repassword'];
        //查询语句，帮助协助查询当前注册用户名是否存在于数据库当中
        $sql = "select * from traveluser where UserName='$uid'";
//第一个'username'为数据库内已存在的username值，将其与第二个'POST'方法传递过来的username值做对比
        $rs = $pdo->query($sql);
        if($rs->fetch()>0)//如果数据库内存在相同用户名，则'$rs'接收到的变量为'true'所以大于1为真，则返回'用户名已存在'
        {
            echo "<script>alert('用户名已存在，请重新注册！');history.go(-1)</script>";
        } else if ($repwd != $pwd){
            echo "<script>alert('两次密码输入不一致！');history.go(-1)</script>";
        } else {
            //执行sql语句
            $sql = "insert into traveluser(Pass,UserName,Email) values('$pwd','$uid','$email')";
            $res = $pdo->query($sql); //添加
            var_dump($res);
            echo "<script>alert('注册成功！');window.location.href = ('../Login.html')</script>";
        }
    $pdo = null;
}catch (PDOException $e) {
    die( $e->getMessage() );
}
?>
