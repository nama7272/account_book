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
$sql = '
        SELECT 
            l.ID,
            u.USER,
            k.KIND,
            p.PAY_METHOD,
            l.PRICE,
            l.PAY_DATE 
        FROM 
            T_Pay_log l,
            M_User u,
            M_Kind k,
            M_Pay_method p 
        WHERE 
            u.ID = l.USER_ID 
            AND 
            k.ID = l.KIND_ID 
            AND 
            p.ID = l.PAY_METHOD_ID
            AND
            l.DEL_FLG = 0;
        ';

// PDOを使用しSQL送信
$stmt = $pdo -> query($sql);

// 合計の定義
$sum = 0;

// 配列の定義
$array = array();

echo "<table border='1'><th>決済ID</th><th>ユーザ</th><th>種類</th><th>決済方法</th><th>価格</th><th>購入日時</th><th>削除</th>";

while($row =  $stmt -> fetch(PDO::FETCH_ASSOC)){
    echo    
        "<tr><td>",$row['ID'],"</td>",
        "<td>",$row['USER'],"</td>",
        "<td>",$row['KIND'],"</td>",
        "<td>",$row['PAY_METHOD'],"</td>",
        "<td>",$row['PRICE'],"</td>",
        "<td>",$row['PAY_DATE'],"</td>",
        "<td><form action='../../php/'><input type='submit' name='".$row['ID']."' value='".$row['ID']."'></form></td></tr>"
    ;
    
    // 配列にIDを入れていく
    $array[] = $row['ID'];

}

include "../../php/common/pay_regist_delete.php";


$sum += $row['PRICE'];

echo '</table>';
echo "合計金額",$sum,"<br>";
echo "1人頭金額",round($sum/2);


    if(isset($POST['59'])){
        include "";
        $sum = Delete();
        echo 'ボタンがおされた';
    }


?>