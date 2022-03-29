<?php
    //환경변수에 대한 설명


    echo $_GET; //GET메소드를 출력하고싶지만 에러가 발생함 (원래 에러가 발생해야하는데 업데이트를 했는지 에러표시가 안남)
    //출력을 하고싶다면 print_r()을 사용하면됨
    ?>
    <?php
    //주소에 http://localhost/2.php?korea=123 를 입력하면
    print_r($_GET); 
    //Array ( [korea] => 123 ) 가 출력됨
    //korea에는 123이라는 변수가 있다 라는것을 알 수 있음
    ?>

    <?php
    //print_r($_SERVER);

    echo $_SERVER['HTTP_USER_AGENT'];
    //사용자가 어떤 운영체제,어떤기반의 웹 브라우저를 사용하는지 확인가능

    phpinfo(); //php에 대한 정보를 나타냄
    ?>