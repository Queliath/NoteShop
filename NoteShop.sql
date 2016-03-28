-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 28 2016 г., 17:08
-- Версия сервера: 5.5.25
-- Версия PHP: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `first_internet_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `lookup`
--

CREATE TABLE IF NOT EXISTS `lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Дамп данных таблицы `lookup`
--

INSERT INTO `lookup` (`id`, `label`, `value`, `type`, `position`) VALUES
(1, 'Наличными', '1', 'PayType', 1),
(2, 'Через ЕРИП', '2', 'PayType', 2),
(3, 'Самовывоз', '1', 'DeliveryType', 1),
(4, 'Доставка по Минску', '2', 'DeliveryType', 2),
(5, 'Доставка по Беларуси', '3', 'DeliveryType', 3),
(6, '11.6"', '11.6', 'ScreenType', 1),
(7, '12.5"', '12.5', 'ScreenType', 2),
(8, '13.3"', '13.3', 'ScreenType', 3),
(9, '15.6"', '15.6', 'ScreenType', 4),
(10, '17.3"', '17.3', 'ScreenType', 5),
(11, 'Intel Celeron', 'intel-celeron', 'CpuType', 1),
(12, 'Intel Pentium', 'intel-pentium', 'CpuType', 2),
(13, 'Intel i3', 'intel-i3', 'CpuType', 3),
(14, 'Intel i5', 'intel-i5', 'CpuType', 4),
(15, 'Intel i7', 'intel-i7', 'CpuType', 5),
(16, 'AMD', 'amd', 'CpuType', 6),
(17, '1 ГБ', '1', 'RamType', 1),
(18, '2 ГБ', '2', 'RamType', 2),
(19, '4 ГБ', '4', 'RamType', 3),
(20, '6 ГБ', '6', 'RamType', 4),
(21, '8 ГБ', '8', 'RamType', 5),
(22, 'Windows 7', 'windows-7', 'OsType', 1),
(23, 'Windows 8', 'windows-8', 'OsType', 2),
(24, 'Windows 10', 'windows-10', 'OsType', 3),
(25, 'Linux', 'linux', 'OsType', 4),
(26, 'Mac OS', 'mac-os', 'OsType', 5),
(27, 'DOS', 'dos', 'OsType', 6),
(28, 'Acer', 'Acer', 'BrandType', 1),
(29, 'Apple', 'Apple', 'BrandType', 2),
(30, 'Asus', 'Asus', 'BrandType', 3),
(31, 'Dell', 'Dell', 'BrandType', 4),
(32, 'HP', 'HP', 'BrandType', 5),
(33, 'Lenovo', 'Lenovo', 'BrandType', 6),
(34, 'Samsung', 'Samsung', 'BrandType', 7),
(35, 'Sony', 'Sony', 'BrandType', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_type` varchar(15) NOT NULL,
  `delivery_type` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `pay_type`, `delivery_type`, `name`, `tel`) VALUES
(6, '2', '2', 'Костевич Владислав', '+375295565788'),
(10, '1', '3', 'Григорий Мусумбаев', '+372294512324');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` int(11) NOT NULL,
  `image_source` varchar(100) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `model` varchar(40) NOT NULL,
  `screen_diagonal` varchar(5) NOT NULL,
  `screen_desc` varchar(40) NOT NULL,
  `cpu` varchar(50) NOT NULL,
  `cpu_type` varchar(20) NOT NULL,
  `ram` int(11) NOT NULL,
  `hdd` int(11) NOT NULL,
  `video_card` varchar(40) NOT NULL,
  `os` varchar(30) NOT NULL,
  `os_type` varchar(20) NOT NULL,
  `additional_desc` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `price`, `image_source`, `brand`, `model`, `screen_diagonal`, `screen_desc`, `cpu`, `cpu_type`, `ram`, `hdd`, `video_card`, `os`, `os_type`, `additional_desc`) VALUES
