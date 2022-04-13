<?php
    include "lib.php";

    $isLogin = $_SESSION['isLogin'];

    if(!$isLogin){
        echo "회원만 접근 가능합니다.";
        exit;
    }

    ?>
        <a href="logOut.php">로그아웃</a>
<h1>회원리스트</h1>
<ul>
    <? for($i = 0; $i<=100; $i++){?>
        <li>이지훈<?=$i?></li>
        <li>이다훈<?=$i?></li>
    
   <? } ?>
    </ul>