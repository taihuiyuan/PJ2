<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no"/>
    <title>旅游图片分享平台</title>
    <link rel="stylesheet" type="text/css" href="./src/css/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="./src/css/Home.css" media="all">
    <link rel="stylesheet" type="text/css" href="./src/css/header.css" media="all">
    <link rel="stylesheet" type="text/css" href="./src/css/footer.css" media="all">
</head>
<body>
<header>
    <nav>
        <ul class="top-head">
            <li><a class="active">首页</a></li>
            <li><a href="src/browser.php">浏览</a></li>
            <li><a href="src/search.php">搜索</a></li>
        </ul>
        <ul class="login-before" id="login-before" style="display: none">
            <li><a href="./src/Login.html">登录</a></li>
            <li><a href="./src/register.html">注册</a></li>
        </ul>
        <div class="user-center" style="display: none" id="user-center">
            <button class="dropbtn">个人中心 ▼</button>
            <small class="dropdown-content">
                <a href="src/upload.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1024 1024" width="15" height="15"
                         t="1584780263036" p-id="2749" version="1.1">
                        <path fill="#ffffff"
                              d="M 565.333 779.915 l 51.4453 -54.912 a 31.7333 31.7333 0 0 1 45.2267 -1.22667 a 32.64 32.64 0 0 1 1.216 45.7707 l -97.4187 104 a 37.0347 37.0347 0 0 1 -52.8213 1.39733 l -108.363 -104.203 a 32.64 32.64 0 0 1 -1.152 -45.7707 a 31.7333 31.7333 0 0 1 45.248 -1.17333 L 501.333 774.421 V 512.075 c 0 -17.8773 14.3253 -32.3733 32 -32.3733 s 32 14.5067 32 32.3733 v 267.84 Z M 512 138.667 c 123.019 0 228.213 86.7093 259.424 206.88 C 864.299 347.147 938.667 426.091 938.667 522.688 c 0 97.6 -75.9147 177.173 -170.133 177.173 c -17.6747 0 -32 -14.496 -32 -32.3733 c 0 -17.8773 14.3253 -32.3733 32 -32.3733 c 58.3573 0 106.133 -50.08 106.133 -112.427 c 0 -62.336 -47.776 -112.416 -106.133 -112.416 c -5.856 0 -11.6267 0.501333 -17.3013 1.48267 c -17.6213 3.05067 -34.304 -9.09867 -37.024 -26.9867 C 698.347 280.693 612.715 203.424 512 203.424 c -73.8347 0 -140.928 41.536 -177.376 107.861 a 31.9147 31.9147 0 0 1 -30.1227 16.576 a 140.373 140.373 0 0 0 -9.568 -0.32 c -80.1493 0 -145.6 68.5867 -145.6 153.781 c 0 85.184 65.4507 153.792 145.6 153.792 c 17.6747 0 32 14.496 32 32.3733 c 0 17.8773 -14.3253 32.3733 -32 32.3733 C 178.912 699.861 85.3333 601.771 85.3333 481.323 c 0 -118.315 90.2933 -215.061 203.456 -218.453 C 338.091 186.24 421.013 138.667 512 138.667 Z"
                              p-id="2750"/>
                    </svg>
                    上传照片</a>
                <a href="src/favorite.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1024 1024" width="15" height="15"
                         t="1584780673462" p-id="2923" version="1.1">
                        <path fill="#ffffff"
                              d="M 335.008 916.629 c -35.9147 22.3147 -82.88 10.7733 -104.693 -25.5573 a 77.3333 77.3333 0 0 1 -8.96 -57.4293 l 46.4853 -198.24 a 13.1413 13.1413 0 0 0 -4.02133 -12.864 l -152.16 -132.587 c -31.6053 -27.52 -35.2533 -75.648 -8.23467 -107.733 a 75.68 75.68 0 0 1 51.7333 -26.752 L 354.848 339.2 c 4.352 -0.362667 8.24533 -3.232 10.0267 -7.59467 l 76.9387 -188.171 c 16.032 -39.2 60.6187 -57.92 99.52 -41.4613 a 76.3093 76.3093 0 0 1 40.832 41.4613 l 76.9387 188.16 c 1.78133 4.37333 5.67467 7.25333 10.0267 7.60533 l 199.712 16.2773 c 41.8773 3.41333 72.8853 40.4587 69.568 82.5173 a 76.9387 76.9387 0 0 1 -26.08 51.9787 l -152.16 132.587 c -3.54133 3.08267 -5.14133 8.07467 -4.02133 12.8533 l 46.4853 198.24 c 9.62133 41.0133 -15.36 82.336 -56.1387 92.224 a 75.2853 75.2853 0 0 1 -57.5253 -9.23733 l -170.976 -106.24 a 11.296 11.296 0 0 0 -12.0107 0 l -170.987 106.24 Z M 551.787 756.032 l 170.976 106.24 c 2.624 1.62133 5.71733 2.12267 8.65067 1.408 c 6.41067 -1.55733 10.56 -8.42667 8.928 -15.424 l -46.4853 -198.24 a 77.1413 77.1413 0 0 1 24.2773 -75.7333 L 870.293 441.707 c 2.48533 -2.16533 4.05333 -5.312 4.33067 -8.74667 c 0.565333 -7.136 -4.49067 -13.1733 -10.976 -13.696 l -199.712 -16.288 a 75.9893 75.9893 0 0 1 -64.064 -47.168 l -76.9387 -188.16 a 12.3093 12.3093 0 0 0 -6.53867 -6.74133 c -5.89867 -2.496 -12.7253 0.373333 -15.328 6.74133 l -76.9493 188.16 a 75.9893 75.9893 0 0 1 -64.064 47.168 l -199.701 16.288 a 11.68 11.68 0 0 0 -7.97867 4.18133 a 13.2267 13.2267 0 0 0 1.33333 18.2613 l 152.16 132.587 a 77.1413 77.1413 0 0 1 24.2773 75.7333 l -46.4853 198.229 a 13.3333 13.3333 0 0 0 1.51467 9.87733 c 3.488 5.792 10.5813 7.53067 16.064 4.128 l 170.987 -106.229 a 75.296 75.296 0 0 1 79.5627 0 Z"
                              p-id="2924"/>
                    </svg>
                    我的收藏</a>
                <a href="src/photo.php">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1024 1024" width="15" height="15"
                         t="1584780752907" p-id="3097" version="1.1">
                        <path fill="#ffffff"
                              d="M 938.667 553.92 V 768 c 0 64.8 -52.5333 117.333 -117.333 117.333 H 202.667 c -64.8 0 -117.333 -52.5333 -117.333 -117.333 V 256 c 0 -64.8 52.5333 -117.333 117.333 -117.333 h 618.667 c 64.8 0 117.333 52.5333 117.333 117.333 v 297.92 Z m -64 -74.624 V 256 a 53.3333 53.3333 0 0 0 -53.3333 -53.3333 H 202.667 a 53.3333 53.3333 0 0 0 -53.3333 53.3333 v 344.48 A 290.091 290.091 0 0 1 192 597.333 a 286.88 286.88 0 0 1 183.296 65.8453 C 427.029 528.384 556.907 437.333 704 437.333 c 65.7067 0 126.997 16.7787 170.667 41.9627 Z m 0 82.24 c -5.33333 -8.32 -21.1307 -21.6533 -43.648 -32.9173 C 796.768 511.488 753.045 501.333 704 501.333 c -121.771 0 -229.131 76.2667 -270.432 188.693 c -2.73067 7.44533 -7.40267 20.32 -13.9947 38.5813 c -7.68 21.3013 -34.4533 28.1067 -51.3707 13.056 c -16.4373 -14.6347 -28.5547 -25.0667 -36.1387 -31.1467 A 222.891 222.891 0 0 0 192 661.333 c -14.464 0 -28.7253 1.36533 -42.6667 4.05333 V 768 a 53.3333 53.3333 0 0 0 53.3333 53.3333 h 618.667 a 53.3333 53.3333 0 0 0 53.3333 -53.3333 V 561.525 Z M 320 480 a 96 96 0 1 1 0 -192 a 96 96 0 0 1 0 192 Z m 0 -64 a 32 32 0 1 0 0 -64 a 32 32 0 0 0 0 64 Z"
                              p-id="3098"/>
                    </svg>
                    我的照片</a>
                <a href="./src/php/Logout.php">
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

