<?php

$title = $_POST["title"];
$maker = $_POST["maker"];
$next  = $_POST["next"];
$have  = $_POST["have"];
$play  = $_POST["play"];
$page  = $_POST["page"];
$id    = $_POST["id"];

include("functs.php");
$pdo = db_conn();

$stmt = $pdo->prepare("UPDATE game_list SET title=:title,maker=:maker,next=:next,have=:have,play=:play,page=:page WHERE id=:id");
$stmt->bindValue(':title',$title,PDO::PARAM_STR);
$stmt->bindValue(':maker',$maker,PDO::PARAM_STR);
$stmt->bindValue(':next',$next,PDO::PARAM_STR);
$stmt->bindValue(':have',$have,PDO::PARAM_INT);
$stmt->bindValue(':play',$play,PDO::PARAM_INT);
$stmt->bindValue(':page',$page,PDO::PARAM_INT);
$stmt->bindValue(':id',  $id  ,PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
    sql_error();
}else{
    redirect("select.php");
}
?>