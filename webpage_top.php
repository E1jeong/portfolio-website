<!-- 이 페이지는 웹페이지 상단부 네비게이션바 까지 포함한 페이지 입니다. 사용되는 모든 페이지에서 include 해서 사용합니다.-->
<!-- webpage_bottom.php에   body태그와 html태그를 닫아주는 부분이 있습니다.-->
<?php include $_SERVER['DOCUMENT_ROOT']."/check_login.php"; ?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="mainpage_style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap"/>
    <title>e1jeong</title>
    <script src="https://kit.fontawesome.com/66d542c10e.js" crossorigin="anonymous"></script>
    <script src="main.js" defer></script>
    <link rel="stylesheet" type="text/css" href="jquery-ui.css" />
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="jquery-ui.js"></script>
</head>

<body>
<nav class="navbar">
    <div class="navbar_logo">
        <i class="fab fa-angular"></i>
        <a href="e1jeong_main.php">e1jeong</a>
    </div>

    <ul class="navbar_menu">
        <li><a href="introduction.php">Introduction</a></li>
        <li><a href="productvideo.php">Product Video</a></li>
        <li><a href="guestbook.php">Guest Book</a></li>
        <li><a href="">update later</a></li>
        <!--        <li><a href="">update later</a></li>-->
    </ul>

    <ul class="navbar_sign">
        <?php
            if(isset($_SESSION[ 'user_id' ])){
        ?>
        <li><a href=""><?php echo $_SESSION[ 'user_id' ];?></a></li>
        <li>|</li>
        <li><a href="check_logout.php">Log out</a></li>
        <?php
            } else {
        ?>
        <li><a href="sign_in.php">Sign in</a></li>
        <li>|</li>
        <li><a href="sign_up.php">Sign up</a></li>
        <?php
            }
        ?>
    </ul>

    <a href="#" class="navbar_toglebtn">
        <i class="fas fa-bars"></i>
    </a>
</nav>