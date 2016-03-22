-- MySQL dump 10.13  Distrib 5.5.35, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: larek
-- ------------------------------------------------------
-- Server version	5.5.35-1ubuntu1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `cat_desc` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `cat_name_UNIQUE` (`cat_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (2,'Смартфоны','Смартфоны, телефоны, аксессуары, карты памяти'),(3,'Планшеты','Планшеты, зарядки к планшетам, чехлы, защитны'),(4,'Ноутбуки','Ноутбуки, сумки, рюкзаки, зарядки, наклейки, '),(5,'Test','dasdwew');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 trigger delete_cat before delete on categories
for each row begin
delete from goods where goods.cat_id=OLD.id;
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `pay_meth` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `additional` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `tel_UNIQUE` (`tel`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (6,'Alex','Flex','salkj@kjd.ua','0777777777','lksdf lksdfjsl','nal','ijaeopijsa'),(7,'Sasha','Kvak','sdlkfj@spo.ua','0998473627','lkjasdclji','beznal','asdqw'),(8,'Alex','Kvak','aweq@klms.ua','0779876959','lskflkwme','nal','sergrt'),(9,'Petr','Ivanov','liio@oicwe.ua','0998844555','ikcjweoirjf','beznal','cwscwefw');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(6) NOT NULL,
  `qty` int(4) NOT NULL,
  `additional` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `spec` int(1) NOT NULL,
  `sold` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (2,3,'Texet 1048','Диагональ 10\", 16 ядер и 4Гб ОЗУ',4555,12,'Гарантия 12 лет','/assets/img/texet1048',0,1),(3,3,'Samsung Tab 10','Диагональ: 10\", 30 ядер и 24Гб ОЗУ',7999,5,'Гарантия 10 лет','/assets/img/samsungtab10',0,4),(4,3,'Asus HD 10','Диагональ: 10\", 30 ядер и 24Гб ОЗУ',8500,3,'Гарантия 100 лет','/assets/img/asushd10',0,1),(5,3,'Apple 9\"','Диагональ: 9\", 300 ядер и 240Гб ОЗУ',10999,6,'Гарантия 1000 лет','/assets/img/apple9',1,2),(6,2,'Lenovo P70','Диагональ 5\", 4 ядер и 4Гб ОЗУ',3599,3,'Гарантия 1 год','/assets/img/lenovop70',0,1),(7,2,'Samsung 8262','Диагональ 4\", 4 ядер и 4Гб ОЗУ',1899,6,'Гарантия 1 год','/assets/img/sams8262',1,8),(8,2,'Nexus HD','Диагональ 5\", 8 ядер и 8Гб ОЗУ',4999,7,'Гарантия 10 лет','/assets/img/nexushd',0,6),(9,2,'Apple Iphone 9','Диагональ 5\", 28 ядер и 28Гб ОЗУ',19999,2,'Гарантия 1000 лет','/assets/img/appleiphone9',0,0),(10,4,'Asus Zen Book','Диагональ 12\", 8 ядер и 12Гб ОЗУ',12999,12,'Металлический корпус','/assets/img/asuszenbook',1,9),(11,4,'Lenovo P550','Диагональ 15,6\", 4 ядер и 4Гб ОЗУ',7888,5,'Гарантия 2 года','/assets/img/lenovop550',0,5),(12,4,'Sony W7','Диагональ 11\", 8 ядер и 12Гб ОЗУ',14999,2,'Гарантия 5 лет','/assets/img/sonyw7',0,2),(13,4,'HP ProBook 4540s','Диагональ 15,6\", 4 ядер и 4Гб ОЗУ',7999,18,'Гарантия 3 года','/assets/img/hpprobook4540s',0,10),(16,2,'Acer HD','Диагональ 6\", 6 ядер и 8Гб ОЗУ',3999,13,'Гарантия 1 месяц','/assets/img/acerhd',1,NULL),(17,5,'test','dgdfgfgh',435,0,'dgergs','/assets/img/sams8262',1,NULL);
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sum` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (6,'2016-03-21 20:04:08',37784,6,1),(7,'2016-03-21 20:05:39',3798,7,1),(8,'2016-03-22 07:23:44',3798,8,1),(9,'2016-03-22 08:10:29',25998,9,1);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 trigger `sold_counter` AFTER UPDATE ON `order` for each row begin declare done INT DEFAULT FALSE; declare ids INT; declare n INT; declare cur CURSOR FOR SELECT `order_info`.`product_id`, `order_info`.`qty` FROM `order_info` WHERE `order_info`.`order_id` = NEW.`id`; declare CONTINUE HANDLER FOR NOT FOUND SET done = TRUE; OPEN cur; ins_loop: LOOP FETCH cur INTO ids, n; IF done THEN LEAVE ins_loop; END IF; UPDATE `goods` SET `goods`.`sold`=`goods`.`sold`+`n` WHERE `goods`.`id`=`ids`; END LOOP; CLOSE cur; END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 trigger `delete_order` before delete on `order`
for each row
begin
delete from `order_info` where `order_id` = OLD.id;
delete from `customers` where `customers`.`id` = OLD.customer_id;
end */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `order_info`
--

DROP TABLE IF EXISTS `order_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(4) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_info`
--

LOCK TABLES `order_info` WRITE;
/*!40000 ALTER TABLE `order_info` DISABLE KEYS */;
INSERT INTO `order_info` VALUES (15,6,7,1,1899),(16,6,8,1,4999),(17,6,3,1,7999),(18,6,12,1,14999),(19,6,11,1,7888),(20,7,7,2,1899),(21,8,7,2,1899),(22,9,10,2,12999);
/*!40000 ALTER TABLE `order_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-22 10:14:29
