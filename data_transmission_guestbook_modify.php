<?php
include $_SERVER['DOCUMENT_ROOT'] . "/check_login.php";
include $_SERVER['DOCUMENT_ROOT']."/connectmysql.php";

$bno = $_GET['id'];
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$sql = mq("update guestbook set name='".$username."', pw='".$userpw."',title='".$title."',content='".$content."' where id='".$bno."';");
?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=/guestbook.php">