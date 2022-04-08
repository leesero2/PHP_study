<?php
    include "lib.php";

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $memo = $_POST['memo'];

    //mysqli_real_escape_string함수는 모든변수는 인자로 받은 후 한번 더 가공후에 넘긴다는 의미(해킹방지)
    //post로 값을 받으면 해킹주의해야함
    $name = mysqli_real_escape_string($connect, $name);
    $subject = mysqli_real_escape_string($connect, $subject);
    $memo = mysqli_real_escape_string($connect, $memo);

    $regdate = date("Y-m-d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];

    $query = "insert into sing_board(name,subject,memo,regdate,ip) values('$name','$subject','$memo','$regdate','$ip')";

    mysqli_query($connect,$query);
?>

<script>
    location.href='list.php';
</script>
