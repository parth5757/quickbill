/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.21 : Database - loginsystem
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`loginsystem` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `loginsystem`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`username`,`password`) values (1,'admin','b24331b1a138cde62aa1f679164fc62f');

/*Table structure for table `area_master` */

DROP TABLE IF EXISTS `area_master`;

CREATE TABLE `area_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `city_id` varchar(255) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `area_master` */

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`id`,`name`,`details`,`created_date`) values (6,'test category','detail of category describe here category details','2020-01-11 16:42:03'),(8,'main category','detail of category describe here','2020-01-11 16:42:42');

/*Table structure for table `city_master` */

DROP TABLE IF EXISTS `city_master`;

CREATE TABLE `city_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `city_master` */

/*Table structure for table `equipments` */

DROP TABLE IF EXISTS `equipments`;

CREATE TABLE `equipments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `time_duration` varchar(255) DEFAULT NULL,
  `is_verified` varchar(255) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `equipments` */

insert  into `equipments`(`id`,`name`,`price`,`details`,`time_duration`,`is_verified`,`created_date`,`modified_date`,`image`) values (2,'test equipments','25','asdasd','2hrs','','2020-01-11 12:10:29','2020-01-11 12:10:29','');

/*Table structure for table `sub_category` */

DROP TABLE IF EXISTS `sub_category`;

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `sub_category` */

insert  into `sub_category`(`id`,`name`,`details`,`category_id`,`created_date`) values (2,'sub cat 1','detail of category describe here category ',8,'2020-01-11 17:05:40'),(3,'test','detail of category describe here category ',8,'2020-01-11 17:09:54'),(4,'main category','jhkjgjgjg',6,'2020-01-11 17:10:24'),(5,'gopal','jhkjgjgjg',6,'2020-01-11 17:11:18');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contact` varchar(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `license_id` varchar(255) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `role` varchar(255) DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`gender`,`email`,`password`,`contact`,`dob`,`address`,`image`,`license_id`,`created_date`,`role`) values (2,'Gopal Mavani','Male','abc@gmail.com','abc@123','123456789','2020-12-12','aanad nagar',NULL,'1234567890','2020-01-11 18:44:58','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
