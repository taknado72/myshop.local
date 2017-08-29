-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 29 2017 г., 20:04
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
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_payment` datetime DEFAULT NULL,
  `date_modefication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `user_ip` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `date_created`, `date_payment`, `date_modefication`, `status`, `comment`, `user_ip`) VALUES
(1, 1, '2017-08-25 15:37:23', NULL, '2017-08-25 13:37:23', 0, 'id пользователя: 1<br />\n                Имя: admin<br />\n                Телефон: phone1<br />\n                Адрес: adress1\"', '127.0.0.1'),
(2, 1, '2017-08-25 15:38:17', NULL, '2017-08-25 13:38:17', 0, 'id пользователя: 1<br />\n                Имя: admin<br />\n                Телефон: phone1<br />\n                Адрес: adress1\"', '127.0.0.1'),
(3, 5, '2017-08-25 16:19:03', NULL, '2017-08-25 14:19:03', 0, 'id пользователя: 5<br />\n                Имя: user3<br />\n                Телефон: tel3<br />\n                Адрес: adr3\"', '127.0.0.1'),
(4, 5, '2017-08-25 16:19:54', NULL, '2017-08-25 14:19:54', 0, 'id пользователя: 5<br />\n                Имя: user3<br />\n                Телефон: tel3<br />\n                Адрес: adr3\"', '127.0.0.1'),
(5, 5, '2017-08-25 16:22:49', NULL, '2017-08-25 14:22:49', 0, 'id пользователя: 5<br />\n                Имя: user3<br />\n                Телефон: tel3<br />\n                Адрес: adr3', '127.0.0.1'),
(6, 5, '2017-08-25 16:25:20', NULL, '2017-08-25 14:25:20', 0, 'id пользователя: 5<br />\n                Имя: user3<br />\n                Телефон: tel3<br />\n                Адрес: adr3', '127.0.0.1'),
(7, 5, '2017-08-25 16:44:06', NULL, '2017-08-25 14:44:06', 0, 'id пользователя: 5<br />\n                Имя: user3<br />\n                Телефон: tel3<br />\n                Адрес: adr3', '127.0.0.1'),
(8, 5, '2017-08-25 16:50:01', NULL, '2017-08-25 14:50:01', 0, 'id пользователя: 5<br />\n                Имя: user3<br />\n                Телефон: tel3<br />\n                Адрес: adr3', '127.0.0.1'),
(9, 5, '2017-08-25 16:50:13', NULL, '2017-08-25 14:50:13', 0, 'id пользователя: 5<br />\n                Имя: user3<br />\n                Телефон: tel3<br />\n                Адрес: adr3', '127.0.0.1'),
(10, 5, '2017-08-25 16:55:44', NULL, '2017-08-25 14:55:44', 0, 'id пользователя: 5<br />\n                Имя: user3<br />\n                Телефон: tel3<br />\n                Адрес: adr3', '127.0.0.1'),
(11, 7, '2017-08-26 14:50:18', NULL, '2017-08-26 14:50:24', 1, 'id пользователя: 7<br />\n                Имя: user6<br />\n                Телефон: 666666<br />\n                Адрес: adr6', '127.0.0.1');

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
-- Структура таблицы `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `purchase`
--

INSERT INTO `purchase` (`id`, `order_id`, `product_id`, `price`, `amount`) VALUES
(1, 10, 1, 3000, 1),
(2, 10, 6, 23000, 1),
(3, 11, 6, 23000, 1);

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'phone1', 'adress1'),
(2, 'u1', 'e4774cdda0793f86414e8b9140bb6db4', '', '', ''),
(3, 'u2', '270c1b084f3f146eb5787075158d9c53', '', '', ''),
(4, 'u3', '532a7b8e0328a8d05a8e6258b28b9a36', '', '', ''),
(5, 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 'user3', 'tel3', 'adr3'),
(6, 'user5', '0a791842f52a0acfbb3a783378c066b8', 'user5', '555555', 'Adr5'),
(7, 'user6', 'affec3b64cf90492377a8114c86fc093', 'user6', '666666', 'adr6');

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
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `purchase`
--
ALTER TABLE `purchase`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
