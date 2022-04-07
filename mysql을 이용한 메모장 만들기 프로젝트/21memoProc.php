<?php
    include "21Lib.php";

    $a = $_GET['name'];
    $b = $_GET['memo'];
    $c = date("Y-m-s H:i:s");
    
    $query = "insert into memo(name,memo,regdate) values('$a','$b','$c')";
    //insert는 해석 그대로 데이터를 삽입함
    //idx는 프라이머리키로 지정해서 따로 지정안해줘도됨

    //echo $query;

    mysqli_query($connect, $query);

?>

<script>
    location.href="21memo.php";
</script>