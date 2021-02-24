<?php
include $_SERVER['DOCUMENT_ROOT']."/connectmysql.php";
$uid = $_GET["user_id"];
$sql = mq("select * from user_information where user_id='".$uid."'");
$member = $sql->fetch_array();
if($member==0) {
    echo $uid."<br>해당 아이디는 사용 가능합니다.<br>";
} else {
    echo $uid."<br>해당 아이디는 사용 불가능합니다.<br>";
}
?>
<button value="닫기" onclick="window.close()">닫기</button>
