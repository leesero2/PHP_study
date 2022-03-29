<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- php의 변수 -->
    <?php 
        //php의 변수
        $a = 10;
        $b = 20;
    ?>
    <?php
        //echo는 출력
        echo $a; //10출력됨
        echo $b; //20출력됨
    ?>

    <hr>

    <?php
        echo $a;
    ?>

    <?php
        echo $b;
    ?>

    <hr>
    <?php
        $c = $a + $b;
        echo $c; //30이 출력됨
    ?>
    <hr>
    <?php
        echo $a + $b;
    ?>
    
</body>
</html>