<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';


?>

<?php

$pageTitle = "게시물 작성하기";

?>


<?php require_once __DIR__ . "/../head.php"; ?>

  <form action="doWrite.php">
    <div>
      <span>제목 입력</span><br>
      <input required placeholder="제목 입력" type="text" name="title">
    </div>
    <div>
      <span>내용 입력</span><br>
      <textarea required placeholder="내용 입력" name="body"></textarea>
    </div>
    <div>
      <input type="submit" value="작성">
    </div>
  </form>

<?php require_once __DIR__ . "/../foot.php"; ?>