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

