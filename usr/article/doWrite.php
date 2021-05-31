<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

if( !isset( $_GET['title'] ) ) {
  jsHistoryBackExit("제목을 입력해주세요.");
}

if( !isset( $_GET['body'] ) ) {
  jsHistoryBackExit("내용을 입력해주세요.");
}

$title = $_GET['title'];

$body = $_GET['body'];

$sql = "
INSERT INTO article
SET memberId = 2,
boardId = 3,
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


