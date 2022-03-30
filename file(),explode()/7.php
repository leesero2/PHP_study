<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //file 함수는 파일을 읽어서 배열로 알아서 값을 나눔
        $list = file("7.txt");
        print_r($list);
        
        //결과 - Array ( [0] => 이지훈1, 안녕하세요, 저는 개발자를 준비중인 대학생입니다. [1] => 이지훈2, 안녕하세요, 저는 개발자를 준비중인 대학생입니다. [2] => 이지훈3, 안녕하세요, 저는 개발자를 준비중인 대학생입니다. [3] => 이지훈4, 안녕하세요, 저는 개발자를 준비중인 대학생입니다. [4] => 이지훈5, 안녕하세요, 저는 개발자를 준비중인 대학생입니다. [5] => 이지훈6, 안녕하세요, 저는 개발자를 준비중인 대학생입니다. [6] => 이지훈7, 안녕하세요, 저는 개발자를 준비중인 대학생입니다. [7] => 이지훈8, 안녕하세요, 저는 개발자를 준비중인 대학생입니다. )
        
        
        echo "<hr>";
        //이 결과를 나누고싶다면 explode 함수를 사용하면 됨.
        //예시

        $tmp = "안녕하세요, 저는, 이지훈입니다.";
        $str = explode(",",$tmp); //','를 구분자로 이해해서 분리를 함. explode(" ",$tmp); 이렇게 하면 띄어쓰기 되어있으면 분리함
        print_r($str); //결과 - Array ( [0] => 안녕하세요 [1] => 저는 [2] => 이지훈입니다. ) 

        echo "<hr>";
    ?>

    <!-- foreach문을 이용한 explode 예시 -->
    <table border="1" width="800">
        <tr>
            <th> 이름 </th>
            <th> 제목 </th>
            <th> 내용 </th> 
        </tr>
    <?php
        foreach($list as $d){ //결과는 스크린샷 첨부함
            $str2 = explode(",",$d);
        ?>
            <tr>
                <td> <?=$str2[0]?> </td>
                <td> <?=$str2[1]?> </td>
                <td> <?=$str2[2]?> </td> 
        </tr>
                
        <?php } ?>
        </table>

</body>
</html>