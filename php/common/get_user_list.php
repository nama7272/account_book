<?php

	/*
		ユーザ名をリストで取得します。
		@param なし
		@return selectリスト
		@error なし
	*/

// DB接続呼び出し
require_once "db_connect.php";	

// SQL文
$sql = 'SELECT USER FROM M_User;';

// SQLの送信
$stmt = $pdo -> query($sql);

// select要素の生成
echo '<select name="purchaser" class="textbox">';

while($row =  $stmt -> fetch(PDO::FETCH_ASSOC)){
echo "<option>",$row['USER'],"</option>";
}

// select要素の終了の生成
echo ('</select>');

 $stmt->closeCursor();
?>