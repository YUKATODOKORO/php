<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>IKIGAIグラレコに関するアンケート入力フォーム</title>
</head>
<body>
    <h2>IKIGAIグラレコに関するアンケート入力フォーム</h2>
    <form action="write.php" method="POST">
        <label for="name">名前:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="ikigai">Q1:「自分らしい」ことアイデンティティ、好きなことをできるだけ多くあげてください。(回答形式：単語)</label><br>
        <input type="text" id="ikigai" name="ikigai" required><br><br>
        
        <label for="ikigai">Q2: 犬を飼っていますか②「3年後の理想の暮らし」やこういう社会にしたいという理想の想いを文章で具体的に記載ください。(回答形式：記述式)</label><br>
        <input type="text" id="ikigai" name="ikigai" required><br><br>
        
        <input type="submit" value="送信">
    </form>
</body>
</html>