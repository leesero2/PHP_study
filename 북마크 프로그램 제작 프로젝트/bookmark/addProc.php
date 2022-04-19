<?php
    include "lib.php";

    $memo = $_POST['memo'];
    $memo = mysqli_real_escape_string($connect, $memo);

    //print_r($_POST);

    $list = explode('\r\n', $memo);

    //print_r($list);

    // echo $list[0];

    foreach($list as $url){
        $url = trim($url);
        if(!$url) continue; //공백부분 처리 소스, 값이 있는 부분만 처리 하게끔

        echo "<li>";
        echo $url;
        $query = "insert into bookmark(url, regdate) values('$url',now())";
        mysqli_query($connect,$query);
    }

Header("Loaction: index.php"); //index화면으로 돌아가는 소스