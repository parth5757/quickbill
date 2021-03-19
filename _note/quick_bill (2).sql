-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 09:28 AM
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
  `area_code` varchar(50) NOT NULL COMMENT 'code of any area',
  `area_name` varchar(50) NOT NULL COMMENT 'name of any area',
  `state_id` int(11) NOT NULL COMMENT 'id of any state',
  `country_id` int(11) NOT NULL COMMENT 'id of any country'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `city_id` int(11) NOT NULL COMMENT 'id of any city',
  `satte_id` int(11) NOT NULL COMMENT 'id of any state',
  `city_code` varchar(50) NOT NULL COMMENT 'code of any city',
  `city_name` varchar(50) NOT NULL COMMENT 'name of any city'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country_master`
--

CREATE TABLE `country_master` (
  `country_id` int(11) NOT NULL COMMENT 'id of any country',
  `country_name` varchar(150) NOT NULL COMMENT 'name of any country'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_master`
--

CREATE TABLE `feedback_master` (
  `feedback_id` int(11) NOT NULL COMMENT 'feedback_id of user',
  `subject` varchar(150) NOT NULL COMMENT 'subject of feedback',
  `message` text NOT NULL COMMENT 'Massage of feedback',
  `user_name` varchar(150) NOT NULL COMMENT 'name of user',
  `user_email` varchar(150) NOT NULL COMMENT 'email_id of user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_master`
--

INSERT INTO `feedback_master` (`feedback_id`, `subject`, `message`, `user_name`, `user_email`) VALUES
(1, 'frdxbvdx', 'yfg;xfzdxdukghfgf', '', 'psthakkar2@gmail.com'),
(2, 'frdxbvdx', 'fgrdkfckcAghkv;glv/c', '', 'psthakkar2@gmail.com'),
(3, 'tgdfhgfc', 'dyjhrtfgyjngfvc vcv x', '', 'lj@gmail.com'),
(5, 'frdxbvdx', 'ijkhuytrs', '', 'psthakkar@gmail.com'),
(6, 'dfb', 'ikyujtdra', '', 'dhruv22101976@gmail.com'),
(7, 'dfb', 'jdyhgdfd', '', 'psthakkar2@gmail.com'),
(8, 'test@123', 'hujfgd', '', 'dhruv22101976@gmail.com'),
(9, 'frdxbvdx', 'tky.fmtlre;wq', '', 'psthakkar2@gmail.com');

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
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `order_id` int(11) NOT NULL COMMENT 'order_id of user',
  `user_id` int(11) NOT NULL COMMENT 'id of user',
  `user_name` varchar(150) NOT NULL COMMENT 'name of user',
  `purchess_id` int(11) NOT NULL COMMENT 'purchess_id refernces from th purchess_master',
  `product_category_name` varchar(150) NOT NULL COMMENT 'name of product_category',
  `product_id` int(11) NOT NULL COMMENT 'id of product',
  `product_name` varchar(150) NOT NULL COMMENT 'name of product',
  `quantity` varchar(150) NOT NULL COMMENT 'Quantity item of product',
  `price` varchar(150) NOT NULL COMMENT 'List all product price of order',
  `disscount` varchar(150) NOT NULL COMMENT 'total discount of all product ',
  `user_address` varchar(150) NOT NULL COMMENT 'address of user',
  `user_phone_number` int(11) NOT NULL COMMENT 'phone no of user',
  `created_date` date NOT NULL DEFAULT current_timestamp() COMMENT 'date of bill create',
  `modified_date` date NOT NULL DEFAULT current_timestamp() COMMENT 'modifed date of bill'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`order_id`, `user_id`, `user_name`, `purchess_id`, `product_category_name`, `product_id`, `product_name`, `quantity`, `price`, `disscount`, `user_address`, `user_phone_number`, `created_date`, `modified_date`) VALUES
