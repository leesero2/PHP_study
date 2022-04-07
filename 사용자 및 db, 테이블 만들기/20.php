<?php
    //warning에러는 작동되는데 문제가 되진않음 다만, 계속 화면에 출력됨.
    //에러가 났다고 표시만 하고싶은데 warning이랑 같이 표기된다면 아래 소스를 작성하면됨.

    error_reporting(1);
    ini_set("display_errors",1);
    //이렇게 작성하면 warning에러가 발생하지 않음

    $connect = mysqli_connect("localhost","korea","korea123","korea");
    //순서대로 데이터베이스 호스트, 아이디, 비밀번호, 데이터베이스명 순으로 작성해야함 

    //만약 아이디 및 패스워드가 옳지 않아서 에러가 발생했을때
    if(mysqli_connect_error()){
        echo "mysql 접속중 오류가 발생하였습니다.";
        echo mysqli_connect_error(); //어떤 에러가 발생했는지 출력해줌
    }

    $query = "select * from memo"; //메모 테이블을 선택 후 $query 변수에 저장
    
    //데이터베이스 내용은 사진으로 첨부함

    $result = mysqli_query($connect,$query);

    //print_r($result); // 결과 - mysqli_result Object ( [current_field] => 0 [field_count] => 4 [lengths] => [num_rows] => 1 [type] => 0 )
    
    $a = mysqli_fetch_assoc($result); //데이터베이스 테이블안의 값을 배열로 전환해서 출력시켜주는 함수
    //print_r($a); //Array ( [No] => 1 [001] => 2 [002] => 3 [003] => 4 ) 1 첫번째 줄 데이터베이스 값이 출력됨

    echo $a[No]; //배열안의 주소값은 테이블 이름을 넣어야함
    echo $a[a];
    echo $a[b];
    echo $a[c];
    //테이블 이름을 숫자로 했더니 출력이 안됨. 연구 필요

    echo "<hr>";
    //데이터 값이 2줄이면 한번더 출력하면 됨

    $a = mysqli_fetch_assoc($result); //이 함수도 한번 더 넣어야함
    echo $a[No];
    echo $a[a];
    echo $a[b];
    echo $a[c];

    // print_r($connect); 잘 되었는지 확인