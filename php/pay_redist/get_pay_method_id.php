<?php

	/*
		決済種別からIDを取得します。
		@param 決済種別
		@return 決済種別ID
		@error get_user_id_row_error
	*/
	
	function get_pay_method_id($pay_method){
	
            
	// DB接続呼び出し
       include "../../php/common/db_connect.php";
       

		// SQL文
		$sql = 'SELECT ID FROM M_Pay_method WHERE PAY_METHOD = :pay_method ;';
		
                // SQL実行
                $stmt = $pdo -> prepare($sql);
                $stmt -> bindParam('pay_method',$pay_method);

		                // SQLの実行
                $stmt->execute();
		// arraylistの定義
		$array = array();
		
		// インクリメント用数値定義
		$user_id_count = 0;
		
		// ユーザのID取得
		while($row =  $stmt -> fetch(PDO::FETCH_ASSOC)){
			$array[$user_id_count] = $row['ID'];
			$user_id_count++;
		}
		
		// 取得レコードが0行の場合
		if( count($array) < 1 || count($array) > 2 ){
			return "get_user_id_row_error";
		}
		return $array[0];
	}
?>