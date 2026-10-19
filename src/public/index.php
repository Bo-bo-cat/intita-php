<?php
$name = 'Божена';
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Моє середовище</title>
</head>
<body>
    <h1>Привіт! Мене звати <?= $name ?></h1>
    <p>Версія PHP: <?= PHP_VERSION ?></p>
    <p>Шлях до файлу в контейнері: <?= __FILE__ ?></p>
    <p>Ім'я хоста (контейнер php): <?= gethostname() ?></p>
    <p>Час на сервері (Київ): <?= date('H:i:s') ?></p>
    <p><a href="/about.php">Про мене</a></p>
</body>
</html>