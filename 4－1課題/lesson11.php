<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$data = [
    ['name' => '田中', 'age' => '25', 'gender' => '男'],
    ['name' => '鈴木', 'age' => '20', 'gender' => '男'],
    ['name' => '佐藤', 'age' => '23', 'gender' => '女'],
];
$num = count($data);

for ($i = 0; $i < $num; $i++) {
    $value = $data[$i];
    echo $value['name'] . $value['age'] . $value['gender'];
    echo '<br>';
}

echo $data[1]['age'];
?>
</body>
</html>