<?php
session_start();

include("functs.php");
$pdo=db_conn();
sschk();

$stmt=$pdo->prepare("SELECT * FROM game_list");
$status=$stmt->execute();

$view="";
if($status==false){
    sql_error();
}else{
    while($r =$stmt->fetch(PDO::FETCH_ASSOC)){
      $view .='<p>';
      $view .= '<a href="detail.php?id='.$r["id"].'">';
      $view .=$r["id"];
      $view .='</a>';
      $view .="|".$r["title"]."|".$r["maker"]."|".$r["next"]."|".$r["have"]."|".$r["play"]."|".$r["page"];
      $view .="  ";
      $view .='<a href="delete.php?id='.$r["id"].'">';
      $view .='[<i></i>削除]';
      $view .='</a>'; 
      $view .='</P>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ゲームリスト</title>
</head>
<body id="main">
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<div>
    <div><?=$view?></div>
</div>
</body>
</html>