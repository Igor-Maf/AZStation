-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 06 2015 г., 22:41
-- Версия сервера: 5.5.27
-- Версия PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `azs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(255) NOT NULL AUTO_INCREMENT,
  `client_fio` varchar(100) NOT NULL,
  `client_address` varchar(100) NOT NULL,
  `client_mail` varchar(30) NOT NULL,
  `client_number` varchar(30) NOT NULL,
  `client_scores` decimal(10,2) NOT NULL DEFAULT '100.00',
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=942124 ;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`client_id`, `client_fio`, `client_address`, `client_mail`, `client_number`, `client_scores`) VALUES
(14, 'Новый клиент', 'Новый адресс', 'nova.poshta@domen.country', '80505465232', 500.56),
(112423, 'Тодосюк Анна', 'Люсторфская дор. 144', 'belaya@mail.ru', '0636363727', 1560.00),
(127854, 'Самбука Екатерина Олеговна', 'г. Москва, ул. Беларусская 12', 'sambuka.katya@mail.ru', '0636398763', 100.00),
(132333, 'Светлова Света Алексеевна', 'г. Одесса, ул. Преображенская 31а', 'wsv@gmail.com', 'asdasdasd', 4698.55),
(214235, 'Кузнецов Александр', 'г. Одесса, 10 линия, дом неизвестен', 'kuzya@mail.ru', '0637272727', 3015.03),
(321342, 'Килимник Александр', 'г. Одесса, Ленина 10а, кв. 71', 'sd@asd.asd', 'фывфывфыв', 746.20),
(567231, 'Геворкян Игорь Сергеевич', 'г. Одесса, ул. Гайдара 10', 'knjaz@mail.ru', '0639879898', 12170.61),
(662123, 'Рябко Руслана Александровна', 'г. Днепропетровск, ул. Совхозная 64, 18', 'lanalegostaeva@mail.ru', '0938991276', 99999999.99),
(942123, 'Тестов Тест Тестович', 'ул. Тестовая 1т, кв. 1', 'test@gmail.com', '0636363636', 200.00);

-- --------------------------------------------------------

--
-- Структура таблицы `gas`
--

CREATE TABLE IF NOT EXISTS `gas` (
  `gas_id` int(255) NOT NULL AUTO_INCREMENT,
  `gas_type` varchar(30) NOT NULL,
  `gas_price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`gas_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `gas`
--

INSERT INTO `gas` (`gas_id`, `gas_type`, `gas_price`) VALUES
(1, 'A-92', 15.50),
(2, 'A-95', 17.63);

-- --------------------------------------------------------

--
-- Структура таблицы `gift`
--

CREATE TABLE IF NOT EXISTS `gift` (
  `gift_id` int(255) NOT NULL AUTO_INCREMENT,
  `gift_thumb_url` varchar(2083) NOT NULL,
  `gift_name` varchar(50) NOT NULL,
  `gift_thumb_path` varchar(1000) NOT NULL,
  `gift_scores` decimal(10,2) NOT NULL,
  PRIMARY KEY (`gift_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Дамп данных таблицы `gift`
--

INSERT INTO `gift` (`gift_id`, `gift_thumb_url`, `gift_name`, `gift_thumb_path`, `gift_scores`) VALUES
(15, 'http://localhost/azs-app/public/img/gifts/light.png', '\\"Секрет\\" (белый)', 'E:\\xampp\\htdocs\\azs-app\\public\\img\\gifts\\light.png', 110.00),
(16, 'http://localhost/azs-app/public/img/gifts/green.png', '\\"Секрет\\" (зеленый)', 'E:\\xampp\\htdocs\\azs-app\\public\\img\\gifts\\green.png', 100.00),
(17, 'http://localhost/azs-app/public/img/gifts/yellow.png', '\\"Секрет\\" (желтый)', 'E:\\xampp\\htdocs\\azs-app\\public\\img\\gifts\\yellow.png', 70.00),
(18, 'http://localhost/azs-app/public/img/gifts/Social_and_communication-09-512.png', 'Скидочная карта \\"корпоративная\\"', 'E:\\xampp\\htdocs\\azs-app\\public\\img\\gifts\\Social_and_communication-09-512.png', 200.00),
(19, 'http://localhost/azs-app/public/img/gifts/Tea_Bag_Cup-512.png', 'Чай/кофе', 'E:\\xampp\\htdocs\\azs-app\\public\\img\\gifts\\Tea_Bag_Cup-512.png', 10.00),
(20, 'http://localhost/azs-app/public/img/gifts/rkNSbEBGZoY.jpg', 'Девочка', 'E:\\xampp\\htdocs\\azs-app\\public\\img\\gifts\\rkNSbEBGZoY.jpg', 120.00),
(21, 'http://localhost/azs-app/public/img/gifts/ijsFnxBSqXY.jpg', 'SEO', 'E:\\xampp\\htdocs\\azs-app\\public\\img\\gifts\\ijsFnxBSqXY.jpg', 130.00),
(22, 'http://localhost/azs-app/public/img/gifts/minimal-desktop-wallpaper-keep-it-simple.png', 'Детская игрушка', 'E:\\xampp\\htdocs\\azs-app\\public\\img\\gifts\\minimal-desktop-wallpaper-keep-it-simple.png', 2500.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
