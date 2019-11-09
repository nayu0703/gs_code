<?php
session_start();
$id = $_GET["id"];
include("functs.php");
sschk();
$pdo = db_conn();

$stmt=$pdo->prepare("SELECT * FROM game_list WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$stmt_1=$pdo->prepare("SELECT * FROM game_detail WHERE id=:id");

$status=$stmt->execute();

if($status==false) {
    sql_error();
}else{
    $row = $stmt->fetch();
    $row_1 = $stmt_1->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<header>
<div>データ詳細入力</div>
</header>
<div><a href="select.php">データ一覧</a></div>
<form method="post" action="update.php">
<div class="formarea"></div>
  <fieldset>
    <legend class="midasi">詳細入力</legend>
    <p><?=$row["id"]?></p>
    <label>タイトル<input type="text" name="title" value="<?=$row["title"]?>"><br></label>
    <label>メーカー<input type="text" name="maker" value="<?=$row["maker"]?>"><br></label>
    <label>FD,続編の有無<input type="text" name="next" value="<?=$row["next"]?>"><br></label>
    <label>所持〇<input type="radio" name="have" value="1" 
    <?php
        if($row["have"]==1){echo "checked";
        }
    ?>
    >
    ×<input type="radio" name="have" value="0" 
    <?php
        if($row["have"]==0){echo "checked";
        }
    ?>
    >
    <br></label>
    <label>プレイ〇<input type="radio" name="play" value="1" 
    <?php
        if($row["play"]==1){echo "checked";
        }
    ?>
    >
    ×<input type="radio" name="play" value="0"
    <?php
        if($row["play"]==0){echo "checked";
        }
    ?>
    >
    <br></label>
    <label>記事〇<input type="radio" name="page" value="1" <?php
        if($row["page"]==1){echo "checked";
        }
    ?>
    >
    ×<input type="radio" name="page" value="0"
    <?php
        if($row["page"]==0){echo "checked";
        }
    ?>
    >
    <br></label>
   
    <input type="submit" value="送信">
    </fieldset>
</body>
</html>
