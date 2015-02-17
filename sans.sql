-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2015 at 04:17 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sans`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE latin1_general_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('028bd893a7e9179e9ae51f950aa78cd6', '66.249.79.88', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1423460614, ''),
('4be51f70b513a529bd07ab865b3089d0', '106.186.125.192', 'Go 1.1 package http', 1423475692, ''),
('b4deee33884ee282e7ce26c2ec3f153c', '106.186.125.192', 'Go 1.1 package http', 1423476816, ''),
('2a36d0c38d5a04aa53562c955fdabf13', '66.249.79.140', 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e', 1423469602, ''),
('86f6531165d8ed5b7eef7d45c0f13067', '66.249.79.104', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1423460726, ''),
('a5e79ec465f469e1b91b7348fc6d8774', '209.88.91.222', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2298.0 Safari/537.36', 1423461259, ''),
('6a8f5a32a43c880cf786e7c1d8afe86f', '157.55.39.146', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1423462704, ''),
('0e3d5b00939ebba3a411ebd6389cd85f', '157.55.39.146', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1423462704, ''),
('10097611c7ae2fd355c1555045e644ef', '157.55.39.146', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1423462704, ''),
('87c5bfc5e1f075421dfb564e11c58c82', '157.55.39.141', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1423462706, ''),
('e9d55d2885eb4d62f907a1cbe0a7ba0d', '157.55.39.141', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1423462706, ''),
('161046ba6d6fdcf33823cc91f7d1f08a', '41.78.78.26', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2298.0 Safari/537.36', 1423464402, ''),
('b3c228d13e2a50151a94485502501080', '41.78.78.26', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2298.0 Safari/537.36', 1423466873, ''),
('f2771d3b17621e46a471d8be3c78fb7a', '209.88.91.222', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:36.0) Gecko/20100101 Firefox/36.0', 1423466956, '');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE IF NOT EXISTS `collections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `collection_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `collection_name` (`collection_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `collection_name`) VALUES
(1, 'african_shirts'),
(5, 'dangarees'),
(2, 'dresses'),
(3, 'shorts'),
(4, 'skirts_and_tops'),
(6, 'Jewelery');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'customer',
  `zip` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `sname`, `phone`, `email`, `address`, `password`, `usertype`, `zip`, `city`, `country`, `date_time`) VALUES
