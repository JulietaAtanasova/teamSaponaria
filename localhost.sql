-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 24, 2014 at 07:09 PM
-- Server version: 5.1.73-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alekbqus_blog`
--
CREATE DATABASE IF NOT EXISTS `alekbqus_blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `alekbqus_blog`;

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE IF NOT EXISTS `action` (
  `action_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `action_date` datetime NOT NULL,
  `action_type_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`action_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`action_id`, `user_id`, `action_date`, `action_type_id`) VALUES
(1, 1, '2014-08-23 18:09:35', 2),
(2, 1, '2014-08-23 18:11:10', 2),
(3, 1, '2014-08-23 18:38:39', 2),
(4, 2, '2014-08-23 18:59:49', 5),
(5, 2, '2014-08-23 19:02:34', 5),
(6, 2, '2014-08-23 19:02:48', 1),
(7, 2, '2014-08-23 19:20:14', 2),
(8, 1, '2014-08-23 19:49:13', 1),
(9, 1, '2014-08-23 20:06:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `action_type`
--

CREATE TABLE IF NOT EXISTS `action_type` (
  `action_type_id` int(10) unsigned NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Dumping data for table `action_type`
--

INSERT INTO `action_type` (`action_type_id`, `description`) VALUES
(1, 'Вписване'),
(2, 'Публикуване на статия'),
(3, 'Публикуване на коментар'),
(4, 'Преглед на статия'),
(5, 'Регистрация на потребител');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(10) NOT NULL AUTO_INCREMENT,
  `action_id` int(11) unsigned NOT NULL,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `action_id` int(11) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `comment_name` varchar(50) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `action_id` int(11) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `post_name` varchar(255) NOT NULL,
  `post_text` text NOT NULL,
  `post_date` datetime NOT NULL,
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `action_id`, `user_id`, `post_name`, `post_text`, `post_date`, `views`) VALUES
(1, 2, 1, 'Неразказаната история на Едуард Сноудън', '<h2 style="font-size: 18px; font-weight: normal; font-style: italic; font-family: Georgia; color: rgb(51, 51, 51); text-align: start;">Най-търсеният човек на планетата разказва за пръв път детайли от личния си живот, както и какво точно го е подтикнало да разгласи класифицирана информация</h2><div><br></div><div><p style="font-size: 14px; font-family: Arial, non-serif; cursor: default; margin: 0px 0px 10px; color: rgb(51, 51, 51); word-wrap: break-word; line-height: 20px; text-align: start;">Да направиш интервю с най-издирвания човек на планетата, който и да е той, никога не е лесна задача. Писателят и репортер на Wired Джеймс Бамфорд обаче, е успял да направи точно това. А кой е най-търсеният човек в момента? Едуард Сноудън.<br><br>През последните 9 месеца Бамфорд се е опитвал да се срещне със Сноудън. За целта той си е уговарял срещи с поддръжници на Сноудън в Берлин, Рио де Жанейро и Ню Йорк. Упоритостта му най-сетне се отплаща и един от контактите успява да го свърже със Сноудън. Това се случва в Москва, където в продължение на няколко седмици бившият служител на Агенцията за национална сигурност на САЩ (NSA) се намира в момента. Двамата се срещат на различни и пазени в тайна локации, а всички усилия на Брамфорд преследват един-единствен отговор – какво е накарало Сноудън да разкрие стотици хиляди секретни документи, чието място обикновено се намира дълбоко в базата данни на NSA.<br><br>Сноудън пристига в Русия през юни 2013 г. и оттогава води скромен, но обвит в мистерия живот. Той е преследван от американските служби, които го обвиняват в шпионаж и участие във връзка с руското разузнаване. Младият американец, който съвсем скоро навърши 31-годишна възраст, е от новото поколение идеалисти, които обичат да разгласяват класифицирана информация за опасни политически практики. Физически много малко хора го виждали след деня, в който той потъна в летищния комплекс на Москва.</p><p style="font-size: 14px; font-family: Arial, non-serif; cursor: default; margin: 0px 0px 10px; color: rgb(51, 51, 51); word-wrap: break-word; line-height: 20px; text-align: start;">Оттогава Сноуъдн се появява пред публика под формата единствено на компютърно изображение. На конференцията TED, проведена през март, Сноудън участваше като лектор. Организаторите бяха предвидили специален екран, монтиран на управлявана с дистанционно управление конструкция, която му позволяваше да се “разхожда”, да разговаря с хората и дори да се снима с тях. Според Бамфорд всичко това прилича на обърната версия на сюжета на Джордж Оруел в книгата му “1984” - функционер от ниските партийни етажи, който се появява на различни екрани, изобличавайки посегателства върху неприкосновеността на личния живот, както и промотирайки криптирането на лична информация от обикновените хора.<br><br>Сноудън е особено предпазлив при уговарянето на срещи лице в лице с непознати хора, което не е учудващо, имайки предвид, че по следите му са ФБР, ЦРУ и Министерството на външните работи на САЩ. Добрата новина за Сноудън е, че откакто се намира в Русия, сънародниците му изглежда са изгубили следите му и са безпомощни в опитите си да го открият.<br><br>Бившият служител на Агенцията за национална сигурност се укрива в Русия в продължение на повече от година. Той пазарува в малки магазини, където никой не го познава и дори е научил малко руски език. На 7 август руското правителство удължи срока, в който той може да остане в страната с нови три години.</p></div>', '2014-08-23 18:11:10', 0),
(2, 3, 1, 'Още един руски туроператор прекрати дейността си', '<h2 style="font-size: 18px; font-weight: normal; font-style: italic; font-family: Georgia; color: rgb(51, 51, 51); text-align: start;">Във фалит изпадна "Атлас", която изпраща туристи и в България</h2><div><br></div><div><p style="font-size: 14px; font-family: Arial, non-serif; cursor: default; margin: 0px 0px 10px; color: rgb(51, 51, 51); word-wrap: break-word; line-height: 20px; text-align: start;">Още една туристическа компания беше покосена от кризата в руския туристически сектор, съобщи информационната агенция ИТАР-ТАСС. Става дума за оператора „Атлас”, който е съобщил официално, че няма да може да извърши своите задължения към клиентите си.</p><p style="font-size: 14px; font-family: Arial, non-serif; cursor: default; margin: 0px 0px 10px; color: rgb(51, 51, 51); word-wrap: break-word; line-height: 20px; text-align: start;">От фирмата обаче съобщиха, че нямат неизпълнени задължения по договори с туристи, които се намират извън пределите на Руската Федерация.</p><p style="font-size: 14px; font-family: Arial, non-serif; cursor: default; margin: 0px 0px 10px; color: rgb(51, 51, 51); word-wrap: break-word; line-height: 20px; text-align: start;">Компанията е застрахована за сумата от 49 млн. рубли в „Помощь”. Договорът е в сила до 9 септември 2014 година. От застрахователната компания вече гарантираха, че ще изпълнят задълженията към клиентите на „Атлас” в пълен размер.</p><p style="font-size: 14px; font-family: Arial, non-serif; cursor: default; margin: 0px 0px 10px; color: rgb(51, 51, 51); word-wrap: break-word; line-height: 20px; text-align: start;">Туроператорът „Атлас” започна работа през 1991 година. Компанията предлагаше на своите клиенти пътешествия в страната и в чужбина. Една от страните, в които оперира тя, е и България.</p><p style="font-size: 14px; font-family: Arial, non-serif; cursor: default; margin: 0px 0px 10px; color: rgb(51, 51, 51); word-wrap: break-word; line-height: 20px; text-align: start;">„Атлас” е поредната жертва на кризата в руския туристически сектор. През юли дейността си прекратиха компаниите „Нева”, „Роза мир” и „Экспро-тур”, а през август във фалит се оказаха още „Идеал – тур”, „Нордик Стар”, „Интаэр” и „Лабиринт”.</p><p style="font-size: 14px; font-family: Arial, non-serif; cursor: default; margin: 0px 0px 10px; color: rgb(51, 51, 51); word-wrap: break-word; line-height: 20px; text-align: start;">Според изчисленията на руските туристически агенции от фалитите до този момент са пострадали 65 хил. туристи. Най-много от тях са клиентите на „Нева” (17 хил. души) и „Лабиринт” (16 хил. души). Вчера стана ясно, че на пострадалите туристи, които не са могли да осъществят почивката си, ще бъде предложен вариант за безплатна почивка в Сочи.  </p><p style="font-size: 14px; font-family: Arial, non-serif; cursor: default; margin: 0px 0px 10px; color: rgb(51, 51, 51); word-wrap: break-word; line-height: 20px; text-align: start;">Междувременно директорът на Колежа по туризъм във Варна и член на Управителния съвет на Варненската туристическа камара доц. Стоян Маринов коментира пред БНР, че няма спад на посещенията на руските туристи. До 20-ти август посещенията на руснаците у нас се увеличава с около 2%.</p></div>', '2014-08-23 18:38:39', 0),
(3, 7, 2, 'Наказват Диего Симеоне за 4 мача', '<span style="font-family: robotolight; font-size: 16px; line-height: 20.799999237060547px; text-align: start;">Наставникът на Атлетико Мадрид Диего Симеоне вероятно ще бъде наказан за невъздържаното си поведение по време на мача-реванш с Реал Мадрид от Суперкупата на Испания.</span><br style="font-family: robotolight; font-size: 16px; line-height: 20.799999237060547px; text-align: start;"><br style="font-family: robotolight; font-size: 16px; line-height: 20.799999237060547px; text-align: start;"><span style="font-family: robotolight; font-size: 16px; line-height: 20.799999237060547px; text-align: start;">Той беше отстранен от съдията Бурбалан заради невъздържаното си повечение, а според Марка специалистът може да бъде наказан за 4 срещи.</span><br style="font-family: robotolight; font-size: 16px; line-height: 20.799999237060547px; text-align: start;"><br style="font-family: robotolight; font-size: 16px; line-height: 20.799999237060547px; text-align: start;"><span style="font-family: robotolight; font-size: 16px; line-height: 20.799999237060547px; text-align: start;">Така има голяма вероятност Симеоне да се окаже на трибуните още в понеделник, когато "дюшекчиите" играят с Райо Валекано в първа среща от Примера дивизион.</span>', '2014-08-23 19:20:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE IF NOT EXISTS `post_category` (
  `post_category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `action_id` int(11) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`post_category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE IF NOT EXISTS `post_tag` (
  `post_tag_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `action_id` int(10) unsigned NOT NULL,
  `post_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`post_tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `action_id` int(10) unsigned NOT NULL,
  `tag_name` varchar(255) NOT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `action_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_type_id` int(50) unsigned NOT NULL DEFAULT '2',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `action_id`, `first_name`, `last_name`, `username`, `password`, `email`, `user_type_id`) VALUES
(1, 1, 'Misho', 'Ivanov', 'misho', 'softuni', 'misho@abv.bg', 2),
(2, 5, 'Lachezar', 'Aleksandrov', 'lacho', 'softuni', 'laa@mail.bg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `user_type_id` int(2) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `description`) VALUES
(1, 'Администратор'),
(2, 'Потребител');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
