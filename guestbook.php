<?php include  $_SERVER['DOCUMENT_ROOT']."/connectmysql.php";
include $_SERVER['DOCUMENT_ROOT']."/webpage_top.php";?>

<div id="board_area" align="center">
    <h1>Guest Book</h1>
    <table class="list-table" align="center">
        <thead>
        <tr>
            <th width="70">번호</th>
            <th width="500">제목</th>
            <th width="120">작성자</th>
            <th width="100">작성일</th>
        </tr>
        </thead>
        <?php
        //guestbook id를 기준으로 내림차순해서 5개까지 표시
        $sql = mq("select * from guestbook order by id desc limit 0,5");
        while($board = $sql->fetch_array())
        {
            //$title에 db에서 가져온 title을 선택
            $title=$board["title"];
            if(strlen($title)>30)
            {
                //title이 30을 넘어서면 ...표시
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
            }
            //댓글 수 카운트
            $sql2 = mq("select * from reply where con_num='".$board['id']."'"); //reply테이블에서 con_num이 board의 idx와 같은 것을 선택
            $rep_count = mysqli_num_rows($sql2); //num_rows로 정수형태로 출력
            ?>
            <tbody>
            <tr>
                <td width="70"><?php echo $board['id']; ?></td>
                <td width="500"><a href="guestbook_read.php?id=<?php echo $board["id"];?>"><?php echo $title;?><span class="re_ct">[<?php echo $rep_count;?>]</span></a></td>
                <td width="120"><?php echo $board['name']?></td>
                <td width="100"><?php echo $board['date']?></td>
            </tr>
            </tbody>
        <?php }?>
    </table>
    <div id="write_btn">
        <a href="guestbook_write.php"><button>글쓰기</button></a>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT']."/webpage_bottom.php"; ?>
