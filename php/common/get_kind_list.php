<?php

	/*
		種類をリストで取得します。
		@param なし
		@return selectリスト
		@error なし
	*/
	
// DB接続呼び出し
require_once "db_connect.php";	
		
// SQL文
$sql = 'SELECT KIND FROM M_Kind;';
	
// SQLの送信
$stmt = $pdo -> query($sql);
		
// select要素の生成
echo '<select name="kind" class="textbox">';	
// ユーザのID取得
while($row =  $stmt -> fetch(PDO::FETCH_ASSOC)){
        // select子要素のoption要素をレコード数分生成
        echo '<option>'.$row['KIND'].'</option>';
}

// select要素の終了の生成
echo "</select>";

 $stmt->closeCursor();

?>