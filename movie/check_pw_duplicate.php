<?php
include $_SERVER['DOCUMENT_ROOT']."/movie/connect_mysql.php";

if($_POST['user_pw'] != $_POST['user_pw_confirm']) {
    echo "비밀번호가 일치하지 않습니다";
} else {
    echo "비밀번호가 일치합니다";
}
?>