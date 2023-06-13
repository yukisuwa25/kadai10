<?php
//XSS対応
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}
//DB接続
function db_conn(){
    try {
        $db_name = "kadai10";
        $db_id = "root";
        $db_pw = "";
        $db_host = "localhost";
        return new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
    } catch (PDOException $e) {
        exit('DB Connection Error:'.$e->getMessage());
    }
}
//SQLエラー関数
function sql_error($stmt){
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}
//リダイレクト関数
function redirect($page){
    header("Location: ".$page);
    exit();
}
//SessionCheck
function sschk(){
  if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
    exit("Login Error");
  }else{
    session_regenerate_id(true);
    $_SESSION["chk_ssid"] = session_id();
  }
}
//fileUpload
function fileUpload($fname,$path){
  if (isset($_FILES[$fname] ) && $_FILES[$fname]["error"] ==0 ) {
      //ファイル名取得
      $file_name = $_FILES[$fname]["name"];
      //一時保存場所取得
      $tmp_path  = $_FILES[$fname]["tmp_name"];
      //拡張子取得
      $extension = pathinfo($file_name, PATHINFO_EXTENSION);
      //ユニークファイル名作成
      $file_name = date("YmdHis").md5(session_id()) . "." . $extension;
      // FileUpload [--Start--]
      $file_dir_path = $path.$file_name;
      if ( is_uploaded_file( $tmp_path ) ) {
          if ( move_uploaded_file( $tmp_path, $file_dir_path ) ) {
              chmod( $file_dir_path, 0644 );
              return $file_name; //成功時：ファイル名を返す
          } else {
              return 1; //失敗時：ファイル移動に失敗
          }
      }
   }else{
       return 2; //失敗時：ファイル取得エラー
   }
}