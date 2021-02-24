<?php
include $_SERVER['DOCUMENT_ROOT'] . "/movie/check_session_id.php";
include $_SERVER['DOCUMENT_ROOT']."/movie/connect_mysql.php";
?>

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
            <li><a href=""><?php echo $_SESSION[ 'user_id' ];?>님</a></li>
            <li>|</li>
            <li><a href="check_session_destroy.php">로그아웃</a></li>
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

<div class="menu_select">
    <a href="movie_information.php">영화 정보</a>
    <a href="">예매 하기</a>
</div>

<div class="movie_image">
    <img src="http://img.cgv.co.kr/Movie/Thumbnail/Poster/000083/83381/83381_320.jpg" alt="테넷 포스터">
    <img src="http://img.cgv.co.kr/Movie/Thumbnail/Poster/000083/83636/83636_320.jpg" alt="더 렌탈-소리없는 감시자 포스터">
    <img src="http://img.cgv.co.kr/Movie/Thumbnail/Poster/000083/83657/83657_320.jpg" alt="오! 문희 포스터">
</div>



</body>
</html>