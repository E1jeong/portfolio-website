<?php
include $_SERVER['DOCUMENT_ROOT']."/connectmysql.php";
include $_SERVER['DOCUMENT_ROOT']."/webpage_top.php";

$bno = $_GET['id'];
$sql = mq("select * from guestbook where id='$bno';");
$board = $sql->fetch_array();
?>


<div id="board_write" align="center">
    <h1>GuestBook</h1>
    <h4>글을 수정합니다.</h4>
    <div id="write_area">
        <form action="data_transmission_guestbook_modify.php?id=<?php echo $bno; ?>" method="post">
            <div id="in_title">
                <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required><?php echo $board['title']; ?></textarea>
            </div>
            <div class="wi_line"></div>
            <div id="in_name">
                <textarea name="name" id="uname" rows="1" cols="55" placeholder="글쓴이" maxlength="100" required><?php echo $board['name']; ?></textarea>
            </div>
            <div class="wi_line"></div>
            <div id="in_content">
                <textarea name="content" id="ucontent" placeholder="내용" required><?php echo $board['content']; ?></textarea>
            </div>
            <div id="in_pw">
                <input type="password" name="pw" id="upw"  placeholder="비밀번호" required />
            </div>
            <div class="bt_se">
                <button type="submit">수정하기</button>
            </div>
        </form>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/webpage_bottom.php"; ?>