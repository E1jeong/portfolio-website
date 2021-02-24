<?php include $_SERVER['DOCUMENT_ROOT']."/webpage_top.php"; ?>

    <div class="">
        <h1>Sign in</h1>

        <form action="data_transmission_sign_in.php" method="post">
        <div id="">
            <input type="text" name="user_id" placeholder="아이디" required />
        </div>

        <div id="">
            <input type="password" name="user_pw" placeholder="비밀번호" required />
        </div>

        <div class="">
            <button type="submit">Sign in</button>
        </div>
        </form>
    </div>
<?php include $_SERVER['DOCUMENT_ROOT']."/webpage_bottom.php"; ?>