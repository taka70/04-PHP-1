<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$data = [10, 60, 90, 70, 50];
$num = count($data);

for ($i = 0; $i < $num; $i++) {
    $value = $data[$i];
    if ($value >= 80) {
        echo $value . '点は優です。';
    } elseif ($value >= 60) {
        echo $value . '点は良です。';
    } elseif ($value >= 40) {
        echo $value . '点は可です。';
    } else {
        echo $value . '点は不可です。';
    }
    echo '<br>'; // 改行を追加
}
?>
</body>
</html>