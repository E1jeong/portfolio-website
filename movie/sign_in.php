<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css" />
    <script src="https://kit.fontawesome.com/66d542c10e.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../jquery-3.2.1.min.js"></script>
    <title>movie ticket</title>
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
    <form method="post" action="data_sign_in.php" name="memform">
        <h1 align="center">로그인</h1>
        <div class="login_field" align="center">
            <table>
                <tr>
                    <td>아이디</td>
                    <td><input type="text" size="35" name="user_id" placeholder="아이디"  required />
                </tr>
                <tr>
                    <td>비밀번호</td>
                    <td><input type="password" size="35" name="user_pw" placeholder="비밀번호" required></td>
                </tr>
            </table>
        </div>
        <div align="center" style="margin-top: 10px;"><input type="submit" value="로그인"/></div>
    </form>
</div>


</body>
</html>