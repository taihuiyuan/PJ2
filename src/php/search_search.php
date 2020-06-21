<?php
function searchByTitle(){
    $title = $_GET['content'];
    $search = $_GET['search'];
$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "select ImageID, PATH, Title, Description from travelimage where Title like '%{$title}%'";
$result = $pdo-> query($sql);
$num = 0;
global $pictures;
if ($result->rowCount()>0) {
    while ($row = $result->fetch()) {
        $pictures[$num] = array(
            $row['ImageID'], $row['PATH'], $row['Title'], $row['Description'],
        );
        $num++;
    }
    showPage($pictures,$search,$title);
}else{
    echo '未找到符合的图片';
}
    $pdo = null;
}
function searchByDescription(){
    $description = $_GET['content'];
    $search = $_GET['search'];
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select ImageID, PATH, Title, Description from travelimage where Description like '%{$description}%'";
    $result = $pdo-> query($sql);
    $num = 0;
    global $pictures;
    if ($result->rowCount()>0) {
        while ($row = $result->fetch()) {
            $pictures[$num] = array(
                $row['ImageID'],$row['PATH'],$row['Title'],$row['Description'],
            );
            $num++;
        }
        showPage($pictures,$search,$description);
    }else{
        echo '未找到符合的图片';
    }
    $pdo = null;
}

function outputResults($row){
    echo '<div class="card">';
    constructLink($row['ImageID']);
    echo '<div class="image">';
    $img = '<img src="../images/travel-images/medium/' . $row['PATH'] . '" class = "images">';
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
function showPage($pictures,$search,$content){
    $pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $total = count((array)$pictures,0);
    $showImage = 3;
    $curpage = empty($_GET['page']) ? 1 : $_GET['page'];
    $url = "?search=".$search."&content=".$content."&page={page}";

    $count = 0;
    for ($i = 3 * $curpage - 3; $i < count((array)$pictures,0); $i++) {
        $sql = "select * from travelimage where ImageID={$pictures[$i][0]}";
        $result2 = $pdo->query($sql);
        if ($row2 = $result2->fetch()) {
            outputResults($row2);
        }
        $count++;
        if ($count == 3) {
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
