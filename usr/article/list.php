<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

$pageTitle = "전체 게시물 리스트";

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

?>

<?php require_once __DIR__ . "/../head.php"; ?>

  <span><a href="write.php">글쓰기</a></span>
  <hr>

  <?php foreach($articles as $article) {?>
    <div>
      <a href="detail.php?id=<?=$article['id']?>">번호 : <?=$article['id']?></a><br>
      등록 : <?=$article['regDate']?><br>
      <a href="detail.php?id=<?=$article['id']?>">제목 : <?=$article['title']?></a>
      <hr>
    </div>
  <?php }?>


  <?php require_once __DIR__ . "/../foot.php"; ?>