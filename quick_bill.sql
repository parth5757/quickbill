-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 11:07 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quick_bill`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_master`
--

CREATE TABLE `area_master` (
  `area_id` int(11) NOT NULL COMMENT 'id of any area',
  `area_name` varchar(50) NOT NULL COMMENT 'name of any area',
  `area_code` varchar(255) NOT NULL COMMENT 'code of area',
  `city_name` varchar(255) NOT NULL COMMENT 'id of any city'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_master`
--

INSERT INTO `area_master` (`area_id`, `area_name`, `area_code`, `city_name`) VALUES
(2, 'narol', 'na', '18'),
(3, 'tower', 'to', '16'),
(4, 'vasana', 'vas', '18');

-- --------------------------------------------------------

--
-- Table structure for table `booking_master`
--

CREATE TABLE `booking_master` (
  `booking_id` int(11) NOT NULL COMMENT 'booking_id of product booking',
  `user_id` int(11) NOT NULL COMMENT 'user_id of user',
  `product_id` int(11) NOT NULL COMMENT 'product_id product',
  `Amount` int(11) NOT NULL COMMENT 'amount of product',
  `payment_method` varchar(150) NOT NULL COMMENT 'Payment_method (1: cash on delivery; 2:net banking; 3: cheque)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE `city_master` (
  `city_id` int(11) NOT NULL COMMENT 'id of city',
  `city_name` varchar(255) NOT NULL COMMENT 'name of city',
  `state_name` varchar(255) NOT NULL COMMENT 'name of state',
  `city_code` varchar(255) NOT NULL COMMENT 'code of city'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_master`
--

INSERT INTO `city_master` (`city_id`, `city_name`, `state_name`, `city_code`) VALUES
(4, 'jamnagar', '14', 'jam'),
(16, 'bavla', '14', 'bav'),
(18, 'ahmedabad', '14', 'AHM'),
(19, 'rajkot', '14', 'raj');

-- --------------------------------------------------------

--
-- Table structure for table `contact_master`
--

CREATE TABLE `contact_master` (
  `contact_id` int(11) NOT NULL COMMENT 'id of contact',
  `user_name` varchar(255) NOT NULL COMMENT 'name of user',
  `user_email` varchar(255) NOT NULL COMMENT 'email id of user',
  `comment` text NOT NULL COMMENT 'comment of user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country_master`
--

CREATE TABLE `country_master` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country_master`
--

INSERT INTO `country_master` (`id`, `sortname`, `name`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Republic Of The Congo', 242),
(50, 'CD', 'Democratic Republic Of The Congo', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_master`
--

CREATE TABLE `feedback_master` (
  `feedback_id` int(11) NOT NULL COMMENT 'feedback_id of user',
  `subject` varchar(150) NOT NULL COMMENT 'subject of feedback',
  `message` text NOT NULL COMMENT 'Massage of feedback',
  `user_name` varchar(150) NOT NULL COMMENT 'name of user',
  `user_email` varchar(150) NOT NULL COMMENT 'email_id of user',
  `created_date` timestamp NULL DEFAULT current_timestamp() COMMENT 'created date',
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'modified date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_master`
--

CREATE TABLE `invoice_master` (
  `Invoice_id` int(11) NOT NULL COMMENT 'Invice_id ',
  `user_id` int(11) NOT NULL COMMENT 'User_id of user',
  `payment_id` int(11) NOT NULL COMMENT 'payment_id of user',
  `Tax` varchar(150) NOT NULL COMMENT 'Applied Tax',
  `Amount` int(11) NOT NULL COMMENT 'Total payment'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main_order`
--

CREATE TABLE `main_order` (
  `main_order_id` int(11) NOT NULL,
  `total_order_amount` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'modified date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_order`
--

INSERT INTO `main_order` (`main_order_id`, `total_order_amount`, `user_id`, `payment_type`, `created_on`, `modified_date`) VALUES
(1, '720', 11, '1', '2020-03-21', '2020-03-23 05:46:41'),
(17, '550', 26, '1', '2020-05-21', '2020-05-21 09:17:23'),
(18, '400', 22, '1', '2020-05-27', '2020-05-27 18:10:18'),
(19, '1532', 22, '1', '2020-06-21', '2020-06-21 06:57:19');

-- --------------------------------------------------------

--
-- Table structure for table `main_purchase`
--

CREATE TABLE `main_purchase` (
  `main_purchase_id` int(11) NOT NULL,
  `total_order_amount` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_purchase`
--

INSERT INTO `main_purchase` (`main_purchase_id`, `total_order_amount`, `payment_type`, `created_on`) VALUES
(1, '720', '1', '2020-03-21 08:39:03'),
(2, '9000', '1', '2020-03-21 08:39:40'),
(3, '789', '1', '2020-04-19 07:43:05'),
(4, '230', '3', '2020-04-29 06:16:04'),
(5, '90', '3', '2020-05-10 09:12:09'),
(6, '2866', '3', '2020-06-21 06:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `order_id` int(11) NOT NULL COMMENT 'pk  of table',
  `user_id` int(11) NOT NULL COMMENT 'user_id references user_master',
  `main_order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL COMMENT 'product_id references product_master',
  `quantity` int(11) NOT NULL COMMENT 'total quantity purchases',
  `qty_type` int(11) NOT NULL COMMENT '1: piece, 2: box, 3:cartoon',
  `price` int(11) NOT NULL COMMENT 'price of product',
  `total_amount` varchar(25) NOT NULL COMMENT 'total amount of order',
  `payment_type` int(11) NOT NULL COMMENT 'payment_id references from payment_master',
  `tax` varchar(150) NOT NULL COMMENT 'Tax of order',
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_master_old`
--

CREATE TABLE `order_master_old` (
  `order_id` int(11) NOT NULL COMMENT 'order_id of user',
  `main_order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'id of user',
  `user_name` varchar(150) NOT NULL COMMENT 'name of user',
  `purchess_id` int(11) NOT NULL COMMENT 'purchess_id refernces from th purchess_master',
  `product_category_name` varchar(150) NOT NULL COMMENT 'name of product_category',
  `product_id` int(11) NOT NULL COMMENT 'id of product',
  `product_name` varchar(150) NOT NULL COMMENT 'name of product',
  `quantity` varchar(150) NOT NULL COMMENT 'Quantity item of product',
  `price` varchar(150) NOT NULL COMMENT 'List all product price of order',
  `disscount` varchar(150) NOT NULL COMMENT 'total discount of all product ',
  `payment_type` varchar(255) NOT NULL,
  `user_address` varchar(150) NOT NULL COMMENT 'address of user',
  `user_phone_number` int(11) NOT NULL COMMENT 'phone no of user',
  `created_date` date NOT NULL DEFAULT current_timestamp() COMMENT 'date of bill create',
  `modified_date` date NOT NULL DEFAULT current_timestamp() COMMENT 'modifed date of bill'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_master_old`
--

INSERT INTO `order_master_old` (`order_id`, `main_order_id`, `user_id`, `user_name`, `purchess_id`, `product_category_name`, `product_id`, `product_name`, `quantity`, `price`, `disscount`, `payment_type`, `user_address`, `user_phone_number`, `created_date`, `modified_date`) VALUES
(16, 0, 11, '', 0, '', 16, '', '1', '320', '1', 'check', 'rajkot', 0, '2020-03-11', '2020-03-11'),
(17, 0, 11, '', 0, '', 16, '', '1', '320', '1', 'cash', '', 0, '2020-03-17', '2020-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `payment_master`
--

CREATE TABLE `payment_master` (
  `Payment_id` int(11) NOT NULL COMMENT 'Payment _id of user',
  `USer_id` int(11) NOT NULL COMMENT 'User id references user master',
  `Payment_method` varchar(150) NOT NULL COMMENT 'Payment method references booking master',
  `payment_date` date NOT NULL COMMENT 'Payment on date',
  `Total amount` int(11) NOT NULL COMMENT 'Total amount payment'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_master`
--

INSERT INTO `payment_master` (`Payment_id`, `USer_id`, `Payment_method`, `payment_date`, `Total amount`) VALUES
(1, 0, 'cash', '2020-03-11', 0),
(2, 0, 'check', '2020-03-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_category_master`
--

CREATE TABLE `product_category_master` (
  `product_category_id` int(5) NOT NULL COMMENT 'Category id of product',
  `category_name` varchar(150) NOT NULL COMMENT 'category name of product',
  `category_description` text NOT NULL COMMENT 'category description'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category_master`
--

INSERT INTO `product_category_master` (`product_category_id`, `category_name`, `category_description`) VALUES
(5, 'choclate', 'sweet item'),
(7, 'biscuit', 'All type of biscuits'),
(9, 'ice cream', 'sweet '),
(18, 'chips', 'namkeen'),
(19, 'hair oil', 'beauty item'),
(20, 'soap', 'bgmvc,vxd;l');

-- --------------------------------------------------------

--
-- Table structure for table `product_master`
--

CREATE TABLE `product_master` (
  `product_id` int(11) NOT NULL COMMENT 'product_id of table',
  `product_name` varchar(150) NOT NULL COMMENT 'name of product',
  `product_category_id` int(11) NOT NULL COMMENT 'id of product category',
  `product_price` int(11) NOT NULL COMMENT 'price of product',
  `quntity` varchar(150) NOT NULL COMMENT 'Quantity item of order',
  `product_description` varchar(150) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `modified_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`product_id`, `product_name`, `product_category_id`, `product_price`, `quntity`, `product_description`, `created_date`, `modified_date`) VALUES
(15, 'perk', 5, 230, '12', 'choclate biscuit', '2020-04-23', '2020-04-23'),
(24, 'dairy milk', 5, 320, '1', 'sweet item', '2020-04-23', '2020-04-23'),
(25, 'oreo', 5, 108, '1', 'biscuit', '2020-04-23', '2020-04-23'),
(26, 'bvb', 5, 108, '12', 'fcb dx', '2020-04-23', '2020-04-23'),
(28, 'hair care', 19, 53, '1', 'hair oil', '2020-04-23', '2020-04-23'),
(29, 'santi ambla rs 20', 19, 200, '12', 'hair oil', '2020-04-23', '2020-04-23'),
(30, '5 star', 5, 240, '1', 'gdvfc', '2020-04-23', '2020-04-23'),
(31, 'bvb 5rs', 5, 105, '12', 'bfhgcjivdof', '2020-04-23', '2020-04-23'),
(32, 'yy 10rs', 18, 90, '10', 'gdnmfxgvridk ', '2020-04-27', '2020-04-27'),
(33, 'gems', 5, 380, '1', 'choclate biscuit', '2020-05-21', '2020-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `purchases_master`
--

CREATE TABLE `purchases_master` (
  `purchases_id` int(11) NOT NULL COMMENT 'pk  of table',
  `user_id` int(11) NOT NULL COMMENT 'user_id references user_master',
  `main_purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL COMMENT 'product_id references product_master',
  `quantity` int(11) NOT NULL COMMENT 'total quantity purchases',
  `qty_type` int(11) NOT NULL COMMENT '1: piece, 2: box, 3:cartoon',
  `price` int(11) NOT NULL COMMENT 'price of product',
  `total_amount` varchar(25) NOT NULL COMMENT 'total amount of order',
  `payment_type` int(11) NOT NULL COMMENT 'payment_id references from payment_master',
  `tax` varchar(150) NOT NULL COMMENT 'Tax of order',
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases_master`
--

INSERT INTO `purchases_master` (`purchases_id`, `user_id`, `main_purchase_id`, `product_id`, `quantity`, `qty_type`, `price`, `total_amount`, `payment_type`, `tax`, `created_date`, `modified_date`) VALUES
(1, 11, 1, 15, 2, 2, 310, '720', 3, '', '2020-03-21', '2020-03-21 08:39:03'),
(2, 11, 1, 25, 2, 2, 205, '720', 3, '', '2020-03-21', '2020-03-21 08:39:03'),
(3, 11, 2, 24, 2, 2, 4500, '9000', 3, '', '2020-03-21', '2020-03-21 08:39:40'),
(4, 30, 3, 29, 1, 2, 200, '789', 1, '', '2020-04-19', '2020-04-19 07:43:05'),
(5, 30, 3, 28, 1, 2, 53, '789', 1, '', '2020-04-19', '2020-04-19 07:43:05'),
(6, 30, 3, 25, 2, 2, 108, '789', 1, '', '2020-04-19', '2020-04-19 07:43:05'),
(7, 30, 3, 24, 1, 2, 320, '789', 1, '', '2020-04-19', '2020-04-19 07:43:05'),
(8, 36, 4, 15, 1, 2, 230, '230', 3, '', '2020-04-29', '2020-04-29 06:16:04'),
(9, 31, 5, 32, 1, 2, 90, '90', 3, '', '2020-05-10', '2020-05-10 09:12:09'),
(10, 11, 6, 24, 2, 2, 320, '2866', 3, '', '2020-06-21', '2020-06-21 06:56:03'),
(11, 11, 6, 15, 2, 2, 230, '2866', 3, '', '2020-06-21', '2020-06-21 06:56:03'),
(12, 11, 6, 33, 2, 2, 380, '2866', 3, '', '2020-06-21', '2020-06-21 06:56:03'),
(13, 11, 6, 32, 2, 2, 90, '2866', 3, '', '2020-06-21', '2020-06-21 06:56:03'),
(14, 11, 6, 31, 2, 2, 105, '2866', 3, '', '2020-06-21', '2020-06-21 06:56:03'),
(15, 11, 6, 29, 2, 2, 200, '2866', 3, '', '2020-06-21', '2020-06-21 06:56:03'),
(16, 11, 6, 25, 2, 2, 108, '2866', 3, '', '2020-06-21', '2020-06-21 06:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `social media_master`
--

CREATE TABLE `social media_master` (
  `social_media_id` int(11) NOT NULL COMMENT 'Social media platform name',
  `comment on product` varchar(150) NOT NULL COMMENT 'How many comments on product',
  `Like on product` int(11) NOT NULL COMMENT 'How many like on product',
  `View on product` int(11) NOT NULL COMMENT 'How many views on the product'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE `state_master` (
  `state_id` int(11) NOT NULL COMMENT 'state id',
  `country_name` varchar(255) NOT NULL COMMENT 'name of country',
  `state_name` varchar(255) NOT NULL,
  `state_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`state_id`, `country_name`, `state_name`, `state_code`) VALUES
(5, '1', 'goa', 'go'),
(14, '', 'gujarat', 'guj'),
(19, '', 'mahrastra', 'mah'),
(20, '', 'tamil nadu', 'tam'),
(21, '', 'dehali', 'de');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL COMMENT 'name of user',
  `user_email` varchar(50) DEFAULT NULL COMMENT 'email id of user',
  `user_phone_number` varchar(255) DEFAULT NULL COMMENT 'phone number of user',
  `birth_date` varchar(255) NOT NULL COMMENT 'birth date of user',
  `image` longblob DEFAULT NULL COMMENT 'pic of user',
  `user_type` int(50) DEFAULT NULL COMMENT 'Type of user  (1: Dealer 2: Distributer 3: Wholesaler/Retailer)',
  `organize_name` varchar(50) DEFAULT NULL COMMENT ' organize_name of user',
  `user_address` varchar(150) NOT NULL COMMENT 'address of user',
  `password` varchar(15) DEFAULT NULL COMMENT 'password of user',
  `city_id` int(11) DEFAULT NULL COMMENT 'id of city',
  `state_id` int(11) DEFAULT NULL COMMENT 'id of state',
  `country_id` int(11) DEFAULT NULL COMMENT 'id o country',
  `area_id` int(11) DEFAULT NULL COMMENT 'id of area',
  `gst_no` varchar(255) DEFAULT NULL COMMENT 'gst_no of user',
  `pan_no` varchar(255) DEFAULT NULL COMMENT 'pan no of user',
  `id_proof` varchar(255) DEFAULT NULL COMMENT 'id proof of user',
  `status_id` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT current_timestamp() COMMENT 'created date',
  `created_by` int(11) DEFAULT NULL COMMENT 'id of user',
  `modified_by` timestamp NULL DEFAULT current_timestamp() COMMENT 'modified date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`user_id`, `user_name`, `user_email`, `user_phone_number`, `birth_date`, `image`, `user_type`, `organize_name`, `user_address`, `password`, `city_id`, `state_id`, `country_id`, `area_id`, `gst_no`, `pan_no`, `id_proof`, `status_id`, `created_date`, `created_by`, `modified_by`) VALUES
(11, 'ritham', 'rp1@gmail.com', '1234567890', '1958-02-28', 0x3135393030353132373653637265656e73686f7420283132292e706e67, 0, 'abc', 'sarkhej', '', 0, 0, 0, NULL, '', '', '', 2, '2020-01-08 04:15:22', NULL, '2020-01-08 04:15:22'),
(18, 'parth', 'admin@gmail.com', '816083863', '2020-02-05', 0x3135393030353132373653637265656e73686f7420283132292e706e67, 2, 'dvdvxc', 'bavla', '123', 0, 0, 0, NULL, '', '', '', 2, '2020-02-05 08:00:30', NULL, '2020-02-05 08:00:30'),
(26, 'TEst', 'user@gmail.com', '9999999999', '1996-01-01', 0x3135393030353132373653637265656e73686f7420283132292e706e67, 3, 'test', 'test', '12345', 2, 1, 1, NULL, '123123131', NULL, NULL, 2, '2020-03-15 09:40:52', NULL, '2020-03-15 09:40:52'),
(28, 'kausal', 'kausal@gmail.com', '5446466476', '1991-07-02', 0x3135393030353132373653637265656e73686f7420283132292e706e67, 3, 'swaminaryan', 'dev arcade dholka', 'kausal123', 0, 14, 1, NULL, 'fdc54sz5e', NULL, NULL, 2, '2020-03-23 07:43:50', NULL, '2020-03-23 07:43:50'),
(31, 'TEst', 'dhruv22101@gmail.com', '8733828332', '2020-04-02', 0x3135393030353132373653637265656e73686f7420283132292e706e67, 1, 'test', 'near,Ambaji mata temple tanki valo khacho ,sanand', '', 0, 5, 0, NULL, 'vchntyghi', NULL, NULL, 2, '2020-04-27 05:53:15', NULL, '2020-04-27 05:53:15'),
(32, 'parth', 'dhruv545341976@gmail.com', '8733828332', '2020-04-01', 0x3135393030353132373653637265656e73686f7420283132292e706e67, 1, 'hgvhrbfc', 'near,Ambaji mata temple tanki valo khacho ,sanand', '', 0, 5, 0, NULL, '24635dxsz', NULL, NULL, 2, '2020-04-29 02:48:03', NULL, '2020-04-29 02:48:03'),
(36, 'Dhruv', 'dhruv545343435341976@gmail.com', '8733828332', '2020-04-01', 0x3135393030353132373653637265656e73686f7420283132292e706e67, 1, 'hgvhrbfc', 'near,Ambaji mata temple tanki valo khacho ,sanand', '', 0, 5, 0, NULL, '2463t3ssz', NULL, NULL, 2, '2020-04-29 02:56:41', NULL, '2020-04-29 02:56:41'),
(37, 'TEst', 'test1@gmail.com', '8454555555', '1999-03-05', 0x3135393030353132373653637265656e73686f7420283132292e706e67, 3, 'test', 'abx', '12345678', 0, 5, 1, NULL, '3ddw55sss', NULL, NULL, 2, '2020-05-21 08:54:35', NULL, '2020-05-21 08:54:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_master`
--
ALTER TABLE `area_master`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `booking_master`
--
ALTER TABLE `booking_master`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `city_master`
--
ALTER TABLE `city_master`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `contact_master`
--
ALTER TABLE `contact_master`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `country_master`
--
ALTER TABLE `country_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_master`
--
ALTER TABLE `feedback_master`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `invoice_master`
--
ALTER TABLE `invoice_master`
  ADD PRIMARY KEY (`Invoice_id`);

--
-- Indexes for table `main_order`
--
ALTER TABLE `main_order`
  ADD PRIMARY KEY (`main_order_id`);

--
-- Indexes for table `main_purchase`
--
ALTER TABLE `main_purchase`
  ADD PRIMARY KEY (`main_purchase_id`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_master_old`
--
ALTER TABLE `order_master_old`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment_master`
--
ALTER TABLE `payment_master`
  ADD PRIMARY KEY (`Payment_id`);

--
-- Indexes for table `product_category_master`
--
ALTER TABLE `product_category_master`
  ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `product_master`
--
ALTER TABLE `product_master`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchases_master`
--
ALTER TABLE `purchases_master`
  ADD PRIMARY KEY (`purchases_id`);

--
-- Indexes for table `social media_master`
--
ALTER TABLE `social media_master`
  ADD PRIMARY KEY (`social_media_id`);

--
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_master`
--
ALTER TABLE `area_master`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id of any area', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `city_master`
--
ALTER TABLE `city_master`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id of city', AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact_master`
--
ALTER TABLE `contact_master`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id of contact', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `country_master`
--
ALTER TABLE `country_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `feedback_master`
--
ALTER TABLE `feedback_master`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'feedback_id of user', AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `invoice_master`
--
ALTER TABLE `invoice_master`
  MODIFY `Invoice_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Invice_id ';

--
-- AUTO_INCREMENT for table `main_order`
--
ALTER TABLE `main_order`
  MODIFY `main_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `main_purchase`
--
ALTER TABLE `main_purchase`
  MODIFY `main_purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'pk  of table', AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `order_master_old`
--
ALTER TABLE `order_master_old`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'order_id of user', AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_category_master`
--
ALTER TABLE `product_category_master`
  MODIFY `product_category_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Category id of product', AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'product_id of table', AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `purchases_master`
--
ALTER TABLE `purchases_master`
  MODIFY `purchases_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'pk  of table', AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `state_master`
--
ALTER TABLE `state_master`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'state id', AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
