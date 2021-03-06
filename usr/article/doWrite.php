<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

if( !isset($_SESSION['loginedMemberId']) ){
  jsHistoryBackExit("로그인 후 이용해주세요.");
}

if( !isset( $_GET['memberId'] ) ) {
  jsHistoryBackExit("memberId를 입력해주세요.");
}

if( !isset( $_GET['boardId'] ) ) {
  jsHistoryBackExit("boardId를 입력해주세요.");
}

if( !isset( $_GET['title'] ) ) {
  jsHistoryBackExit("제목을 입력해주세요.");
}

if( !isset( $_GET['body'] ) ) {
  jsHistoryBackExit("내용을 입력해주세요.");
}

$memberId = intval($_GET['memberId']);
$boardId = intval($_GET['boardId']);
$title = $_GET['title'];
$body = $_GET['body'];

$sql = "
INSERT INTO article
SET memberId = '$memberId',
boardId = '$boardId',
regDate = NOW(),
updateDate = NOW(),
title = '$title',
`body` = '$body';
";

mysqli_query($dbConn, $sql);

$id = mysqli_insert_id($dbConn);

$url = "detail.php?id=${id}";

$msg = "${id} 번 게시물 작성 완료";

jsLocationReplaceExit($url, $msg);

?>

<?php

$pageTitle = "게시물 작성";

?>


