<?php
    echo "막히는 자동차 안에서 우린 아무말이 없었지";
    
    $i = 1;
    loopPart();
    loopPart();
    loopPart();
    loopPart();
    loopPart();

    function loopPart(){
        // echo $i = 1; 여기서 선언된 i는 loopPart함수에서 밖에 사용못함 지역 함수이기 때문
        global $i; //이렇게 전역변수로 사용을 해줘야함
        echo "<br>";
        echo $i;
        echo "그냥 마주보고 웃었지 도로는 뚫릴 생각이 없지";
        $i++;
    }
?>

