-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 28 2019 г., 05:34
-- Версия сервера: 5.7.23
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `casino_v1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `coefficient` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `levels`
--

INSERT INTO `levels` (`id`, `title`, `coefficient`) VALUES
(1, 'Junior', 0.9),
(2, 'Middle', 0.92),
(3, 'Advanced', 0.95),
(4, 'VIP', 0.98);

-- --------------------------------------------------------

--
-- Структура таблицы `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `title`) VALUES
(1, 'in warehouse'),
(2, 'in the process'),
(3, 'shipped');

-- --------------------------------------------------------

--
-- Структура таблицы `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subjects`
--

INSERT INTO `subjects` (`id`, `title`, `amount`) VALUES
(2, 'House', 3),
(3, 'Car', 10),
(4, 'Smartphone', 20),
(5, 'Bicycle', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nikename` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `role` enum('admin','user') NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `auth_token` varchar(255) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `money` int(11) NOT NULL DEFAULT '0',
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `nikename`, `email`, `is_confirmed`, `role`, `password_hash`, `auth_token`, `points`, `money`, `id_level`) VALUES
(1, 'Admin', 'help@casino.com', 1, 'admin', 'hash', 'token', 0, 0, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_subject` (`id_subject`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nikename` (`nikename`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`id_subject`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `report_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
