<?php
    include "lib.php";

    $idx = $_POST['idx'];
    $pwd = $_POST['pwd'];
    
    $idx = mysqli_real_escape_string($connect, $idx);
    $pwd = mysqli_real_escape_string($connect, $pwd);

    //비밀번호를 일치확인후 삭제하려는 소스
    $query = "select * from sing_board where idx = '$idx' and pwd = '$pwd' "; //넘겨받은 idx값과 pwd값을 선택
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);

    if(!$data['idx']){
        echo "<script> alert('비밀번호가 일치하지 않습니다. 삭제가 불가능합니다. '); history.back(1); </script> ";
        //history.back(1);은 방금 전창으로 이동하는 메서드
        exit;
    }


    $query = "delete from sing_board where idx='$idx' ";

    mysqli_query($connect,$query);
?>

<script>
    location.href='list.php';
</script>
