<?php
    $a = 10;
    $b = multi($a);

    echo $b; //1000이라는 결과가 출력됨

    function multi($x){ //여기서 x는 a에 대입한 10이라는 값이 됨
        $y = $x * 100;
        return $y; //최종결과인 y를 리턴함
    }
?>
