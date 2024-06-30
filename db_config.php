<?php

// ローカルホスト接続情報
$servername = 'localhost';
$username = 'root'; // XAMPPのデフォルトユーザー
$password = ''; // XAMPPのデフォルトはパスワードなし
$dbname = 'kadai_db_survey'; // 作成したデータベース名


// サーバー接続情報
// $servername = 'mysql648.db.sakura.ne.jp';
// $username = 'emkyk';
// $password = 'sakura*********';
// $dbname = 'emkyk_kadai_db_survey';

try {
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "データベースに接続成功";
} catch (PDOException $e) {
    die('データベース接続エラー: ' . $e->getMessage());
}
?>
