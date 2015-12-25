<?php

/* 改修時、CREATE_DATEは別関数にしてreturnのほうがいいかも */
/* 改修時、returnする文言は別ファイルにしてreturnのほうがいいかも（オブジェクト指向関連） */



/* ユーザ登録 */
function user_redist($user_name_redist,$user_pass_redist) {

	if( $user_name_redist == null and $user_pass_redist == null ){
		return "ユーザ名とパスワードを入力してください";
	}else if( $user_name_redist == null ){
		return "ユーザ名を入力してください";
	}else if( $user_pass_redist == null ) {
		return "パスワードを入力してください";
	}
	
	// CREATE_DATEの変数作成
	date_default_timezone_set('Asia/Tokyo');
	$create_date = date("Y/n/j H:i:s");
        
        
// DB接続呼び出し
require_once (dirname(__FILE__).'/../common/db_connect.php');	

// SQL文
$sql = 'INSERT INTO M_User (USER,PASS,CREATE_DATE) values (:name,:pass,:date);';

// PDOを使用しプリペアードでSQL送信
$stmt = $pdo -> prepare($sql);
$stmt -> bindParam('name',$user_name_redist);
$stmt -> bindParam('pass',$user_pass_redist);
$stmt -> bindParam('date',$create_date);
$stmt -> execute();

	return "ユーザ登録が完了しました";
}

/* 種類登録 */
function kind_redist($kind_redist) {

	if( $kind_redist == null ){
		return "種類を入力してください";
	}
	
	// CREATE_DATEの変数作成
	date_default_timezone_set('Asia/Tokyo');
	$create_date = date("Y/n/j H:i:s");
	
require_once (dirname(__FILE__).'/../common/db_connect.php');	

	$sql = 'INSERT INTO M_Kind (KIND,CREATE_DATE) values (:kind,:date);';

        $stmt = $pdo -> prepare($sql);
        $stmt -> bindParam('kind',$kind_redist);
        $stmt -> bindParam('date',$create_date);
        $stmt -> execute();

	return "種類登録が完了しました";
}

/* 決済方法登録 */
function pay_method_redist($pay_method_redist) {

	if( $pay_method_redist == null ){
		return "決済方法を入力してください";
	}
	
	// CREATE_DATEの変数作成
	date_default_timezone_set('Asia/Tokyo');
	$create_date = date("Y/n/j H:i:s");
	
require_once (dirname(__FILE__).'/../common/db_connect.php');	

	$sql = 'INSERT INTO M_Pay_method (PAY_METHOD,CREATE_DATE) values (:pay_method,:date);';

        $stmt = $pdo -> prepare($sql);
        $stmt -> bindParam('pay_method',$pay_method_redist);
        $stmt -> bindParam('date',$create_date);
        $stmt -> execute();
        
	return "決済方法登録が完了しました";
}
?>