-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 31 2019 г., 16:00
-- Версия сервера: 5.7.23-23-log
-- Версия PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `host1729498_lesson5`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `page_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `text_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `page_id`, `user_name`, `text_comment`) VALUES
(1, 150, '', 'yjyt'),
(2, 150, '', 'rehrety'),
(3, 150, '', 'test');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `opened` int(255) NOT NULL,
  `seen` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `type`, `path`, `opened`, `seen`) VALUES
(1, 'Бавария.jpg', 'jpg', 'img\\', 6, 83),
(2, 'Оренбург.jpg', 'jpg', 'img\\', 10, 83),
(3, 'Милан.jpg', 'jpg', 'img\\', 34, 83),
(4, 'Арсенал.jpg', 'jpg', 'img\\', 12, 83);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
<div class="error"><h1>Ошибка</h1><p><strong>SQL запрос:</strong>
<a href="db_sql.php?sql_query=SET+time_zone+%3D+%22SYSTEM%22&amp;show_query=1&amp;db=host1729498_lesson5"><span class="nowrap"><img src="themes/dot.gif" title="Изменить" alt="Изменить" class="icon ic_b_edit" />&nbsp;Изменить</span></a>    </p>
<p>
<code class="sql"><pre>
SET time_zone = &quot;SYSTEM&quot;
</pre></code>
</p>
<p>
    <strong>Ответ MySQL: </strong><a href="./url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.7%2Fen%2Ferror-messages-server.html" target="mysql_doc"><img src="themes/dot.gif" title="Документация" alt="Документация" class="icon ic_b_help" /></a>
</p>
<code>#2006 - MySQL server has gone away</code><br/></div>