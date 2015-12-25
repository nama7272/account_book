<html>
<head>
</head>
<body>

<h1>MySQLのテーブルに登録</h1>

<form method="post" action="">
idの入力<input type="text" name="id" value="">
userの入力<input type="text" name="user" value="">
<input type="submit" name="submit" value="登録">
</form>

<?php
/* 作成日 2014/04/03
   作成者 namai
   Version 0.1 */

$registid = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : null; //postの初期化と変数設定
$registuser = isset($_POST['user']) ? htmlspecialchars($_POST['user']) : null; //postの初期化と変数設定


if ($registid == "" || $registuser == "") {
	echo "値が入ってません";
} else {

$url = "localhost"; // ホスト名の変数
$user = "root"; // ユーザー名の変数
$pass = "pass"; // パスワードの変数
$db = "test"; // データベース名の変数

$insertsql = 'INSERT INTO T_test (ID,USER) values ('.$registid.',"'.$registuser.'");'; // SQL文の変数

$selectsql = "select ID,USER from T_test"; // SQL文の変数

// MySQLへの接続
$link = mysql_connect($url,$user,$pass) or die('MySQLの接続に失敗');

// データベースの選択
$dbselect = mysql_select_db($db) or die('データベースの選択に失敗');

// クエリを送信(インサート)
$insrtresult = mysql_query($insertsql,$link) or die('インサートクエリの送信に失敗');

// クエリを送信(セレクト)
$selectresult = mysql_query($selectsql,$link) or die('セレクトクエリの送信に失敗');

echo "<h2>データ一覧</h2>";
while($row =  mysql_fetch_assoc($selectresult)){
echo "<ul><li>".$row['ID'],$row['USER']."</li></ul>";
}

// 結果保持用メモリの開放
mysql_free_result($selectresult);

// MySQLの切断
mysql_close($link) or die("MySQL切断に失敗");
}
?>

<form method="post" action="">
idで削除<input type="text" name="deleteid" value="">
<input type="submit" name="submit2" value="削除">
</form>

<?php
//データの削除
$registdeleteid = isset($_POST['deleteid']) ? htmlspecialchars($_POST['deleteid']) : null; //postの初期化と変数設定

if ($registdeleteid == "") {
	echo "値が入ってません";
} else {

$url2 = "localhost"; // ホスト名の変数
$user2 = "root"; // ユーザー名の変数
$pass2 = "pass"; // パスワードの変数
$db2 = "test"; // データベース名の変数

$deletesql = 'DELETE FROM T_test WHERE ID='.$registdeleteid.';'; // SQL文の変数

// MySQLへの接続
$link2 = mysql_connect($url2,$user2,$pass2) or die('MySQLの接続に失敗');

// データベースの選択
$dbselect2 = mysql_select_db($db2) or die('データベースの選択に失敗');

// クエリを送信(デリート)
mysql_query($deletesql,$link2) or die('デリートクエリの送信に失敗');

echo "<p>idは".$registdeleteid."が削除されました。</p>";

// MySQLの切断
mysql_close($link2) or die("MySQL切断に失敗");
}
?>



</body>
</html>