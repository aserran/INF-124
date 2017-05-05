-- MySQL dump 10.13  Distrib 5.7.18, for Win64 (x86_64)
--
-- Host: localhost    Database: coolfitteddb
-- ------------------------------------------------------
-- Server version	5.7.18-log

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
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `details` (
  `iddetails` int(11) NOT NULL,
  `imagename` tinytext NOT NULL,
  `description` longtext NOT NULL,
  `price` tinytext,
  PRIMARY KEY (`iddetails`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `details`
--

LOCK TABLES `details` WRITE;
/*!40000 ALTER TABLE `details` DISABLE KEYS */;
INSERT INTO `details` VALUES (1,'47LAsnap1','Royal Blue Crown & Visor-Gray Undervisor - Embroidered Dodgers team logo on the front panel-85% acrylic & 15% wool','$29.99'),(2,'Hundredsbluesnap1','Silk Like Royal Blue Crown & Visor-Green Undervisor- Embroidered Script Logo-100% polyester','$26.99'),(3,'LAblacksnap1','Royal black crown & visor-Gray undervisor-Embroidered Dodgers Team Logo on the front panel','$29.99'),(4,'undef5strikesnap1','Green undervisor-Embroidered 5 strike logo-80% acrylic & 20% wool','$30.99'),(5,'RVCAsnap1','Black Front Panel Visor & Undervisor- Black Mesh Backing- Embroidered RVCA Script Logo- 100% Polyester','$34.99'),(6,'LARamssnap1',' Black Crown & Visor- Green Undervisor- Embroidered Team Script Logo- 100% Wool','$28.99'),(7,'PinkDolphinsnap1',' Black Visor with yellow and green gradient pattern- Printed Pink Dolphin Flag in green & yellow- 100% Polyester','$29.99'),(8,'TravisMathewCauthensnap1','  Navy Crown & Visor- Brand Logo Embroidered on Front- 60% Bamboo & 40% Cotton','$30.99'),(9,'HundredsGlobeSnap1','  Silk Like Black Crown & Visor- Green Undervisor- Embroidered Script Logo- 100% Polyester','$25.99'),(10,'47SFgiantssnap1','Black Crown & Visor- Team Logo Embroidered on Front in Orange- Snapback Adjustable- 100% Cotton','$29.99'),(11,'HundredsPlayersnap1',' Silk Like Teal Crown & Visor- Green Undervisor- Embroidered Script Logo- 100% Polyester','$25.99'),(12,'47Navystrap1','Navy Crown & Visor- Brand Logo Embroidered on Front in White- Strapback Adjustable- 100% Cotton','$20.99'),(13,'HUFHstrap1','Navy Crown- Stone Visor- Green Undervisor- HUF Classic Logo- 80% Acrylic & 20% Wool','$20.99'),(14,'BulldogWhitestrap1','White Crown & Visor- Embroidered English Bulldog Logo- 100% Cotton','$28.99'),(15,'CigaretteNaikestrap1','Pink Crown & Visor- Embroidered Naike Logo- 100% Cotton','$20.99'),(16,'CaliBearblackstrap1','Black CrownVisor& Undervisor- Embroidered Cali Bear Logo- 100% Cotton','$24.99'),(17,'CaliBearwhitestrap1','White Crown- Embroidered Cali Bear Logo- 100% Cotton','$23.99'),(18,'MLBstrap1',' Denim Undervisor- Official MLB Logo Embroidered on Front- 100% Cotton','$28.99'),(19,'NBAstrap1',' Navy Denim Crown & Visor- Navy Denim Undervisor- Official NBA Logo Embroidered on Front- 100% Cotton','$28.99'),(20,'NikeCamostrap1',' Camo CrownVisor& Undervisor- Embroidered Naike Logo on Front- 100% Cotton','$28.99'),(21,'StussyMWstrap1',' Tan Visor & Undervisor- Brand Logo Embroidered on Front- 50% Wool & 30% Polyester & 10% Acrylic & 10% Nylon','$30.99'),(22,'TupacBearstrap1',' White CrownVisor& Undervisor- Embroidered Tupac Bear Logo- 100% Cotton','$29.99'),(23,'BMW90sm3strap1',' BMW M3 Logo Embroidered on Front- Strapback Adjustable- 100% Cotton','$35.99'),(24,'BrixtonGradesnap1','Brixton Grade Snapback-Grey Crown & Maroon visor-80% wool 20% Polyester','$34.99');
/*!40000 ALTER TABLE `details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `idimages` int(11) NOT NULL,
  `imagepath` mediumtext NOT NULL,
  `imagename` tinytext NOT NULL,
  PRIMARY KEY (`idimages`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'Media/47LAsnap1.jpg','47LAsnap1'),(2,'Media/47LAsnap2.jpg','47LAsnap2'),(3,'Media/47LAsnap3.jpg','47LAsnap3'),(4,'Media/47Navystrap1.jpg','47Navystrap1'),(5,'Media/47Navystrap2.jpg','47Navystrap2'),(6,'Media/47Navystrap3.jpg','47Navystrap3'),(7,'Media/47SFgiantssnap1.jpg','47SFgiantssnap1'),(8,'Media/47SFgiantssnap2.jpg','47SFgiantssnap2'),(9,'Media/47SFgiantssnap3.jpg','47SFgiantssnap3'),(10,'Media/BMW90sm3strap1.jpg','BMW90sm3strap1'),(11,'Media/BMW90sm3strap2.jpg','BMW90sm3strap2'),(12,'Media/BMW90sm3strap3.jpg','BMW90sm3strap3'),(13,'Media/BrixtonGradesnap1.jpg','BrixtonGradesnap1'),(14,'Media/BrixtonGradesnap2.jpg','BrixtonGradesnap2'),(15,'Media/BrixtonGradesnap3.jpg','BrixtonGradesnap3'),(16,'Media/BulldogWhitestrap1.jpg','BulldogWhitestrap1'),(17,'Media/BulldogWhitestrap2.jpg','BulldogWhitestrap2'),(18,'Media/BulldogWhitestrap3.jpg','BulldogWhitestrap3'),(19,'Media/CaliBearblackstrap1.jpg','CaliBearblackstrap1'),(20,'Media/CaliBearblackstrap2.jpg','CaliBearblackstrap2'),(21,'Media/CaliBearblackstrap3.jpg','CaliBearblackstrap3'),(22,'Media/CaliBearwhitestrap1.jpg','CaliBearwhitestrap1'),(23,'Media/CaliBearwhitestrap2.jpg','CaliBearwhitestrap2'),(24,'Media/CaliBearwhitestrap3.jpg','CaliBearwhitestrap3'),(25,'Media/CigaretteNaikestrap1.jpg','CigaretteNaikestrap1'),(26,'Media/CigaretteNaikestrap2.jpg','CigaretteNaikestrap2'),(27,'Media/CigaretteNaikestrap3.jpg','CigaretteNaikestrap3'),(28,'Media/CoolFittedTitle.png','CoolFittedTitle'),(29,'Media/HUFHstrap1.jpg','HUFHstrap1'),(30,'Media/HUFHstrap2.jpg','HUFHstrap2'),(31,'Media/HUFHstrap3.jpg','HUFHstrap3'),(32,'Media/HundredsGlobeSnap1.jpg','HundredsGlobeSnap1'),(33,'Media/HundredsGlobeSnap2.jpg','HundredsGlobeSnap2'),(34,'Media/HundredsGlobeSnap3.jpg','HundredsGlobeSnap3'),(35,'Media/HundredsPlayersnap1.jpg','HundredsPlayersnap1'),(36,'Media/HundredsPlayersnap2.jpg','HundredsPlayersnap2'),(37,'Media/HundredsPlayersnap3.jpg','HundredsPlayersnap3'),(38,'Media/Hundredsbluesnap1.jpg','Hundredsbluesnap1'),(39,'Media/Hundredsbluesnap2.jpg','Hundredsbluesnap2'),(40,'Media/Hundredsbluesnap3.jpg','Hundredsbluesnap3'),(41,'Media/LARamssnap1.jpg','LARamssnap1'),(42,'Media/LARamssnap2.jpg','LARamssnap2'),(43,'Media/LARamssnap3.jpg','LARamssnap3'),(44,'Media/LAblacksnap1.jpg','LAblacksnap1'),(45,'Media/LAblacksnap2.jpg','LAblacksnap2'),(46,'Media/LAblacksnap3.jpg','LAblacksnap3'),(47,'Media/MLBstrap1.jpg','MLBstrap1'),(48,'Media/MLBstrap2.jpg','MLBstrap2'),(49,'Media/MLBstrap3.jpg','MLBstrap3'),(50,'Media/NBAstrap1.jpg','NBAstrap1'),(51,'Media/NBAstrap2.jpg','NBAstrap2'),(52,'Media/NBAstrap3.jpg','NBAstrap3'),(53,'Media/NikeCamostrap1.jpg','NikeCamostrap1'),(54,'Media/NikeCamostrap2.jpg','NikeCamostrap2'),(55,'Media/NikeCamostrap3.jpg','NikeCamostrap3'),(56,'Media/PinkDolphinsnap1.jpg','PinkDolphinsnap1'),(57,'Media/PinkDolphinsnap2.jpg','PinkDolphinsnap2'),(58,'Media/PinkDolphinsnap3.jpg','PinkDolphinsnap3'),(59,'Media/RVCAsnap1.jpg','RVCAsnap1'),(60,'Media/RVCAsnap2.jpg','RVCAsnap2'),(61,'Media/RVCAsnap3.jpg','RVCAsnap3'),(62,'Media/SnapbacksLettering.png','SnapbacksLettering'),(63,'Media/StussyMWstrap1.jpg','StussyMWstrap1'),(64,'Media/StussyMWstrap2.jpg','StussyMWstrap2'),(65,'Media/StussyMWstrap3.jpg','StussyMWstrap3'),(66,'Media/TravisMathewCauthensnap1.jpg','TravisMathewCauthensnap1'),(67,'Media/TravisMathewCauthensnap2.jpg','TravisMathewCauthensnap2'),(68,'Media/TravisMathewCauthensnap3.jpg','TravisMathewCauthensnap3'),(69,'Media/TupacBearstrap1.jpg','TupacBearstrap1'),(70,'Media/TupacBearstrap2.jpg','TupacBearstrap2'),(71,'Media/TupacBearstrap3.jpg','TupacBearstrap3'),(72,'Media/anthony.jpg','anthony'),(73,'Media/francisco.jpg','francisco'),(74,'Media/hatbanner.jpg','hatbanner'),(75,'Media/hatbanner2.jpg','hatbanner2'),(76,'Media/hatbanner3.jpg','hatbanner3'),(77,'Media/hatbanner4.jpg','hatbanner4'),(78,'Media/headwear.jpg','headwear'),(79,'Media/headwear2.jpg','headwear2'),(80,'Media/headwear3.jpg','headwear3'),(81,'Media/headwear4.jpg','headwear4'),(82,'Media/headwear5.jpg','headwear5'),(83,'Media/newarrpic.jpg','newarrpic'),(84,'Media/snapbackbanner.jpg','snapbackbanner'),(85,'Media/strapbanner.jpg','strapbanner'),(86,'Media/undef5strikesnap1.jpg','undef5strikesnap1'),(87,'Media/undef5strikesnap2.jpg','undef5strikesnap2'),(88,'Media/undef5strikesnap3.jpg','undef5strikesnap3');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `idorders` int(11) NOT NULL,
  `firstname` tinytext NOT NULL,
  `lastname` tinytext NOT NULL,
  `phonenumber` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `shippingaddress` tinytext NOT NULL,
  `city` tinytext NOT NULL,
  `state` tinytext NOT NULL,
  `zipcode` tinytext NOT NULL,
  `shippingmethod` tinytext NOT NULL,
  `creditname` tinytext NOT NULL,
  `cardnumber` tinytext NOT NULL,
  `cvv` tinytext NOT NULL,
  `expirationdate` tinytext NOT NULL,
  `totalprice` tinytext NOT NULL,
  PRIMARY KEY (`idorders`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `titles`
--

DROP TABLE IF EXISTS `titles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `titles` (
  `idtitles` int(11) NOT NULL,
  `titlename` tinytext NOT NULL,
  PRIMARY KEY (`idtitles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `titles`
--

LOCK TABLES `titles` WRITE;
/*!40000 ALTER TABLE `titles` DISABLE KEYS */;
INSERT INTO `titles` VALUES (1,'CoolFitted'),(2,'Home'),(3,'New Arrivals'),(4,'Snapbacks'),(5,'Strapbacks'),(6,'About Us');
/*!40000 ALTER TABLE `titles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-04 23:34:24
