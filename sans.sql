-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2015 at 05:24 AM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a6982884_sans`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
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

INSERT INTO `ci_sessions` VALUES('028bd893a7e9179e9ae51f950aa78cd6', '66.249.79.88', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1423460614, '');
INSERT INTO `ci_sessions` VALUES('4be51f70b513a529bd07ab865b3089d0', '106.186.125.192', 'Go 1.1 package http', 1423475692, '');
INSERT INTO `ci_sessions` VALUES('b4deee33884ee282e7ce26c2ec3f153c', '106.186.125.192', 'Go 1.1 package http', 1423476816, '');
INSERT INTO `ci_sessions` VALUES('2a36d0c38d5a04aa53562c955fdabf13', '66.249.79.140', 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e', 1423469602, '');
INSERT INTO `ci_sessions` VALUES('86f6531165d8ed5b7eef7d45c0f13067', '66.249.79.104', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 1423460726, '');
INSERT INTO `ci_sessions` VALUES('a5e79ec465f469e1b91b7348fc6d8774', '209.88.91.222', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2298.0 Safari/537.36', 1423461259, '');
INSERT INTO `ci_sessions` VALUES('6a8f5a32a43c880cf786e7c1d8afe86f', '157.55.39.146', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1423462704, '');
INSERT INTO `ci_sessions` VALUES('0e3d5b00939ebba3a411ebd6389cd85f', '157.55.39.146', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1423462704, '');
INSERT INTO `ci_sessions` VALUES('10097611c7ae2fd355c1555045e644ef', '157.55.39.146', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1423462704, '');
INSERT INTO `ci_sessions` VALUES('87c5bfc5e1f075421dfb564e11c58c82', '157.55.39.141', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1423462706, '');
INSERT INTO `ci_sessions` VALUES('e9d55d2885eb4d62f907a1cbe0a7ba0d', '157.55.39.141', 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)', 1423462706, '');
INSERT INTO `ci_sessions` VALUES('161046ba6d6fdcf33823cc91f7d1f08a', '41.78.78.26', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2298.0 Safari/537.36', 1423464402, '');
INSERT INTO `ci_sessions` VALUES('b3c228d13e2a50151a94485502501080', '41.78.78.26', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2298.0 Safari/537.36', 1423466873, '');
INSERT INTO `ci_sessions` VALUES('f2771d3b17621e46a471d8be3c78fb7a', '209.88.91.222', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:36.0) Gecko/20100101 Firefox/36.0', 1423466956, '');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `collection_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `collection_name` (`collection_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` VALUES(1, 'african_shirts');
INSERT INTO `collections` VALUES(5, 'dangarees');
INSERT INTO `collections` VALUES(2, 'dresses');
INSERT INTO `collections` VALUES(3, 'shorts');
INSERT INTO `collections` VALUES(4, 'skirts_and_tops');
INSERT INTO `collections` VALUES(6, 'Jewelery');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'customer',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` VALUES(1, 'steven', 'dumbura', '0777902073', 'stevedumbura@gmail.com', '12 dingwel drive, twinlakes park\r\nnorton, harare                            ', 'iamtheblaze93', 'customer');
INSERT INTO `customers` VALUES(2, 'simukai', 'whande', '+263773447311', 'simukaiwhande@yahoo.com', '1998 kuziva close \nnew malborugh\nharare\nzimbabwe                                                        ', 'Myfortune92', 'customer');
INSERT INTO `customers` VALUES(3, 'simukai', 'whande', '+263773447311', 'simukaiwhande@yahoo.com', '1998 kuziva close new malborough harare                                                        ', 'tanyaradzwa', 'customer');
INSERT INTO `customers` VALUES(4, 'anotida', 'whande', '+263773447311', 'swhande93@gmail.com', '                            6th floor batanai gardens harare', 'tanyaradzwa', 'customer');
INSERT INTO `customers` VALUES(5, 'pearl', 'mbazima', '+263771674719', 'pearl@smeaz.org.zw', '                            6th floor batanai gardens, 57 jason moyo avenue, harare', 'tmm290098', 'customer');
INSERT INTO `customers` VALUES(6, 's', 'w', '+263773447311', 'swhande93@gmail.com', 'were                            ', 'tanya', 'customer');
INSERT INTO `customers` VALUES(7, 'sandra ', 'mariga', '+263774068996', 'scmariga@gmail.com', '2385 dzidzai street cherutombo zbs marondera zimbabwe                            ', 'dnzlsan', 'customer');
INSERT INTO `customers` VALUES(8, 'adonis', 'rumbwere', '+263775462869', 'adonis.rumbwere@gmail.com', '                            4532 15th street glen view 3 harare', 'runyararowaenda', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `designers`
--

CREATE TABLE `designers` (
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

INSERT INTO `designers` VALUES(12, 'Lady_Cee_Kay', 'Lady Cee Kay', 'Cecelia', '', './uiux/img/stocks/designers/Lady Cee Kay/DSC_0488.JPG');
INSERT INTO `designers` VALUES(14, 'Tariro_The_Jeweler', 'Tariro The Jeweler', 'Tariro The Jeweler', '', './uiux/img/stocks/designers/Tariro_The_Jeweler/IMG-20141202-WA0000.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paynow`
--

CREATE TABLE `paynow` (
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

INSERT INTO `paynow` VALUES(38, '5c6bd8fa1304de096372101f6df48233611f2ad9', '', 25, '1 x 1 Skatter Skirt specifications: Size : medium Color : blue', '', 'Ok', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=e232c813-fd2b-45f5-89d6-7cb59bde5df6', '0', '2014-12-09', 'PayNow', '', 'https://www.paynow.co.zw/Payment/ConfirmPayment/9156');
INSERT INTO `paynow` VALUES(39, '47f1d48045b8cb5cc2004f982c7fcfd26526dbd7', '9170', 25, '1 x 1 Stretchy Dress Item Code: cee014 specifications: Size : small Color : brown', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=af96eb62-a083-4695-9d96-20339cb58b30', 'stevedumbura@gmail.com', '2014-12-09', 'PayNow', '2014-12-09', 'https://www.paynow.co.zw/Payment/ConfirmPayment/9170');
INSERT INTO `paynow` VALUES(40, '9a08ef02b7a1808746136e15a0fd5ee730f2bb6e', '9171', 25, '1 x 1 Stretchy Dress    Code: cee014 specifications: Size : small Color : brown', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=27f46e00-7d2f-4b0c-9b81-d56f22a3c40d', 'stevedumbura@gmail.com', '2014-12-09', 'PayNow', '2014-12-09', 'https://www.paynow.co.zw/Payment/ConfirmPayment/9171');
INSERT INTO `paynow` VALUES(41, '86f1aef49b3e2ee9824d55dd2780a8fb636e3d18', '9173', 25, '1 x 1 Stretchy Dress Code: cee014 specifications: Size : 18', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=c26beac3-9914-4dc2-9541-601a5a726d5a', 'stevedumbura@gmail.com', '2014-12-09', 'PayNow', '2014-12-09', 'https://www.paynow.co.zw/Payment/ConfirmPayment/9173');
INSERT INTO `paynow` VALUES(42, '8c84e6f4a330ba6cf5c6872c398a1333f74dc8ff', '9220', 45, '1 x 1 Peplum top and pencil skirt Code: cee018 specifications: Size : 18', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=dca02ec0-65a9-4a8a-9766-ab8da78d6a09', 'stevedumbura@gmail.com', '2014-12-10', 'PayNow', '2014-12-10', 'https://www.paynow.co.zw/Payment/ConfirmPayment/9220');
INSERT INTO `paynow` VALUES(43, '836adc91cd571485e8487f61695ea1de0ff23088', '9248', 12, '1 x 1 mixed beaded neck pieces for men Code: tr03 specifications: Size : 18', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=c0e252b4-af0f-4b7d-b58a-de39590a2f0a', 'stevedumbura@gmail.com', '2014-12-10', 'PayNow', '2014-12-10', 'https://www.paynow.co.zw/Payment/ConfirmPayment/9248');
INSERT INTO `paynow` VALUES(44, '585886f6fd65ac8207a95cefd1b3912620f49224', '9249', 12, '1 x 1 mixed beaded neck pieces for men Code: tr03 specifications: Size : 18', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=c3b7db92-7563-40ee-9025-cb5e624f9a13', 'stevedumbura@gmail.com', '2014-12-10', 'PayNow', '2014-12-10', 'https://www.paynow.co.zw/Payment/ConfirmPayment/9249');
INSERT INTO `paynow` VALUES(45, '69a6a081ebd879716fe53070d84788037343bfe2', '10410', 25, '1 x 1 Skatter Skirt Code: cee21 specifications: Size : 22', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=d93aca01-a214-4027-a673-2a3bcde073f7', 'stevedumbura@gmail.com', '2015-01-15', 'PayNow', '2015-01-15', 'https://www.paynow.co.zw/Payment/ConfirmPayment/10410');
INSERT INTO `paynow` VALUES(46, 'c41c2796383dae1fd537eabda3c41bcb16ad4a2b', '10742', 25, '1 x 1 Skatter Skirt Code: cee21 specifications: Size : 18', '', 'Cancelled', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=fea439a3-f652-491a-8671-90061d71bb3a', 'stevedumbura@gmail.com', '2015-01-18', 'PayNow', '2015-01-18', 'https://www.paynow.co.zw/Payment/ConfirmPayment/10742');
INSERT INTO `paynow` VALUES(47, 'aaf2b7449f09b8458d918e1ab4b2e0f578735ea3', '', 25, '1 x 1 Maxxi Dress Code: cee012 specifications: Size : 18', '', 'Ok', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=1f14335a-2dbe-44dc-810b-4d24af269f47', 'stevedumbura@gmail.com', '2015-01-18', 'PayNow', '', 'https://www.paynow.co.zw/Payment/ConfirmPayment/10743');
INSERT INTO `paynow` VALUES(48, 'dca92cd16376dd985179ebb2a612bb80beaa394f', '', 30, '1 x 1 African Shirt Code: cee002 specifications: Size : 18', '', 'Ok', 'https://www.paynow.co.zw/Interface/CheckPayment/?guid=d7f78c96-f615-4cc2-8905-6c6ee7b539a1', 'stevedumbura@gmail.com', '2015-02-02', 'PayNow', '', 'https://www.paynow.co.zw/Payment/ConfirmPayment/11567');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
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

INSERT INTO `stocks` VALUES(1, 'cee001', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee001/African_Shirt_35.jpg', '35', '0', '0', 'Lady_Cee_Kay', 1, 'African Shirt', 'african_shirts', '      ');
INSERT INTO `stocks` VALUES(2, 'cee002', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee002/African_Shirt_30.JPG', '30', '0', '0', 'Lady_Cee_Kay', 1, 'African Shirt', 'african_shirts', '      ');
INSERT INTO `stocks` VALUES(3, 'cee003', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee003/African_Shirt_30.JPG', '30', '0', '0', 'Lady_Cee_Kay', 1, 'African Shirt', 'african_shirts', '      ');
INSERT INTO `stocks` VALUES(4, 'cee004', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee004/DSC_0472.JPG', '25', '0', '0', 'Lady_Cee_Kay', 1, 'African Shirt', 'african_shirts', '      ');
INSERT INTO `stocks` VALUES(5, 'cee005', './uiux/img/stocks/designers/Lady Cee Kay/Dangaree/cee005/DSC_0477.JPG', '30', '0', '0', 'Lady_Cee_Kay', 0, 'Dangaree', 'dangarees', '      ');
INSERT INTO `stocks` VALUES(6, 'cee006', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee006/African_Dress_45.JPG', '45', '0', '0', 'Lady_Cee_Kay', 0, 'African Dress', 'dresses', '      ');
INSERT INTO `stocks` VALUES(7, 'cee007', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee007/African_Dress_with_Chiffon_top_45.JPG', '45', '0', '0', 'Lady_Cee_Kay', 0, 'African Dress', 'dresses', '      ');
INSERT INTO `stocks` VALUES(8, 'cee008', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee008/African_Outfit_45.jpg', '45', '0', '0', 'Lady_Cee_Kay', 0, 'African Outfit', 'dresses', '      ');
INSERT INTO `stocks` VALUES(10, 'cee009', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee009/DSC_0378.jpg', '30', '0', '0', 'Lady_Cee_Kay', 0, 'Cocktail Dress', 'dresses', '      ');
INSERT INTO `stocks` VALUES(11, 'cee010', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee010/Dashik_Dress_45.jpg', '45', '0', '0', 'Lady_Cee_Kay', 0, 'Dashik Dress', 'dresses', '      ');
INSERT INTO `stocks` VALUES(12, 'cee011', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee011/DSC_0412.JPG', '45', '0', '0', 'Lady_Cee_Kay', 0, 'Dashiki Dress', 'dresses', '      ');
INSERT INTO `stocks` VALUES(13, 'cee012', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee012/DSC_0433.JPG', '25', '0', '0', 'Lady_Cee_Kay', 0, 'Maxxi Dress', 'dresses', '      ');
INSERT INTO `stocks` VALUES(14, 'cee013', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee013/DSC_0401.JPG', '25', '0', '0', 'Lady_Cee_Kay', 0, 'African Shorts', 'shorts', '      ');
INSERT INTO `stocks` VALUES(15, 'cee014', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/DSC_0426.JPG', '25', '0', '0', 'Lady_Cee_Kay', 0, 'Stretchy Dress', 'dresses', '      ');
INSERT INTO `stocks` VALUES(16, 'cee015', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee015/Chiffon_Top20.jpg', '20', '0', '0', 'Lady_Cee_Kay', 0, 'Chiffon Top', 'skirts_and_tops', '      ');
INSERT INTO `stocks` VALUES(17, 'cee016', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee016/Peplum_top_25.JPG', '25', '0', '0', 'Lady_Cee_Kay', 0, 'Peplum Top', 'skirts_and_tops', '      ');
INSERT INTO `stocks` VALUES(18, 'cee017', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee017/DSC_0445.JPG', '25', '0', '0', 'Lady_Cee_Kay', 0, 'Peplum Top', 'skirts_and_tops', '      ');
INSERT INTO `stocks` VALUES(19, 'cee018', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee018/Peplum_top_and_pensil_skirt_45.jpg', '45', '0', '0', 'Lady_Cee_Kay', 0, 'Peplum top and pencil skirt', 'skirts_and_tops', '      ');
INSERT INTO `stocks` VALUES(20, 'cee019', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee019/DSC_0402.JPG', '40', '0', '0', 'Lady_Cee_Kay', 0, 'Shatter skirt and Croptop', 'skirts_and_tops', '      ');
INSERT INTO `stocks` VALUES(21, 'cee020', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee020/Skatter_Skirt_25.jpg', '25', '0', '0', 'Lady_Cee_Kay', 0, 'Skatter Skirt', 'skirts_and_tops', '      ');
INSERT INTO `stocks` VALUES(22, 'cee21', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee21/Skatter_Skirt_25_(2).jpg', '25', '0', '0', 'Lady_Cee_Kay', 0, 'Skatter Skirt', 'skirts_and_tops', '      ');
INSERT INTO `stocks` VALUES(23, 'cee22', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee22/DSC_0384.JPG', '35', '0', '0', 'Lady_Cee_Kay', 0, 'Skatter Skirt and Crop Top', 'skirts_and_tops', '      ');
INSERT INTO `stocks` VALUES(24, 'cee23', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee23/African_Shorts_25.jpg', '25', '0', '0', 'Lady_Cee_Kay', 0, 'African Shorts', 'shorts', '      ');
INSERT INTO `stocks` VALUES(25, 'tr01', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr01/IMG-20141202-WA0003.jpg', '8', '0', '0', 'Tariro_The_Jeweler', 0, 'crystal beaded neckpiece', 'Jewelery', '      ');
INSERT INTO `stocks` VALUES(27, 'tr02', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', '5', '0', '0', 'Tariro_The_Jeweler', 0, 'faux pearl beaded necklace', 'Jewelery', '      ');
INSERT INTO `stocks` VALUES(28, 'tr03', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr03/IMG-20141202-WA0001.jpg', '12', '0', '0', 'Tariro_The_Jeweler', 0, 'mixed beaded neck pieces for men', 'Jewelery', '      ');

-- --------------------------------------------------------

--
-- Table structure for table `stock_images`
--

CREATE TABLE `stock_images` (
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

INSERT INTO `stock_images` VALUES(1, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee001/DSC_0459.JPG', 'cee001');
INSERT INTO `stock_images` VALUES(2, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee001/DSC_0460.JPG', 'cee001');
INSERT INTO `stock_images` VALUES(3, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee001/DSC_0463.JPG', 'cee001');
INSERT INTO `stock_images` VALUES(4, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee002/DSC_0452.JPG', 'cee002');
INSERT INTO `stock_images` VALUES(5, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee002/DSC_0457.JPG', 'cee002');
INSERT INTO `stock_images` VALUES(6, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee002/DSC_0458.JPG', 'cee002');
INSERT INTO `stock_images` VALUES(7, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee003/DSC_0451.JPG', 'cee003');
INSERT INTO `stock_images` VALUES(8, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee003/DSC_0448.JPG', 'cee003');
INSERT INTO `stock_images` VALUES(9, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee003/African_Shirt_30.JPG', 'cee003');
INSERT INTO `stock_images` VALUES(10, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee004/African_Shirt_25.JPG', 'cee004');
INSERT INTO `stock_images` VALUES(11, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee004/DSC_0464.JPG', 'cee004');
INSERT INTO `stock_images` VALUES(12, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee004/DSC_0473.JPG', 'cee004');
INSERT INTO `stock_images` VALUES(13, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/African Shirts/cee004/DSC_0469.JPG', 'cee004');
INSERT INTO `stock_images` VALUES(14, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dangaree/cee005/Dangaree_30.JPG', 'cee005');
INSERT INTO `stock_images` VALUES(15, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dangaree/cee005/DSC_0478.JPG', 'cee005');
INSERT INTO `stock_images` VALUES(16, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dangaree/cee005/DSC_0480.JPG', 'cee005');
INSERT INTO `stock_images` VALUES(17, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dangaree/cee005/DSC_0488.JPG', 'cee005');
INSERT INTO `stock_images` VALUES(18, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee006/African_Dress_45.JPG', 'cee006');
INSERT INTO `stock_images` VALUES(19, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee006/DSC_0389.JPG', 'cee006');
INSERT INTO `stock_images` VALUES(20, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee006/African_Dress_45.JPG', 'cee006');
INSERT INTO `stock_images` VALUES(21, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee007/DSC_0391.JPG', 'cee007');
INSERT INTO `stock_images` VALUES(22, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee007/African_Dress_with_Chiffon_top_45.JPG', 'cee007');
INSERT INTO `stock_images` VALUES(23, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee007/DSC_0391.JPG', 'cee007');
INSERT INTO `stock_images` VALUES(24, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee008/African_Outfit_45.jpg', 'cee008');
INSERT INTO `stock_images` VALUES(25, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee008/African_Outfit_45.jpg', 'cee008');
INSERT INTO `stock_images` VALUES(26, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee008/African_Outfit_45.jpg', 'cee008');
INSERT INTO `stock_images` VALUES(27, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee009/Cocktail_Dress_30.JPG', 'cee009');
INSERT INTO `stock_images` VALUES(28, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee009/DSC_0374.JPG', 'cee009');
INSERT INTO `stock_images` VALUES(29, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee009/DSC_0375.jpg', 'cee009');
INSERT INTO `stock_images` VALUES(30, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee009/DSC_0377.JPG', 'cee009');
INSERT INTO `stock_images` VALUES(31, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee010/DSC_0353.JPG', 'cee010');
INSERT INTO `stock_images` VALUES(32, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee010/Dashik_Dress_45.jpg', 'cee010');
INSERT INTO `stock_images` VALUES(33, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee010/DSC_0353.JPG', 'cee010');
INSERT INTO `stock_images` VALUES(34, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee011/Dashiki_Dress45.JPG', 'cee011');
INSERT INTO `stock_images` VALUES(35, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee011/DSC_0410.JPG', 'cee011');
INSERT INTO `stock_images` VALUES(36, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee011/DSC_0414.JPG', 'cee011');
INSERT INTO `stock_images` VALUES(37, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee012/DSC_0431.JPG', 'cee012');
INSERT INTO `stock_images` VALUES(38, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee012/Maxxi_Dress_25.jpg', 'cee012');
INSERT INTO `stock_images` VALUES(39, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee012/DSC_0434.JPG', 'cee012');
INSERT INTO `stock_images` VALUES(40, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee012/DSC_0436.JPG', 'cee012');
INSERT INTO `stock_images` VALUES(41, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee012/DSC_0437.JPG', 'cee012');
INSERT INTO `stock_images` VALUES(42, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee013/DSC_0393.JPG', 'cee013');
INSERT INTO `stock_images` VALUES(43, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee013/DSC_0394.jpg', 'cee013');
INSERT INTO `stock_images` VALUES(44, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee013/DSC_0395.JPG', 'cee013');
INSERT INTO `stock_images` VALUES(45, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee013/African_Shorts25.JPG', 'cee013');
INSERT INTO `stock_images` VALUES(46, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/DSC_0423.JPG', 'cee014');
INSERT INTO `stock_images` VALUES(47, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/DSC_0425.JPG', 'cee014');
INSERT INTO `stock_images` VALUES(48, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/DSC_0426.JPG', 'cee014');
INSERT INTO `stock_images` VALUES(49, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/DSC_0428.JPG', 'cee014');
INSERT INTO `stock_images` VALUES(50, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/DSC_0429.JPG', 'cee014');
INSERT INTO `stock_images` VALUES(51, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/DSC_0430.JPG', 'cee014');
INSERT INTO `stock_images` VALUES(52, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Dresses/cee014/Stretchy_Dress_25.jpg', 'cee014');
INSERT INTO `stock_images` VALUES(53, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee015/Chiffon_Top.JPG', 'cee015');
INSERT INTO `stock_images` VALUES(54, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee015/DSC_0416.JPG', 'cee015');
INSERT INTO `stock_images` VALUES(55, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee015/DSC_0417.JPG', 'cee015');
INSERT INTO `stock_images` VALUES(56, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee015/DSC_0418.JPG', 'cee015');
INSERT INTO `stock_images` VALUES(57, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee015/DSC_0420.JPG', 'cee015');
INSERT INTO `stock_images` VALUES(58, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee016/DSC_0354.JPG', 'cee016');
INSERT INTO `stock_images` VALUES(59, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee016/DSC_0356.JPG', 'cee016');
INSERT INTO `stock_images` VALUES(60, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee016/DSC_0357.JPG', 'cee016');
INSERT INTO `stock_images` VALUES(61, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee017/Peplum_top_25_(2).JPG', 'cee017');
INSERT INTO `stock_images` VALUES(62, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee017/DSC_0446.jpg', 'cee017');
INSERT INTO `stock_images` VALUES(63, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee017/DSC_0444.JPG', 'cee017');
INSERT INTO `stock_images` VALUES(64, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee017/DSC_0438.jpg', 'cee017');
INSERT INTO `stock_images` VALUES(65, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee018/DSC_0338.jpg', 'cee018');
INSERT INTO `stock_images` VALUES(66, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee018/DSC_0339.JPG', 'cee018');
INSERT INTO `stock_images` VALUES(67, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee018/DSC_0340.JPG', 'cee018');
INSERT INTO `stock_images` VALUES(68, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee018/DSC_0342.JPG', 'cee018');
INSERT INTO `stock_images` VALUES(69, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee019/DSC_0404.JPG', 'cee019');
INSERT INTO `stock_images` VALUES(70, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee019/DSC_0406.JPG', 'cee019');
INSERT INTO `stock_images` VALUES(71, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee019/DSC_0407.JPG', 'cee019');
INSERT INTO `stock_images` VALUES(72, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee019/Shatter_skirt_and_croptop_40.JPG', 'cee019');
INSERT INTO `stock_images` VALUES(73, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee020/DSC_0329.JPG', 'cee020');
INSERT INTO `stock_images` VALUES(74, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee020/DSC_0332.JPG', 'cee020');
INSERT INTO `stock_images` VALUES(75, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee020/DSC_0333.JPG', 'cee020');
INSERT INTO `stock_images` VALUES(76, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee020/DSC_0335.JPG', 'cee020');
INSERT INTO `stock_images` VALUES(77, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee020/DSC_0336.JPG', 'cee020');
INSERT INTO `stock_images` VALUES(78, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee020/DSC_0337.JPG', 'cee020');
INSERT INTO `stock_images` VALUES(79, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee21/DSC_0344.jpg', 'cee21');
INSERT INTO `stock_images` VALUES(80, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee21/DSC_0345.JPG', 'cee21');
INSERT INTO `stock_images` VALUES(81, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee21/DSC_0349.JPG', 'cee21');
INSERT INTO `stock_images` VALUES(82, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee21/DSC_0351.jpg', 'cee21');
INSERT INTO `stock_images` VALUES(83, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee22/Skatter_Skirt_and_crop_top_35.JPG', 'cee22');
INSERT INTO `stock_images` VALUES(84, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee22/hs.jpg', 'cee22');
INSERT INTO `stock_images` VALUES(85, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Skirts and Tops/cee22/DSC_0387.jpg', 'cee22');
INSERT INTO `stock_images` VALUES(86, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee23/DSC_0358.JPG', 'cee23');
INSERT INTO `stock_images` VALUES(87, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee23/DSC_0363.JPG', 'cee23');
INSERT INTO `stock_images` VALUES(88, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee23/DSC_0364.JPG', 'cee23');
INSERT INTO `stock_images` VALUES(89, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee23/DSC_0365.jpg', 'cee23');
INSERT INTO `stock_images` VALUES(90, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee23/DSC_0366.JPG', 'cee23');
INSERT INTO `stock_images` VALUES(91, 'Lady_Cee_Kay', './uiux/img/stocks/designers/Lady Cee Kay/Shorts/cee23/DSC_0367.JPG', 'cee23');
INSERT INTO `stock_images` VALUES(92, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr01/IMG-20141202-WA0003.jpg', 'tr01');
INSERT INTO `stock_images` VALUES(93, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr01/IMG-20141202-WA0003.jpg', 'tr01');
INSERT INTO `stock_images` VALUES(94, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr01/IMG-20141202-WA0003.jpg', 'tr01');
INSERT INTO `stock_images` VALUES(95, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr01/IMG-20141202-WA0003.jpg', 'tr01');
INSERT INTO `stock_images` VALUES(96, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02');
INSERT INTO `stock_images` VALUES(97, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02');
INSERT INTO `stock_images` VALUES(98, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02');
INSERT INTO `stock_images` VALUES(99, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02');
INSERT INTO `stock_images` VALUES(100, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02');
INSERT INTO `stock_images` VALUES(101, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02');
INSERT INTO `stock_images` VALUES(102, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02');
INSERT INTO `stock_images` VALUES(103, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr02/IMG-20141202-WA0002.jpg', 'tr02');
INSERT INTO `stock_images` VALUES(104, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr03/IMG-20141202-WA0001.jpg', 'tr03');
INSERT INTO `stock_images` VALUES(105, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr03/IMG-20141202-WA0001.jpg', 'tr03');
INSERT INTO `stock_images` VALUES(106, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr03/IMG-20141202-WA0001.jpg', 'tr03');
INSERT INTO `stock_images` VALUES(107, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr03/IMG-20141202-WA0001.jpg', 'tr03');
INSERT INTO `stock_images` VALUES(108, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr04/IMG-20141202-WA0001.jpg', 'tr04');
INSERT INTO `stock_images` VALUES(109, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr04/IMG-20141202-WA0001.jpg', 'tr04');
INSERT INTO `stock_images` VALUES(110, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr04/IMG-20141202-WA0001.jpg', 'tr04');
INSERT INTO `stock_images` VALUES(111, 'Tariro_The_Jeweler', './uiux/img/stocks/designers/Tariro_The_Jeweler/Jewelery/tr04/IMG-20141202-WA0001.jpg', 'tr04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
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

INSERT INTO `users` VALUES(1, '0777902073', 'stevedumbura@gmail.com', 'password', 'admin');
