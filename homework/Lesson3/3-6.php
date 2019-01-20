<?php
define('TITLE', 'SportsPro' );
$year = 2019;

$menu = [
     ["link"=>"Главная", "href"=>"index.php"],
     ["link"=>"Каталог", "href"=>"catalog.php"],
     ["link"=>"Контакты", "href"=>"contact.php"],
     ["link"=>"Корзина", "href"=>"basket.php"]
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
<body>
<header class="headerlong">
    <div class="container">
        <img class="logo" src="img/logo.png" alt="logo" height="71" width="71">
        <ul class="menu">
            <li class="menu-item"><a class="main-navigation" href="<?=$menu [0] ["href"]?>"><?=$menu [0] ["link"]?></a></li>
            <li class="menu-item"><a class="main-navigation" href="<?=$menu [1] ["href"]?>"><?=$menu [1] ["link"]?></a></li>
            <li class="menu-item"><a class="main-navigation" href="<?=$menu [2] ["href"]?>"><?=$menu [2] ["link"]?></a></li>
            <li class="menu-item"><a class="main-navigation" href="<?=$menu [3] ["href"]?>"><?=$menu [3] ["link"]?></a></li>
        </ul>
    </div>
</header>
<main class="container">
    <p class="full-description">Сеть спортивных магазинов <?= TITLE ?> — международная сеть спортивных магазинов качественного спортивного
    инвентаря для фитнеса, летних и зимних видов спорта, а также товаров для активного отдыха. В сети магазинов
    и на нашем сайте Вы найдете тренажеры, спортивную одежду и обувь на любой сезон. Отдельное внимание наша сеть уделяет
    товарам для детей — мы предлагаем форму, обувь и снаряды для уроков физкультуры, а также самостоятельных занятий спортом.
    Широкий выбор спорттоваров в сети SportsPro делает спорт доступным!</p>
</main>
<footer>
  
</footer>
</body>
</html>