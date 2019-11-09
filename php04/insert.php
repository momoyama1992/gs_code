<?php
//1. POSTデータ取得
$name   = $_POST["name"];
$url    = $_POST["url"];
$comme  = $_POST["comme"];

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(name,url,comme,indate)VALUES(:name,:url,:comme,sysdate())");
$stmt->bindValue(':name'  ,$name  ,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url'   ,$url   ,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comme' ,$comme ,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error();
}else{
  redirect("index.php");
}
?>
