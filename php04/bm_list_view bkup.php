<?php
session_start();

include("funcs.php");
// sschk();
$pdo = db_conn();

$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

$view="";
if($status==false){
    sql_error();
}else{
  while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= '<a href="bm_update_view.php?id='.$r["id"].'">';
    $view .= $r["id"]."|".$r["name"]."|".$r["url"]."|".$r["comme"];
    $view .= '</a>';
    $view .= " ";
    if($_SESSION["kanri_flg"]=="1"){
      $view .= '<a class="btn btn-danger" href="bm_delete.php?id='.$r["id"].'">';
      $view .= '[削除]';
      $view .= '</a>';
    }
    $view .= '<p>';
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ブクマ一覧</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ブクマ一覧</a>
      <a class="navber-brand" href="logout.php">LOGOUT</a>
      <?=$_SESSION["name"]?>さん、こんにちは。
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>