<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); 
//$email = filter_input( INPUT_POST, "email" ); 
$name   = $_POST["name"];
$url  = $_POST["url"];
$comme = $_POST["comme"];

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
//「：〜」バインド変数
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(name,url,comme,indate) VALUES(:name,:url,:comme,sysdate())");

$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT,文字列はSTR)
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':comme', $comme, PDO::PARAM_STR);

$status = $stmt->execute(); //実行！

// //４．データ登録処理後
if($status==false){
  sql_error();
}else{
  redirect("index.php");
}

?>
