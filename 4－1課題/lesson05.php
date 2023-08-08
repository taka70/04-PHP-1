<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $info = [
        'name' => '田中',
        'age' => 25,
        'gender' => '男性'
    ];
    echo $info['name'];
    echo '<br>';
    echo $info['age'] . '・' . $info['gender'];
    ?>
</body>
</html>

