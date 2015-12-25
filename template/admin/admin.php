<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>

<h1>じろのかけいぼ</h1>

<!-- ナビ -->
<h2><a href="../../index.php">戻る</a></h2>

<!------------ 登録フォーム ------------>

<?php require_once ("../../php/admin/admin_submit.php");  ?>
<h3>ユーザ登録</h3>
<div class="contentbox">
<form method="post" action="">
	<p class="textbox-text-area"><span class="textbox-text">ユーザ名:</span></p>
        <p class="textbox-area"><input type="text" name="user_name_redist" class="textbox"></p>
	<p class="textbox-text-area"><span class="textbox-text">パスワード:</span></p>
        <p class="textbox-area"><input type="text" name="user_pass_redist" class="textbox"></p>
	<p class="button-area"><input type="submit" name="user_redist_submit" value="登録" class="button"></p>
</form>
    </div>
<h3><span>種類登録</span></h3>
<div class="contentbox">
<form method="post" action="">
	
        <p class="textbox-text-area"><span class="textbox-text">種類:</span></p>
	<p class="textbox-area"><input type="text" name="kind_redist" class="textbox"></p>
	<p class="button-area"><input type="submit" name="kind_redist_submit" value="登録" class="button"></p>
</form>
    </div>
<h3><span>決済方法登録</span></h3>
<div class="contentbox">
<form method="post" action="">
	
        <p class="textbox-text-area"><span class="textbox-text">決済方法:</span></p>
	<p class="textbox-area"><input type="text" name="pay_method_redist" value="" class="textbox"></p>
	<p class="button-area"><input type="submit" name="pay_method_redist_submit" value="登録" class="button"></p>
</form>
    </div>

<!------------ 変更フォーム ------------>
<!--
<p>変更</p>
<form method="post" action="">
	<span>ユーザ変更</span>
	<input type="text" name="user_name_update" value="">
	<input type="text" name="user_pass_update" value="">
	<input type="submit" name="user_update_submit" value="変更">
</form>
	
<form method="post" action="">
	<span>種類変更</span>
	<input type="text" name="kind_update" value="">
	<input type="submit" name="kind_update_submit" value="変更">
</form>
	
<form method="post" action="">
	<span>決済方法変更</span>
	<input type="text" name="pay_method_update" value="">
	<input type="submit" name="pay_method_update_submit" value="変更">
</form>

<!------------ 削除フォーム ------------>
<!--
<p>削除</p>
<form method="post" action="">
	<span>ユーザ削除</span>
	<input type="text" name="user_name_delete" value="">
	<input type="text" name="user_pass_delete" value="">
	<input type="submit" name="user_delete_submit" value="削除">
</form>

<form method="post" action="">
	<span>種類削除</span>
	<input type="text" name="kind_delete" value="">
	<input type="submit" name="kind_delete_submit" value="削除">
</form>

<form method="post" action="">
	<span>決済方法削除</span>
	<input type="text" name="pay_method_delete" value="">
	<input type="submit" name="pay_method_delete_submit" value="削除">
</form>
-->
</body>
</html>