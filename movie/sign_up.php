<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css" />
    <script src="https://kit.fontawesome.com/66d542c10e.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../jquery-3.2.1.min.js"></script>
    <title>movie ticket</title>

    <script>
        $(document).ready(function(e) {
            $(".check").on("keyup", function(){ //check라는 클래스에 입력을 감지
                var self = $(this);
                var user_id;

                if(self.attr("id") === "user_id"){
                    user_id = self.val();
                }

                $.post( //post방식으로 id_check.php에 입력한 userid값을 넘깁니다
                    "check_id_duplicate.php",
                    { user_id : user_id },
                    function(data){
                        if(data){ //만약 data값이 전송되면
                            self.parent().parent().find("#id_check").html(data); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                            self.parent().parent().find("#id_check").css("color", "#F00"); //div 태그를 찾아 css효과로 빨간색을 설정합니다
                        }
                    }
                );
            });
        });


        $(document).ready(function(e) {
            $(".pw_check").on("keyup", function(){ //check라는 클래스에 입력을 감지
                var self = $(this);
                var user_pw_confirm;
                var user_pw = $(".pw").val();

                if(self.attr("id") === "user_pw_confirm"){
                    user_pw_confirm = self.val();
                }

                $.post( //post방식으로 id_check.php에 입력한 userid값을 넘깁니다
                    "check_pw_duplicate.php",
                    { user_pw : user_pw, user_pw_confirm : user_pw_confirm },
                    function(data){
                        if(data){ //만약 data값이 전송되면
                            self.parent().parent().find("#pw_check").html(data); //div태그를 찾아 html방식으로 data를 뿌려줍니다.
                            self.parent().parent().find("#pw_check").css("color", "#F00"); //div 태그를 찾아 css효과로 빨간색을 설정합니다
                        }
                    }
                );
            });
        });
    </script>
</head>

<body>
<nav class="navbar">
    <div class="navbar_logo">
        <i class="fas fa-ticket-alt"></i>
        <a href="main.php">Movie</a>
    </div>

    <ul class="navbar_sign">
        <?php
        if(isset($_SESSION[ 'user_id' ])){
            ?>
            <li><a href=""><?php echo $_SESSION[ 'user_id' ];?></a></li>
            <li>|</li>
            <li><a href="check_logout.php">로그아웃</a></li>
            <?php
        } else {
            ?>
            <li><a href="sign_in.php">로그인</a></li>
            <li>|</li>
            <li><a href="sign_up.php">회원가입</a></li>
            <?php
        }
        ?>
    </ul>
</nav>

<div class="user_information">
    <form method="post" action="data_sign_up.php" name="memform">
        <h1 align="center">회원가입</h1>
        <fieldset>
            <legend>입력사항</legend>
            <table>
                <!--            <tr>-->
                <!--                <td>이름</td>-->
                <!--                <td><input type="text" size="35" name="name" placeholder="이름" required></td>-->
                <!--            </tr>-->
                <tr>
                    <td>아이디</td>
                    <td><input type="text" size="35" name="user_id" id="user_id" class="check" placeholder="아이디"  required />
                    <td><div id="id_check"></div></td>
                </tr>
                <tr>
                    <td>비밀번호</td>
                    <td><input type="password" size="35" name="user_pw" class="pw" placeholder="비밀번호" required></td>
                </tr>
                <tr>
                    <td>비밀번호 확인</td>
                    <td><input type="password" size="35" name="user_pw_confirm" id="user_pw_confirm" class="pw_check" placeholder="비밀번호 재입력" required></td>
                    <td><div id="pw_check"></div></td>
                </tr>
                <!--            <tr>-->
                <!--                <td>이메일</td>-->
                <!--                <td><input type="text" name="email" required>@<select name="emadress"><option value="naver.com">naver.com</option><option value="nate.com">nate.com</option>-->
                <!--                        <option value="hanmail.com">hanmail.com</option></select></td>-->
                <!--            </tr>-->
            </table>
        </fieldset>
        <div align="center" style="margin-top: 10px;"><input type="submit" value="가입하기"/></div>
    </form>
</div>


</body>

</html>