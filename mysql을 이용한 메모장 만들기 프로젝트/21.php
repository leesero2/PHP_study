<?php
    include "21Lib.php";

    $query = "insert into memo(name,memo,regdate) values('이지훈','안녕하세요','2022-04-07 18:55:00')";
    //insert는 해석 그대로 데이터를 삽입함
    //idx는 프라이머리키로 지정해서 따로 지정안해줘도됨

    mysqli_query($connect, $query);
