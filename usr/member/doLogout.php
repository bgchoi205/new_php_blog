<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/webInit.php';

session_unset();

$url = "../article/list.php";

$msg = "๋ก๊ทธ์์";

jsLocationReplaceExit($url, $msg);

?>