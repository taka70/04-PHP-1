<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function addOne($number) {
        return $number + 1;
    }

    $inputNumber = 8; // 任意の数値を指定

    $result = addOne($inputNumber);
    echo $result;
    ?>
</body>
</html>