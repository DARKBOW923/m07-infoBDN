-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: infoBDN
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `ADMINISTRADOR`
--

DROP TABLE IF EXISTS `ADMINISTRADOR`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ADMINISTRADOR` (
  `USUARIO` varchar(20) NOT NULL,
  `CONTRASENYA` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ADMINISTRADOR`
--

LOCK TABLES `ADMINISTRADOR` WRITE;
/*!40000 ALTER TABLE `ADMINISTRADOR` DISABLE KEYS */;
INSERT INTO `ADMINISTRADOR` VALUES ('administrador','c4ca4238a0b923820dcc509a6f75849b');
/*!40000 ALTER TABLE `ADMINISTRADOR` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ALUMNOS`
--

DROP TABLE IF EXISTS `ALUMNOS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ALUMNOS` (
  `ID_ALUMNO` int NOT NULL,
  `DNI` varchar(20) DEFAULT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `APELLIDO` varchar(20) DEFAULT NULL,
  `FOTO` varchar(200) DEFAULT NULL,
  `CONTRASENYA` varchar(50) DEFAULT NULL,
  `DESACTIVAR` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_ALUMNO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ALUMNOS`
--

LOCK TABLES `ALUMNOS` WRITE;
/*!40000 ALTER TABLE `ALUMNOS` DISABLE KEYS */;
INSERT INTO `ALUMNOS` VALUES (66,'66','66','66','66','66',NULL),(555,'4','4','4','4','5',NULL),(678,'yyy','yy','yyy','yyy','f0a4058fd33489695d53df156b77c724',NULL),(777,'777','777','777','777','8f14e45fceea167a5a36dedd4bea2543',NULL),(9353,'4884f','PITO','PONCIO','PACO','PEPE12345',NULL),(12345,'1234G','PEPITO','VILLALONGA','C:/RUTA/FICTICIA','12346F',NULL),(18940,'895783H','PACO','PONCIO','DVNVIVNI','IVIRJVI4',NULL),(55555,'55555','55555','5555','55555','6074c6aa3488f3c2dddff2a7ca821aab',NULL),(56789,'3e','e','ee','eee','d2f2297d6e829cd3493aa7de4416a18f',NULL),(66666,'PEPIYTO','MGORMOGMRO','MOMOMOMO','OMOMOMOMMOM','e48bf9dad3f5d442f9d14d931be6f43e',NULL),(88989,'22wq','ASDFG','ASSSS','TYTYT','93a75994af1b35f4708a3124a48ef145',NULL),(90687,'jiie8','eufhe','huuh','uhhu','0363cbb0784c4140041ca20780a73c9f',NULL),(98765,'012794H','JIEJ','JIJ','E3E3','IJIJ',NULL),(333335,'444','7','ttt','ttt','dc9e9e2eaf8da1d634e890b503ee881c',NULL),(3345678,'1112345','2333','3333','3333','2be9bd7a3434f7038ca27d1918de58bd',NULL),(5567894,'iiiiii','iiiiii','iiiiii','iiiiii','6d2fe1d6f097816949a2f54ed3d986a8',NULL),(5647395,'h3un','tft','tttt','tttt','9990775155c3518a0d7917f7780b24aa',NULL),(33333333,'manguera','rogiberto','rr','RRR','4b43b0aee35624cd95b910189b3dc231',NULL),(1234567810,'123MANGERA','E','Q','J','J',NULL);
/*!40000 ALTER TABLE `ALUMNOS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CURSO`
--

DROP TABLE IF EXISTS `CURSO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CURSO` (
  `ID_CURSO` varchar(20) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `DESCRIPCION` varchar(20) DEFAULT NULL,
  `HORAS` int DEFAULT NULL,
  `F_INICIO` date DEFAULT NULL,
  `F_FINAL` date DEFAULT NULL,
  `PROFESOR` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_CURSO`),
  KEY `PROFESOR` (`PROFESOR`),
  CONSTRAINT `CURSO_ibfk_1` FOREIGN KEY (`PROFESOR`) REFERENCES `PROFESOR` (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CURSO`
--

LOCK TABLES `CURSO` WRITE;
/*!40000 ALTER TABLE `CURSO` DISABLE KEYS */;
INSERT INTO `CURSO` VALUES ('444','MAMPORRERIA','444',40,'2020-09-09','2021-09-09','2'),('456789','PEPE','PACO',10,'2022-09-08','2022-09-09','2'),('500','540','300',0,'2022-09-04','2022-09-14','2'),('666','uuu','90909',2,'2022-09-12','2022-09-13','2'),('7655','5555','5555',55555,'2022-09-13','2022-10-01','2'),('887876','lllopo','8768768',111,'2022-09-05','2022-09-14','2'),('888888','lllopo','8768768',111,'2022-09-05','2022-09-14','2'),('9','9','9',9,'2017-08-09','2018-08-09','2'),('90','80','70',1,'2022-09-28','2022-10-01','2'),('93898','888','888',8,'2022-09-06','2022-09-28','2'),('9789','uuu','90909',2,'2022-09-12','2022-09-13','2'),('9999','8888','222',23,'2022-09-22','2022-09-30','2');
/*!40000 ALTER TABLE `CURSO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MATRICULA`
--

DROP TABLE IF EXISTS `MATRICULA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `MATRICULA` (
  `ID_ALUMNO` int DEFAULT NULL,
  `ID_CURSO` varchar(20) DEFAULT NULL,
  `CALIFICACIONES` varchar(10) DEFAULT NULL,
  KEY `ID_ALUMNO` (`ID_ALUMNO`),
  KEY `ID_CURSO` (`ID_CURSO`),
  CONSTRAINT `MATRICULA_ibfk_1` FOREIGN KEY (`ID_ALUMNO`) REFERENCES `ALUMNOS` (`ID_ALUMNO`),
  CONSTRAINT `MATRICULA_ibfk_2` FOREIGN KEY (`ID_CURSO`) REFERENCES `CURSO` (`ID_CURSO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MATRICULA`
--

LOCK TABLES `MATRICULA` WRITE;
/*!40000 ALTER TABLE `MATRICULA` DISABLE KEYS */;
/*!40000 ALTER TABLE `MATRICULA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PROFESOR`
--

DROP TABLE IF EXISTS `PROFESOR`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `PROFESOR` (
  `DNI` varchar(20) NOT NULL,
  `APELLIDOS` varchar(20) DEFAULT NULL,
  `T_ACADEMICO` varchar(20) DEFAULT NULL,
  `FOTO` varchar(200) DEFAULT NULL,
  `CONTRASENYA` varchar(40) DEFAULT NULL,
  `CURSO_IMPARTIDO` varchar(20) DEFAULT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `DESACTIVAR` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PROFESOR`
--

LOCK TABLES `PROFESOR` WRITE;
/*!40000 ALTER TABLE `PROFESOR` DISABLE KEYS */;
INSERT INTO `PROFESOR` VALUES ('123456F','g','C:/SYSTEM32/PACO','rr','cff618f73f9341dfcc3f324d3341e399','PAPO','PACO','r'),('12345F','PEREZ','INFORMATICO','RUTA','12345','INFORMATICA',NULL,'TRUE'),('1234f','perez','paca','','lavaca','daba leche','',NULL),('2','PREPUCIO','2','RRRRRR','c81e728d9d4c2f636f067f89cc14862c','2','2','false'),('3','3','3','','33','3','3',NULL),('33333','33333','333','3333','182be0c5cdcd5072bb1864cdee4d3d6e','3333','33333',NULL),('456789m','robles hoyos','sin titulo','jfjidejf','8bd9e0c8365edde79c62e8e87eb2d020','5','rogiberto','true'),('56','6','6','','6','6','12345','TRUE'),('eeeeee','eeeeee','eeeeee','eeeee','202cb962ac59075b964b07152d234b70','eeeee','eeeee',NULL),('odfodfo2','odoefoe','oooooi','iieiei','c229c6d410cfd5ca95099f77498949ef','1','pacoelbar','true'),('ONLY FANS','GUETA','DAVID','PATO','ce5b074592707f4c57cd6e04b3a6621e','PONCIO','OFOFOFOF','true'),('ooopo','opeoke','kokoko','kokoko','d5cbfe9ff07fef1ecc93861ce5dd4f3b','1','papo','true'),('paquito','paquito','paquito','paquito','f1aaaa4510293f29504303fc3111a7ae','2','paquito','true'),('PONCIO','GUARRO','GUARRA','CERDO','536309514a9507454feefa2f07fd3a7c','1','PITONCIO','true'),('rrr','rrrr','rrrr','rrrr','eb9279982226a42afdf2860dbdc29b45','rrrr','rrrrr',NULL),('rrrr','rrrr','rrrrrr','rrrr','6c8349cc7260ae62e3b1396831a8398f','rrrr','999',NULL),('rtghbbb','3','3','33','2be9bd7a3434f7038ca27d1918de58bd','3','3333','true'),('we','we','we','','we','ew','qw','TRUE');
/*!40000 ALTER TABLE `PROFESOR` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-23  0:21:35
