<?php
  /* Принимаем данные из формы */
  $name = $_POST["user_name"];
  $page_id = $_POST["page_id"];
  $text_comment = $_POST["text_comment"];
  $name = htmlspecialchars($name);// Преобразуем спецсимволы в HTML-сущности
  $text_comment = htmlspecialchars($text_comment);// Преобразуем спецсимволы в HTML-сущности
  $mysqli = new mysqli("localhost", "host1729498_gal", "123123", "host1729498_lesson5");// Подключается к базе данных
  $mysqli->query("INSERT INTO `comments` (`user_name`, `page_id`, `text_comment`) VALUES ('$user_name', '$page_id', '$text_comment')");// Добавляем комментарий в таблицу
  header("Location: " . $_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
?>