<?php
    include "lib.php";

    $memo = $_POST['memo'];
    $memo = mysqli_real_escape_string($connect, $idx);

    //print_r($_POST);

    $list = explode('\r\n', $memo);

    //print_r($list);

    // echo $list[0];

    foreach($list as $url){
        echo "<li>";
        echo $url;
        $query = "insert into bookmark(url, regdate) values('$url',now())";
        mysqli_query($connect,$query);
    }