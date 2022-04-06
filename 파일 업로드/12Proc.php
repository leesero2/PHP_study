<?php

//업로드한 파일 배열로 저장된 데이터

// $_FILES['text']	
// Array
// (
//     [name] => 스크린샷 2021-11-08 오후 8.15.25.png
//     [type] => image/png
//     [tmp_name] => 이부분은 지움 혹시몰라서
//     [error] => 0
//     [size] => 407875 
// )

echo $_FILES['text']['name']; //저장된 파일의 이름이 출력됨 | name으로 저장해서 name으로 호출해야함

//move_uploaded_file($_FILES['text']['tmp_name'],"./data/a.exe"); // ,(콤마)뒤에 이동시킬 주소를 정함 | 파일을 불러오는건 tmp임 그래서 $_FILES['text']['tmp_name'] 라고 앞에 적어야함
//그러면 해당 파일이 data폴더안에 a.exe라고 저장이 되는데, 만약 파일 자체의 원본 상태로 유지하고 싶다면
//$_FILES['text']['name'] 를 주소에 넣으면됨
move_uploaded_file($_FILES['text']['tmp_name'],"./data/".$_FILES['text']['name']);
