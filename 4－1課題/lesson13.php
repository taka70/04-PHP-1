<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $currentDateTime = date('Y年m月d日 H時i分s秒');
    echo $currentDateTime;
    echo '<br>';
    $threeDaysLater = date('Y年m月d日 H時i分s秒', strtotime('+3 days'));
    echo $threeDaysLater;
    echo '<br>';
    $twelveHoursLater = date('Y年m月d日 H時i分s秒', strtotime('+12 hours'));
    echo $twelveHoursLater;
    echo '<br>';
    $startDate = strtotime('2020-01-01');
    $currentDate = time();
    $daysPassed = floor(($currentDate - $startDate) / (60 * 60 * 24));
    echo $daysPassed . '日';
    ?>
</body>
</html>