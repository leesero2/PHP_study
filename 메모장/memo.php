<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메모장</title>
</head>
<body>
    <form action = "memoSave.php">
    <div style="text-align:center;">
        <table border = "1" align = "center">
            <tr>
                <td>이름</td>
                <td style="text-align:left;"><input type = "text" name = "name" > <td>
            </tr>
            <tr>
                <td>이메일</td>
                <td style="text-align:left;"><input type = "text" name = "email" > <td>
            </tr>
            <tr>
                <td>내용</td>
                <td><input type = "text" name = "memo" style="width:400px;"> <td>
            </tr>
        </table>

        <input type ="submit" value="저장" style="margin-top:10px;">

    </div>    
</form>
</body>
</html>