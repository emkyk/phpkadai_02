<?php
session_start();
include 'db_config.php'; // データベース設定の読み込み

// POSTデータをセッションに保存
$_SESSION['formData'] = $_POST;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力内容の確認</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>入力内容の確認</h1>
    </header>
    <main>
        <form action="submit.php" method="post">
            <h2>以下の内容でよろしいですか？</h2>
            <?php
            foreach ($_SESSION['formData'] as $key => $value) {
                if (is_array($value)) {
                    $value = htmlspecialchars(json_encode($value, JSON_UNESCAPED_UNICODE));
                } else {
                    $value = htmlspecialchars($value);
                }
                echo "<p><strong>" . htmlspecialchars($key) . ":</strong> " . $value . "</p>";
                // データを隠しフィールドとして再送
                echo '<input type="hidden" name="' . htmlspecialchars($key) . '" value="' . $value . '">';
            }
            ?>
            <button type="submit">送信</button>
            <button type="button" onclick="history.back();">修正</button>
        </form>
    </main>
</body>
</html>
