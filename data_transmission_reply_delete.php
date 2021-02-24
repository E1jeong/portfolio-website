<?php
include $_SERVER['DOCUMENT_ROOT']."/connectmysql.php";
$rno = $_POST['rno'];//댓글번호
$sql = mq("select * from reply where idx='".$rno."'"); //reply테이블에서 idx가 rno변수에 저장된 값을 찾음
$reply = $sql->fetch_array();

$bno = $_POST['b_no']; //게시글 번호
$sql2 = mq("select * from guestbook where id='".$bno."'");//board테이블에서 idx가 bno변수에 저장된 값을 찾음
$board = $sql2->fetch_array();

$sql = mq("delete from reply where idx='".$rno."'");
?>
<script type="text/javascript">alert('댓글이 삭제되었습니다.'); location.replace("guestbook_read.php?id=<?php echo $bno; ?>");</script>