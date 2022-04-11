<?php
    include "lib.php";

    $idx = $_GET['idx'];
    $idx = mysqli_real_escape_string($connect, $idx);

    $query = "select * from sing_board where idx = '$idx' ";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);
?>

<form action = "writePost.php" method="post">
    <!-- 이번엔 post방식으로 데이터를 넒겨봄. get방식은 주소창에 데이터값이 다 보여서 해킹 위험이 있음 -->
<table width = 800 border = "1" cellpadding=5>
    <tr>
        <th>이름</th>
        <td>
            <?=$data['name']?>
        </td>
    </tr>
    <tr>
        <th>제목</th>
        <td>
        <?=$data['subject']?>
        </td>
    </tr>
    <tr>
        <th>내용</th>
        <td>
        <?=nl2br($data['memo'])?>
        <!-- nl2br은 줄바꿈이 포함된 기능. 그래서 깔끔하게 보임 -->
        </td>
    </tr>
       
    </tr>
        <td colspan="2">
            <a href="list.php">목록</a>
            <div style = "float:right;">
            <a href="#" onclick="chkPassword();">삭제</a> 
            <!-- //삭제에 대한 함수 추가 -->
            <a href="write.php?idx=<?=$idx?>">수정</a>
            </div>

            <a href="list.php">목록</a>
        </td>
    </tr>
</table>
</form>

<script>
    //삭제하는 함수
    function chkPassword(){
        let a = prompt('비밀번호를 입력해 주세요.');
        
        if(a){
            location.href='del.php?idx=<?=$idx?>$pwd='+a;
        }else{
            alert('비밀번호를 입력하지 않으면 수정이 불가능 합니다.')
        }
    }
</script>