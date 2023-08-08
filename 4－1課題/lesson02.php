<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $apple_val = 100;
    $apple_qua = 1;
    $grape_val = 200;
    $grape_qua = 3;
    $sum = $apple_val * $apple_qua + $grape_val * $grape_qua;

    echo $apple_val . '円のリンゴを' . $apple_qua . '個。';
    echo '<br>';
    echo $grape_val . '円のブドウを' . $grape_qua . '個。';
    echo '<br>';
    echo '<br>';
    echo '合計は' . $sum . '円です。';
    echo '<br>';
    ?>
</body>
</html>
