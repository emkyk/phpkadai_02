<?php
include 'db_config.php'; // データベース設定の読み込み
session_start();

if (!empty($_SESSION['formData'])) {
    $data = $_SESSION['formData'];

    $stmt = $conn->prepare("INSERT INTO survey_responses (student_id, name, grade, department, learning_preferences, issues, desired_features, strengths, weaknesses) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $learning_preferences = json_encode($data['learning_preferences'], JSON_UNESCAPED_UNICODE);
    $issues = json_encode($data['issues'], JSON_UNESCAPED_UNICODE);
    $desired_features = json_encode($data['desired_features'], JSON_UNESCAPED_UNICODE);

    $stmt->bindParam(1, $data['student_id']);
    $stmt->bindParam(2, $data['name']);
    $stmt->bindParam(3, $data['grade']);
    $stmt->bindParam(4, $data['department']);
    $stmt->bindParam(5, $learning_preferences);
    $stmt->bindParam(6, $issues);
    $stmt->bindParam(7, $desired_features);
    $stmt->bindParam(8, $data['strengths']);
    $stmt->bindParam(9, $data['weaknesses']);

    if ($stmt->execute()) {
        echo '<p>データが正常に保存されました。</p>';
    } else {
        echo '<p>データの保存に失敗しました。</p>';
    }

    unset($_SESSION['formData']); // セッションデータのクリア
} else {
    echo 'エラーが発生しました。';
}
?>
<br>
<a href="index.php">入力画面に戻る</a>
