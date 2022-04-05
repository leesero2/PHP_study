<?php
    $fp = fopen("memo.txt","a");

    $now = date("Y-m-d H:i:s"); // 이 메서드는 2022-04-05 이런식으로 들어감 뒤에 H:i:s는 초까지 기록이됨

    $content = $_REQUEST['name']."///".$_REQUEST['email']."///".$_REQUEST['memo']."///".$now."\r\n";
    // "\r\n" - 줄바꾸기 기호
    //memo.txt에 저장되는 내용이 줄바꿈이되서 저장이 됨

    echo $content; //'이지훈///huny10000@naver.com///안녕하세요 저는 이지훈이라고 합니다' 출력이됨

    fwrite($fp,$content); //memo.txt에 내용이 작성됨
    
    //print_r($_REQUEST); 어떤 값을 받는지 확인하기 위해 잠시 적음

    fclose($fp);
?>

<script>
    location.href='memo.php'; //작성후 memo.php로 다시 이동하라는 소스
</script>