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
        $a[0] = 10;
        $a[1] = 20;
        $a[2] = $a[0]+$a[1];

        echo $a[2]; //30이 출력이됨

        echo "<hr>";

        $b = array(1,2,3);
        print_r($b); //배열을 출력하는 환경변수 print_r을 사용
        //Array ( [0] => 1 [1] => 2 [2] => 3 ) 출력됨
        
        echo "<hr>";
        echo $b[2]; //3 출력됨
        //echo $a[3]; //에러 발생 (값이 없기때문)

        echo "<hr>";

        $c[] = 1;
        $c[] = 2;
        $c[] = 3;
        $c[] = 4;

        $c[] = 1;
        $c[] = 2;
        $c[] = 3;
        $c[] = 4;

        $c[] = 1;
        $c[] = 2;
        $c[] = 3;
        $c[] = 4;

        echo count($c); //12값이 출력됨
        //c라는 배열의 총 갯수를 알려주는 환경변수 count()
        echo "<hr>";

        $d = count($c);

            for($i=0; $i<$d; $i++){
                echo $c[$i];
            }
            //123412341234 출력됨
        
        echo "<hr>";

        foreach($c as $e){ //대부분의 foreach문이랑 똑같음 e변수에 foreach문의 값을 저장
            echo $e; //1~4까지의 값이 총 3번 반복해서 세로로 출력됨
            echo "<br>";
        }

        echo "<hr>";

        //key라는 변수를 지정하면 key는 배열의 주소를 저장함
        foreach($c as $key=>$e){ 
            echo $key; 
            echo ":";
            echo $e; 
            echo "<br>";
            //해당배열의 키값을 나타냄 
            // 0:1 1:2 2:3 3:4 4:1 5:2 6:3 7:4 8:1 9:2 10:3 11:4 라는값이 세로로 출력됨
        }
    ?>  
</body>
</html>