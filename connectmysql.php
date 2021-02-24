<?php
$host = '127.0.0.1';
$user = 'testuser';
$pw = 'test1234';
$dbname = 'testboard';

$db = mysqli_connect($host, $user, $pw, $dbname);
$db->set_charset('utf-8');

//외부에서 선언된 $sql이라는 변수를 사용해서 연결된 db에 쿼리문을 보내기 위해 만든 메소드
function mq($sql) {
 global $db;
 return $db->query($sql);
}



//$mysqli = new mysqli("127.0.0.1","testuser","test1234","testboard");
//if($mysqli){
// echo "DB conn ok"."<br>";
//} else {
// echo "DB conn fail"."<br>" ;
//}

//해당 db랑 연결됬는지 확인하는 메소드
//$db = mysqli_select_db($conn, "testboard");
//if($db){
// echo "DB conn ok"."<br>";
//} else {
// echo "DB conn fail"."<br>" ;
//}

?>
