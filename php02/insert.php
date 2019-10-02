<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// //1. POSTデータ取得
// //$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
// //$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$name   = $_POST["name"];
$url  = $_POST["url"];
$comme = $_POST["comme"];

// //2. DB接続します
include("funcs.php");
$pdo = db_conn();

// // try {
// //   //Password:MAMP='root'
// //   //host=本番レンタルサーバのアドレスに変更（今はlocalhost）
// //   $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
// // } catch (PDOException $e) {
// //   exit('DB Connection Error:'.$e->getMessage());
// // }

// //３．データ登録SQL作成
// //「：〜」っていうバインド変数を使う！
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(name,url,comme,indate) VALUES(:name,:url ,:comme ,sysdate())");

$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT,文字列はSTR)
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':comme', $comme, PDO::PARAM_STR);

// // bindStr($stmt,$name);
// // bindStr($stmt,$email);
// // bindStr($stmt,$naiyou);

$status = $stmt->execute(); //実行！

// //４．データ登録処理後
if($status==false){
  sql_error();
}else{
  redirect("index.php");
}

?>
