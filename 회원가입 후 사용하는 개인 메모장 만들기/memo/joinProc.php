<?php
    include "dbClass.php";
    
    $data = array($_POST['user_id'],$_POST['pwd'],$_POST['name'],$_POST['eamil']);
    //print_r($data);
    // $data[] = date("Y-m-d H:i:s");
    // $data[] = $_SERVER('REMOTE_ADDR');


    $query = "insert into uni_member(user_id, pwd, name, email, regdate, ip) values(?,?,?,?,?,?)";
    $db->query($query, $data);
    
?>