(12, 7, '', 0, '', 14, '', '1', '180', '2', '', 0, '2020-02-04', '2020-02-04'),
(13, 7, '', 0, '', 14, '', '55', '180', '2', '', 0, '2020-02-05', '2020-02-05'),
(14, 11, '', 0, '', 15, '', '1', '180', '2', '', 0, '2020-02-05', '2020-02-05');

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
(2, 'euyjghbv', 'i876tgbnm, '),
(5, 'ice cream', 'sweet'),
(6, 'ice cream', 'poiuygfdcx'),
(7, 'Biscuit', 'All type of biscuits');

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
  `product_description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_master`
--

INSERT INTO `product_master` (`product_id`, `product_name`, `product_category_id`, `product_price`, `quntity`, `product_description`) VALUES
(14, 'candy crush', 2, 310, '55', '65650utykvszesr'),
(15, 'oreo', 7, 105, '12', 'choclate biscuit');

-- --------------------------------------------------------

--
-- Table structure for table `purchases_master`
--

CREATE TABLE `purchases_master` (
  `purchases_id` int(11) NOT NULL COMMENT 'pk  of table',
  `user_id` int(11) NOT NULL COMMENT 'user_id references user_master',
  `product_id` int(11) NOT NULL COMMENT 'product_id references product_master',
  `Quntity` int(11) NOT NULL COMMENT 'total quantity purchases',
  `total amount` varchar(25) NOT NULL COMMENT 'total amount of order',
  `payment_id` int(11) NOT NULL COMMENT 'payment_id references from payment_master',
  `Tax` varchar(150) NOT NULL COMMENT 'Tax of order'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `state_id` int(11) NOT NULL COMMENT 'id of state',
  `country_id` int(11) NOT NULL COMMENT 'id of country',
  `state_code` varchar(50) NOT NULL COMMENT 'code of any state',
  `state_name` varchar(50) NOT NULL COMMENT 'name of any state'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL COMMENT 'name of user',
  `user_email` varchar(50) DEFAULT NULL COMMENT 'email id of user',
  `user_phone_number` varchar(255) DEFAULT NULL COMMENT 'phone number of user',
  `birth_date` varchar(255) DEFAULT NULL COMMENT 'birth date of user',
  `user_pic` varchar(255) DEFAULT NULL COMMENT 'pic of user',
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

INSERT INTO `user_registration` (`user_id`, `user_name`, `user_email`, `user_phone_number`, `birth_date`, `user_pic`, `user_type`, `organize_name`, `user_address`, `password`, `city_id`, `state_id`, `country_id`, `area_id`, `gst_no`, `pan_no`, `id_proof`, `status_id`, `created_date`, `created_by`, `modified_by`) VALUES
(7, 'ljpp', 'lj@gmail.com', '48484884', '2019-02-28', NULL, 1, 'lj ', 'bavla', '12345', 3, 1, 1, NULL, 'lj1lj2', 'ljljljlj', '58871541fdfed', 2, '2020-01-06 06:03:08', NULL, '2020-01-06 06:03:08'),
(11, 'ridham', 'rp1@gmail.com', '1234567890', '2019-02-28', NULL, 1, 'abc', 'sarkhej', 'rp@gmail.com', 3, 1, 1, NULL, 'abc', 'ug525d8gtgf', '58871541fdfed', 2, '2020-01-08 04:15:22', NULL, '2020-01-08 04:15:22'),
(18, 'parth', 'psthakkar@gmail.com', '8160838639', '2020-02-05', NULL, 3, 'dvdvxc', '', 'parth@123', 8, 1, 1, NULL, 'rfdgdgrdg5845', '', 'Screenshot (1).png', 2, '2020-02-05 08:00:30', NULL, '2020-02-05 08:00:30');

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
-- Indexes for table `country_master`
--
ALTER TABLE `country_master`
  ADD PRIMARY KEY (`country_id`);

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
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
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
-- AUTO_INCREMENT for table `feedback_master`
--
ALTER TABLE `feedback_master`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'feedback_id of user', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `invoice_master`
--
ALTER TABLE `invoice_master`
  MODIFY `Invoice_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Invice_id ';

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'order_id of user', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_category_master`
--
ALTER TABLE `product_category_master`
  MODIFY `product_category_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Category id of product', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_master`
--
ALTER TABLE `product_master`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'product_id of table', AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
