<?php
include $_SERVER['DOCUMENT_ROOT'] . "/movie/check_session_id.php";
include $_SERVER['DOCUMENT_ROOT']."/movie/connect_mysql.php";
include $_SERVER['DOCUMENT_ROOT']."/movie/simple_html_dom.php";
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
    <script>
        $(document).ready(function(e) {
            $('.starRev span').click(function(){
                $(this).parent().children('span').removeClass('on');
                $(this).addClass('on').prevAll('span').addClass('on');
                return false;
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

<!--<div id="root"></div>-->
<!--<script type="text/javascript" src="movie.js"></script>-->

<?php
function createLink($src, $url) {
    $scheme = parse_url($url)["scheme"];
    $host = parse_url($url)["host"];

    if(substr($src, 0,1) == "/"){
        $src = $scheme. "://" .$host.$src;
    }

    return $src;
}

function followLinks($url){
    $html = file_get_html($url);

    $linkList = $html->find('a');

    foreach ($linkList as $link) {
        $href = $link->href;

        if(strpos($href, "#") !== false){
            continue;
        } else if(substr($href, 0,11) == "javascript:") {
            continue;
        }

        $href = createLink($href, $url);
        echo $href.'<br>';
    }
}

function imageLinks($url){
    $html = file_get_html($url);

    $imageList = $html->find('img');

    foreach ($imageList as $imageItem) {
        $src = $imageItem->src;

        echo $src.'<br>';
    }
}

$siteToCrawl = 'http://www.cgv.co.kr/movies/';
//followLinks($siteToCrawl);
//imageLinks($siteToCrawl);


// get DOM from URL or file
    $htmls = file_get_html('http://www.cgv.co.kr/movies/');

    // find all image with full tag

$textArray = array();

foreach($htmls->find('ol img') as $e){
    echo $e->outertext.'<br>';
}

foreach($htmls->find('ol strong.title') as $e)
    echo $e->outertext .'<br>';
foreach($htmls->find('ol strong.percent') as $e)
    echo $e->outertext .'<br>';
foreach($htmls->find('ol span.txt-info') as $e)
    echo $e->outertext .'<br>';



?>


<div class="starRev">
    <span class="starR1 on">별1_왼쪽</span>
    <span class="starR2">별1_오른쪽</span>
    <span class="starR1">별2_왼쪽</span>
    <span class="starR2">별2_오른쪽</span>
    <span class="starR1">별3_왼쪽</span>
    <span class="starR2">별3_오른쪽</span>
    <span class="starR1">별4_왼쪽</span>
    <span class="starR2">별4_오른쪽</span>
    <span class="starR1">별5_왼쪽</span>
    <span class="starR2">별5_오른쪽</span>
</div>



</body>
</html>