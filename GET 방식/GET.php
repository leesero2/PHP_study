<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    --GET 방식--
    클라이언트의 데이터를 URL뒤에 붙여서 보낸다.

    --사용 예시--
    다음 주소를 입력해보자 http://localhost/07/board1.php?table=free
    주소 창에 입력한 url 주소를 보면 board1.php 뒤에 ?와 table=free가 있는데, 이는 table이라는 키를 이용하여 free라는 데이터를 board1.php에 전달한다는 의미이다. 
    이것이 웹 페이지에서 GET 방식으로 데이터를 전달하는 방법이다. GET 방식의 사용 형식을 정리하면 다음과 같다. 
    URL?키1=값&키2=값&키3=값

    --실습--
    <?php
    //주소창에 값을 넣어서 보내는 방식을 get방식이라고 함
    //a라는 변수에 get이라는 환경변수에 korea라는 값을 a에 대입
    $korea= $_GET['korea'];
    echo $korea; //주소창에 넣은 변수값이 화면에 출력이됨 ex) 123이라고 입력하면 화면에 123이 출력이됨
    //주소창에 입력하기 - localhost/GET.php?kore=123
    //그러면 123이 출력이됨
    ?>

    <hr>

    <?php
    //한번에 두개의 변수를 get으로 불러오고싶다면? &를 사용하면됨
    //주소창에 입력하기 - localhost/GET.php?kore=123&win=456
    $win= $_GET['win'];
    echo $korea; //123이 출력
    ?>
    <?php
    echo $win; //456이 출력
    ?>

    <hr>

    <?php 
    //두개의 합을 알고싶다면
    $sum = $korea + $win;
    echo $sum; //579 가 출력됨
    //만약 문자를 넣는다면 계산이 안되기 때문에 에러가 발생함
    ?>


</body>
</html>