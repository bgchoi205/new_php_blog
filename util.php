<?php

function jsAlert($msg){
  echo "<script>";
  echo "alert('${msg}');";
  echo "</script>";
}

function jsLocarionReplaceExit($url, $msg = null){
  if($msg){
    jsAlert($msg);
  }

  echo "<script>";
  echo "location.replace('${url}')";
  echo "</script>";
  exit;
}


function jsHistoryBackExit($msg = null){
  if($msg){
    jsAlert($msg);
  }

  echo "<script>";
  echo "history.back();";
  echo "</script>";
  exit;
}