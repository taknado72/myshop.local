-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 20 2017 г., 20:40
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`) VALUES
(1, 0, 'Телефоны'),
(2, 0, 'Планшеты'),
(3, 1, 'Телефоны Samsung'),
(4, 1, 'Телефоны Apple'),
(5, 2, 'Планшеты Apple'),
(6, 2, 'Планшеты Acer'),
(7, 2, 'Планшеты Samsung');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `image`, `status`) VALUES
(1, 3, 'GT-S3500', 'Телефон GT-S3500', 3000, '1.jpg', 1),
(2, 3, 'S-5670 Galaxy', 'Телефон S-5670 Galaxy', 7000, '2.jpg', 1),
(3, 3, 'GT-E2600', 'Телефон GT-E2600', 5000, '3.jpg', 1),
(4, 4, 'Apple 3S', 'Телефон Apple 3S', 20000, '4.jpg', 1),
(5, 4, 'Apple 4S', 'Телефон Apple 4S', 22000, '5.jpg', 1),
(6, 4, 'Apple 6S', 'Телефон Apple 6S', 23000, '6.jpg', 1),
(7, 4, 'Apple 7S', 'Телефон Apple 7S', 24000, '7.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `adress` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `pwd`, `name`, `phone`, `adress`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '', ''),
(2, 'u1', 'e4774cdda0793f86414e8b9140bb6db4', '', '', ''),
(3, 'u2', '270c1b084f3f146eb5787075158d9c53', '', '', ''),
(4, 'u3', '532a7b8e0328a8d05a8e6258b28b9a36', '', '', ''),
(5, 'user3', '92877af70a45fd6a2ed7fe81e1236b78', '', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
