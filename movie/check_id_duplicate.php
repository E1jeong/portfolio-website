<?php
include $_SERVER['DOCUMENT_ROOT']."/movie/connect_mysql.php";

if($_POST['user_id'] != NULL) {
    $id_check = mq("select * from user_information where user_id='{$_POST['user_id']}'");
    $id_check = $id_check->fetch_array();

    if($id_check >= 1) {
        echo "존재하는 아이디 입니다.";
    } else {
        echo "존재하지 않는 아이디 입니다.";
    }
}
?>