(1, 1638, 'images/notebook.jpg', 'Apple', 'MacBook Air (MC969RS/A) Silver', '11.6', '(1366x768) HD LED, глянцевый', 'Intel Core i5 (1.6 ГГц)', 'intel-i5', 4, 128, 'Intel HD Graphics 3000', 'Mac OS X Lion', 'mac-os', 'LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 1.08 кг'),
(2, 946, 'images/acer_aspire.jpg', 'Acer', 'Aspire V3-574G-77RB (NX.G1UEU.008)', '15.6', '(1920 x 1080) IPS', 'Intel Core i7 5500U (2 400 МГц)', 'intel-i7', 8, 2000, 'NVIDIA GeForce 940M', 'Linux', 'linux', '2 520 мАч / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 2400 г'),
(3, 900, 'images/asus_x5.jpg', 'Asus', 'X555LB-XO180D', '15.6', '(1366 x 768) TN+Film матовый', 'Intel Core i5 5200U (2 200 МГц)', 'intel-i5', 6, 1000, 'NVIDIA GeForce GT 940M', 'DOS', 'dos', 'LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 2300 г'),
(4, 600, 'images/hp_probook.jpg', 'HP', 'ProBook 455 G3 (P5S12EA)', '15.6', '(1366 x 768) матовый', 'AMD A8 7410 (2 200 МГц)', 'amd', 4, 500, 'AMD Radeon R7 M340', 'DOS', 'dos', 'LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 2150 г'),
(5, 674, 'images/hp_pavilion.jpg', 'HP', 'Pavilion 15-n079sr (F2U22EA)', '15.6', '(1366 x 768) TN+Film', 'Intel Core i5 4200U (1 600 МГц)', 'intel-i5', 8, 1000, 'NVIDIA GeForce GT 740M', 'DOS', 'dos', '2 620 мАч / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 2280 г'),
(6, 542, 'images/lenovo.jpg', 'Lenovo', 'Z50-75 (80EC00EHUA)', '15.6', '(1920 x 1080) TN+Film', 'AMD A10 7300 (1 900 МГц)', 'amd', 4, 500, 'AMD Radeon R6 M255DX', 'Windows 8', 'windows-8', '2 200 мАч / LAN / Wi-Fi / веб-камера / 2400 г'),
(7, 819, 'images/acer_aspire.jpg', 'Acer', 'Aspire E5-551G-F25F (NX.MLEEU.013)', '15.6', '(1920 x 1080) TN+Film', 'AMD FX-7500 (2 100 МГц)', 'amd', 16, 1000, 'AMD Radeon R7 M265', 'Linux', 'linux', '2 500 мАч / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 2500 г'),
(8, 324, 'images/acer_aspire.jpg', 'Acer', 'Aspire ES1-531-C007 (NX.MZ8EU.011)', '15.6', '(1366 x 768) TN+Film матовый', 'Intel Celeron N3050 (1 600 МГц)', '', 2, 500, 'Intel HD Graphics', 'Linux', 'linux', '3 220 мАч / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 2400 г'),
(9, 2140, 'images/notebook.jpg', 'Apple', 'MacBook Pro 13 Retina (MF840)', '13.3', '(2560 x 1600) IPS', 'Intel Core i5 (2 700 МГц)', 'intel-i5', 8, 256, 'Intel Iris Graphics 6100', 'OS X (Yosemite)', 'mac-os', 'LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 1580 г'),
(10, 424, 'images/asus_x5.jpg', 'Asus', 'X200MA-KX622B', '11.6', '(1366 x 768) TN+Film', 'Intel Pentium N3540 (2 160 МГц)', 'intel-pentium', 2, 500, 'Intel HD Graphics', 'Windows 8', 'windows-8', '3 300 мАч / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 1240 г'),
(11, 547, 'images/asus_x5.jpg', 'Asus', 'F555LB-XO557D', '15.6', '(1366 x 768) TN+Film', 'Intel Core i3 4005U (1 700 МГц)', 'intel-i3', 4, 500, 'NVIDIA GeForce 940M', 'Windows 8', 'windows-8', 'LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 2300 г'),
(12, 760, 'images/hp_probook.jpg', 'HP', 'ProBook 450 G1 (F7Y23ES)', '15.6', '(1366 x 768) TN+Film', 'Intel Pentium 3550M (2 300 МГц)', 'intel-pentium', 6, 750, 'AMD Radeon HD 8750M', 'Windows 8', 'windows-8', 'LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 2370 г'),
(13, 683, 'images/hp_pavilion.jpg', 'HP', 'Pavilion 15-p079sr (J5C01EA)', '15.6', '(1366x768) глянцевый', 'Intel Core i5 4210U (1700 МГц)', 'intel-i5', 8, 1000, 'NVIDIA GeForce 840M', 'DOS', 'dos', 'LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 2.27 кг'),
(14, 552, 'images/hp_pavilion.jpg', 'HP', 'Pavilion 15-p266ur (L2V61EA)', '15.6', '(1366 x 768) TN+Film', 'Intel Core i3 5010U (2 100 МГц)', 'intel-i3', 4, 500, 'Intel HD Graphics 5500', 'DOS', 'dos', 'LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 2270 г'),
(15, 576, 'images/hp_pavilion.jpg', 'HP', 'Pavilion 15-p028sr (J6Z25EA)', '15.6', '(1366x768) глянцевый', 'AMD A8 6410 (2000 МГц)', 'amd', 6, 750, 'AMD Radeon R7 M260', 'Windows 8', 'windows-8', 'LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 2.27 кг'),
(16, 602, 'images/hp_probook.jpg', 'HP', 'ProBook 455 G2 (G6W40EA)', '15.6', '(1366 x 768) TN+Film', 'AMD A6 Pro 7050B (2 200 МГц)', 'amd', 4, 500, 'AMD Radeon R5 M255', 'Windows 8', 'windows-8', 'LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 2200 г'),
(17, 605, 'images/lenovo.jpg', 'Lenovo', 'Z50-70 (59421900)', '15.6', '(1366 x 768) TN+Film', 'Intel Pentium 3558U (1 700 МГц)', 'intel-pentium', 4, 1000, 'NVIDIA GeForce 840M', 'DOS', 'dos', 'LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 2400 г'),
(18, 662, 'images/lenovo.jpg', 'Lenovo', 'G50-70 (59423447)', '15.6', '(1366 x 768) TN+Film', 'Intel Core i3 4030U (1 900 МГц)', 'intel-i3', 4, 500, 'Intel HD Graphics 4400', 'Windows 8.1', 'windows-8', 'LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 2500 г'),
(19, 540, 'images/lenovo.jpg', 'Lenovo', 'G50-70 (59433722)', '15.6', '(1366 x 768) TN+Film', 'Intel Core i3 4005U (1 700 МГц)', 'intel-i3', 4, 500, 'AMD Radeon R5 M230', 'DOS', 'dos', 'LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / 2500 г');

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--

CREATE TABLE IF NOT EXISTS `product_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  KEY `product_id_2` (`product_id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_order_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
