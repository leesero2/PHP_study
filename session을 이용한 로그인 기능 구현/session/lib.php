<?php
    session_start();
    // error_reporting(1);
    // ini_set("display_errors",1);
    //이렇게 작성하면 warning에러가 발생하지 않음

    $connect = mysqli_connect("localhost","korea","korea123","korea");
    //순서대로 데이터베이스 호스트, 아이디, 비밀번호, 데이터베이스명 순으로 작성해야함 

    // print_r($connect); 잘 되었는지 확인

    //만약 아이디 및 패스워드가 옳지 않아서 에러가 발생했을때
    if(mysqli_connect_error()){
        echo "mysql 접속중 오류가 발생하였습니다.";
        echo mysqli_connect_error(); //어떤 에러가 발생했는지 출력해줌
    }

    ?>