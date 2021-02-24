<?php include $_SERVER['DOCUMENT_ROOT']."/webpage_top.php"; ?>
    <script>
        function checkid(){
            let userid = document.querySelector("#uid").value;
            if(userid)
            {
                url = "check_id_duplicate.php?user_id="+userid;
                window.open(url,"chkid","width=300,height=100");
            }else{
                alert("아이디를 입력하세요");
            }
        }
    </script>

    <div class="">
        <h1>Sign Up</h1>

        <form action="data_transmission_sign_up.php" method="post">
            <div id="">
                <input type="text" name="user_id" id="uid" placeholder="아이디" required />
                <input type="submit" value="중복확인" onclick="checkid();"/>
            </div>

            <div id="">
                <input type="password" name="user_pw" placeholder="비밀번호" required />
            </div>

            <div id="">
                <input type="password" name="user_pw_confirm" placeholder="비밀번호 재입력" required />
            </div>

            <div class="">
                <button type="submit">Sign up</button>
            </div>
        </form>
    </div>

<?php include $_SERVER['DOCUMENT_ROOT']."/webpage_bottom.php"; ?>