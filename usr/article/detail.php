<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

if( !isset( $_GET['id'] ) ) {
  jsHistoryBackExit("id를 입력해주세요.");
}

$id = intval($_GET['id']);

$sql = "
SELECT *
FROM article AS A
WHERE A.id = '$id'
";

$rs = mysqli_query($dbConn, $sql);

$article = mysqli_fetch_assoc($rs);

?>

<?php

$pageTitle = "게시물 상세, $id 번 게시물";

?>


<?php require_once __DIR__ . "/../head.php"; ?>
  <section>
    <a href="list.php">리스트</a>&ensp;
    <a onclick="if( confirm('정말 삭제하시겠습니까?') == false )return false;" href="doDelete.php?id=<?=$id?>">삭제</a>&ensp;
    <a href="modify.php?id=<?=$id?>">수정</a>
  </section>
  <hr>
  <div>

    <table>
      <tr>
        <td>제목 : </td>
        <td>제목입니다</td>
        <td>&ensp;</td>
        <td>작성자 : </td>
        <td>작성자명</td>
      </tr>
      <tr>
        <td>테스트3</td>
        <td>테스트4</td>
      </tr>
      <tr>
        <td>테스트3</td>
        <td>테스트4</td>
      </tr>
    </table>
    번호 : <?=$article['id']?><br>
    등록 : <?=$article['regDate']?><br>
    수정 : <?=$article['updateDate']?><br>
    제목 : <?=$article['title']?><br>
    내용 : <?=$article['body']?>
  </div>
  <hr>


<?php require_once __DIR__ . "/../foot.php"; ?>