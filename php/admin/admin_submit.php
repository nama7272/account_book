<?php
	/* ユーザ登録 */
	if(isset($_POST['user_redist_submit'])){
		$user_name_redist = isset($_POST['user_name_redist']) ? htmlspecialchars($_POST['user_name_redist']) : null;
		$user_pass_redist = isset($_POST['user_pass_redist']) ? htmlspecialchars($_POST['user_pass_redist']) : null;
		require "admin_redist.php";
		$anser = user_redist($user_name_redist,$user_pass_redist);
		echo $anser;
	
	/* 種類登録 */
	} else if(isset($_POST["kind_redist_submit"])){
		$kind_redist = isset($_POST['kind_redist']) ? htmlspecialchars($_POST['kind_redist']) : null;
		require "admin_redist.php";
		$anser = kind_redist($kind_redist);
		echo $anser;
	
	/* 決済方法登録 */
	} else if(isset($_POST["pay_method_redist_submit"])){
		$pay_method_redist = isset($_POST['pay_method_redist']) ? htmlspecialchars($_POST['pay_method_redist']) : null;
		require "admin_redist.php";
		$anser = pay_method_redist($pay_method_redist);
		echo $anser;
	}
	
	/* ユーザ変更 */
	if(isset($_POST['user_update_submit'])){
		$user_name_update = isset($_POST['user_name_update']) ? htmlspecialchars($_POST['user_name_update']) : null;
		$user_pass_update = isset($_POST['user_pass_update']) ? htmlspecialchars($_POST['user_pass_update']) : null;
		require "../../php/admin/admin_update.php";
		$anser = user_update($user_name_update,$user_pass_update);
		echo $anser;
	
	/* 種類変更 */
	} else if(isset($_POST["kind_update_submit"])){
		$kind_update = isset($_POST['kind_update']) ? htmlspecialchars($_POST['kind_update']) : null;
		require "../../php/admin/admin_update.php";
		$anser = kind_update($kind_update);
		echo $anser;
	
	/* 決済方法変更 */
	} else if(isset($_POST["pay_method_update_submit"])){
		$pay_method_update = isset($_POST['pay_method_update']) ? htmlspecialchars($_POST['pay_method_update']) : null;
		require "../../php/admin/admin_update.php";
		$anser = pay_method_update($pay_method_update);
		echo $anser;
	}
	
	/* ユーザ削除 */
	if(isset($_POST['user_delete_submit'])){
		$user_name_delete = isset($_POST['user_name_delete']) ? htmlspecialchars($_POST['user_name_delete']) : null;
		$user_pass_delete = isset($_POST['user_pass_delete']) ? htmlspecialchars($_POST['user_pass_delete']) : null;
		require "../../php/admin/admin_delete.php";
		$anser = user_delete($user_name_delete,$user_pass_delete);
		echo $anser;
	
	/* 種類削除 */
	} else if(isset($_POST["kind_delete_submit"])){
		$kind_delete = isset($_POST['kind_delete']) ? htmlspecialchars($_POST['kind_delete']) : null;
		require "../../php/admin/admin_delete.php";
		$anser = kind_delete($kind_delete);
		echo $anser;
	
	/* 決済方法削除 */
	} else if(isset($_POST["pay_method_delete_submit"])){
		$pay_method_delete = isset($_POST['pay_method_delete']) ? htmlspecialchars($_POST['pay_method_delete']) : null;
		require "../../php/admin/admin_delete.php";
		$anser = pay_method_delete($pay_method_delete);
		echo $anser;
	}
?>