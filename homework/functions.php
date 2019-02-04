<?php

//Константы ошибок
// define('ERROR_NOT_FOUND', 1);
// define('ERROR_TEMPLATE_EMPTY', 2);

// /*
// * Обрабатывает указанный шаблон, подставляя нужные переменные
// */
// function render($file, $variables = [])
// {
//     if (!is_file($file)) {
//         echo 'Template file "' . $file . '" not found';
//         exit(ERROR_NOT_FOUND);
//     }

//     if (filesize($file) === 0) {
//         echo 'Template file "' . $file . '" is empty';
//         exit(ERROR_TEMPLATE_EMPTY);
//     }

//     // если переменных для подстановки не указано, просто
//     // возвращаем шаблон как есть
//     $templateContent = file_get_contents($file);
    
//     foreach ($variables as $key => $value) {
//         if ($value != null) {
//             // собираем ключи
//             $key = '{{' . strtoupper($key) . '}}';

//             // заменяем ключи на значения в теле шаблона
//             $templateContent = str_replace($key, $value, $templateContent);
//         }
//     }

//     return $templateContent;
// }

/*
//----------------------------------------М Е Н Ю---------------------------------------//
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

//----------------------------------------Работа с галереей---------------------------------------//
function showGallery($id) {
    $result = getAssocResult("SELECT * FROM `gallery` WHERE `id` = $id");

    return isset($result[0]) ? $result[0] : null;
}

function getGallery () {
    return getAssocResult("SELECT * FROM `gallery`");
}

function createConnection () {
    $db = mysqli_connect(HOST, USER, PASS, DB);
    mysqli_query ($db, "SET CHARACTER SET 'utf8'");
    return $db;
}

function execQuery($sql) {
    $db = createConnection();

    $result = mysqli_query($db, $sql);

    mysqli_close($db);
    return $result;
}

function getAssocResult($sql) {
    $db = createConnection();

    $result = mysqli_query($db, $sql);

    $array_result = [];
    while($row = mysqli_fetch_assoc($result)){
        $array_result[] = $row;
    }
    mysqli_close($db);
    return $array_result;
}

//---------------------------------------ВЫВОД МЕНЮ-------------------//
// Подключаемся к БД
  $mysqli = new mysqli("localhost", "host1729498_admin", "7717417", "host1729498_sportpro");
  $result_set = $mysqli->query("SELECT * FROM `menu`");// Делаем выборку всех записей из таблицы с меню
  $items = array(); // Массив для пунктов меню
  while (($row = $result_set->fetch_assoc()) != false) $items[$row["id"]] = $row; // Заполняем массив выборкой из БД
  $childrens = array(); // Массив для соответствий дочерних элементов их родительским
  foreach ($items as $item) {
    if ($item["parent_id"]) $childrens[$item["id"]] = $item["parent_id"]; // Заполняем массив
  }

  
  function printItem($item, $items, $childrens) {
    /* Выводим пункт меню */
    echo "<li >";
    echo "<a href='" . $item["link"] . "'>" . $item["title"]."</a>";
    $ul = false; // Выводились ли дочерние элементы?
    while (true) {
      /* Бесконечный цикл, в котором мы ищем все дочерние элементы */
      $key = array_search($item["id"], $childrens); // Ищем дочерний элемент
      if (!$key) {
        /* Дочерних элементов не найдено */
        if ($ul) echo "</ul>"; // Если выводились дочерние элементы, то закрываем список
        break; // Выходим из цикла
      }
      unset($childrens[$key]); // Удаляем найденный элемент (чтобы он не выводился ещё раз)
      if (!$ul) {
        echo "<ul class='submenu'>"; // Начинаем внутренний список, если дочерних элементов ещё не было
        $ul = true; // Устанавливаем флаг
      }
      echo printItem($items[$key], $items, $childrens); // Рекурсивно выводим все дочерние элементы
    }
    echo "</li>";
  }


