<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $ikigai = htmlspecialchars($_POST['ikigai']);
    $ikigai = htmlspecialchars($_POST['ikigai']);

    // CSVファイルのパス
    $file = 'survey_data.csv';

    // ファイルが存在しない場合、ヘッダー行を含む新しいファイルを作成
    if (!file_exists($file)) {
        file_put_contents($file, "名前,Email,アイデンティティ,理想の3年後\n", FILE_APPEND | LOCK_EX);
    }

    // データをCSVファイルに保存
    $data = "$name, $email, $ikigai, $ikigai\n";
    
    // ファイルにデータを書き込む
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX) === false) {
        echo "<p>データの保存に失敗しました。書き込み権限を確認してください。</p>";
    } else {
        echo "<p>アンケートを受け付けました。ありがとうございます！</p>";
        echo '<a href="read.php">結果を表示</a>';
    }
} else {
    echo "<p>不正なアクセスです。</p>";
}
?>
