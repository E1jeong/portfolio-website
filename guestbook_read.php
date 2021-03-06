<?php
include $_SERVER['DOCUMENT_ROOT']."/connectmysql.php";
include $_SERVER['DOCUMENT_ROOT']."/webpage_top.php";

$bno = $_GET['id']; /* bno함수에 idx값을 받아와 넣음*/
$reply_no = $bno;
//$hit = mysqli_fetch_array(mq("select * from board where idx ='".$bno."'"));
//$hit = $hit['hit'] + 1;
//$fet = mq("update board set hit = '".$hit."' where idx = '".$bno."'");
$sql = mq("select * from guestbook where id='".$bno."'"); /* 받아온 idx값을 선택 */
$board = $sql->fetch_array();
?>

<!-- 글 불러오기 -->
<div id="board_read" align="center">
    <h1><?php echo $board['title']; ?></h1>
    <div id="user_info" align="end">
        <?php echo $board['name']; ?> | <?php echo $board['date']; ?>
        <div id="bo_line" align="center"></div>
    </div>
    <div id="bo_content" align="center">
        <?php echo nl2br("$board[content]"); ?>
    </div>
    <!-- 목록, 수정, 삭제 -->
    <div id="bo_ser">
        <ul>
            <li><a href="guestbook.php">[목록으로]</a></li>
            <li><a href="guestbook_modify.php?id=<?php echo $board['id']; ?>">[수정]</a></li>
            <li><a href="guestbook_delete.php?id=<?php echo $board['id']; ?>">[삭제]</a></li>
        </ul>
    </div>
</div>


    <!--- 댓글 불러오기 -->
    <div class="reply_view">
        <h3>댓글 목록</h3>
        <?php
        $sql3 = mq("select * from reply where con_num='".$reply_no."' order by idx desc");
        while($reply = $sql3->fetch_array()){
            ?>
            <div class="dap_lo">
                <div><b><?php echo $reply['name'];?></b></div>
                <div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
                <div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
                <div class="rep_me rep_menu">
                    <a class="dat_edit_bt" href="#">수정</a>
                    <a class="dat_delete_bt" href="#">삭제</a>
                </div>

                <!-- 댓글 수정 폼 dialog -->
                <div class="dat_edit">
                    <form method="post" action="data_transmission_reply_modify.php">
                        <input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden" name="b_no" value="<?php echo $reply_no; ?>">
                        <textarea name="content" class="dap_edit_t"><?php echo $reply['content']; ?></textarea>
                        <input type="submit" value="수정하기" class="re_mo_bt">
                    </form>
                </div>
                <!-- 댓글 삭제 비밀번호 확인 -->
                <div class='dat_delete'>
                    <form action="data_transmission_reply_delete.php" method="post">
                        <input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden" name="b_no" value="<?php echo $reply_no; ?>">
                        <input type="submit" value="확인">
                    </form>
                </div>


            </div>
        <?php } ?>

        <!--- 댓글 입력 폼 -->
        <div class="dap_ins">
            <h3>댓글 입력</h3>
            <form action="data_transmission_reply.php?idx=<?php echo $reply_no; ?>" method="post">
                <input type="text" name="dat_user" id="dat_user" class="dat_user" size="15" placeholder="아이디" value="<?php if(isset($_SESSION[ 'user_id' ])){echo $_SESSION[ 'user_id' ];}?>" <?php if(isset($_SESSION[ 'user_id' ])){?>readonly<?php }?>>
                <div style="margin-top:10px;">
                    <textarea name="content" class="reply_content" id="re_content"></textarea>
                    <button id="rep_bt" class="re_bt">댓글 입력</button>
                </div>
            </form>
        </div>
    </div><!--- 댓글 불러오기 끝 -->
    <div id="foot_box"></div>




<?php include $_SERVER['DOCUMENT_ROOT']."/webpage_bottom.php"; ?>