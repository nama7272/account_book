<?php

	/*
		ユーザ名からIDを取得します。
		@param ユーザ名
		@return ユーザID
		@error get_user_id_row_error
	*/
	
	function get_user_id($purchaser){
	
        // DB接続呼び出し
            
        include "../../php/common/db_connect.php";
        
		// SQL文
		$sql = 'SELECT ID FROM M_User WHERE USER = :purchaser ;';

                // プリペアードを使用
                $stmt = $pdo -> prepare($sql);
                // プリペアード変数設定
                $stmt -> bindParam('purchaser',$purchaser);
                
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