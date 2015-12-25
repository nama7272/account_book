<?php
/*
 * 決済を削除するクラスです
 * 
 * param = 決済ログID
 * return = "削除が完了しました。"
 * error = "削除できませんでした。"
 * 
 */

    class PayRegistDelete {
        
        public function delete($param) {
            
            try {// DBの接続呼び出し
                include 'db_connect.php';
                
                try {// SQL実行
                    $sql = 'UPDATE T_Pay_log SET DEL_FLG = 1 WHERE ID = :delid ;';// SQL文
                    $stmt = $pdo -> prepare($sql);// プリペアード設定
                    $stmt -> bindParam($param);
                    $stmt -> execute();// SQL実行
                } catch(Exception $e) {
                    echo 'SQLの実行に失敗しました。';
                    return;
                }
                
            } catch(Exception $e) {
                echo 'データベースへアクセスできません。';
                return;
            }  
            echo 'OK';
            return;
        }
        
    }


/*
 * 呼び出し方法
 * $hensu = new Delete(引数);
 * 
 * $hensu -> delete(引数);
 * 
 */

?>