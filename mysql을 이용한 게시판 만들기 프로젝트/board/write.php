<?php
    include "lib.php";
?>

<form action = "writePost.php" method="post">
    <!-- 이번엔 post방식으로 데이터를 넒겨봄. get방식은 주소창에 데이터값이 다 보여서 해킹 위험이 있음 -->
<table width = 800 border = "1" cellpadding=5>
    <tr>
        <th>이름</th>
        <td> <input type="text" name="name" ></td>
    </tr>
    <tr>
        <th>제목</th>
        <td> <input type="text" name="subject" style="width:100%;" ></td>
    </tr>
    <tr>
        <th>내용</th>
        <td> <textarea name="memo" style="width:100%; height:300px;"></textarea></td>
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