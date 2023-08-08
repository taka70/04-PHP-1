<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $weeks = ['日', '月', '火', '水', '木', '金', '土'];
        $currentDate = date('Y年m月d日（') . $weeks[date('w')] . '曜日' . '）'; // 年月日（曜日）の形式で取得
        echo $currentDate;
    ?>
</body>
</html>