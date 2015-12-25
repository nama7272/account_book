<?php

/* 改修時、CREATE_DATEは別関数にしてreturnのほうがいいかも */
/* 改修時、returnする文言は別ファイルにしてreturnのほうがいいかも（オブジェクト指向関連） */

/* 決済登録 */
function kind_redist($purchaser,$kind,$price,$pay_date_year,$pay_date_mouth,$pay_date_day,$pay_method,$private) {

	if( $purchaser == null ){
		return "決済者を入力して下さい";
	}else if( $kind == null ){
		return "種類を入力して下さい";
	}else if( $price == null ) {
		return "金額を入力して下さい";
	}else if( $pay_date_year == null ) {
		return "年を入力して下さい";
	}else if( $pay_date_mouth == null ) {
		return "月を入力して下さい";
	}else if( $pay_date_day == null ) {
		return "日を入力して下さい";
	}else if( $pay_method == null ) {
		return "決済方法を入力して下さい";
	}
	
	// ユーザIDの取得
	require "get_user_id.php";
	$get_user_id = get_user_id($purchaser);
	
	// 種類IDの取得
	require "get_kind_id.php";
	$get_kind_id = get_kind_id($kind);
	
	// 決済種別IDの取得
	require "get_pay_method_id.php";
	$get_pay_method_id = get_pay_method_id($pay_method);
	
	// DB接続呼び出し
        require_once "../common/db_connect.php";
        
	// CREATE_DATEの変数作成
	date_default_timezone_set('Asia/Tokyo');
	$create_date = date("Y/n/j H:i:s");
	
	$sql = 'INSERT INTO M_Pay_redist (USER,PASS,CREATE_DATE) values (:name,:pass,:date);';
        
	$stmt = $pdo -> prepare($sql);
        $stmt -> bindParam('name',$user_name_redist);
        $stmt -> bindParam('pass',$user_pass_redist);
        $stmt -> bindParam('date',$create_date);
        
	return "決済登録が完了しました";
}
?>