<div class="content">
    <figure class="banner">
        <img src="./images/banner.jpg" alt="">
    </figure>
    <div class="floor">
        <?php
        require_once ("./src/php/config.php");
        function getPictures(){
            $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql_check = "select count(*), ImageID from travelimagefavor group by ImageID order by count(*) desc ";
            $result_check = $pdo-> query($sql_check);
            $number = 0;
                while ($row = $result_check->fetch()) {
                    $sql = "select ImageID, Title, Description, PATH from travelimage where ImageID='{$row['ImageID']}'";
                    $result = $pdo->query($sql);
                    if ($row = $result->fetch()) {
                        $number++;
                        outputSingleGenre($row);
                    }
                    if ($number === 8) {
                        break;
                    }
                }
                if ($number<8) {
                        $sql1 = "select ImageID, Title, Description, PATH from travelimage";
                        $result = $pdo->query($sql1);
                        while ($row1 = $result->fetch()){
                            $sql2 = "select ImageID from travelimagefavor where ImageID='{$row1['ImageID']}'";
                            $result2 = $pdo->query($sql2);
                            if (!$row2 = $result2->fetch()){
                                outputSingleGenre($row1);
                                $number++;
                            }
                            if ($number === 8) {
                                break;
                            }
                        }

                }

            $pdo = null;
        }

        function outputSingleGenre($row) {
            echo '<div class="card">';
            constructGenreLink($row['ImageID']);
            echo '<div class="box">';
            echo '<div class="image">';
            $img = '<img src="./images/travel-images/medium/' .$row['PATH'] .'" class = "images">';
            echo $img;
            echo '</div>';
            echo '<div class="text">';
            echo '<p class="p1">';
            echo $row['Title'];
            echo '</p>';
            echo '<p class="p2">';
            echo $row['Description'];
            echo '</p>';
            echo '</div>'; // end class=text
            echo '</div>'; // end class=box
            echo "</a>";
            echo '</div>'; // end class=card
        }

        function constructGenreLink($id) {
            if (isset($_SESSION['UserName'])) {
                echo '<a href="./src/details.php?id=' . $id . '" class="details">';
            }else{
                echo '<a onclick="judge()">';
                echo '<script>
function judge(){
alert("请先登录！");
}
        </script>';
            }
        }
        ?>
        <?php getPictures(); ?>

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
                <img src="./images/QR%20code.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="copyright">
        <p class="footer-b">Copyright@2020 Web Fundamental.All Rights Reserved.</p>
    </div>
