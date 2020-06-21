<?php
session_start();
include('./config.php');
    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $filename=$_FILES['file']['name'];
    $type=$_FILES['file']['type'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $size=$_FILES['file']['size'];
    $error=$_FILES['file']['error'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $content = $_POST['content'];

    if ($title == "" || $description == "" || $country == "" || $city == "" || $content == "") {
        echo '<script>alert("信息不完整！");history.back();</script>';
    }else {
        $sql_country = "select * from geocountries_regions where Country_RegionName = '{$country}'";
        $result_country = $pdo->query($sql_country);
        $row_country = $result_country->fetch();
        $countryCode = $row_country['ISO'];

        $sql_city = "select * from geocities where AsciiName = '{$city}'";
        $result_city = $pdo->query($sql_city);
        $row_city = $result_city->fetch();
        $cityCode = $row_city['GeoNameID'];

        $sql_name = "select * from traveluser where UserName='{$_SESSION['UserName']}'";
        $result1 = $pdo->query($sql_name);
        $row_user = $result1->fetch();
        $uid = $row_user['UID'];

        //保存文件名到文件夹中
        move_uploaded_file($tmp_name,"../../images/travel-images/medium/upfiles/".$filename);
        $a = "../../images/travel-images/medium/upfiles/".$filename;
        $filePath  = array();//文件路径数组
        function traverse($path = '.') {
            global $filePath;//得到外部定义的数组
            $current_dir = opendir($path);    //opendir()返回一个目录句柄,失败返回false
            while(($file = readdir($current_dir)) !== false) {    //readdir()返回打开目录句柄中的一个条目
                $sub_dir = $path . DIRECTORY_SEPARATOR . $file;    //构建子目录路径
                if($file == '.' || $file == '..') {
                    continue;
                }else if(is_dir($sub_dir)) {    //如果是目录,进行递归
//                echo 'Directory ' . $file . ':';  //如果是文件夹，输出文件夹名称
                    traverse($sub_dir); //嵌套遍历子文件夹
                }else{    //如果是文件,直接输出路径和文件名
//                echo  '../' . $file .'<br/>';
                    $filePath[$path . '/' . $file] = '../../images/travel-images/medium/upfiles/' . $file;//把文件路径赋值给数组

                }
            }
            return $filePath;
        }
        $array = traverse("../../images/travel-images/medium/upfiles");

        $sql = "select * from travelimage";
        $result1 = $pdo->query($sql);
        $repeat = false;
        while ($row=$result1->fetch()){
            if ($row['PATH'] === "upfiles/".$filename){
                $repeat = true;
            }
        }

        if ($repeat){
            echo '<script>alert("已上传该图片！");history.back();</script>';
        }else {
            $sql_max = "select max(ImageID) from travelimage";
            $result_max = $pdo->query($sql_max);
            $row=$result_max->fetch();
            $imageId = (int)$row[0]+1;

            $sql = "insert into travelimage(ImageID,UID,Title,PATH,Description, CityCode,Country_RegionCodeISO,Content) values('$imageId','$uid','$title','upfiles/$filename','$description','$cityCode','$countryCode','$content')";
            $res = $pdo->query($sql); //添加
            echo '<script>alert("上传成功!");location.href = "../photo.php";</script>';
        }
    }
    $pdo = null;