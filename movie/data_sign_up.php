<?php
include $_SERVER['DOCUMENT_ROOT'] . "/movie/check_session_id.php";
include $_SERVER['DOCUMENT_ROOT']."/movie/connect_mysql.php";

//각 변수에 sign_up.php에서 받아온 회원가입 정보를 변수에 다시 저장하고, date에는 현재시간을 입력
$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];
$user_pw_confirm = $_POST['user_pw_confirm'];
$date = date('Y-m-d H-m-s');

//비밀번호 입력란과 비밀번호 재입력란에서 제대로 입력했는지 확인한 후에 회원가입 진행
if($user_pw != $user_pw_confirm) {
    echo "<script> alert('비밀번호를 확인해주세요.'); history.back();</script>";
} else {
    if($user_id && $user_pw && $date){
        $sql = mq("insert into user_information (user_id, user_pw, date) values('".$user_id."','".$user_pw."','".$date."')");
        echo "<script> alert('회원가입이 완료되었습니다.'); location.href='/movie/main.php';</script>";
    }else{
        echo "<script> alert('글쓰기에 실패했습니다.'); history.back();</script>";
    }
}
?>