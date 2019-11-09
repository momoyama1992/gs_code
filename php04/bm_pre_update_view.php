<?php

session_start();

$id     = $_GET["id"];
include("funcs.php");
sschk();
$pdo    = db_conn();

$stmt   = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute(); //実行

if($status==false) {
  sql_error();
}else{
    $row = $stmt->fetch();
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ブクマ詳細</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding:10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="bm_list_view.php">登録ブクマ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- <form method="POST" action="bm_update.php"> -->
  <div class="jumbotron">
   <fieldset>
    <legend>［詳細］</legend>
     <label>タイトル：<?=$row["name"]?></label><br>
     <label>URL：<?=$row["url"]?></label><br>
     <label>あらすじ：<?=$row["comme"]?></label><br>
     <a class="btn btn-success" href="bm_list_view.php">[一覧へ戻る]</a>
     <a class="btn btn-danger" href="bm_update_view.php">[編集]</a>
     <input type="hidden" name="id" value="<?=$id?>" >
    </fieldset>
  </div>
<!-- </form> -->
<!-- Main[End] -->


</body>
</html>