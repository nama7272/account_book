<?php

        // ファイル格納アドレスの設定
        $uploadaddless = $_SERVER['DOCUMENT_ROOT'] . '/account_book/img_upload';

        // 先頭句の設定
        $tmpimgname = 'pay_img_';
        
        // 日時の設定
        require_once 'get_date.php';
        $date = $get_date_yaer().$get_date_mouch().get_date_day().get_date_hour().get_date_minute().get_date_second();
        
        // 拡張子の設定
        $extension = ".jpg";
        
        $pay_img = "";
        
        // ファイルをサーバーに移動
        if (move_uploaded_file($_FILES["img_upload"]["tmp_name"],$uploadaddless.$tmpingname.$date)) {
            $pay_img = $uploadaddless.$tmpingname.$date;
            echo $pay_img;
        } else { echo "ファイルをアップロードできませんでした"; }

?>
