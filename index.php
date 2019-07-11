INSERT INTO `staffs`(`id`, `name`, `surname`, `last_name`, `email`, `salary`) VALUES (NULL, 'Ivan', 'Ivanov', 'Ivanovich', 'ivanov@mail.ru', '25000');

SELECT * FROM `staffs` WHERE (email LIKE '%ivan%') // поиск в таблице по имени

SELECT * FROM `staffs` WHERE (name LIKE '%ivan%') and (salary > 27000) // and для добавления нескольких колонок для поиска

SELECT * FROM `staffs` ORDER BY salary ASC  // сортировка по возрастанию

SELECT * FROM `staffs` ORDER BY salary DESC // сортировка по убыванию

SELECT name FROM `staffs` GROUP by name // сгрупировать по столбцу имя, по уникальности

SELECT AVG(salary) FROM `staffs` WHERE 1 // среднее арифметическое

SELECT SUM(salary) FROM `staffs` WHERE 1 // общаяя сумма зарплат

SELECT MIN(salary) FROM `staffs` WHERE 1 // минимальная зарплата

SELECT COUNT(id) FROM `staffs` WHERE 1 // колличество записей в таблице

UPDATE `staffs` SET `salary` = '28500', name = 'Sidor' WHERE `staffs`.`id` = 4; // обновление информации в таблице

DELETE FROM `staffs` WHERE (id = 3) // удаление из таблицы строку




-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Июл 16 2019 г., 20:59
-- Версия сервера: 5.7.26-0ubuntu0.18.04.1
-- Версия PHP: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vitaly_test_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `staffs`
--

CREATE TABLE `staffs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `surname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(300) CHARACTER SET utf8 NOT NULL,
  `salary` int(10) UNSIGNED NOT NULL DEFAULT '25000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `surname`, `last_name`, `email`, `salary`) VALUES
(1, 'Ivan', 'Ivanov', 'Ivanovich', 'ivanov@mail.ru', 25000),
(2, 'Petr', 'Markov', 'Petrovich', 'petrov@mail.ru', 30000),
(4, 'Sidor', 'Tomilov', 'Alexsandrovich', 'tomilov@mail.ru', 28500),
(5, 'Pavel', 'Kamov', 'Sergeevich', 'kamov@mail.ru', 25000),
(6, 'Ivan', 'Markov', 'Petrov', 'markov@mail.ru', 29000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
