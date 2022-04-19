<?php
    include "lib.php";
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
    <table border=1>
    <tr>
        <th>idx</th>
        <th>북마크</th>
        <th>등록일</th>
        <th>삭제</th>
    </tr>
    <?php
    $query = "select * from bookmark";
    $result = mysqli_query($connect, $query);
    while($data = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?=$data['idx']?>
            <td><a href="<?=$data['url']?>" target="_blank"> <?=$data['url']?> </a> 
            <!-- 링크를 들어갈수있게끔 구현 -->
            <td><?=$data['regdate']?>
            <td>삭제
        </tr>
    <?php } ?>
</table>
<a href="add.php">북마크 추가</a>
</body>
</html>