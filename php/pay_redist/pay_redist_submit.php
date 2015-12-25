<?php
	/* ユーザ登録 */
	if(isset($_POST['pay_redist_submit'])){
		$purchaser = isset($_POST['purchaser']) ? htmlspecialchars($_POST['purchaser']) : null;
		$kind = isset($_POST['kind']) ? htmlspecialchars($_POST['kind']) : null;
		$price = isset($_POST['price']) ? htmlspecialchars($_POST['price']) : null;
		$pay_date_year = isset($_POST['pay_date_year']) ? htmlspecialchars($_POST['pay_date_year']) : null;
		$pay_date_mouth = isset($_POST['pay_date_mouth']) ? htmlspecialchars($_POST['pay_date_mouth']) : null;
		$pay_date_day = isset($_POST['pay_date_day']) ? htmlspecialchars($_POST['pay_date_day']) : null;
		$pay_method = isset($_POST['pay_method']) ? htmlspecialchars($_POST['pay_method']) : null;
		$private = isset($_POST['private']) ? htmlspecialchars($_POST['private']) : null;
                $note = isset($_POST['note']) ? htmlspecialchars($_POST['note']) : null;
		require_once "T_pay_redist.php";
		$anser = pay_redist($purchaser,$kind,$price,$pay_date_year,$pay_date_mouth,$pay_date_day,$pay_method,$private,$note);
		echo $anser;
	}
?>