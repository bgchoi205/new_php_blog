<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$pageTitle?></title>
  <link rel="stylesheet" href="/common.css">
</head>
<body>
  <h1><?=$pageTitle?></h1>
  <hr>
  
  <?php if( isset($_SESSION['loginedMemberId']) ){ ?>
    <a onclick="if( confirm('로그아웃 하시겠습니까?') == false )return false;" href="../member/doLogout.php">로그아웃</a>

  <?php }?>

  <?php if( !isset($_SESSION['loginedMemberId']) ){ ?>
    <a href="../member/login.php">로그인</a>&ensp;
    <a href="../member/join.php">회원가입</a>
    <hr>
  <?php }?>
  
  