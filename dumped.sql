-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: DB_db
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.2

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Items`
--

LOCK TABLES `Items` WRITE;
/*!40000 ALTER TABLE `Items` DISABLE KEYS */;
INSERT INTO `Items` VALUES (1,'popular','Iphone 6s',' RAM:1 GB    Screen Size (in cm):10.16 cm (4)  Rear Camera:8 MP  Front Camera: 1.2 MP  Internal Memory:16GB',48000.00,'https://n1.sdlcdn.com/imgs/d/p/x/230X258_sharpened/Apple-iPhone-6s-32GB-Space-SDL744303941-1-35c0c.webp'),(2,'trending','Iphone 5s',' RAM:1 GB    Screen Size (in cm):10.16 cm (4)  Rear Camera:8 MP  Front Camera: 1.2 MP  Internal Memory:16GB',38000.00,'https://n1.sdlcdn.com/imgs/e/v/o/230X258_sharpened/SDL218647224_1-8621e.jpeg'),(3,'popular','Samsung Galaxy A5',' RAM:1.5 GB    Screen Size (in cm):10.16 cm (4)  Rear Camera:8 MP  Front Camera: 1.2 MP  Internal Memory:16GB',19900.00,'https://n4.sdlcdn.com/imgs/b/6/d/large/SDL093765375_11-4b73f.jpg'),(4,'trending','LeEcho L2','RAM:3 GB  Screen Size (in cm):13.97 cm (5.5)  Rear Camera:16 MP  Front Camera:8 MP  Internal Memory:32GB',11999.00,'https://n1.sdlcdn.com/imgs/e/a/x/230X258_sharpened/LeEco-Le2-X526-32GB-Grey-SDL199586080-1-7d45a.webp'),(5,'trending','OPPO A37 (16GB, Gray)',' RAM:2 GB  Screen Size (in cm):12.7 cm (5)  Rear Camera:8 MP  Front Camera:5 MP  Internal Memory:16GB',9990.00,'https://n1.sdlcdn.com/imgs/d/t/n/230X258_sharpened/41thskyt96l_1_1-e18b7.webp'),(6,'popular','Moto G Turbo Edition (16GB','Screen Size : 12.7 cm (5) Display  2 GB RAM and 16 GB ROM  Processor: 1.5 GHz Octa Core  Camera: 13 MP Rear & 5 MP Front  Battery: 2470 mAh',8499.00,'https://n1.sdlcdn.com/imgs/b/0/3/230X258_sharpened/Moto-G-Turbo-Edition-16GB-SDL077879817-1-8c7b0.webp'),(7,'popular','Coolpad Note 3S','RAM:3 GB  Screen Size (in cm):13.97 cm (5.5)  Rear Camera:13 MP  Front Camera:5 MP  Internal Memory:32GB',10389.00,'https://n1.sdlcdn.com/imgs/e/d/b/230X258_sharpened/Coolpad-Note-3S-32GB-Gold-SDL708880002-1-0424e.webp'),(8,'popular','HTC Desire 10 Pro',' RAM:4 GB  Screen Size (in cm):13.97 cm (5.5)  Rear Camera:20 MP  Front Camera:13 MP  Internal Memory:64GB',22990.00,'https://n3.sdlcdn.com/imgs/e/u/3/230X258_sharpened/HTC-Desire-10-Pro-64GB-SDL529154908-1-d7245.webp'),(9,'trending','Apple iPhone 7 Plus',' RAM:3 GB  Screen Size (in cm):13.94 cm (5.5)  Rear Camera:12 MP  Front Camera:7 MP  Internal Memory:32GB',57999.00,'https://n3.sdlcdn.com/imgs/c/2/9/230X258_sharpened/Apple-iPhone-7-Plus-32GB-SDL886413937-1-ac276.webp');
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
  `count` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (5,1,2),(6,2,2),(6,3,2);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `search`
--

DROP TABLE IF EXISTS `search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `search` (
  `Pid` int(3) NOT NULL,
  `count` int(3) DEFAULT NULL,
  PRIMARY KEY (`Pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `search`
--

LOCK TABLES `search` WRITE;
/*!40000 ALTER TABLE `search` DISABLE KEYS */;
INSERT INTO `search` VALUES (1,2),(2,1);
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'','','e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),(2,'abhinavkumar','admin@buyitt.com','7676aaafb027c825bd9abab78b234070e702752f625b752e55e55b48e607e358'),(3,'','','e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855'),(4,'abhinavkumar','admin@buyitt.com','7676aaafb027c825bd9abab78b234070e702752f625b752e55e55b48e607e358'),(5,'Adarsh','rj161272@gmail.com','5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5'),(6,'Akash','akash@buyitt.com','b1ca657a40b5435c6b546ff68e686e4ff077877d1d5f26f42299797a64d20c44');
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

-- Dump completed on 2017-04-21 16:31:21
