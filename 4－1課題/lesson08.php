<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $countries = array(
        '日本' => '東京',
        'アメリカ' => 'ワシントン',
        'イギリス' => 'ロンドン',
        'フランス' => 'パリ',
    );
    foreach ($countries as $key => $value) {
        echo $key . 'の首都は' . $value;
        echo '<br>';
    }
    ?>
</body>
</html>