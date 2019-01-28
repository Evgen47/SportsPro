<?php

//Константы ошибок
define('ERROR_NOT_FOUND', 1);
define('ERROR_TEMPLATE_EMPTY', 2);

/*
* Обрабатывает указанный шаблон, подставляя нужные переменные
*/
function render($file, $variables = [])
{
    if (!is_file($file)) {
        echo 'Template file "' . $file . '" not found';
        exit(ERROR_NOT_FOUND);
    }

    if (filesize($file) === 0) {
        echo 'Template file "' . $file . '" is empty';
        exit(ERROR_TEMPLATE_EMPTY);
    }

    // если переменных для подстановки не указано, просто
    // возвращаем шаблон как есть
    $templateContent = file_get_contents($file);
    
    foreach ($variables as $key => $value) {
        if ($value != null) {
            // собираем ключи
            $key = '{{' . strtoupper($key) . '}}';

            // заменяем ключи на значения в теле шаблона
            $templateContent = str_replace($key, $value, $templateContent);
        }
    }

    return $templateContent;
}

/*
// Панель меню
*/

$menu = [
    [
        'title' => 'Главная',
        'url' => 'index.php',
        'children' => []
    ],
    [
        'title' => 'Каталог',
        'url' => 'catalog.html',
        'children' => [
            [
                'title' => 'Зима',
                'url' => 'catalog/winter/winter-catalog.html',
                'children' => []
            ],
            [
                'title' => 'Лето',
                'url' => 'catalog/summer/summer-catalog.html',
                'children' => []
            ]
        ]
    ],
    [
        'title' => 'Контакты',
        'url' => 'contacts.html',
        'children' => []
    ],
    [
        'title' => 'Корзина',
        'url' => 'basket.html',
        'children' => []
    ]
];

function creatMenu($menu) {
    echo "<ul class='menu'>";
    foreach ($menu as $item) {
        echo "<li>";
        echo "<a class='main-navigation' href=\"" . $item['url'] . "\">" . $item['title'] . "</a>";

        if (!empty($item['children'])) {
            creatMenu($item['children']);
        }

        echo "</li>";
    }
    echo "</ul>";
}

// creatMenu($menu);
?>

