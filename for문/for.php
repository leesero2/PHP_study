<ul>
    <?php
    for($i = 0; $i<=10; $i++){ ?>
    <li> 테스트 <?=$i ?> </li>
    <?php } ?>
</ul>

<?php
// "<?=" 랑 "echo" 랑 똑같은것임
?>

<?php
    for($a = 10; $a>=0; $a--){
        echo $a;
        echo "<br>"; //이렇게 선언해도 html 속성이 출력이 됨
        echo "<hr>";
    }