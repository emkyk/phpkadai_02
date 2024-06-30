<?php
include 'db_config.php'; // データベース設定の読み込み

$stmt = $conn->prepare("SELECT * FROM survey_responses");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>保存されたデータ</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>保存されたデータ</h1>
    </header>
    <main>
        <table border="1">
            <tr>
                <th>学籍番号</th>
                <th>名前</th>
                <th>学年</th>
                <th>学科</th>
                <th>学びたいこと</th>
                <th>困っていること</th>
                <th>必要な機能</th>
                <th>得意なこと</th>
                <th>苦手なこと</th>
            </tr>
            <?php
            foreach ($results as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['student_id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['grade']) . "</td>";
                echo "<td>" . htmlspecialchars($row['department']) . "</td>";
                echo "<td>" . htmlspecialchars($row['learning_preferences']) . "</td>";
                echo "<td>" . htmlspecialchars($row['issues']) . "</td>";
                echo "<td>" . htmlspecialchars($row['desired_features']) . "</td>";
                echo "<td>" . htmlspecialchars($row['strengths']) . "</td>";
                echo "<td>" . htmlspecialchars($row['weaknesses']) . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </main>
</body>
</html>
