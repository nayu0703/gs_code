<?php
$id = $_GET["id"];

include("functs.php");
$pdo = db_conn();

$stmt = $pdo->prepare("DELETE FROM game_list WHERE id=:id");
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
    sql_error();
}else{
    redirect("select.php");
}
?>