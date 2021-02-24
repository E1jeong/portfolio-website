<?php include $_SERVER['DOCUMENT_ROOT']."/webpage_top.php"; ?>

<div id="board_write">
    <h1>Guest Book</h1>
    <div id="write_area">
        <form action="data_transmission_guestbook_write.php" method="post">
            <div id="in_title">
                <textarea name="title" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
            </div>
            <div class="wi_line"></div>
            <div id="in_name">
                <textarea name="name" rows="1" cols="55" maxlength="100" placeholder="작성자" required <?php if(isset($_SESSION[ 'user_id' ])){?>readonly<?php }?>><?php if(isset($_SESSION[ 'user_id' ])){echo $_SESSION[ 'user_id' ];}?></textarea>
            </div>
            <div class="wi_line"></div>
            <div id="in_content">
                <textarea name="content" placeholder="내용" required></textarea>
            </div>
            <div id="in_pw">
                <input type="password" name="pw" placeholder="비밀번호" required />
            </div>
            <div class="bt_se">
                <button type="submit">글 작성</button>
            </div>
        </form>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/webpage_bottom.php"; ?>