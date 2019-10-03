<?php
include("funcs.php");
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
        $view .= '<a class="btn btn-danger" href="bm_delete.php?id='.$r["id"].'">';
        $view .= '[削除]';
        $view .= '</a>';
        $view .= '</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>気になる漫画リスト</title>
</head>
<body id="main">

<!-- Head[Start] -->
<header>
    <nav class="navber navbar-default">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">登録</a>
        </div>
    </nav>
</header>
<!-- Head[End] -->

<!-- Head[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Head[End] -->

</body>
</html>




