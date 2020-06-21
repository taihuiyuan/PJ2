<?php
function searchTitle(){
    $title = $_GET['content'];
    $search = $_GET['search'];
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "select ImageID, PATH from travelimage where Title like '%{$title}%'";
        $result = $pdo->query($sql);
        $num = 0;
        global $pictures;
        if ($result->rowCount() > 0) {
            while ($row = $result->fetch()) {
                $pictures[$num] = array(
                    $row['ImageID'], $row['PATH']
                );
                $num++;
            }
            showPages($pictures, $search, $title);
        } else {
            echo '未找到符合的图片';
        }
        $pdo = null;
}
function searchCountry(){
    $country = $_GET['content'];
    $search = $_GET['search'];
if(isset($_SESSION['UserName'])) {
    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql1 = "select * from geocountries_regions where Country_RegionName='$country'";
    $result1 = $pdo->query($sql1);
    $row1 = $result1->fetch();
    $countryCode = $row1['ISO'];
    $sql2 = "select * from travelimage where Country_RegionCodeISO='{$countryCode}'";
    $result2 = $pdo->query($sql2);
    $num = 0;
    global $pictures;
    if ($result2->rowCount() > 0) {
        while ($row = $result2->fetch()) {
            $pictures[$num] = array(
                $row['ImageID'], $row['PATH']
            );
            $num++;
        }
        showPages($pictures, $search, $country);
    } else {
        echo '未找到符合的图片';
    }
    $pdo = null;
}else{
    echo '<script>alert("请先登录！");history.back();</script>';
}
}
function searchCity(){
    $city = $_GET['content'];
    $search = $_GET['search'];
    if(isset($_SESSION['UserName'])) {
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql1 = "select * from geocities where AsciiName='$city'";
        $result1 = $pdo->query($sql1);
        $row1 = $result1->fetch();
        $sql2 = "select * from travelimage where CityCode='{$row1['GeoNameID']}'";
        $result2 = $pdo->query($sql2);
        $num = 0;
        global $pictures;
        if ($result2->rowCount() > 0) {
            while ($row = $result2->fetch()) {
                $pictures[$num] = array(
                    $row['ImageID'], $row['PATH']
                );
                $num++;
            }
            showPages($pictures, $search, $city);
        } else {
            echo '未找到符合的图片';
        }
        $pdo = null;
    }else{
        echo '<script>alert("请先登录！");history.back();</script>';
    }
}
function searchContent(){
    $content = $_GET['content'];
    $search = $_GET['search'];
if(isset($_SESSION['UserName'])) {
    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql1 = "select * from travelimage where Content='$content'";
    $result1 = $pdo->query($sql1);
    $num = 0;
    global $pictures;
    if ($result1->rowCount() > 0) {
        while ($row = $result1->fetch()) {
            $pictures[$num] = array(
                $row['ImageID'], $row['PATH']
            );
            $num++;
        }
        showPages($pictures, $search, $content);
    } else {
        echo '未找到符合的图片';
    }
    $pdo = null;
}else{
    echo '<script>alert("请先登录！");history.back();</script>';
}
}
function filter(){
    $country = $_GET['country'];
    $city = $_GET['city'];
    $content = $_GET['content'];
    $search = $_GET['search'];

    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($content == ""){
        if ($country == ""){
            $sql = "select * from travelimage";
        }else{
            $sql1 = "select * from geocountries_regions where Country_RegionName='$country'";
            $result1 = $pdo->query($sql1);
            $row1 = $result1->fetch();
            $countryCode = $row1['ISO'];
            if ($city == ""){
                $sql = "select * from travelimage where Country_RegionCodeISO='{$countryCode}'";
            }else{
                $sql2 = "select * from geocities where AsciiName='$city'";
                $result2 = $pdo->query($sql2);
                $row2 = $result2->fetch();
                $cityCode = $row2['GeoNameID'];
                $sql = "select * from travelimage where Country_RegionCodeISO='{$countryCode}' and CityCode='{$cityCode}'";
            }
        }
    }else{
        if ($country == ""){
            $sql = "select * from travelimage where Content='{$content}'";
        }else{
            $sql1 = "select * from geocountries_regions where Country_RegionName='$country'";
            $result1 = $pdo->query($sql1);
            $row1 = $result1->fetch();
            $countryCode = $row1['ISO'];
            if ($city == ""){
                $sql = "select * from travelimage where Country_RegionCodeISO='{$countryCode}' and Content='{$content}'";
            }else{
                $sql2 = "select * from geocities where AsciiName='$city'";
                $result2 = $pdo->query($sql2);
                $row2 = $result2->fetch();
                $cityCode = $row2['GeoNameID'];
                $sql = "select * from travelimage where Country_RegionCodeISO='{$countryCode}' and CityCode='{$cityCode}' and Content='{$content}'";
            }
        }
    }

    $result = $pdo->query($sql);
    $num = 0;
    $pictures = [];
    if ($result->rowCount() > 0) {
        while ($row = $result->fetch()) {
            $pictures[$num] = array(
                $row['ImageID'], $row['PATH']
            );
            $num++;
        }
        $contents = $content."&country=".$country."&city=".$city;
        showPages($pictures,$search,$contents);
    } else {
        echo '未找到符合的图片';
    }

    $pdo = null;
}
function getPictures(){
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select ImageID, PATH from travelimage";
    $result = $pdo-> query($sql);
    $num = 0;
    $pictures = [];
    while ($row = $result->fetch()) {
        $pictures[$num] = array(
            $row['ImageID'], $row['PATH']
        );
        $num++;
    }
    showPages($pictures,"none","all");
    $pdo = null;
}

function outputResults($row){
    echo '<div class="card">';
    constructLink($row['ImageID']);
    $img = '<img src="../images/travel-images/medium/' . $row['PATH'] . '" class = "images">';
    echo $img;
    echo "</a>";
    echo '</div>'; // end class=card
}
function constructLink($id) {
    if (isset($_SESSION['UserName'])) {
        echo '<a href="./details.php?id=' . $id . '">';
    }else{
        echo '<a onclick="judge()">';
        echo '<script>
function judge(){
alert("请先登录！");
history.go(-1);
}
        </script>';
    }
}

function showPages($pictures,$search,$content){
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $total = count((array)$pictures,0);
    $showImage = 15;
    $curpage = empty($_GET['page']) ? 1 : $_GET['page'];
    $url = "?search=".$search."&content=".$content."&page={page}";

    $count = 0;
    for ($i = 15 * $curpage - 15; $i < count((array)$pictures,0); $i++) {
        $sql = "select * from travelimage where ImageID={$pictures[$i][0]}";
        $result2 = $pdo->query($sql);
        if ($row2 = $result2->fetch()) {
            outputResults($row2);
        }
        $count++;
        if ($count == 15) {
            break;
        }
    }

    if (!empty($_GET['page']) && $total != 0 && $curpage > ceil($total / $showImage)) {
        $curpage = ceil($total / $showImage);
    }
    if ($total > $showImage) {//总记录数大于每页显示数
        $page = new page($total, $showImage, $curpage, $url, 5);
        echo $page->myde_write_href();
    }
    $pdo = null;
}
?>
