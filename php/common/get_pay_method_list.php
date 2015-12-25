<?php
	/*
		決済種別をリストで取得します。
		@param なし
		@return selectリスト
		@error なし
	*/
	
require_once "db_connect.php";	
		
// SQL文
$sql = 'SELECT PAY_METHOD FROM M_Pay_method;';

// SQL送信
$stmt = $pdo -> query($sql);

// select要素の生成
echo '<select name="pay_method" class="textbox">';	
// ユーザのID取得
while($row =  $stmt -> fetch(PDO::FETCH_ASSOC)){
    // select子要素のoption要素をレコード数分生成
    echo '<option>'.$row['PAY_METHOD'].'</option>';
}
// select要素の終了の生成
echo "</select>";


 $stmt->closeCursor();
?>