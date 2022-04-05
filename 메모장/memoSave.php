<?php
    $fp = fopen("memo.txt","a");

    $content = $_REQUEST['name']."///".$_REQUEST['email']."///".$_REQUEST['memo']."\r\n";
    // "\r\n" - 줄바꾸기 기호

    echo $content; //'이지훈///huny10000@naver.com///안녕하세요 저는 이지훈이라고 합니다' 출력이됨

    fwrite($fp,$content); //memo.txt에 내용이 작성됨
    
    //print_r($_REQUEST); 어떤 값을 받는지 확인하기 위해 잠시 적음

    fclose($fp);