<?php
include $_SERVER['DOCUMENT_ROOT'] . "/movie/check_session_id.php";
include $_SERVER['DOCUMENT_ROOT']."/movie/connect_mysql.php";

$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];

$sql = mq("select * from user_information where user_id='".$user_id."'");
$login_pw = $sql->fetch_array();

if($user_pw == $login_pw['user_pw']) {
    $_SESSION[ 'user_id' ] = $user_id;
    echo "<script> location.href='/movie/main.php';</script>";
} else {
    echo "<script> alert('아이디 또는 비밀번호를 다시 입력하세요.'); history.back();</script>";
}
?>