(1, 'steven', 'dumbura', '0777902073', 'stevedumbura@gmail.com', '12 dingwel drive, twinlakes park\r\nnorton, harare                            ', 'iamtheblaze93', 'customer', '', '', '', ''),
(2, 'simukai', 'whande', '+263773447311', 'simukaiwhande@yahoo.com', '1998 kuziva close \nnew malborugh\nharare\nzimbabwe                                                        ', 'Myfortune92', 'customer', '', '', '', ''),
(5, 'pearl', 'mbazima', '+263771674719', 'pearl@smeaz.org.zw', '                            6th floor batanai gardens, 57 jason moyo avenue, harare', 'tmm290098', 'customer', '', '', '', ''),
(7, 'sandra ', 'mariga', '+263774068996', 'scmariga@gmail.com', '2385 dzidzai street cherutombo zbs marondera zimbabwe                            ', 'dnzlsan', 'customer', '', '', '', ''),
(8, 'adonis', 'rumbwere', '+263775462869', 'adonis.rumbwere@gmail.com', '                            4532 15th street glen view 3 harare', 'runyararowaenda', 'customer', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `designers`
--

CREATE TABLE IF NOT EXISTS `designers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(255) NOT NULL,
  `label` varchar(256) NOT NULL,
  `full_name` varchar(256) NOT NULL,
  `bio` text NOT NULL,
  `pic` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `full_name` (`full_name`),
  UNIQUE KEY `surname` (`surname`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `designers`
--

INSERT INTO `designers` (`id`, `surname`, `label`, `full_name`, `bio`, `pic`) VALUES
(12, 'Lady_Cee_Kay', 'Lady Cee Kay', 'Cecelia', '', './uiux/img/stocks/designers/Lady Cee Kay/DSC_0488.JPG'),
(14, 'Tariro_The_Jeweler', 'Tariro The Jeweler', 'Tariro The Jeweler', '', './uiux/img/stocks/designers/Tariro_The_Jeweler/IMG-20141202-WA0000.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

CREATE TABLE IF NOT EXISTS `newsletter_subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_of_signup` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `newsletter_subscribers`
--

INSERT INTO `newsletter_subscribers` (`id`, `name`, `email`, `date_of_signup`) VALUES
(1, 'Online Shopper', 'onlineshooper@email.com', '2015-02-16'),
(2, '', 'stevedumbura@gmail.com', '2015-02-16'),
(3, '', 'jj@gmail.com', '2015-02-16'),
(4, 'vbnkjnknk jjnkjnkn', 'stevedumbura@gmail.com', '2015-02-17'),
(5, '', '', '2015-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cart` text NOT NULL,
  `date_placed` text NOT NULL,
  `shipping_method` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `complete` varchar(255) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `payment_hash` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `custom` (`customer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `cart`, `date_placed`, `shipping_method`, `payment_method`, `complete`, `customer`, `payment_hash`) VALUES
(1, '{"13c8a16335d4547d07f3bbcd840ad56c":{"rowid":"13c8a16335d4547d07f3bbcd840ad56c","id":"tr03","qty":"3","price":"12","name":"beaded neck pieces","options":{"specifications":"mjegjmfhjtfthk4hftft4hfkt4h rjg4uf","size":["   \\r\\n                                            sizes: \\r\\n                                              "],"location":".\\/uiux\\/img\\/stocks\\/designers\\/Tariro_The_Jeweler\\/Jewelery\\/tr03\\/IMG-20141202-WA0001.jpg"},"subtotal":36}}', '', 'collection', '', '', 'V', '1ebe03f3b77c21ba08b7901398c479d0259b2cc0'),
(2, '{"c9915d5f3f448ed1ea5a07892bcb3240":{"rowid":"c9915d5f3f448ed1ea5a07892bcb3240","id":"cee019","qty":"3","price":"40","name":"Shatter skirt and Croptop","options":{"specifications":"","size":["   \\r\\n                                            sizes: \\r\\n                                              ","US - 8 ","US Named Size - Medium ","UK - 10 ","France -38 ","Germany -36 ","Italy -42 ","Australia - 12 ","Japan -  11"],"location":".\\/uiux\\/img\\/stocks\\/designers\\/Lady Cee Kay\\/Skirts and Tops\\/cee019\\/DSC_0402.JPG"},"subtotal":120},"0a60dfbf8238a0cce31c0266bd4c2a84":{"rowid":"0a60dfbf8238a0cce31c0266bd4c2a84","id":"cee005","qty":"3","price":"30","name":"Dangaree","options":{"specifications":"","size":["   \\r\\n                                            sizes: \\r\\n                                              ","US - 14 ","US Named Size - Large\\/X-Large ","UK - 16 ","France -44 ","Germany -42 ","Italy -48 ","Australia - 18 ","Japan -  17"],"location":".\\/uiux\\/img\\/stocks\\/designers\\/Lady Cee Kay\\/Dangaree\\/cee005\\/DSC_0477.JPG"},"subtotal":90}}', '', 'collection', '', '', 'v', 'b3d2b685c2016d7faae0ebff225fc9c86b31e136'),
(3, '{"44cae7315efab5d74161261ea96dec85":{"rowid":"44cae7315efab5d74161261ea96dec85","id":"tr03","qty":"2","price":"12","name":"beaded neck pieces","options":{"specifications":"","size":["   \\r\\n                                            sizes: \\r\\n                                              "],"location":".\\/uiux\\/img\\/stocks\\/designers\\/Tariro_The_Jeweler\\/Jewelery\\/tr03\\/IMG-20141202-WA0001.jpg"},"subtotal":24}}', '', 'delivery', '', '', 'onlineshooper@email.com', '29da1e268184f2bd6a8b5149997d6a6d0dea283c'),
(4, '{"87d3c4c80626a87a4f7165b69ef8e6e3":{"rowid":"87d3c4c80626a87a4f7165b69ef8e6e3","id":"cee017","qty":"1","price":"25","name":"Peplum Top","options":{"specifications":"","size":["   \\r\\n                                            sizes: \\r\\n                                              ","US - 2 ","US Named Size - X-Small ","UK - 4 ","France -32 ","Germany -30 ","Italy -36 ","Australia - 6 ","Japan -  5 "],"location":".\\/uiux\\/img\\/stocks\\/designers\\/Lady Cee Kay\\/Skirts and Tops\\/cee017\\/DSC_0445.JPG"},"subtotal":25}}', '', 'delivery', '', '', 'stevedumbura@gmail.com', '52ab2ee9615b25e727186ecfcd4b614d4c232ae1'),
(5, '{"21ee8ce06a6af4d4bc3909acdf90c8d2":{"rowid":"21ee8ce06a6af4d4bc3909acdf90c8d2","id":"cee016","qty":"1","price":"25","name":"Peplum Top","options":{"specifications":"","size":["   \\r\\n                                            sizes: \\r\\n                                              ","US - 2 ","US Named Size - X-Small ","UK - 4 ","France -32 ","Germany -30 ","Italy -36 ","Australia - 6 ","Japan -  5 "],"location":".\\/uiux\\/img\\/stocks\\/designers\\/Lady Cee Kay\\/Skirts and Tops\\/cee016\\/Peplum_top_25.JPG"},"subtotal":25}}', '', 'delivery', '', '', 'stevedumbura@gmail.com', '29b5e86e8687db0c31ea5d4c781f6694674861ef'),
(6, '{"54bd067f43061d0b0b13d72e02c8e271":{"rowid":"54bd067f43061d0b0b13d72e02c8e271","id":"cee21","qty":"1","price":"25","name":"Skatter Skirt","options":{"specifications":"","size":["   \\r\\n                                            sizes: \\r\\n                                              ","US - 2 ","US Named Size - X-Small ","UK - 4 ","France -32 ","Germany -30 ","Italy -36 ","Australia - 6 ","Japan -  5 "],"location":".\\/uiux\\/img\\/stocks\\/designers\\/Lady Cee Kay\\/Skirts and Tops\\/cee21\\/Skatter_Skirt_25_(2).jpg"},"subtotal":25}}', '', 'collection', '', '', 'stevedumbura@gmail.com', 'e9b8166ac100c2dd89683a4b27307e5d20c897d6'),
(7, '{"aa2e4c934f1915cc9742d6daf7e79c40":{"rowid":"aa2e4c934f1915cc9742d6daf7e79c40","id":"cee018","qty":"1","price":"45","name":"Peplum top and pencil skirt","options":{"specifications":"","size":["   \\r\\n                                            sizes: \\r\\n                                              ","US - 2 ","US Named Size - X-Small ","UK - 4 ","France -32 ","Germany -30 ","Italy -36 ","Australia - 6 ","Japan -  5 "],"location":".\\/uiux\\/img\\/stocks\\/designers\\/Lady Cee Kay\\/Skirts and Tops\\/cee018\\/Peplum_top_and_pensil_skirt_45.jpg"},"subtotal":45}}', '2015-02-17', 'collection', 'cod', 'no', 'stevedumbura@gmail.com', 'd9a7e39d5f0d418ff2fee2c72f72ce2fb6826945'),
(8, '{"21ee8ce06a6af4d4bc3909acdf90c8d2":{"rowid":"21ee8ce06a6af4d4bc3909acdf90c8d2","id":"cee016","qty":"1","price":"25","name":"Peplum Top","options":{"specifications":"","size":["   \\r\\n                                            sizes: \\r\\n                                              ","US - 2 ","US Named Size - X-Small ","UK - 4 ","France -32 ","Germany -30 ","Italy -36 ","Australia - 6 ","Japan -  5 "],"location":".\\/uiux\\/img\\/stocks\\/designers\\/Lady Cee Kay\\/Skirts and Tops\\/cee016\\/Peplum_top_25.JPG"},"subtotal":25}}', '2015-02-17', 'collection', 'cod', 'no', 'stevedumbura@gmail.com', '8af36d0200d2e4f68aed26f49fb936046f125a86'),
(9, '{"2dc30e9268e0207b3d2c4a55f7246cad":{"rowid":"2dc30e9268e0207b3d2c4a55f7246cad","id":"cee014","qty":"1","price":"25","name":"Stretchy Dress","options":{"specifications":"","size":["   \\r\\n                                            sizes: \\r\\n                                              ","US - 2 ","US Named Size - X-Small ","UK - 4 ","France -32 ","Germany -30 ","Italy -36 ","Australia - 6 ","Japan -  5 "],"location":".\\/uiux\\/img\\/stocks\\/designers\\/Lady Cee Kay\\/Dresses\\/cee014\\/DSC_0426.JPG"},"subtotal":25}}', '2015-02-17', 'collection', 'cod', 'no', 'stevedumbura@gmail.com', 'a7d3c5dad9dac0e12366a01794cff56f3e36a552'),
(10, '{"be6eb8a6315a78a0be1700f8e5d4eb81":{"rowid":"be6eb8a6315a78a0be1700f8e5d4eb81","id":"tr02","qty":"1","price":"5","name":"faux pearl beaded necklace","options":{"specifications":"","size":["   \\r\\n                                            sizes: \\r\\n                                              "],"location":".\\/uiux\\/img\\/stocks\\/designers\\/Tariro_The_Jeweler\\/Jewelery\\/tr02\\/IMG-20141202-WA0002.jpg"},"subtotal":5}}', '2015-02-17', 'delivery', 'cod', 'no', 'stevedumbura@gmail.com', 'd91867b96c9e8d8e90aabf4073daa6b09cc733fb');

-- --------------------------------------------------------

--
-- Table structure for table `paynow`
--

CREATE TABLE IF NOT EXISTS `paynow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `paynowreference` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `additionalinfo` text COLLATE latin1_general_ci NOT NULL,
  `authemail` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `pollurl` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `customer` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `date_of_order` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `method` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `date_of_payment` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=49 ;

--
-- Dumping data for table `paynow`
--

INSERT INTO `paynow` (`id`, `reference`, `paynowreference`, `amount`, `additionalinfo`, `authemail`, `status`, `pollurl`, `customer`, `date_of_order`, `method`, `date_of_payment`, `url`) VALUES
(38, '5c6bd8fa1304de096372101f6df48233611f2ad9', '', '25', '1 x 1 Skatter Skirt specifications: Size : medium Color : blue', '', 'Ok', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=e232c813-fd2b-45f5-89d6-7cb59bde5df6', '0', '2014-12-09', 'PayNow', '', 'https://www.paynow.co.zw/Payment/ConfirmPayment/9156'),
(39, '47f1d48045b8cb5cc2004f982c7fcfd26526dbd7', '9170', '25', '1 x 1 Stretchy Dress Item Code: cee014 specifications: Size : small Color : brown', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=af96eb62-a083-4695-9d96-20339cb58b30', 'stevedumbura@gmail.com', '2014-12-09', 'PayNow', '2014-12-09', 'https://www.paynow.co.zw/Payment/ConfirmPayment/9170'),
(40, '9a08ef02b7a1808746136e15a0fd5ee730f2bb6e', '9171', '25', '1 x 1 Stretchy Dress    Code: cee014 specifications: Size : small Color : brown', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=27f46e00-7d2f-4b0c-9b81-d56f22a3c40d', 'stevedumbura@gmail.com', '2014-12-09', 'PayNow', '2014-12-09', 'https://www.paynow.co.zw/Payment/ConfirmPayment/9171'),
(41, '86f1aef49b3e2ee9824d55dd2780a8fb636e3d18', '9173', '25', '1 x 1 Stretchy Dress Code: cee014 specifications: Size : 18', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=c26beac3-9914-4dc2-9541-601a5a726d5a', 'stevedumbura@gmail.com', '2014-12-09', 'PayNow', '2014-12-09', 'https://www.paynow.co.zw/Payment/ConfirmPayment/9173'),
(42, '8c84e6f4a330ba6cf5c6872c398a1333f74dc8ff', '9220', '45', '1 x 1 Peplum top and pencil skirt Code: cee018 specifications: Size : 18', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=dca02ec0-65a9-4a8a-9766-ab8da78d6a09', 'stevedumbura@gmail.com', '2014-12-10', 'PayNow', '2014-12-10', 'https://www.paynow.co.zw/Payment/ConfirmPayment/9220'),
(43, '836adc91cd571485e8487f61695ea1de0ff23088', '9248', '12', '1 x 1 mixed beaded neck pieces for men Code: tr03 specifications: Size : 18', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=c0e252b4-af0f-4b7d-b58a-de39590a2f0a', 'stevedumbura@gmail.com', '2014-12-10', 'PayNow', '2014-12-10', 'https://www.paynow.co.zw/Payment/ConfirmPayment/9248'),
(44, '585886f6fd65ac8207a95cefd1b3912620f49224', '9249', '12', '1 x 1 mixed beaded neck pieces for men Code: tr03 specifications: Size : 18', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=c3b7db92-7563-40ee-9025-cb5e624f9a13', 'stevedumbura@gmail.com', '2014-12-10', 'PayNow', '2014-12-10', 'https://www.paynow.co.zw/Payment/ConfirmPayment/9249'),
(45, '69a6a081ebd879716fe53070d84788037343bfe2', '10410', '25', '1 x 1 Skatter Skirt Code: cee21 specifications: Size : 22', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=d93aca01-a214-4027-a673-2a3bcde073f7', 'stevedumbura@gmail.com', '2015-01-15', 'PayNow', '2015-01-15', 'https://www.paynow.co.zw/Payment/ConfirmPayment/10410'),
(46, 'c41c2796383dae1fd537eabda3c41bcb16ad4a2b', '10742', '25', '1 x 1 Skatter Skirt Code: cee21 specifications: Size : 18', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=fea439a3-f652-491a-8671-90061d71bb3a', 'stevedumbura@gmail.com', '2015-01-18', 'PayNow', '2015-01-18', 'https://www.paynow.co.zw/Payment/ConfirmPayment/10742'),
(47, 'aaf2b7449f09b8458d918e1ab4b2e0f578735ea3', '', '25', '1 x 1 Maxxi Dress Code: cee012 specifications: Size : 18', '', 'Ok', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=1f14335a-2dbe-44dc-810b-4d24af269f47', 'stevedumbura@gmail.com', '2015-01-18', 'PayNow', '', 'https://www.paynow.co.zw/Payment/ConfirmPayment/10743'),
(48, 'dca92cd16376dd985179ebb2a612bb80beaa394f', '', '30', '1 x 1 African Shirt Code: cee002 specifications: Size : 18', '', 'Ok', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=d7f78c96-f615-4cc2-8905-6c6ee7b539a1', 'stevedumbura@gmail.com', '2015-02-02', 'PayNow', '', 'https://www.paynow.co.zw/Payment/ConfirmPayment/11567');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE IF NOT EXISTS `stocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `designer` varchar(255) NOT NULL,
  `sex` int(11) NOT NULL,
  `item_name` varchar(256) NOT NULL,
  `collection` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `designer` (`designer`),
  KEY `collection` (`collection`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `code`, `pic`, `price`, `size`, `quantity`, `designer`, `sex`, `item_name`, `collection`, `description`) VALUES
(1, 'cee001', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee001/African_Shirt_35.jpg', '35', '0', '0', 'Lady_Cee_Kay', 1, 'African Shirt', 'african_shirts', '      '),
(2, 'cee002', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee002/African_Shirt_30.JPG', '30', '0', '0', 'Lady_Cee_Kay', 1, 'African Shirt', 'african_shirts', '      '),
(3, 'cee003', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee003/African_Shirt_30.JPG', '30', '0', '0', 'Lady_Cee_Kay', 1, 'African Shirt', 'african_shirts', '      '),
(4, 'cee004', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee004/DSC_0472.JPG', '25', '0', '0', 'Lady_Cee_Kay', 1, 'African Shirt', 'african_shirts', '      '),
(5, 'cee005', './uiux/img/stocks/designers/Lady Cee Kay/Dangaree/cee005/DSC_0477.JPG', '30', '0', '0', 'Lady_Cee_Kay', 0, 'Dangaree', 'dangarees', '      '),
(6, 'cee006', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee006/African_Dress_45.JPG', '45', '0', '0', 'Lady_Cee_Kay', 0, 'African Dress', 'dresses', '      '),
(7, 'cee007', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee007/African_Dress_with_Chiffon_top_45.JPG', '45', '0', '0', 'Lady_Cee_Kay', 0, 'African Dress', 'dresses', '      '),
(8, 'cee008', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee008/African_Outfit_45.jpg', '45', '0', '0', 'Lady_Cee_Kay', 0, 'African Outfit', 'dresses', '      '),
(10, 'cee009', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee009/DSC_0378.jpg', '30', '0', '0', 'Lady_Cee_Kay', 0, 'Cocktail Dress', 'dresses', '      '),
(11, 'cee010', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee010/Dashik_Dress_45.jpg', '45', '0', '0', 'Lady_Cee_Kay', 0, 'Dashik Dress', 'dresses', '      '),
(12, 'cee011', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee011/DSC_0412.JPG', '45', '0', '0', 'Lady_Cee_Kay', 0, 'Dashiki Dress', 'dresses', '      '),
(13, 'cee012', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee012/DSC_0433.JPG', '25', '0', '0', 'Lady_Cee_Kay', 0, 'Maxxi Dress', 'dresses', '      '),
(14, 'cee013', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee013/DSC_0401.JPG', '25', '0', '0', 'Lady_Cee_Kay', 0, 'African Shorts', 'shorts', '      '),
(15, 'cee014', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/DSC_0426.JPG', '25', '0', '0', 'Lady_Cee_Kay', 0, 'Stretchy Dress', 'dresses', '      '),
(16, 'cee015', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee015/Chiffon_Top20.jpg', '20', '0', '0', 'Lady_Cee_Kay', 0, 'Chiffon Top', 'skirts_and_tops', '      '),
(17, 'cee016', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee016/Peplum_top_25.JPG', '25', '0', '0', 'Lady_Cee_Kay', 0, 'Peplum Top', 'skirts_and_tops', '      '),
(18, 'cee017', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee017/DSC_0445.JPG', '25', '0', '0', 'Lady_Cee_Kay', 0, 'Peplum Top', 'skirts_and_tops', '      '),
(19, 'cee018', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee018/Peplum_top_and_pensil_skirt_45.jpg', '45', '0', '0', 'Lady_Cee_Kay', 0, 'Peplum top and pencil skirt', 'skirts_and_tops', '      '),
(20, 'cee019', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee019/DSC_0402.JPG', '40', '0', '0', 'Lady_Cee_Kay', 0, 'Shatter skirt and Croptop', 'skirts_and_tops', '      '),
(21, 'cee020', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee020/Skatter_Skirt_25.jpg', '25', '0', '0', 'Lady_Cee_Kay', 0, 'Skatter Skirt', 'skirts_and_tops', '      '),
(22, 'cee21', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee21/Skatter_Skirt_25_(2).jpg', '25', '0', '0', 'Lady_Cee_Kay', 0, 'Skatter Skirt', 'skirts_and_tops', '      '),
(23, 'cee22', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee22/DSC_0384.JPG', '35', '0', '0', 'Lady_Cee_Kay', 0, 'Skatter Skirt and Crop Top', 'skirts_and_tops', '      '),
(24, 'cee23', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee23/African_Shorts_25.jpg', '25', '0', '0', 'Lady_Cee_Kay', 0, 'African Shorts', 'shorts', '      '),
(25, 'tr01', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr01/IMG-20141202-WA0003.jpg', '8', '0', '0', 'Tariro_The_Jeweler', 0, 'crystal beaded neckpiece', 'Jewelery', '      '),
(27, 'tr02', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', '5', '0', '0', 'Tariro_The_Jeweler', 0, 'faux pearl beaded necklace', 'Jewelery', '      '),
(28, 'tr03', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr03/IMG-20141202-WA0001.jpg', '12', '0', '0', 'Tariro_The_Jeweler', 1, 'beaded neck pieces', 'Jewelery', '      ');

-- --------------------------------------------------------

--
-- Table structure for table `stock_images`
--

CREATE TABLE IF NOT EXISTS `stock_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designer` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `stock_item` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `designer` (`designer`,`stock_item`),
  KEY `stock_item` (`stock_item`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `stock_images`
--

INSERT INTO `stock_images` (`id`, `designer`, `location`, `stock_item`) VALUES
(1, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee001/DSC_0459.JPG', 'cee001'),
(2, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee001/DSC_0460.JPG', 'cee001'),
(3, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee001/DSC_0463.JPG', 'cee001'),
(4, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee002/DSC_0452.JPG', 'cee002'),
(5, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee002/DSC_0457.JPG', 'cee002'),
(6, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee002/DSC_0458.JPG', 'cee002'),
(7, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee003/DSC_0451.JPG', 'cee003'),
(8, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee003/DSC_0448.JPG', 'cee003'),
(9, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee003/African_Shirt_30.JPG', 'cee003'),
(10, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee004/African_Shirt_25.JPG', 'cee004'),
(11, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee004/DSC_0464.JPG', 'cee004'),
(12, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee004/DSC_0473.JPG', 'cee004'),
(13, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee004/DSC_0469.JPG', 'cee004'),
(14, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dangaree/cee005/Dangaree_30.JPG', 'cee005'),
(15, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dangaree/cee005/DSC_0478.JPG', 'cee005'),
(16, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dangaree/cee005/DSC_0480.JPG', 'cee005'),
(17, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dangaree/cee005/DSC_0488.JPG', 'cee005'),
(18, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee006/African_Dress_45.JPG', 'cee006'),
(19, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee006/DSC_0389.JPG', 'cee006'),
(20, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee006/African_Dress_45.JPG', 'cee006'),
(21, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee007/DSC_0391.JPG', 'cee007'),
(22, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee007/African_Dress_with_Chiffon_top_45.JPG', 'cee007'),
(23, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee007/DSC_0391.JPG', 'cee007'),
(24, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee008/African_Outfit_45.jpg', 'cee008'),
(25, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee008/African_Outfit_45.jpg', 'cee008'),
(26, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee008/African_Outfit_45.jpg', 'cee008'),
(27, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee009/Cocktail_Dress_30.JPG', 'cee009'),
(28, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee009/DSC_0374.JPG', 'cee009'),
(29, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee009/DSC_0375.jpg', 'cee009'),
(30, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee009/DSC_0377.JPG', 'cee009'),
(31, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee010/DSC_0353.JPG', 'cee010'),
(32, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee010/Dashik_Dress_45.jpg', 'cee010'),
(33, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee010/DSC_0353.JPG', 'cee010'),
(34, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee011/Dashiki_Dress45.JPG', 'cee011'),
(35, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee011/DSC_0410.JPG', 'cee011'),
(36, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee011/DSC_0414.JPG', 'cee011'),
(37, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee012/DSC_0431.JPG', 'cee012'),
(38, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee012/Maxxi_Dress_25.jpg', 'cee012'),
(39, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee012/DSC_0434.JPG', 'cee012'),
(40, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee012/DSC_0436.JPG', 'cee012'),
(41, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee012/DSC_0437.JPG', 'cee012'),
(42, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee013/DSC_0393.JPG', 'cee013'),
(43, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee013/DSC_0394.jpg', 'cee013'),
(44, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee013/DSC_0395.JPG', 'cee013'),
(45, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee013/African_Shorts25.JPG', 'cee013'),
(46, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/DSC_0423.JPG', 'cee014'),
(47, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/DSC_0425.JPG', 'cee014'),
(48, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/DSC_0426.JPG', 'cee014'),
(49, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/DSC_0428.JPG', 'cee014'),
(50, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/DSC_0429.JPG', 'cee014'),
(51, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/DSC_0430.JPG', 'cee014'),
(52, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/Stretchy_Dress_25.jpg', 'cee014'),
(53, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee015/Chiffon_Top.JPG', 'cee015'),
(54, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee015/DSC_0416.JPG', 'cee015'),
(55, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee015/DSC_0417.JPG', 'cee015'),
(56, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee015/DSC_0418.JPG', 'cee015'),
(57, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee015/DSC_0420.JPG', 'cee015'),
(58, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee016/DSC_0354.JPG', 'cee016'),
(59, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee016/DSC_0356.JPG', 'cee016'),
(60, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee016/DSC_0357.JPG', 'cee016'),
(61, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee017/Peplum_top_25_(2).JPG', 'cee017'),
(62, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee017/DSC_0446.jpg', 'cee017'),
(63, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee017/DSC_0444.JPG', 'cee017'),
(64, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee017/DSC_0438.jpg', 'cee017'),
(65, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee018/DSC_0338.jpg', 'cee018'),
(66, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee018/DSC_0339.JPG', 'cee018'),
(67, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee018/DSC_0340.JPG', 'cee018'),
(68, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee018/DSC_0342.JPG', 'cee018'),
(69, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee019/DSC_0404.JPG', 'cee019'),
(70, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee019/DSC_0406.JPG', 'cee019'),
(71, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee019/DSC_0407.JPG', 'cee019'),
(72, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee019/Shatter_skirt_and_croptop_40.JPG', 'cee019'),
(73, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee020/DSC_0329.JPG', 'cee020'),
(74, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee020/DSC_0332.JPG', 'cee020'),
(75, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee020/DSC_0333.JPG', 'cee020'),
(76, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee020/DSC_0335.JPG', 'cee020'),
(77, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee020/DSC_0336.JPG', 'cee020'),
(78, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee020/DSC_0337.JPG', 'cee020'),
(79, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee21/DSC_0344.jpg', 'cee21'),
(80, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee21/DSC_0345.JPG', 'cee21'),
(81, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee21/DSC_0349.JPG', 'cee21'),
(82, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee21/DSC_0351.jpg', 'cee21'),
(83, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee22/Skatter_Skirt_and_crop_top_35.JPG', 'cee22'),
(84, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee22/hs.jpg', 'cee22'),
(85, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee22/DSC_0387.jpg', 'cee22'),
(86, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee23/DSC_0358.JPG', 'cee23'),
(87, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee23/DSC_0363.JPG', 'cee23'),
(88, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee23/DSC_0364.JPG', 'cee23'),
(89, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee23/DSC_0365.jpg', 'cee23'),
(90, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee23/DSC_0366.JPG', 'cee23'),
(91, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee23/DSC_0367.JPG', 'cee23'),
(92, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr01/IMG-20141202-WA0003.jpg', 'tr01'),
(93, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr01/IMG-20141202-WA0003.jpg', 'tr01'),
(94, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr01/IMG-20141202-WA0003.jpg', 'tr01'),
(95, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr01/IMG-20141202-WA0003.jpg', 'tr01'),
(96, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02'),
(97, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02'),
(98, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02'),
(99, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02'),
(100, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02'),
(101, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02'),
(102, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02'),
(103, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02'),
(104, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr03/IMG-20141202-WA0001.jpg', 'tr03'),
(105, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr03/IMG-20141202-WA0001.jpg', 'tr03'),
(106, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr03/IMG-20141202-WA0001.jpg', 'tr03'),
(107, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr03/IMG-20141202-WA0001.jpg', 'tr03'),
(108, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr04/IMG-20141202-WA0001.jpg', 'tr04'),
(109, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr04/IMG-20141202-WA0001.jpg', 'tr04'),
(110, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr04/IMG-20141202-WA0001.jpg', 'tr04'),
(111, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr04/IMG-20141202-WA0001.jpg', 'tr04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `phone`, `email`, `password`, `usertype`) VALUES
(1, '0777902073', 'stevedumbura@gmail.com', 'password', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
