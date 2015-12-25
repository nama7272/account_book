<?php

	/*
		種類名からIDを取得します。
		@param 種類名
		@return 種類ID
		@error get_kind_id_row_error
         * 呼び出し元（T_pay_redist.php）
	*/
	
	function get_kind_id($kind){
	
		        // DB接続呼び出し
        include "../../php/common/db_connect.php";

		// SQL文
		$sql = 'SELECT ID FROM M_Kind WHERE KIND = :kind ;';
                
                // SQL実行
                $stmt = $pdo -> prepare($sql);
                $stmt -> bindParam('kind',$kind);

                
                                // SQLの実行
                $stmt->execute();
                
		// arraylistの定義
		$array = array();
		// インクリメント用数値定義
		$kind_id_count = 0;
                
		// ユーザのID取得
		while($row =  $stmt -> fetch(PDO::FETCH_ASSOC)){
			$array[$kind_id_count] = $row['ID'];
			$kind_id_count++;
		}
                
		// 取得レコードが0行の場合
		if( count($array) < 1 || count($array) > 2 ){
			return "get_kind_id_row_error";
		}
                
		return $array[0];    
	}
?>