<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケートフォーム</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        function validateForm() {
            var isAnyLearningChecked = Array.from(document.querySelectorAll('input[name="learning_preferences[]"]:checked')).length > 0;
            var isAnyIssueChecked = Array.from(document.querySelectorAll('input[name="issues[]"]:checked')).length > 0;
            var isAnyFeatureChecked = Array.from(document.querySelectorAll('input[name="desired_features[]"]:checked')).length > 0;

            if (!isAnyLearningChecked || !isAnyIssueChecked || !isAnyFeatureChecked) {
                alert("すべてのカテゴリから少なくとも一つの項目を選択してください。");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <header>
        <h1>アンケートフォーム</h1>
    </header>
    <main>
        <form action="confirm.php" method="post" onsubmit="return validateForm()">
            <div>
                <label for="student_id">学籍番号:</label>
                <input type="text" id="student_id" name="student_id" required><br><br>
            </div>
            <div>
                <label for="name">名前:</label>
                <input type="text" id="name" name="name" required><br><br>
            </div>
            <div>
                <label for="grade">学年:</label>
                <input type="number" id="grade" name="grade" required><br><br>
            </div>
            <div>
                <label for="department">学科:</label><br>
                <input type="radio" id="m" name="department" value="M" required> M<br>
                <input type="radio" id="e" name="department" value="E" required> E<br>
                <input type="radio" id="d" name="department" value="D" required> D<br>
                <input type="radio" id="c" name="department" value="C" required> C<br>
                <input type="radio" id="j" name="department" value="J" required> J<br><br>
            </div>
            <div>
                <label for="learning_preferences">何を学びたいか:</label><br>
                <input type="checkbox" id="subjects" name="learning_preferences[]" value="教科">教科<br>
                <input type="checkbox" id="experiments" name="learning_preferences[]" value="実験・実習">実験・実習<br>
                <input type="checkbox" id="research" name="learning_preferences[]" value="研究">研究<br>
                <input type="checkbox" id="career_paths" name="learning_preferences[]" value="進路">進路<br>
                <input type="checkbox" id="others_learning" name="learning_preferences[]" value="その他">その他<br><br>
            </div>
            <div>
                <label for="issues">困っていること:</label><br>
                <input type="checkbox" id="difficulty_understanding" name="issues[]" value="理解が難しい">理解が難しい<br>
                <input type="checkbox" id="assignment_submission" name="issues[]" value="課題が提出できない">課題が提出できない<br>
                <input type="checkbox" id="not_know_what_to_do" name="issues[]" value="何をするべきかわからない">何をするべきかわからない<br>
                <input type="checkbox" id="difficulty_asking_questions" name="issues[]" value="質問・相談が難しい">質問・相談が難しい<br>
                <input type="checkbox" id="others_issues" name="issues[]" value="その他">その他<br><br>
            </div>
            <div>
                <label for="desired_features">必要な機能:</label><br>
                <input type="checkbox" id="access_anytime" name="desired_features[]" value="必要な時にいつでも使える">必要な時にいつでも使える<br>
                <input type="checkbox" id="easy_access" name="desired_features[]" value="アクセスが簡単">アクセスが簡単<br>
                <input type="checkbox" id="others_features" name="desired_features[]" value="その他">その他<br><br>
            </div>
            <div>
                <label for="strengths">得意なこと:</label>
                <input type="text" id="strengths" name="strengths" required><br><br>
            </div>
            <div>
                <label for="weaknesses">苦手なこと:</label>
                <input type="text" id="weaknesses" name="weaknesses" required><br><br>
            </div>
            <input type="submit" value="確認">
        </form>
        <br>
        <a href="select.php">入力データ一覧</a> <!-- 追加部分 -->
    </main>
</body>
</html>
