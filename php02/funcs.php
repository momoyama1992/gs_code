<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES);
}
//DB connect
function db_conn(){
  //1.  DB接続します
  try {
    //Password:MAMP='root'
    //host=本番レンタルサーバーのアドレスに変更
    $pdo = new PDO('mysql:dbname=comic_db;charset=utf8;host=localhost','root','root');
    return $pdo;
  } catch (PDOException $e) {
    exit('DB connection Error:'.$e->getMessage());
  }
}
//SQLエラー
function sql_error(){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("SQLError:".$error[2]);
  }
//redirect("indexphp)"Location: "の半角ないとだめ
function redirect($file_name){
  header("Location: ".$file_name);
  exit();
}