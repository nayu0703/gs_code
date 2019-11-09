<?php
$title=$_POST["title"];
$maker=$_POST["maker"];
$next=$_POST["next"];
$have=$_POST["have"];
$play=$_POST["play"];
$page=$_POST["page"];

include("functs.php");
$pdo = db_conn();

$stmt =$pdo->prepare("INSERT INTO game_list(title,maker,next,have,play,page)VALUES(:title,:maker,:next,:have,:play,:page);");
$stmt->bindValue(':title',$title,PDO::PARAM_STR);
$stmt->bindValue(':maker',$maker,PDO::PARAM_STR);
$stmt->bindValue(':next',$next,PDO::PARAM_STR);
$stmt->bindValue(':have',$have,PDO::PARAM_STR);
$stmt->bindValue(':play',$play,PDO::PARAM_STR);
$stmt->bindValue(':page',$page,PDO::PARAM_STR);
$status=$stmt->execute();

if($status==false){
    sql_error();
}else{
    redirect("index.php");
}

?>
