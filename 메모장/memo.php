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

<table border = 1>
    <tr>
        <th> 이름 </th>
        <th> 이메일 </th>
        <th> 내용 </th>
        <th> 저장일시 </th>
    </tr>
<?php

$list = file("memo.txt");

//입력한 최근 메모가 제일 위로 올라가게 하고싶으면 array_reverse 함수를 이용하면됨

$a = array_reverse($list); //$a 변수에 list 배열을 역으로 저장시킴 

foreach($a as $d){ //foreach문으로 전부 출력을 함 (a를 d에 저장해서 출력을 함, a는 리버스라 거꾸로 출력이 됨)
    $data = explode("///",$d); // '///'을 기준으로 데이터를 나눔
    ?>
    <tr>
        <td> <?=$data[0]?> </td> 
        <td> <?=$data[1]?> </td>
        <td> <?=$data[2]?> </td>
        <td> <?=$data[3]?> </td>
    </tr>
<? } ?>
</body>
</html>