<?php

    // 検証環境
//    $db = 'mysql:dbname=a4028477_record;host=localhost';
//    $user = "root";
//    $pass = "pass";

    // 本番環境
    $db = 'mysql:dbname=a4028477_record;host=mysql10.000webhost.com';
    $user = "a4028477_record";
    $pass = "nama7272";
    
    try{
        $pdo = new PDO($db,$user,$pass);
    
    }catch(PDOException $e){
        $pdo = null;
        return 'データベースにアクセスできません。管理者に問い合わせてください';
    }
    
    // -> はアロー演算子といって日本では「～の」という考え
    
?>