</footer>

<div class="back-up"><a href="javascript:scroll(0,0)">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1024 1024" width="45" height="45"
             t="1584875960518" p-id="3061" version="1.1">
            <path fill="#8a8a8a"
                  d="M 509.44 267.52 C 504.32 262.4 498.56 259.84 492.8 258.56 C 488.96 256.64 484.48 256 480 256 S 471.04 256.64 467.2 258.56 C 461.44 259.84 455.68 262.4 450.56 267.52 l -313.6 313.6 c -14.08 14.08 -14.08 35.84 0 49.92 c 14.08 14.08 35.84 14.08 49.92 0 L 448 369.92 l 0 558.08 C 448 945.92 462.08 960 480 960 S 512 945.92 512 928 L 512 369.92 l 261.12 261.12 c 14.08 14.08 35.84 14.08 49.92 0 c 14.08 -14.08 14.08 -35.84 0 -49.92 L 509.44 267.52 Z M 864 128 l -768 0 C 78.08 128 64 142.08 64 160 C 64 177.92 78.08 192 96 192 l 768 0 C 881.92 192 896 177.92 896 160 C 896 142.08 881.92 128 864 128 Z"
                  p-id="3062"/>
        </svg>
    </a>
</div>
<div class="refresh"><a onclick="refresh()">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1024 1024" width="45" height="45"
             t="1584876204132" p-id="2617" version="1.1">
            <path fill="#8a8a8a"
                  d="M 822.496 473.152 a 32 32 0 0 0 -31.392 55.776 l 97.4507 54.848 c 20.32 11.4347 45.6533 -2.00533 47.5947 -25.248 c 1.67467 -20.16 2.51733 -35.5733 2.51733 -46.528 C 938.667 276.363 747.637 85.3333 512 85.3333 S 85.3333 276.363 85.3333 512 s 191.029 426.667 426.667 426.667 c 144.107 0 276.053 -72.032 354.752 -189.536 a 32 32 0 1 0 -53.1733 -35.616 C 746.645 813.461 634.539 874.667 512 874.667 c -200.299 0 -362.667 -162.368 -362.667 -362.667 s 162.368 -362.667 362.667 -362.667 c 197.099 0 357.472 157.227 362.539 353.109 l -52.0427 -29.2907 Z"
                  p-id="2618"/>
        </svg>
    </a>
</div>
    <?php
        function getAllImages()
        {
            if (isset($_SESSION['UserName'])) {
                $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "select ImageID, PATH, Title, Description from travelimage order by rand()";
                $result = $pdo->query($sql);
                $pictures = array();
                $number = 0;
                while ($row = $result->fetch()) {
                    $pictures[$number] = array(
                        $row['ImageID'], $row['PATH'], $row['Title'], $row['Description'],
                    );
                    $number++;
                }
                $new_pictures = json_encode($pictures);
                $pdo = null;
                return $new_pictures;
            }else{
                return json_encode(["log"]);
            }
        }
    ?>
<script>
function refresh() {
    var pictures = [];
    var images = document.getElementsByClassName("images");
    var details = document.getElementsByClassName("details");
    var titles = document.getElementsByClassName("p1");
    var descriptions = document.getElementsByClassName("p2");
    pictures = <?php echo getAllImages();?>;
    if (pictures[0] === "log"){
        alert("请先登录！");
    }else {
        var num = randUnique(0, pictures.length - 1, 8);
        for (let i = 0; i < images.length; i++) {
            details[i].href = './src/details.php?id=' + pictures[num[i]][0];
            images[i].src = './images/travel-images/medium/' + pictures[num[i]][1];
            titles[i].innerHTML = pictures[num[i]][2];
            descriptions[i].innerHTML = pictures[num[i]][3];

        }
    }
}

function randUnique(start, end, size){
    // 全部随机数值
    var allNums = [];
    // 判断获取随机数个数
    size = size ? (size > end - start ? end - start : size) : 1;
    // 生成随机数值区间数组
    for (var i = start, k = 0; i <= end; i++, k++) {
        allNums[k] = i;
    }
    // 打撒数组排序
    allNums.sort(function(){ return 0.5 - Math.random(); });
    // 获取数组从第一个开始到指定个数的下标区间
    return allNums.slice(0, size);
}
</script>


</body>
</html>
