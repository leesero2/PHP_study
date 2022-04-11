<?php
    include "lib.php";
    $idx = $_GET['idx'];
    $idx = mysqli_real_escape_string($connect, $idx);


?>

<form action = "del.php" method="post">
    <!-- 이번엔 post방식으로 데이터를 넒겨봄. get방식은 주소창에 데이터값이 다 보여서 해킹 위험이 있음 -->
    <input type="hidden" name="idx" value="<?=$idx?>">
<table width = 800 border = "1" cellpadding=5>
    <tr>
        <th colspan=2><?=$idx?>번 게시물을 정말 삭제할까요?</th>
    </tr>

    <tr>
        <th>비밀번호</th>
        <td> <input type="password" name="pwd" placeholder="비밀번호" size=20></td>
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