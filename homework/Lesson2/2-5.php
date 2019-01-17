<?php
define('TITLE', 'SportsPro' );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/snow-it.js"></script> -->
</head>
<body>
<header class="headerlong">
    <div class="container">
        <img class="logo" src="img/logo.png" alt="logo" height="71" width="71">
        <ul class="menu">
            <li class="menu-item"><a class="main-navigation" href="index.html">Главная</a></li>
            <li class="menu-item"><a class="main-navigation" href="catalog.html">Каталог</a></li>
            <li class="menu-item"><a class="main-navigation" href="contacts.html">Контакты</a></li>
            <li class="menu-item"><a class="main-navigation" href="basket.html">Корзина</a></li>
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
    <div class="footer-social container">
        <div class="social">
            <ul>
                <li>
                    <a class="social-button" href="https://vk.com"><img src="img/vk-icon.svg" width="25" height="25" alt="Вконтакте"></a>
                </li>
                <li>
                    <a class="social-button" href="https://facebook.com"><img src="img/fb-icon.svg" width="25" height="25" alt="Facebook"></a>
                </li>
                <li>
                    <a class="social-button" href="https://instagram.com"><img src="img/insta-icon.svg" width="25" height="25" alt="Instagram"></a>
                </li>
            </ul>
        </div>
    </div>
    <p>&copy;«Все права защищены» <?=(date("Y")); ?> </p>
</footer>
</body>
<!-- <script type="text/javascript">
    $.fn.snowit({
        flakeColor: '#fff',
        total: 100,
        minSize : 30,
        maxSize : 50,
    });
</script> -->
</html>