<?php
    include "lib.php";

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $memo = $_POST['memo'];
    $idx = $_POST['idx'];
    $pwd = $_POST['pwd'];

    //mysqli_real_escape_string함수는 모든변수는 인자로 받은 후 한번 더 가공후에 넘긴다는 의미(해킹방지)
    //post로 값을 받으면 해킹주의해야함
    $idx = mysqli_real_escape_string($connect,$idx);
    $name = mysqli_real_escape_string($connect, $name);
    $subject = mysqli_real_escape_string($connect, $subject);
    $memo = mysqli_real_escape_string($connect, $memo);
    $pwd = mysqli_real_escape_string($connect, $pwd);
    //비밀번호는 암호화 과정을 거쳐야함

    if($idx){ //수정부분(idx값이 있다면)

        //pw가 같다면 게시글 수정하는 소스
        $query = "select * from sing_board where idx = '$idx' and pwd= '$pwd' "; //넘겨받은 idx값과 pwd값을 선택
        $result = mysqli_query($connect, $query);
        $data = mysqli_fetch_array($result);
        
        if(!$data['idx']){
            echo "<script> alert('비밀번호가 일치하지 않습니다. 수정이 불가능합니다. '); history.back(1); </script> ";
            //history.back(1);은 방금 전창으로 이동하는 메서드
            exit;
        }


        $query = "update sing_board set name='$name',subject='$subject',memo='$memo' where idx='$idx'";
        mysqli_query($connect,$query);

    }else{//수정이 아닌 새글을 작성하는거라면(idx값이 없다면)
        $regdate = date("Y-m-d H:i:s");
        $ip = $_SERVER['REMOTE_ADDR'];

        $query = "insert into sing_board(name,subject,memo,regdate,ip, pwd) values('$name','$subject','$memo','$regdate','$ip','$pwd' )";
        //password('$pwd') 이렇게 암호화를 해야지 데이터베이스가 해킹당했을때 게시글 보호가 가능

        mysqli_query($connect,$query);
    }
?>

<script>
    location.href='list.php';
</script>
