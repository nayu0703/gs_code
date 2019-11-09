<?php
session_start();
echo "1";

include("functs.php");
$pdo = db_conn();

$sql = "SELECT * FROM gs_user_table WHERE lid=:lid AND lpw=:lpw AND life_flg=0";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid',$_POST["lid"],PDO::PARAM_STR);
$stmt->bindValue(':lpw',$_POST["lpw"],PDO::PARAM_STR);
$status = $stmt->execute();

if($status==false){
    sql_error();
}; 

$val = $stmt->fetch();

if($val["id"] !=""){
    echo "2";
    $_SESSION["chk_ssid"]    = session_id();
    $_SESSION["kanri_flg"]   =$val['kanri_flg'];
    $_SESSION["name"]        =$val['name'];
    redirect("select.php");
}else{
    redirect("login.php");
};
?>