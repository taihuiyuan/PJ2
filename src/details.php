<?php
session_start();
require_once('./php/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no"/>
    <title>图片详情页</title>
    <link rel="stylesheet" type="text/css" href="./css/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="./css/footer.css" media="all">
    <link rel="stylesheet" type="text/css" href="./css/header.css" media="all">
    <link rel="stylesheet" type="text/css" href="./css/detail.css" media="all">
</head>
<body>
<header>
    <nav>
        <ul class="top-head">
            <li><a href="../Index.php">首页</a></li>
            <li><a href="browser.php">浏览</a></li>
            <li><a href="search.php">搜索</a></li>
        </ul>
        <ul class="login-before" id="login-before" style="display: none">
            <li><a href="./Login.html">登录</a></li>
            <li><a href="./register.html">注册</a></li>
        </ul>
        <div class="user-center" style="display: none" id="user-center">
            <button class="dropbtn">个人中心 ▼</button>
            <small class="dropdown-content">
                <a href="./upload.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1024 1024" width="15" height="15"
                         t="1584780263036" p-id="2749" version="1.1">
                        <path fill="#ffffff"
                              d="M 565.333 779.915 l 51.4453 -54.912 a 31.7333 31.7333 0 0 1 45.2267 -1.22667 a 32.64 32.64 0 0 1 1.216 45.7707 l -97.4187 104 a 37.0347 37.0347 0 0 1 -52.8213 1.39733 l -108.363 -104.203 a 32.64 32.64 0 0 1 -1.152 -45.7707 a 31.7333 31.7333 0 0 1 45.248 -1.17333 L 501.333 774.421 V 512.075 c 0 -17.8773 14.3253 -32.3733 32 -32.3733 s 32 14.5067 32 32.3733 v 267.84 Z M 512 138.667 c 123.019 0 228.213 86.7093 259.424 206.88 C 864.299 347.147 938.667 426.091 938.667 522.688 c 0 97.6 -75.9147 177.173 -170.133 177.173 c -17.6747 0 -32 -14.496 -32 -32.3733 c 0 -17.8773 14.3253 -32.3733 32 -32.3733 c 58.3573 0 106.133 -50.08 106.133 -112.427 c 0 -62.336 -47.776 -112.416 -106.133 -112.416 c -5.856 0 -11.6267 0.501333 -17.3013 1.48267 c -17.6213 3.05067 -34.304 -9.09867 -37.024 -26.9867 C 698.347 280.693 612.715 203.424 512 203.424 c -73.8347 0 -140.928 41.536 -177.376 107.861 a 31.9147 31.9147 0 0 1 -30.1227 16.576 a 140.373 140.373 0 0 0 -9.568 -0.32 c -80.1493 0 -145.6 68.5867 -145.6 153.781 c 0 85.184 65.4507 153.792 145.6 153.792 c 17.6747 0 32 14.496 32 32.3733 c 0 17.8773 -14.3253 32.3733 -32 32.3733 C 178.912 699.861 85.3333 601.771 85.3333 481.323 c 0 -118.315 90.2933 -215.061 203.456 -218.453 C 338.091 186.24 421.013 138.667 512 138.667 Z"
                              p-id="2750"/>
                    </svg>
                    上传照片</a>
                <a href="./favorite.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1024 1024" width="15" height="15"
                         t="1584780673462" p-id="2923" version="1.1">
                        <path fill="#ffffff"
                              d="M 335.008 916.629 c -35.9147 22.3147 -82.88 10.7733 -104.693 -25.5573 a 77.3333 77.3333 0 0 1 -8.96 -57.4293 l 46.4853 -198.24 a 13.1413 13.1413 0 0 0 -4.02133 -12.864 l -152.16 -132.587 c -31.6053 -27.52 -35.2533 -75.648 -8.23467 -107.733 a 75.68 75.68 0 0 1 51.7333 -26.752 L 354.848 339.2 c 4.352 -0.362667 8.24533 -3.232 10.0267 -7.59467 l 76.9387 -188.171 c 16.032 -39.2 60.6187 -57.92 99.52 -41.4613 a 76.3093 76.3093 0 0 1 40.832 41.4613 l 76.9387 188.16 c 1.78133 4.37333 5.67467 7.25333 10.0267 7.60533 l 199.712 16.2773 c 41.8773 3.41333 72.8853 40.4587 69.568 82.5173 a 76.9387 76.9387 0 0 1 -26.08 51.9787 l -152.16 132.587 c -3.54133 3.08267 -5.14133 8.07467 -4.02133 12.8533 l 46.4853 198.24 c 9.62133 41.0133 -15.36 82.336 -56.1387 92.224 a 75.2853 75.2853 0 0 1 -57.5253 -9.23733 l -170.976 -106.24 a 11.296 11.296 0 0 0 -12.0107 0 l -170.987 106.24 Z M 551.787 756.032 l 170.976 106.24 c 2.624 1.62133 5.71733 2.12267 8.65067 1.408 c 6.41067 -1.55733 10.56 -8.42667 8.928 -15.424 l -46.4853 -198.24 a 77.1413 77.1413 0 0 1 24.2773 -75.7333 L 870.293 441.707 c 2.48533 -2.16533 4.05333 -5.312 4.33067 -8.74667 c 0.565333 -7.136 -4.49067 -13.1733 -10.976 -13.696 l -199.712 -16.288 a 75.9893 75.9893 0 0 1 -64.064 -47.168 l -76.9387 -188.16 a 12.3093 12.3093 0 0 0 -6.53867 -6.74133 c -5.89867 -2.496 -12.7253 0.373333 -15.328 6.74133 l -76.9493 188.16 a 75.9893 75.9893 0 0 1 -64.064 47.168 l -199.701 16.288 a 11.68 11.68 0 0 0 -7.97867 4.18133 a 13.2267 13.2267 0 0 0 1.33333 18.2613 l 152.16 132.587 a 77.1413 77.1413 0 0 1 24.2773 75.7333 l -46.4853 198.229 a 13.3333 13.3333 0 0 0 1.51467 9.87733 c 3.488 5.792 10.5813 7.53067 16.064 4.128 l 170.987 -106.229 a 75.296 75.296 0 0 1 79.5627 0 Z"
                              p-id="2924"/>
                    </svg>
                    我的收藏</a>
                <a href="./photo.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1024 1024" width="15" height="15"
                         t="1584780752907" p-id="3097" version="1.1">
                        <path fill="#ffffff"
                              d="M 938.667 553.92 V 768 c 0 64.8 -52.5333 117.333 -117.333 117.333 H 202.667 c -64.8 0 -117.333 -52.5333 -117.333 -117.333 V 256 c 0 -64.8 52.5333 -117.333 117.333 -117.333 h 618.667 c 64.8 0 117.333 52.5333 117.333 117.333 v 297.92 Z m -64 -74.624 V 256 a 53.3333 53.3333 0 0 0 -53.3333 -53.3333 H 202.667 a 53.3333 53.3333 0 0 0 -53.3333 53.3333 v 344.48 A 290.091 290.091 0 0 1 192 597.333 a 286.88 286.88 0 0 1 183.296 65.8453 C 427.029 528.384 556.907 437.333 704 437.333 c 65.7067 0 126.997 16.7787 170.667 41.9627 Z m 0 82.24 c -5.33333 -8.32 -21.1307 -21.6533 -43.648 -32.9173 C 796.768 511.488 753.045 501.333 704 501.333 c -121.771 0 -229.131 76.2667 -270.432 188.693 c -2.73067 7.44533 -7.40267 20.32 -13.9947 38.5813 c -7.68 21.3013 -34.4533 28.1067 -51.3707 13.056 c -16.4373 -14.6347 -28.5547 -25.0667 -36.1387 -31.1467 A 222.891 222.891 0 0 0 192 661.333 c -14.464 0 -28.7253 1.36533 -42.6667 4.05333 V 768 a 53.3333 53.3333 0 0 0 53.3333 53.3333 h 618.667 a 53.3333 53.3333 0 0 0 53.3333 -53.3333 V 561.525 Z M 320 480 a 96 96 0 1 1 0 -192 a 96 96 0 0 1 0 192 Z m 0 -64 a 32 32 0 1 0 0 -64 a 32 32 0 0 0 0 64 Z"
                              p-id="3098"/>
                    </svg>
                    我的照片</a>
                <a href="./php/Logout.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1024 1024" width="15" height="15"
                         t="1584780849050" p-id="3417" version="1.1">
                        <path fill="#ffffff"
                              d="M 885.333 96 c 23.7867 0 39.2533 25.0347 28.6187 46.3147 a 7024.8 7024.8 0 0 0 -56.9173 116.235 A 424.853 424.853 0 0 1 938.667 509.589 c 0 235.637 -191.029 426.667 -426.667 426.667 s -426.667 -191.029 -426.667 -426.667 c 0 -235.648 191.029 -426.667 426.667 -426.667 a 424.939 424.939 0 0 1 196.544 47.872 C 762.453 107.573 821.483 96 885.333 96 Z m -164.235 99.3813 a 32 32 0 0 1 -29.696 -1.06667 A 360.821 360.821 0 0 0 512 146.933 c -200.299 0 -362.667 162.368 -362.667 362.667 c 0 200.288 162.368 362.667 362.667 362.667 s 362.667 -162.379 362.667 -362.667 a 360.96 360.96 0 0 0 -79.8507 -227.061 a 32 32 0 0 1 -4 -33.7067 a 5870.92 5870.92 0 0 1 41.3227 -85.5893 c -39.7867 4.97067 -76.768 15.7013 -111.04 32.1493 Z M 330.667 362.667 a 42.6667 42.6667 0 0 1 42.6667 42.6667 v 64 a 42.6667 42.6667 0 1 1 -85.3333 0 v -64 a 42.6667 42.6667 0 0 1 42.6667 -42.6667 Z m 170.667 0 a 42.6667 42.6667 0 0 1 42.6667 42.6667 v 64 a 42.6667 42.6667 0 1 1 -85.3333 0 v -64 a 42.6667 42.6667 0 0 1 42.6667 -42.6667 Z"
                              p-id="3418"/>
                    </svg>
                    登出</a></small>
        </div>
        <?php
        if (isset($_SESSION['UserName'])){
            echo "<script>
var login = document.getElementById('login-before');
var user = document.getElementById('user-center');
login.style.display = 'none';
user.style.display = 'block';
</script>";
        }else{
            echo "<script>
var login = document.getElementById('login-before');
var user = document.getElementById('user-center');
login.style.display = 'block';
user.style.display = 'none';
</script>";
        }
        ?>
    </nav>
</header>
<div class="container">
    <?php
    try {
        $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = 'select *  from travelimage where ImageID=:id';
        $id =  $_GET['id'];
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);

        $sql2 = 'select Country_RegionName  from geocountries_regions where ISO=:countryCode';
        $statement = $pdo->prepare($sql2);
        $statement->bindValue(':countryCode', $row['Country_RegionCodeISO']);
        $statement->execute();
        $row2 = $statement->fetch(PDO::FETCH_ASSOC);

        $sql3 = 'select AsciiName  from geocities where GeoNameID=:cityCode';
        $statement = $pdo->prepare($sql3);
        $statement->bindValue(':cityCode', $row['CityCode']);
        $statement->execute();
        $row3 = $statement->fetch(PDO::FETCH_ASSOC);

        $pdo = null;
    }
    catch (PDOException $e) {
        die( $e->getMessage() );
    }
    ?>
    <div class="box">
        <!--title and image-->
        <div class="detail-left">
            <div class="img-wrap">
                <h1><?php echo $row['Title']; ?></h1>
                <img src="../images/travel-images/medium/<?php echo $row['PATH']; ?>" >
            </div>
        </div>

        <!--collect and detail-->
        <div class="detail-right">
            <div class="right-wrap">
                <div class="detailbtn">
                    <?php
                    global $uid;
                    global $imageID;
                    $imageID = $id;
                    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql_user = "select *  from traveluser where UserName='{$_SESSION['UserName']}'";
                    $res = $pdo->query($sql_user);
                    $row_user = $res->fetch();
                    $uid = $row_user['UID'];
                    $sql = "select *  from travelimagefavor where UID='{$uid}' AND ImageID='{$imageID}'";
                    $res = $pdo->query($sql);
                    global $btn;
                    if (count($res->fetchAll())>0){
                        $btn = "取消收藏";
                    }else{
                        $btn = "收藏";
                    }
                    function constructButton(){
                        $link = '<a href="php/collect.php?id='.$GLOBALS['imageID'].'"><button id="collect">'.$GLOBALS['btn'].'</button></a>';
                        return $link;
                    }
                    function haveCollect(){
                        $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql_collect = "select * from travelimagefavor where ImageID=:id";
                        $id =  $_GET['id'];
                        $statement = $pdo->prepare($sql_collect);
                        $statement->bindValue(':id', $id);
                        $statement->execute();
                        $number = 0;
                        while ($row_have = $statement->fetch(PDO::FETCH_ASSOC)){
                            $number++;
                        }
                        echo '<label class="collect">已被收藏：'.$number.'</label>';
                        $pdo = null;
                    }
                    $pdo = null;
                    ?>
                    <?php echo constructButton();
                    haveCollect();
                    ?>
                </div>
                <div class="details">
                    <h3>详情</h3>
                    <label>主题：<?php echo $row['Content']; ?></label>
                    <label>拍摄国家：<?php echo $row2['Country_RegionName']; ?></label>
                    <label>拍摄城市：<?php
                        if (isset($row3['AsciiName'])) {
                            echo $row3['AsciiName'];
                        }
                        ?></label>
                    <div class="content">图片描述：<?php echo $row['Description']; ?></div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="footer-m">
        <div class="row">
            <div class="col">
                <p><strong>使用条款</strong></p>
                <p><strong>隐私保护</strong></p>
                <p><strong>Cookie</strong></p>
                <p><strong>关于</strong></p>
            </div>
            <div class="col"><p><strong>联系我们</strong></p>
                <p>QQ:2243563942</p>
                <p>电话：15152982637</p>
                <p>邮箱：19302010077@fudan.edu.cn</p></div>
            <div class="col">
                <img src="../images/QR%20code.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="copyright">
        <p class="footer-b">Copyright@2020 Web Fundamental.All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>