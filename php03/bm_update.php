<?php

$id     = $_POST["id"];
$name   = $_POST["name"];
$name   = $_POST["url"];
$comme  = $_POST["comme"];

include("funcs.php");
$pdo = db_conn();

$stmt = $pdo->prepare("UPDATE gs_bm_table SET name=:name,url=:url,comme=:comme WHERE id=:id");
$stmt->bindValue();
$stmt->bindValue();
$stmt->bindValue();
$stmt->bindValue();
$status = $stmt->execute();

if($status==false){
    sql_error();
}else{
    redirect("bm_list_view.php");
}

?>