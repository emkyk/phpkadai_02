<?php
// XSS対策（Cross Site Scripting）: サニタイズ処理
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// データベース接続
function connectDatabase()
{
    require_once 'db_config.php'; // データベース接続設定を読み込む

    // データベースに接続
    $conn = new mysqli($servername, $username, $password, $dbname);

    // 接続をチェック
    if ($conn->connect_error) {
        die("データベース接続エラー: " . $conn->connect_error);
    }

    return $conn;
}

// データベース接続を閉じる
function closeDatabase($conn)
{
    $conn->close();
}

// 他に必要な汎用的な関数や設定を追加することができます
?>
