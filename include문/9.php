<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        윤딴딴 - 휴가철 도로위 <br>
        막히는 자동차 안에서 우린 아무말이 없었지 ~
</div>

<?php
//include는 말 그대로 include가 선언한 파일의 내용을 출력하는 함수
//똑같은 함수로 require가 있음

    //require "9_1.php"; - 이것도 include랑 기능은 똑같음
    include "9_1.php";
    ?>

    <div>
        가끔 마주보고 웃었지 ~ 
</div>
    <?php
    //include_once는 once뜻 그대로 첫번째만 실행시키고 그뒤론 안나옴
    //require_once도 똑같음 

    //require_once "9_1.php"; - 똑같음 
    include_once "9_1.php";
    ?>

</body>
</html>