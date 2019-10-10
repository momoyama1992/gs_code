<?php
//最初にSESSIONを開始！！ココ大事！！
session_start();

//POST値

//1.  DB接続します
$sql = "SELECT * FROM gs_user_table WHERE lid=:lid AND life_flg=0";
include("funcs.php");
$pdo = db_conn();

//2. データ登録SQL作成
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $_POST["lid"], PDO::PARAM_STR); //* Hash化する場合はコメントする
// $stmt->bindValue(':lpw', $_POST["lpw"], PDO::PARAM_STR);
$status = $stmt->execute();

//3. SQL実行時にエラーがある場合STOP
if($status==false){
    sql_error();
}

//4. 抽出データ数を取得
$val = $stmt->fetch();         //1レコードだけ取得する方法
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()

//5. 該当レコードがあればSESSIONに値を代入
//* if(password_verify($lpw, $val["lpw"])){
if( password_verify($_POST["lpw"],$val["lpw"])){
  //Login成功時
  $_SESSION["chk_ssid"]  = session_id();
  $_SESSION["kanri_flg"] = $val['kanri_flg'];
  $_SESSION["name"]      = $val['name'];
  redirect("bm_list_view.php");
}else{
  //Login失敗時(Logout経由)
  redirect("bm_login.php");
}

exit();
