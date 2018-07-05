-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: ssc
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `p2603666002`
--

DROP TABLE IF EXISTS `p2603666002`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `p2603666002` (
  `test` bigint(10) NOT NULL,
  PRIMARY KEY (`test`),
  CONSTRAINT `p2603666002_ibfk_1` FOREIGN KEY (`test`) REFERENCES `test` (`tid`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `p2603666002`
--

LOCK TABLES `p2603666002` WRITE;
/*!40000 ALTER TABLE `p2603666002` DISABLE KEYS */;
INSERT INTO `p2603666002` VALUES (6500794343),(7647680020),(8310440293),(9353909060);
/*!40000 ALTER TABLE `p2603666002` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `p2666957082`
--

DROP TABLE IF EXISTS `p2666957082`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `p2666957082` (
  `test` bigint(10) NOT NULL,
  PRIMARY KEY (`test`),
  CONSTRAINT `p2666957082_ibfk_1` FOREIGN KEY (`test`) REFERENCES `test` (`tid`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `p2666957082`
--

LOCK TABLES `p2666957082` WRITE;
/*!40000 ALTER TABLE `p2666957082` DISABLE KEYS */;
INSERT INTO `p2666957082` VALUES (6500794343),(7647680020),(8310440293),(9353909060);
/*!40000 ALTER TABLE `p2666957082` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `p5706005462`
--

DROP TABLE IF EXISTS `p5706005462`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `p5706005462` (
  `test` bigint(10) NOT NULL,
  PRIMARY KEY (`test`),
  CONSTRAINT `p5706005462_ibfk_1` FOREIGN KEY (`test`) REFERENCES `test` (`tid`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `p5706005462`
--

LOCK TABLES `p5706005462` WRITE;
/*!40000 ALTER TABLE `p5706005462` DISABLE KEYS */;
INSERT INTO `p5706005462` VALUES (6500794343),(7647680020),(8310440293),(9353909060);
/*!40000 ALTER TABLE `p5706005462` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `p5965692635`
--

DROP TABLE IF EXISTS `p5965692635`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `p5965692635` (
  `test` bigint(10) NOT NULL,
  PRIMARY KEY (`test`),
  CONSTRAINT `p5965692635_ibfk_1` FOREIGN KEY (`test`) REFERENCES `test` (`tid`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `p5965692635`
--

LOCK TABLES `p5965692635` WRITE;
/*!40000 ALTER TABLE `p5965692635` DISABLE KEYS */;
INSERT INTO `p5965692635` VALUES (6500794343),(8310440293),(9353909060);
/*!40000 ALTER TABLE `p5965692635` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `package`
--

DROP TABLE IF EXISTS `package`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `package` (
  `pid` bigint(10) NOT NULL,
  `name` text,
  `description` text,
  `price` int(5) DEFAULT NULL,
  `creation` datetime DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `package`
--

LOCK TABLES `package` WRITE;
/*!40000 ALTER TABLE `package` DISABLE KEYS */;
INSERT INTO `package` VALUES (2603666002,'GATE','<p>Gate - Graduate Aptitude&nbsp;Test in Engineering.</p>',1500,'2017-11-25 06:45:32'),(2666957082,'SSC CGL','<p>SSC CGL - Staf Selection Commission to Hire Graduate Staff&nbsp;</p>',1000,'2017-11-25 06:53:17'),(5706005462,'JEE','<p>JEE - Joint Entrance Examination For Engineering.</p>',1200,'2017-11-25 06:44:09'),(5965692635,'AIPMT','<p>AIPMT - All India Pre Medical Test. Entrance Exam to Be In Medical College.</p>',2000,'2017-11-25 06:55:00');
/*!40000 ALTER TABLE `package` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t6500794343`
--

DROP TABLE IF EXISTS `t6500794343`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t6500794343` (
  `qno` int(3) DEFAULT NULL,
  `section` text,
  `question` text,
  `op1` text,
  `op2` text,
  `op3` text,
  `op4` text,
  `ans` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t6500794343`
--

LOCK TABLES `t6500794343` WRITE;
/*!40000 ALTER TABLE `t6500794343` DISABLE KEYS */;
INSERT INTO `t6500794343` VALUES (1,'English','<p>This is the question no 1</p>','<p>Option 1</p>','<p>Option 2</p>','<p>Option 3</p>','<p>Option 4</p>','op3'),(2,'English','<p>This is the question 2</p>','<p>Optopn 1</p>','<p>Ooption 2</p>','<p>Option 3</p>','<p>Option 4</p>','op1'),(3,'English','<p>This is the question 3</p>','<p>A</p>','<p>V</p>','<p>B</p>','<p>C</p>','op2'),(4,'English',NULL,NULL,NULL,NULL,NULL,NULL),(5,'English',NULL,NULL,NULL,NULL,NULL,NULL),(6,'English',NULL,NULL,NULL,NULL,NULL,NULL),(7,'English',NULL,NULL,NULL,NULL,NULL,NULL),(8,'English',NULL,NULL,NULL,NULL,NULL,NULL),(9,'English',NULL,NULL,NULL,NULL,NULL,NULL),(10,'English',NULL,NULL,NULL,NULL,NULL,NULL),(11,'English',NULL,NULL,NULL,NULL,NULL,NULL),(12,'English',NULL,NULL,NULL,NULL,NULL,NULL),(13,'English',NULL,NULL,NULL,NULL,NULL,NULL),(14,'English',NULL,NULL,NULL,NULL,NULL,NULL),(15,'English',NULL,NULL,NULL,NULL,NULL,NULL),(16,'English',NULL,NULL,NULL,NULL,NULL,NULL),(17,'English',NULL,NULL,NULL,NULL,NULL,NULL),(18,'English',NULL,NULL,NULL,NULL,NULL,NULL),(19,'English',NULL,NULL,NULL,NULL,NULL,NULL),(20,'English',NULL,NULL,NULL,NULL,NULL,NULL),(21,'English',NULL,NULL,NULL,NULL,NULL,NULL),(22,'English',NULL,NULL,NULL,NULL,NULL,NULL),(23,'English',NULL,NULL,NULL,NULL,NULL,NULL),(24,'English',NULL,NULL,NULL,NULL,NULL,NULL),(25,'English',NULL,NULL,NULL,NULL,NULL,NULL),(26,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(27,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(28,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(29,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(30,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(31,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(32,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(33,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(34,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(35,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(36,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(37,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(38,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(39,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(40,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(41,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(42,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(43,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(44,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(45,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(46,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(47,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(48,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(49,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(50,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(51,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(52,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(53,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(54,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(55,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(56,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(57,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(58,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(59,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(60,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(61,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(62,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(63,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(64,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(65,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(66,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(67,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(68,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(69,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(70,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(71,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(72,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(73,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(74,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(75,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(76,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(77,'Math','<p>This is the question on 77</p>','<p>1</p>','<p>2</p>','<p>3</p>','<p>4</p>','op2'),(78,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(79,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(80,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(81,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(82,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(83,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(84,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(85,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(86,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(87,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(88,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(89,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(90,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(91,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(92,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(93,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(94,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(95,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(96,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(97,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(98,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(99,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(100,'Math','<p>This is the question no 100</p>','<p>1234</p>','<p>2</p>','<p>3</p>','<p>4</p>','op4');
/*!40000 ALTER TABLE `t6500794343` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t7647680020`
--

DROP TABLE IF EXISTS `t7647680020`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t7647680020` (
  `qno` int(3) DEFAULT NULL,
  `section` text,
  `question` text,
  `op1` text,
  `op2` text,
  `op3` text,
  `op4` text,
  `ans` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t7647680020`
--

LOCK TABLES `t7647680020` WRITE;
/*!40000 ALTER TABLE `t7647680020` DISABLE KEYS */;
INSERT INTO `t7647680020` VALUES (1,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(2,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(3,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(4,'GK','<p>Vishal pqndey</p>','<p>option q</p>','<p>option w</p>','<p>Option e</p>','<p>option r</p>','op2'),(5,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(6,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(7,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(8,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(9,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(10,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(11,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(12,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(13,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(14,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(15,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(16,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(17,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(18,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(19,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(20,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(21,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(22,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(23,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(24,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(25,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(26,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(27,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(28,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(29,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(30,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(31,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(32,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(33,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(34,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(35,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(36,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(37,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(38,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(39,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(40,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(41,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(42,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(43,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(44,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(45,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(46,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(47,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(48,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(49,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(50,'Reasoning',NULL,NULL,NULL,NULL,NULL,NULL),(51,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(52,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(53,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(54,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(55,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(56,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(57,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(58,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(59,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(60,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(61,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(62,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(63,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(64,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(65,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(66,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(67,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(68,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(69,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(70,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(71,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(72,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(73,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(74,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(75,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(76,'English',NULL,NULL,NULL,NULL,NULL,NULL),(77,'English',NULL,NULL,NULL,NULL,NULL,NULL),(78,'English',NULL,NULL,NULL,NULL,NULL,NULL),(79,'English',NULL,NULL,NULL,NULL,NULL,NULL),(80,'English',NULL,NULL,NULL,NULL,NULL,NULL),(81,'English',NULL,NULL,NULL,NULL,NULL,NULL),(82,'English',NULL,NULL,NULL,NULL,NULL,NULL),(83,'English',NULL,NULL,NULL,NULL,NULL,NULL),(84,'English','<p>xkllzslslpsp</p>\r\n<p>&nbsp;</p>','<p>sjk</p>','<p>xnksk</p>','<p>dndjjsk</p>','<p>mskskk</p>','op3'),(85,'English',NULL,NULL,NULL,NULL,NULL,NULL),(86,'English',NULL,NULL,NULL,NULL,NULL,NULL),(87,'English',NULL,NULL,NULL,NULL,NULL,NULL),(88,'English',NULL,NULL,NULL,NULL,NULL,NULL),(89,'English',NULL,NULL,NULL,NULL,NULL,NULL),(90,'English',NULL,NULL,NULL,NULL,NULL,NULL),(91,'English',NULL,NULL,NULL,NULL,NULL,NULL),(92,'English',NULL,NULL,NULL,NULL,NULL,NULL),(93,'English',NULL,NULL,NULL,NULL,NULL,NULL),(94,'English',NULL,NULL,NULL,NULL,NULL,NULL),(95,'English',NULL,NULL,NULL,NULL,NULL,NULL),(96,'English',NULL,NULL,NULL,NULL,NULL,NULL),(97,'English',NULL,NULL,NULL,NULL,NULL,NULL),(98,'English',NULL,NULL,NULL,NULL,NULL,NULL),(99,'English',NULL,NULL,NULL,NULL,NULL,NULL),(100,'English',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `t7647680020` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t8310440293`
--

DROP TABLE IF EXISTS `t8310440293`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t8310440293` (
  `qno` int(3) DEFAULT NULL,
  `section` text,
  `question` text,
  `op1` text,
  `op2` text,
  `op3` text,
  `op4` text,
  `ans` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t8310440293`
--

LOCK TABLES `t8310440293` WRITE;
/*!40000 ALTER TABLE `t8310440293` DISABLE KEYS */;
INSERT INTO `t8310440293` VALUES (1,'Math','<p>gtreyw</p>','<p>r</p>','<p>t</p>','<p>g</p>','<p>jh</p>','op2'),(2,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(3,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(4,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(5,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(6,'Math','<p><a title=\"THis is the lilnk title\" href=\"https://www.vishalpandey.xyz\" target=\"_blank\" rel=\"noopener\">https://www.vishalpandey.xyz</a></p>\r\n<p>&nbsp;</p>','<p>er</p>','<p>wer</p>','<p>rew</p>','<p>re</p>','op2'),(7,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(8,'Math','<p>Hello</p>','<p>this&nbsp;</p>','<p>is&nbsp;</p>','<p>the</p>','<p>question</p>','op1'),(9,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(10,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(11,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(12,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(13,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(14,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(15,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(16,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(17,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(18,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(19,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(20,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(21,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(22,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(23,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(24,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(25,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(26,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(27,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(28,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(29,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(30,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(31,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(32,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(33,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(34,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(35,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(36,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(37,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(38,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(39,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(40,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(41,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(42,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(43,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(44,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(45,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(46,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(47,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(48,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(49,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(50,'Scinece',NULL,NULL,NULL,NULL,NULL,NULL),(51,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(52,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(53,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(54,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(55,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(56,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(57,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(58,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(59,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(60,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(61,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(62,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(63,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(64,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(65,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(66,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(67,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(68,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(69,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(70,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(71,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(72,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(73,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(74,'fhsjkh',NULL,NULL,NULL,NULL,NULL,NULL),(75,'fhsjkh','<p>This is the question</p>','<p>fhhsjd</p>','<p>fsd</p>','<p>fds</p>','<p>fdsf</p>','op2'),(76,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(77,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(78,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(79,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(80,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(81,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(82,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(83,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(84,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(85,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(86,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(87,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(88,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(89,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(90,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(91,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(92,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(93,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(94,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(95,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(96,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(97,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(98,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(99,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL),(100,'jhfes',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `t8310440293` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t9353909060`
--

DROP TABLE IF EXISTS `t9353909060`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t9353909060` (
  `qno` int(3) DEFAULT NULL,
  `section` text,
  `question` text,
  `op1` text,
  `op2` text,
  `op3` text,
  `op4` text,
  `ans` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t9353909060`
--

LOCK TABLES `t9353909060` WRITE;
/*!40000 ALTER TABLE `t9353909060` DISABLE KEYS */;
INSERT INTO `t9353909060` VALUES (1,'Math','<p>Question</p>','<p>A</p>','<p>V</p>','<p>D</p>','<p>JH</p>','op3'),(2,'Math','<p>This is question</p>','<p>Hellw</p>','<p>one</p>','<p>pandwh</p>','<p>fnjskdnhf</p>','op1'),(3,'Math','<p style=\"padding-left: 30px;\">This is question no 3</p>','<p>A</p>','<p>B</p>','<p>C</p>','<p>D</p>','op1'),(4,'Math','<p>Hi</p>','<p>1</p>','<p>1</p>','<p>1</p>','<p>1</p>','op3'),(5,'Math','<p>This is Question&nbsp;</p>','<p>Option 1</p>','<p>Option 2</p>','<p>Option 3</p>','<p>OPTION 4</p>','op1'),(6,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(7,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(8,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(9,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(10,'Math','<p>hdfh</p>','<p>uukuk</p>','<p>ghjg</p>','<p>hhkh</p>','<p>hih</p>','op2'),(11,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(12,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(13,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(14,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(15,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(16,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(17,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(18,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(19,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(20,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(21,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(22,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(23,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(24,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(25,'Math',NULL,NULL,NULL,NULL,NULL,NULL),(26,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(27,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(28,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(29,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(30,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(31,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(32,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(33,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(34,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(35,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(36,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(37,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(38,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(39,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(40,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(41,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(42,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(43,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(44,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(45,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(46,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(47,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(48,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(49,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(50,'Science',NULL,NULL,NULL,NULL,NULL,NULL),(51,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(52,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(53,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(54,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(55,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(56,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(57,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(58,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(59,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(60,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(61,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(62,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(63,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(64,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(65,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(66,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(67,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(68,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(69,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(70,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(71,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(72,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(73,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(74,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(75,'SSt',NULL,NULL,NULL,NULL,NULL,NULL),(76,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(77,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(78,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(79,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(80,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(81,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(82,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(83,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(84,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(85,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(86,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(87,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(88,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(89,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(90,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(91,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(92,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(93,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(94,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(95,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(96,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(97,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(98,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(99,'GK',NULL,NULL,NULL,NULL,NULL,NULL),(100,'GK',NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `t9353909060` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `test` (
  `tid` bigint(10) NOT NULL,
  `name` text,
  `duration` int(3) DEFAULT NULL,
  `correct_score` float DEFAULT NULL,
  `incorrect_score` float DEFAULT NULL,
  `per_to_pass` int(3) DEFAULT NULL,
  `no_of_ques` int(3) DEFAULT NULL,
  `creation` datetime DEFAULT NULL,
  `no_of_section` int(2) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES (6500794343,'SSC 01',60,2,0.5,60,100,'2017-10-31 09:06:04',4),(7647680020,'SSC 02',60,1,0,60,100,'2017-10-31 09:26:46',4),(8310440293,'New TEst',60,1,0.25,60,100,'2018-01-13 06:46:49',4),(9353909060,'SSC 03',60,2,0.5,60,100,'2017-11-01 09:17:10',4);
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `name` varchar(200) DEFAULT NULL,
  `uid` varchar(13) DEFAULT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(300) DEFAULT NULL,
  `photo` varchar(300) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`mobile`),
  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('Vishal','59f80995e5f22',8800102057,'pandey@gmail.com',NULL,'827ccb0eea8a706c4c34a16891f84e7b'),('Vishal  Pandey','59f7f0bb7f539',9717130893,'pandeyvishal64742@gmail.com',NULL,'827ccb0eea8a706c4c34a16891f84e7b'),('Shobha','5a9f899227b44',9718770136,NULL,NULL,'81dc9bdb52d04dc20036dbd8313ed055'),('Vishal','59f959fb6a003',9818630411,NULL,NULL,'827ccb0eea8a706c4c34a16891f84e7b'),('Vishal','59f9e9b4c5187',9876543210,'pandeyvishal25@yahoo.com',NULL,'827ccb0eea8a706c4c34a16891f84e7b'),('Vishal','5a47b279eca45',9999888876,'pandeyu@hkdf.com',NULL,'040b7cf4a55014e185813e0644502ea9'),('vihsdkjh','5a5a07765f3da',9999999999,NULL,NULL,'a152e841783914146e4bcd4f39100686');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-05 17:33:23