<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num = 50.1; // 50より0.1でも大きい値を指定することで'50より大きい。'と出力される

    if ($num > 50) {
        echo ' 50より大きい。';
    } elseif ($num < 50) {
        echo ' 50より小さい。';
    } else {
        echo ' 50です。';
    }
    echo '<br>';

    $num = 49.9; // 50より0.1でも小さい値を指定することで'50より小さい。'と出力される

    if ($num > 50) {
        echo ' 50より大きい。';
    } elseif ($num < 50) {
        echo ' 50より小さい。';
    } else {
        echo ' 50です。';
    }
    echo '<br>';

    $num = 50; // 50と指定する時のみ'50です。'と出力される

    if ($num > 50) {
        echo ' 50より大きい。';
    } elseif ($num < 50) {
        echo ' 50より小さい。';
    } else {
        echo ' 50です。';
    }
    echo '<br>';
    ?>
</body>
</html>

