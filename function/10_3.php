<?php
    $a = 1012341241;
    $b = multi($a);

    //긴 숫자를 세자리마다 , 를 넣고싶다면 내장함수인 number_format을 사용하면됨
    $c = number_format($b);


    echo $c; //세자리마다 , 로 나누는 결과가 출력됨

    function multi($x){ //여기서 x는 a에 대입한 값이 전달
        $y = $x * 100;
        return $y; //최종결과인 y를 리턴함
    }
?>
