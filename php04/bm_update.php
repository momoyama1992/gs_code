<?php
session_start();

$name   = $_POST["name"];
$url    = $_POST["url"];
$comme  = $_POST["comme"];
$id     = $_POST["id"];

include("funcs.php");
$pdo    = db_conn();

$stmt   = $pdo->prepare("UPDATE gs_bm_table SET name=:name,url=:url,comme=:comme WHERE id=:id");
$stmt->bindValue(':name'    ,$name  ,PDO::PARAM_STR);
$stmt->bindValue(':url'     ,$url   ,PDO::PARAM_STR);
$stmt->bindValue(':comme'   ,$comme ,PDO::PARAM_STR);
$stmt->bindValue(':id'      ,$id    ,PDO::PARAM_STR);
$status = $stmt->execute();

if($status==false){
    sql_error();
}else{
    redirect("bm_list_view.php");
}

?>