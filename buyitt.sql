-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: DB_db
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `Items`
--

DROP TABLE IF EXISTS `Items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Items` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `I_type` varchar(100) NOT NULL,
  `I_name` varchar(30) NOT NULL,
  `I_desc` varchar(300) DEFAULT NULL,
  `I_price` decimal(9,2) NOT NULL,
  `Image` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Items`
--

LOCK TABLES `Items` WRITE;
/*!40000 ALTER TABLE `Items` DISABLE KEYS */;
INSERT INTO `Items` VALUES (1,'popular','Iphone 6s(32 GB)',' RAM:1 GB    Screen Size (in cm):10.16 cm (4)  Rear Camera:8 MP  Front Camera: 1.2 MP  Internal Memory:16GB',48000.00,'https://n1.sdlcdn.com/imgs/d/p/x/230X258_sharpened/Apple-iPhone-6s-32GB-Space-SDL744303941-1-35c0c.webp'),(2,'trending','Iphone 5s(32 GB)',' RAM:1 GB    Screen Size (in cm):10.16 cm (4)  Rear Camera:8 MP  Front Camera: 1.2 MP  Internal Memory:16GB',38000.00,'https://n1.sdlcdn.com/imgs/e/v/o/230X258_sharpened/SDL218647224_1-8621e.jpeg'),(3,'popular','Samsung Galaxy A5',' RAM:1.5 GB    Screen Size (in cm):10.16 cm (4)  Rear Camera:8 MP  Front Camera: 1.2 MP  Internal Memory:16GB',19900.00,'https://n4.sdlcdn.com/imgs/b/6/d/large/SDL093765375_11-4b73f.jpg'),(4,'trending','LeEcho Le(32 GB)','RAM:3 GB  Screen Size (in cm):13.97 cm (5.5)  Rear Camera:16 MP  Front Camera:8 MP  Internal Memory:32GB',11999.00,'https://n1.sdlcdn.com/imgs/e/a/x/230X258_sharpened/LeEco-Le2-X526-32GB-Grey-SDL199586080-1-7d45a.webp'),(5,'trending','OPPO A37 (16GB, Gray)',' RAM:2 GB  Screen Size (in cm):12.7 cm (5)  Rear Camera:8 MP  Front Camera:5 MP  Internal Memory:16GB',9990.00,'https://n1.sdlcdn.com/imgs/d/t/n/230X258_sharpened/41thskyt96l_1_1-e18b7.webp'),(6,'popular','Moto G Turbo Edition(16GB)','Screen Size : 12.7 cm (5) Display  2 GB RAM and 16 GB ROM  Processor: 1.5 GHz Octa Core  Camera: 13 MP Rear & 5 MP Front  Battery: 2470 mAh',8499.00,'https://n1.sdlcdn.com/imgs/b/0/3/230X258_sharpened/Moto-G-Turbo-Edition-16GB-SDL077879817-1-8c7b0.webp'),(7,'popular','Coolpad Note 3S','RAM:3 GB  Screen Size (in cm):13.97 cm (5.5)  Rear Camera:13 MP  Front Camera:5 MP  Internal Memory:32GB',10389.00,'https://n1.sdlcdn.com/imgs/e/d/b/230X258_sharpened/Coolpad-Note-3S-32GB-Gold-SDL708880002-1-0424e.webp'),(8,'popular','HTC Desire 10 Pro',' RAM:4 GB  Screen Size (in cm):13.97 cm (5.5)  Rear Camera:20 MP  Front Camera:13 MP  Internal Memory:64GB',22990.00,'https://n3.sdlcdn.com/imgs/e/u/3/230X258_sharpened/HTC-Desire-10-Pro-64GB-SDL529154908-1-d7245.webp'),(9,'trending','Apple iPhone 7 Plus',' RAM:3 GB  Screen Size (in cm):13.94 cm (5.5)  Rear Camera:12 MP  Front Camera:7 MP  Internal Memory:32GB',57999.00,'https://n3.sdlcdn.com/imgs/c/2/9/230X258_sharpened/Apple-iPhone-7-Plus-32GB-SDL886413937-1-ac276.webp'),(10,'trending','Panasonic Eluga A2 16GB',' RAM:3 GB  Screen Size (in cm):12.7 cm (5)  Rear Camera:8 MP  Front Camera:5 MP  Internal Memory:16GB',9000.00,'https://n1.sdlcdn.com/imgs/e/j/x/large/Panasonic-Eluga-A2-16GB-Metallic-SDL137085472-1-a6acd.png'),(11,'popular','Samsung Guru E1200 (White)',' 3.8 cm (1.5)  800 mAh Battery  GSM',1200.00,'https://n1.sdlcdn.com/imgs/a/j/s/large/Samsung-Guru-E1200-White--1211830-1-2c5cf.jpg'),(12,'popular','Gionee S6 Pro 64GB','RAM:4 GB  Screen Size (in cm):13.97 cm (5.5)  Rear Camera:13 MP  Front Camera:8 MP  Internal Memory:64GB',19900.00,'https://n1.sdlcdn.com/imgs/e/h/a/230X258_sharpened/Gionee-S6-Pro-64GB-Golden-SDL852255376-1-b766a.webp'),(13,'trending','Trio T6 Star New 256 MB','RAM:256 MB  Screen Size (in cm):6.1 Cm (2.4)  Rear Camera:1.3 MP  Front Camera:No  Internal Memory:256 MB',749.00,'https://n1.sdlcdn.com/imgs/e/7/8/large/Trio-T6-Star-New-256-SDL882204725-1-cecb9.jpg');
/*!40000 ALTER TABLE `Items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `Uid` int(5) NOT NULL,
  `Pid` int(5) NOT NULL,
  `count` int(10) DEFAULT NULL,
  KEY `Uid` (`Uid`),
  KEY `Pid` (`Pid`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`Uid`) REFERENCES `users` (`id`),
  CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`Pid`) REFERENCES `Items` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (3,5,1),(3,6,1),(3,13,1),(4,10,1),(4,11,1),(4,8,1),(2,5,3),(1,2,3),(1,5,1);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `search`
--

DROP TABLE IF EXISTS `search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `search` (
  `Pid` int(3) DEFAULT NULL,
  `count` int(3) DEFAULT NULL,
  KEY `Pid` (`Pid`),
  CONSTRAINT `search_ibfk_1` FOREIGN KEY (`Pid`) REFERENCES `Items` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `search`
--

LOCK TABLES `search` WRITE;
/*!40000 ALTER TABLE `search` DISABLE KEYS */;
INSERT INTO `search` VALUES (1,5),(2,4),(9,5),(12,1),(13,1),(6,1),(10,1),(8,1),(3,1),(11,1);
/*!40000 ALTER TABLE `search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Abhinav Kumar','admin@buyitt.com','7676aaafb027c825bd9abab78b234070e702752f625b752e55e55b48e607e358'),(2,'Adarsh','adarsh@buyitt.com','d38d1939017481a897a6dc147199bc30bbecf96a008ad5dd29524df2064c925f'),(3,'Akash','akash@buyitt.com','40632009779ae7369c4a50d5ea43fe7f5cc330252eb17e65d663b8a1b5df104c'),(4,'Anupama','anupama@buyitt.com','f87d46422941dfa2adbc5658b56dc829aad605acf9d08f096a935b4347c38248');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-28  9:22:12
