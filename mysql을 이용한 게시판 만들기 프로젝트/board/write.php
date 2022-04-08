<?php
    include "lib.php";
?>

<table width = 800 border = "1" cellpadding=5>
    <tr>
        <td>이름</td>
        <td> <input type = "text" name = "name" ></td>
    </tr>
    <tr>
        <td>제목</td>
        <td> <input type = "text" name = "subject" style="width:100%;" ></td>
    </tr>
    <tr>
        <td>내용</td>
        <td> <textarea name = "memo" style="width:100%; height:300px;"></textarea></td>
    </tr>
       
    </tr>
        <td colspan="2">
            <div style="text-align:center;">
                <input type ="submit" value="저장">
            </div>
        
        </td>
    </tr>
</table>
