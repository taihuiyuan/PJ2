<?php session_start();
require_once ("./php/config.php");
require_once ('./php/page.php');
require_once ('./php/search_browser.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no"/>
    <title>旅游图片分享平台</title>
    <link rel="stylesheet" type="text/css" href="./css/reset.css" media="all">
    <link rel="stylesheet" type="text/css" href="./css/footer.css" media="all">
    <link rel="stylesheet" type="text/css" href="./css/browser.css" media="all">
    <link rel="stylesheet" type="text/css" href="./css/header.css" media="all">
    <link rel="stylesheet" type="text/css" href="./css/page.css" media="all">
    <script src="js/city.js"></script>
</head>
<body>
<header>
    <nav>
        <ul class="top-head">
            <li><a href="../Index.php">首页</a></li>
            <li><a class="active">浏览</a></li>
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
<script>
    <?php
    //连接数据库
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    ?>
    window.onload = function () {
// 设置二级联动中的选项数组
        var country_array = [];
        var city_array = [];
        <?php
        $country1 = Array();
        $country2 = Array();
        $sql='select * from geocountries_regions order by convert(Country_RegionName using utf8mb4)';
        $rs=$pdo->query($sql);
        $num = 0;
        while($rows=$rs->fetch()){
            $country1[$num] = $rows['ISO'];
            $country2[$num] = $rows['Country_RegionName'];
            $num++;
        }

        $city = Array();
        for ($i = 0;$i<count($country1);$i++){
            $sql="select * from geocities where Country_RegionCodeISO='{$country1[$i]}' order by convert(AsciiName using utf8mb4)";
            $rs=$pdo->query($sql);
            $num_city = 0;
            while($rows=$rs->fetch()){
                $city[$i][$num_city] = $rows['AsciiName'];
                $num_city++;
            }
        }
        $new_country = json_encode($country2);
        $new_city = json_encode($city);
        ?>
        country_array = <?php echo $new_country;?>;
        city_array = <?php echo $new_city;?>;

// 获取页面中的选项卡
        var countries = document.getElementById('first');
        var cities = document.getElementById('second');

// 给第一个选项卡中的option赋值
        countries.options.length = country_array.length+1;
        countries.options[0].text = "请选择国家";
        countries.options[0].value = "";
        for (var i = 0; i < country_array.length; i++) {
            countries.options[i+1].text = country_array[i];
            countries.options[i+1].value = country_array[i];
        }

// 初始化第二个选项卡，默认显示第一个
        cities.options.length = 1;
        cities.options[0].text = "请选择城市";
        cities.options[0].value = "";

// 通过onchange监视函数，一旦第一个选项卡发生变化，第二个选项卡中的内容也跟着变化
        countries.onchange = function () {
            cities.options.length = city_array[this.selectedIndex-1].length+1;
            cities.options[0].text = "请选择城市";
            cities.options[0].value = "";
            for (var j = 0; j < cities.options.length-1; j++) {
                cities.options[j+1].text = city_array[this.selectedIndex-1][j];
                cities.options[j+1].value = city_array[this.selectedIndex-1][j];
            }
        }
    };
    <?php $pdo = null;?>
</script>
<div class="content">
    <!--banner background and search by title-->
    <figure class="banner">
        <img src="../images/banner.jpg" alt="">
        <div class="search">
            <form action="?search=searchTitle" method="post">
            <div class="search-title">
                <span class="search-title-content">标题</span>
            </div>
                <input class="search-ipt" type="text" id="search-ipt" name="search-ipt">
            <button class="search-btn" id="search-btn" name="search-btn">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 1024 1024" width="32" height="32"
                     t="1585214733692" p-id="5911" version="1.1">
                    <path fill="#ffffff"
                          d="M 947.745 897.158 L 759.849 709.268 c 56.7577 -68.2228 90.8972 -155.919 90.8972 -251.601 c 0 -217.397 -176.237 -393.634 -393.638 -393.634 c -217.397 0 -393.634 176.237 -393.634 393.634 c 0 217.402 176.237 393.639 393.634 393.639 c 96.7249 0 185.294 -34.8866 253.827 -92.7596 l 187.712 187.711 c 6.77531 6.78247 15.6586 10.1696 24.546 10.1696 c 8.8823 0 17.7687 -3.39124 24.5512 -10.1696 C 961.299 932.702 961.299 910.718 947.745 897.158 L 947.745 897.158 Z M 457.108 781.869 c -43.7965 0 -86.2453 -8.56098 -126.168 -25.4476 c -38.6001 -16.3269 -73.28 -39.7145 -103.075 -69.5091 c -29.7997 -29.7977 -53.1812 -64.4755 -69.5081 -103.074 c -16.8876 -39.9243 -25.4476 -82.3762 -25.4476 -126.174 c 0 -43.7975 8.55996 -86.2463 25.4476 -126.174 c 16.3279 -38.594 39.7094 -73.2738 69.5081 -103.069 c 29.7946 -29.7997 64.4744 -53.1874 103.075 -69.5081 c 39.9222 -16.8876 82.371 -25.4476 126.168 -25.4476 s 86.2494 8.55996 126.174 25.4476 c 38.5971 16.3217 73.2779 39.7084 103.073 69.5081 c 29.7946 29.7956 53.1822 64.4703 69.5091 103.069 c 16.8866 39.9243 25.4486 82.3762 25.4486 126.174 c 0 43.7965 -8.562 86.2494 -25.4486 126.174 c -16.3269 38.5981 -39.7094 73.2749 -69.5091 103.074 c -29.7936 29.7946 -64.4755 53.1822 -103.073 69.5091 C 543.357 773.308 500.905 781.869 457.108 781.869 L 457.108 781.869 Z M 457.108 781.869"
                          p-id="5912"/>
                </svg>
            </button>
            </form>
        </div>
    </figure>

    <div class="box">
        <!--hot country/city/content are in the right-->
        <div class="right">
            <div class="hot">
                <h3>热门国家地区</h3>
                <div class="list">
                    <?php
                    function getCountries(){
                        $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "select * from geocountries_regions order by Population desc ";
                        $result = $pdo-> query($sql);
                        $country_number = 0;
                        while ($row = $result->fetch()) {
                            $country_number++;
                            outputCountries($row);
                            if ($country_number == 4){
                                break;
                            }
                        }
                        $pdo = null;
                    }

                    function outputCountries($row) {
                        if (isset($_GET['search']) && $_GET['search'] == "country" && $_GET['content']==$row['Country_RegionName']){
                            $countryClass = "now";
                        }else{
                            $countryClass = "";
                        }
                        echo '<a href="browser.php?search=country&content='.$row['Country_RegionName'].'">';
                        echo '<button class="'.$countryClass.'">';
                        echo $row['Country_RegionName'];
                        echo '</button>';
                        echo '</a>';

                    }
                    ?>
                    <?php getCountries(); ?>
                </div>
            </div>
            <div class="hot">
                <h3>热门城市</h3>
                <div class="list">
                    <?php
                    function getCities(){
                        $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "select AsciiName from geocities order by Population desc ";
                        $result = $pdo-> query($sql);
                        $city_number = 0;
                        while ($row = $result->fetch()) {
                            $city_number++;
                            outputCities($row);
                            if ($city_number == 4){
                                break;
                            }
                        }
                        $pdo = null;
                    }

                    function outputCities($row) {
                        if (isset($_GET['search']) && $_GET['search'] == "city" && $_GET['content']==$row['AsciiName']){
                                $cityClass = "now";
                        }else{
                            $cityClass = "";
                        }
                        echo '<a href="browser.php?search=city&content='.$row['AsciiName'].'">';
                        echo '<button class="'.$cityClass.'">';
                        echo $row['AsciiName'];
                        echo '</button>';
                        echo '</a>';

                    }
                    ?>
                    <?php getCities(); ?>
                </div>
            </div>
            <div class="hot">
                <h3>热门主题</h3>
                <div class="list">
                    <?php
                    function getContents(){
                        $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "select distinct Content from travelimage order by Content ";
                        $result = $pdo-> query($sql);
                        $content_number = 0;
                        while ($row = $result->fetch()) {
                            $content_number++;
                            outputContents($row);
                            if ($content_number == 4){
                                break;
                            }
                        }
                        $pdo = null;
                    }

                    function outputContents($row) {
                        if (isset($_GET['search']) && $_GET['search'] == "content" && $_GET['content']==$row['Content']){
                            $contentClass = "now";
                        }else{
                            $contentClass = "";
                        }
                        echo '<a href="browser.php?search=content&content='.$row['Content'].'">';
                        echo '<button class="'.$contentClass.'">';
                        echo $row['Content'];
                        echo '</button>';
                        echo '</a>';
                    }
                    ?>
                    <?php getContents(); ?>
                </div>
            </div><!--class = hot-->
        </div><!--class = right-->

        <!--filter and result are in the left-->
        <div class="view">
            <div class="filter">
                <form action="?search=filter"  method="post">
                <select name="content">
                    <option selected value="">请选择主题</option>
                    <option value="scenery">scenery</option>
                    <option value="people">people</option>
                    <option value="animal">animal</option>
                    <option value="building">building</option>
                    <option value="city">city</option>
                    <option value="wonder">wonder</option>
                    <option value="other">other</option>
                </select>
                <select name="country" id="first"></select>
                <select name="city" id="second"></select>
                <button>筛选</button>
                </form>
            </div>
            <div class="result">
                <?php
                if (isset($_GET['search']) && $_GET['search'] == "searchTitle"){
                    if (isset($_SESSION['UserName'])) {
                    if ($_POST['search-ipt'] == "") {
                        echo '<script>alert("请输入内容！");history.go(-1);</script>';
                    } else {
                        echo '<script>location.href="browser.php?search=title&content=' . $_POST['search-ipt'] . '";</script>';
                    }
                    }else{
                        echo '<script>alert("请先登录！");history.back();</script>';
                    }
                }else if (isset($_GET['search']) && $_GET['search'] == "title"){
                    searchTitle();
                }else if (isset($_GET['search']) && $_GET['search'] == "country"){
                    searchCountry();
                }else if (isset($_GET['search']) && $_GET['search'] == "city"){
                    searchCity();
                }else if (isset($_GET['search']) && $_GET['search'] == "content"){
                    searchContent();
                }else if (isset($_GET['search']) && $_GET['search'] == "filter"){
                if (isset($_SESSION['UserName'])) {
                    echo '<script>location.href="browser.php?search=filter_result&content=' . $_POST['content'] . '&country='.$_POST['country'].'&city='.$_POST['city'].'";</script>';
                }else{
                    echo '<script>alert("请先登录！");history.back();</script>';
                }
                }else if (isset($_GET['search']) && $_GET['search'] == "filter_result"){
                    filter();
                }else{
                    getPictures();
                }
                ?>
            </div>
        </div><!--class = view-->
    </div><!--class = box-->
</div><!--class = content-->

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