<?php
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}
function db_conn(){
    try {
        return new PDO('mysql:dbname=game_database;charset=utf8;host=localhost','root','nagi1224');
    }catch(PDOException $e){
        exit('DB connect Error:'.$e->getMessage());
    }
}
function sql_error(){
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}
function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}
function sschk(){
  if(
    !isset($_SESSION["chk_ssid"])||
    $_SESSION["chk_ssid"] !=session_id()
  ){
      exit("LOGIN ERROR");
  }else{
      session_regenerate_id(true);
      $_SESSION["chk_ssid"] =session_id();
  }
}
?>