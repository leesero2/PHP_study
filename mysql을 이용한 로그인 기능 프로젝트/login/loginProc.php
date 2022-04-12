<?php
    $user_id = $_POST['user_id'];
    $pwd = $_POST['pwd'];

    if($user_id=="admin" && $pwd="1112"){
        //로그인처리 (쿠키를 이용함)
        setcookie("isAdmin","Ok"); //isAdmin의 변수의 값을 OK로 집어넣음


    }else{
        echo "관리자만 접근가능한 페이지 입니다.";
        exit;
    }

    ?>
<script>
    location.href = 'memberList.php';
</script>


