<?php
    function info($name, $age){
        echo "이름 : ".$name;
        echo "<br>";
        echo "나이 : ".$age;
        echo "<br>";
    }
    info("지훈",25);
    //출력결과 
    //이름 : 지훈
    //나이 : 25

    info("다훈",24);
    info("지훈",25);
    //이러면 다른 언어들처럼 함수가 두번 호출함

    