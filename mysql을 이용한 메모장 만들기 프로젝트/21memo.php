<?php
    include "21Lib.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "21memoProc.php"> 
    <!-- 21memoProc.php으로 값이 전달되게끔 action을 넣어줌 -->
    이름 : <input type = "text" name = "name" size=10> <br>
    메모 : <input type = "text" name = "memo" size=100> <br>
    <input type = "submit" value = "저장">
    </form>

    <?php

        $query = "select * from memo order by idx";
        
        //데이터베이스에서 데이터를 갖고오는건 select
        //order by idx는 idx을 기준으로 내림차순 한다는 말 

        //데이터가 너무 많아서 출력 갯수를 제한하고 싶다면 desc limit '원하는 수량' 을 입력하면됨
        //예시 - query = "select * from memo order by idx desc limit 5"

        $result = mysqli_query($connect,$query);

    ?>
    
    <!-- 데이터베이스의 데이터를 화면상으로 출력시킬려면 -->
    <table border =1>
        <tr>
            <td> idx </td>
            <td> 이름 </td>
            <td> 메모 </td>
            <td> 등록일 </td>
        </tr>

        <?php
            while($data = mysqli_fetch_array($result)){
        ?>
            <!-- 유튜브에선 data[idx]로 지정하는데 에러가 떠서 보니 최신버전은 상수로 인식하기에 작은 따옴표를 붙여서 문제를 해결함 data['idx'] -->
            <tr>
                <td> <?=$data['idx']?></td>
                <td> <?=$data['name']?></td>
                <td> <?=$data['memo']?></td>
                <td> <?=$data['regdate']?></td>
            </tr>
        <?php
            }
        ?>
    </table>
</body> 
</html>