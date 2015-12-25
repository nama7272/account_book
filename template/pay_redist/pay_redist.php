<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="../../css/admin.css">
    <link rel="stylesheet" type="text/css" href="../../css/pay_regist.css">
</head>
<body>

<h1>決済登録画面</h1>

<!-- ナビ -->
<h2><a href="../../index.php">戻る</a></h2>

<!-- 登録フォーム -->
<h3>決済登録</h3>
<div class="contentbox">
<form method="post" action="">
	<p class="textbox-text-area"><span class="textbox-text">購入者</span></p>
	<!-- <select name="purchaser"> -->
        <p class="textbox-area"><?php require_once ("../../php/common/get_user_list.php"); ?></p>
	<p class="textbox-text-area"><span class="textbox-text">種類</span></p>
	<!-- <select name="kind"> -->
        <p class="textbox-area"><?php require_once ("../../php/common/get_kind_list.php"); ?></p>
	<p class="textbox-text-area"><span class="textbox-text">金額</span></p>
	<p class="textbox-area"><input type="text" name="price" value="" class="textbox"></p>
        <?php require_once ("../../php/common/get_date.php");?>
        <p class="textbox-text-area"><span class="textbox-text">決済年</span></p>
        <p class="textbox-area"><input type="text" name="pay_date_year" value="<?php get_date_year(); ?>" class="textbox"></p>
        <p class="textbox-text-area"><span class="textbox-text">決済月</span></p>
        <p class="textbox-area"><input type="text" name="pay_date_mouth" value="<?php get_date_mouth(); ?>" class="textbox"></p>
        <p class="textbox-text-area"><span class="textbox-text">決済日</span></p>
	<p class="textbox-area"><input type="text" name="pay_date_day" value="<?php get_date_day(); ?>" class="textbox"></p>
	<p class="textbox-text-area"><span class="textbox-text">決済方法</span></p>
	<!-- <select name="pay_method_name"> -->
	<p class="textbox-area"><?php require_once ("../../php/common/get_pay_method_list.php"); ?></p>
	<p class="textbox-text-area"><span class="textbox-text">個人用</span></p>
	<p class="textbox-area">
            <label>
                <input type="checkbox" name="private" value="on" class="textbox-text">
                <input type="hidden" name="private" value="off">
                ※個人用決済はここにチェックを入れて下さい。
            </label>
        </p>
        <p class="textbox-text-area"><span class="note">備考</span></p>
        <p class="textbox-area"><input type="text" name="note" value="" class="textbox"></p>
        <!--<p class="textbox-text-area"><span class="textbox-text">レシート登録</span></p>
        <p class="textbox-area"><input type="file" name="img_upload" value="" class="textbox"></p>-->
        <p class="button-area"><input type="submit" name="pay_redist_submit" class="button"></p>
</form>
</div>
<?php require_once ("../../php/pay_redist/pay_redist_submit.php"); ?>
</body>
</html>