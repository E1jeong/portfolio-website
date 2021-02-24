<?php
include $_SERVER['DOCUMENT_ROOT']."/connectmysql.php";

$bno = $_GET['id'];
$sql = mq("delete from guestbook where id='$bno';");
?>
<script type="text/javascript">alert("삭제되었습니다.");</script>
<meta http-equiv="refresh" content="0 url=/guestbook.php" />