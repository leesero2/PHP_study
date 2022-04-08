<?php
    include "lib.php";
    $idx = $_GET['idx'];
    $idx = mysqli_real_escape_string($connect, $idx);

    $query = "select * from sing_board where idx='$idx'";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);

    //수정할때는 idx값을 같이 넘겨줘야함 아니면 또 생성됨

?>

<form action = "writePost.php" method="post">
    <!-- 이번엔 post방식으로 데이터를 넒겨봄. get방식은 주소창에 데이터값이 다 보여서 해킹 위험이 있음 -->
    <input type="hidden" name="idx" value="<?=$idx?>">
<table width = 800 border = "1" cellpadding=5>
    <tr>
        <th>이름</th>
        <td> <input type="text" name="name" value = "<?=$data['name']?>"></td>
    </tr>
    <tr>
        <th>제목</th>
        <td> <input type="text" name="subject" style="width:100%;" value = "<?=$data['subject']?>"></td>
    </tr>
    <tr>
        <th>내용</th>
        <td> <textarea name="memo" style="width:100%; height:300px;"><?=$data['memo']?></textarea></td>
    </tr>
       
    </tr>
        <td colspan="2">
            <div style="text-align:center;">
                <input type ="submit" value="저장">
            </div>
        
        </td>
    </tr>
</table>
</form>