<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

$sql = "
SELECT *
FROM article AS A
ORDER BY A.id DESC
";

$rs = mysqli_query($dbConn, $sql);

$articles = [];

while($article = mysqli_fetch_assoc($rs)){
  $articles[] = $article;
}

$sqlBoard2 = "
SELECT *
FROM board AS B
ORDER BY B.id DESC
";

$rsBoard2 = mysqli_query($dbConn, $sqlBoard2);

$boards = [];

while($board2 = mysqli_fetch_assoc($rsBoard2)){
  $boards[] = $board2;
}

?>

<?php
$pageTitle = "전체 게시물 리스트";
?>

<?php require_once __DIR__ . "/../head.php"; ?>

  <span><a href="write.php">글쓰기</a></span>
  <hr>
  <form action="../article/filteredArticlesByBoard.php">
    <span>게시판 목록 : </span>
    <select name="boardId">
      <?php foreach($boards as $board) {?>
        <option value="<?=$board['id']?>">
          <?=$board['id']?>.<?=$board['name']?>
        </option>
      <?php }?>
    </select>
    <input type="submit" value="이동">
  </form>
  <hr>

  <?php foreach($articles as $article) {?>

    <?php
    
      $sqlBoard = "
      SELECT *
      FROM board AS B
      WHERE B.id = '${article['boardId']}'
      ";

      $rsBoard = mysqli_query($dbConn, $sqlBoard);

      $board = mysqli_fetch_assoc($rsBoard);
      
    ?>

    <div>
      <a href="detail.php?id=<?=$article['id']?>">번호 : <?=$article['id']?></a>&ensp;
      등록 : <?=$article['regDate']?><br>
      게시판 : <?=$board['name']?><br>
      <a href="detail.php?id=<?=$article['id']?>">제목 : <?=$article['title']?></a>
      <hr>
    </div>
  <?php }?>


  <?php require_once __DIR__ . "/../foot.php"; ?>