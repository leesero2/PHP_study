<?php
    //if문을 말함
    $a = 20;

    if($a>10){
        echo "10보다 큽니다";
        echo "a의 값은 $a";
    }else{
        echo "10보다 작습니다";
        echo "a의 값은 $a";
    }
    ?>

<hr>

    <?php
    //여기서 get 메소드를 이용하면
    $b = $_GET['b'];

    if($b>10){
        echo "10보다 큽니다";
        echo "a의 값은 $b";
    }else{
        echo "10보다 작습니다";
        echo "a의 값은 $b";
    }
    //입력한 결과가 조건에 걸쳐 출력이됨

?>
