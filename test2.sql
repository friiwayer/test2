-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 12 2018 г., 20:23
-- Версия сервера: 5.6.29-log
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `blog_posts`
--

CREATE TABLE IF NOT EXISTS `blog_posts` (
  `postID` int(11) unsigned NOT NULL,
  `postTitle` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `postImage` text NOT NULL,
  `postDesc` text CHARACTER SET utf8,
  `postCont` text CHARACTER SET utf8,
  `postDate` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `blog_posts`
--

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postImage`, `postDesc`, `postCont`, `postDate`) VALUES
(2, 'That Darn Katz! 2', '', 'Wow! A superpowers drug you can just rub onto your skin? You''d think it would be something you''d have to freebase. Fry, you can''t just sit here in the dark listening to classical music. And yet you haven''t said what I told you to say! How can any of us trust you?', 'Xmas Story\r\nIt must be wonderful. Does anybody else feel jealous and aroused and worried? Is today''s hectic lifestyle making you tense and impatient? Soothe us with sweet lies. That''s right, baby. I ain''t your loverboy Flexo, the guy you love so much. You even love anyone pretending to be him!\r\n\r\nGoodbye, friends. I never thought I''d die like this. But I always really hoped.\r\nThey''re like sex, except I''m having them!\r\nCome, Comrade Bender! We must take to the streets!\r\n\r\nAnthology of Interest I\r\nHey, whatcha watching? They''re like sex, except I''m having them! Well I''da done better, but it''s plum hard pleading a case while awaiting trial for that there incompetence. Yes, except the Dave Matthews Band doesn''t rock. I suppose I could part with ''one'' and still be feared&hellip;\r\nTeenage Mutant Leela''s Hurdles\r\nOh, but you can. But you may have to metaphorically make a deal with the devil. And by "devil", I mean Robot Devil. And by "metaphorically", I mean get your coat. Please, Don-Bot&hellip; look into your hard drive, and open your mercy file! It''s a T. It goes "tuh". I guess if you want children beaten, you have to do it yourself.\r\n\r\nSpare me your space age technobabble, Attila the Hun!\r\nWell, thanks to the Internet, I''m now bored with sex. Is there a place on the web that panders to my lust for violence?\r\n\r\nThe Farnsworth Parabox\r\nWow! A superpowers drug you can just rub onto your skin? You''d think it would be something you''d have to freebase. We need rest. The spirit is willing, but the flesh is spongy and bruised. It must be wonderful.', '2018-08-12 09:27:02'),
(6, 'The Cyber House Rules #1', '', 'You guys realize you live in a sewer, right? Uh, is the puppy mechanical in any way? Come, Comrade Bender! We must take to the streets! I daresay that Fry has discovered the smelliest object in the known universe! Good news, everyone! There''s a report on TV with some very bad news!', 'The Luck of the Fryrish\r\nProfessor, make a woman out of me. I am the man with no name, Zapp Brannigan! Good man. Nixon''s pro-war and pro-family. The alien mothership is in orbit here. If we can hit that bullseye, the rest of the dominoes will fall like a house of cards. Checkmate. Fry, you can''t just sit here in the dark listening to classical music.\r\n\r\nWho are those horrible orange men?\r\nIs today''s hectic lifestyle making you tense and impatient?\r\n\r\nLethal Inspection\r\nOh, but you can. But you may have to metaphorically make a deal with the devil. And by "devil", I mean Robot Devil. And by "metaphorically", I mean get your coat. No. We''re on the top. Does anybody else feel jealous and aroused and worried? Well I''da done better, but it''s plum hard pleading a case while awaiting trial for that there incompetence. It must be wonderful.\r\nWhere No Fan Has Gone Before\r\nWho are those horrible orange men? Bender, we''re trying our best. Please, Don-Bot&hellip; look into your hard drive, and open your mercy file! Wow! A superpowers drug you can just rub onto your skin? You''d think it would be something you''d have to freebase. WINDMILLS DO NOT WORK THAT WAY! GOOD NIGHT! Look, last night was a mistake.\r\n\r\nI''m sorry, guys. I never meant to hurt you. Just to destroy everything you ever believed in.\r\nStop it, stop it. It''s fine. I will ''destroy'' you!\r\nYou guys realize you live in a sewer, right?\r\n\r\nFear of a Bot Planet\r\nWhy yes! Thanks for noticing. Hey, guess what you''re accessories to. Yes, except the Dave Matthews Band doesn''t rock. Take me to your leader! Daddy Bender, we''re hungry.', '2018-08-12 09:29:55'),
(7, 'Новость Дня', 'g3.jpg', 'Definition and Usage\r\nThe accept attribute specifies the types of files that the server accepts (that can be submitted through a file upload).\r\n\r\nNote: The accept attribute can only be used with .\r\n\r\nTip: Do not use this attribute as a validation tool. File uploads should be validated on the server.', 'Definition and Usage\r\nThe accept attribute specifies the types of files that the server accepts (that can be submitted through a file upload).\r\n\r\nNote: The accept attribute can only be used with .\r\n\r\nTip: Do not use this attribute as a validation tool. File uploads should be validated on the server.', '2018-08-12 12:33:38'),
(9, 'Рулор', '0 (1).jpg', 'Данная возможность позволяет загружать как текстовые, так и бинарные файлы. С помощью PHP-функций аутентификации и работы с файлами вы имеете полный контроль над тем, кому разрешено загружать файлы и что делать с файлом после его загрузки.\r\n\r\nPHP способен получать загруженные файлы из любого браузера, совместимого со стандартом RFC-1867.', 'Данная возможность позволяет загружать как текстовые, так и бинарные файлы. С помощью PHP-функций аутентификации и работы с файлами вы имеете полный контроль над тем, кому разрешено загружать файлы и что делать с файлом после его загрузки.\r\n\r\nPHP способен получать загруженные файлы из любого браузера, совместимого со стандартом RFC-1867.', '2018-08-12 09:30:53'),
(10, 'SSD диски', 'smartbuy_2.5_splash_3_120_gb_sata_iii_3d_tlc_sb120gb_splh3_25sat3__746510_1.jpg', 'You asked, Font Awesome delivers with 41 shiny new icons in version 4.7. Want to request new icons? Here''s how. Need vectors or want to use on the desktop?', 'You asked, Font Awesome delivers with 41 shiny new icons in version 4.7. Want to request new icons? Here''s how. Need vectors or want to use on the desktop?', '2018-08-12 12:33:24'),
(12, 'Новость дня', 'kartohka.jpg', 'The modal is displayed initially, but it does not close when clicked outside of the modal. Also, the content area is not greyed out.. How can I get the modal to display initially, then close after the user clicks outside the area? And how can I get the background to be grayed out as in the demo?', 'The modal is displayed initially, but it does not close when clicked outside of the modal. Also, the content area is not greyed out.. How can I get the modal to display initially, then close after the user clicks outside the area? And how can I get the background to be grayed out as in the demo?', '2018-08-11 18:55:04'),
(13, 'Садомазо', 'lazerhawk-3200x1800-skull-and-shark-hd-11040.jpg', 'Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop shadow, and anything that can be done with the power of ...', 'Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop shadow, and anything that can be done with the power of ...', '2018-08-12 09:34:56'),
(14, 'Новая статья', 'g2.jpg', 'ы всегда можете проконсультироваться с нашими специалистами. Интернет-магазин Техпорт - это гарантия низкой цены, оперативной доставки и качественного клиентского сервиса.', 'ы всегда можете проконсультироваться с нашими специалистами. Интернет-магазин Техпорт - это гарантия низкой цены, оперативной доставки и качественного клиентского сервиса.', '2018-08-12 14:18:30');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`postID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `postID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
