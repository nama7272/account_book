<?php

/* ユーザ登録 */
function user_redist($user_redist_name,$user_redist_pass) {

	if( $user_redist_name == null ){
		return "ユーザ名を入力してください";
	}else if( $user_redist_pass == null ) {
		return "パスワードを入力してください";
	}
	
	try{
		// 接続用変数
		$url = "mysql10.000webhost.com";
		$user = "a4028477_record";
		$pass = "nama7272";
		$db = "a4028477_record";
		$insert_sql = 'INSERT INTO M_User (USER,PASS,CREATE_DATE) values ('.$registid.',"'.$registuser.'");';
		$link = mysql_connect($url,$user,$pass);
		
		try {
			$dbselect = mysql_select_db($db);
			
			try {
				$insrtresult = mysql_query($insert_sql,$link);
				
				try {
				mysql_free_result($selectresult);
				
					try {
						mysql_close($link);
						
					} catch(Exception $e) {
						return "MySQLの切断に失敗しました";
					}
				} catch(Exception $e) {
					return "メモリの開放に失敗しました";
				}
			} catch(Exception $e) {
				return "クエリの送信に失敗しました";
			}
		} catch(Exception $e) {
			return "データベースへの接続に失敗しました";
		}
	} catch(Exception $e) {
		return "MySQLの接続に失敗しました";
	}
return "ユーザ登録が完了しました";
}




/*
// 登録フォームのpostの初期化と変数設定
$user_redist = isset($_POST['user_redist']) ? htmlspecialchars($_POST['user_redist']) : null;
$kind_redist = isset($_POST['kind_redist']) ? htmlspecialchars($_POST['kind_redist']) : null;
$pay_method_redist = isset($_POST['pay_method_redist']) ? htmlspecialchars($_POST['pay_method_redist']) : null;

	if( $user_redist == null ){
		return "入力項目が足りません";
		
		} else if ( $regist_purchaser == null ){
			return "購入者を選択してください";
		} else if( $regist_kind == null ){
			return "種類を選択してください";
		} else if( $regist_price == null ){
			return "種類を選択してください";
		}
	} else {

		try {
			// 接続用変数
			$url = "mysql10.000webhost.com";
			$user = "a4028477_record";
			$pass = "nama7272";
			$db = "a4028477_record";
			$insert_sql = 'INSERT INTO T_Pay_log (USER_ID,KIND_ID,PRICE,PAY_METHOD_ID,PAY_DATE,CREATE_DATE) values ('.$registid.',"'.$registuser.'");';
			$link = mysql_connect($url,$user,$pass);
			
			try {
				$dbselect = mysql_select_db($db);
				try {
					$insrtresult = mysql_query($insert_sql,$link);
					
					try {
					mysql_free_result($selectresult);
					
						try {
							mysql_close($link);
							
						} catch {
							return "MySQLの切断に失敗しました";
						}
					} catch {
						return "メモリの開放に失敗しました";
					}
				} catch {
					return "クエリの送信に失敗しました";
				}
			} catch {
				return "データベースへの接続に失敗しました";
		} catch {
			return "MySQLの接続に失敗しました";
		}
		
		return "データベースへの登録が完了しました";
	}
	
*/
	
?>