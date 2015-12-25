<?php

/* 改修時、CREATE_DATEは別関数にしてreturnのほうがいいかも */
/* 改修時、returnする文言は別ファイルにしてreturnのほうがいいかも（オブジェクト指向関連） */
/* 呼び出し元（pay_redist_submit.php） */
/* 決済登録 */
function pay_redist($purchaser,$kind,$price,$pay_date_year,$pay_date_mouth,$pay_date_day,$pay_method,$private,$note) {

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
	
        $date = $pay_date_year.'/'.$pay_date_mouth.'/'.$pay_date_day.' 00:00:00';

	// ユーザIDの取得
	require "get_user_id.php";
	$get_user_id = get_user_id($purchaser);
        
        echo $get_user_id;
        
	// 種類IDの取得
	require "get_kind_id.php";
	$get_kind_id = get_kind_id($kind);

	// 決済種別IDの取得
	require "get_pay_method_id.php";
	$get_pay_method_id = get_pay_method_id($pay_method);

	// CREATE_DATEの変数作成
	date_default_timezone_set('Asia/Tokyo');
	$create_date = date("Y/n/j H:i:s");
	
                // DB接続呼び出し
        include "../../php/common/db_connect.php";
        
        $sql = '
                INSERT INTO T_Pay_log (
                    USER_ID,
                    KIND_ID,
                    PRICE,
                    PAY_METHOD_ID,
                    PAY_PRIVATE_FLG,
                    PAY_DATE,
                    NOTE,
                    CREATE_DATE
                ) VALUES (
                    :user_id,
                    :kind_id,
                    :price,
                    :pay_method_id,
                    :private,
                    :date,
                    :note,
                    :create_date
                );';
        
        // プライベートステータス変数定義
        $off = "0";
        $on = "1";
        
        // SQLの送信
        $stmt = $pdo -> prepare($sql);
        $stmt -> bindParam('user_id',$get_user_id);
        $stmt -> bindParam('kind_id',$get_kind_id);
        $stmt -> bindParam('price',$price);
        $stmt -> bindParam('pay_method_id',$get_pay_method_id);
        if( $private == "off" ){
        $stmt -> bindParam('private',$off);
        } else if( $private == "on" ){
        $stmt -> bindParam('private',$on);
        }
        $stmt -> bindParam('date',$date);
        $stmt -> bindParam('note',$note);
        $stmt -> bindParam('create_date',$create_date);
        $stmt -> execute();
        
        echo $purchaser,$kind,$price,$pay_date_year,$pay_date_mouth,$pay_date_day,$pay_method,$private,$note;
        
	return "決済登録が完了しました";
}
?>