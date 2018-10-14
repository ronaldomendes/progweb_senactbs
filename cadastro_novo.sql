-- MySQL dump 10.16  Distrib 10.1.32-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: cadastro
-- ------------------------------------------------------
-- Server version	10.1.32-MariaDB

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
-- Table structure for table `cadastro_sala`
--

DROP TABLE IF EXISTS `cadastro_sala`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadastro_sala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sala` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `andar` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `curso` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `professor` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_sala`
--

LOCK TABLES `cadastro_sala` WRITE;
/*!40000 ALTER TABLE `cadastro_sala` DISABLE KEYS */;
INSERT INTO `cadastro_sala` VALUES (1,'Laboratório 45','08:30:00','12:30:00','4º Andar','Técnico em Informática T04 - 81404','Não Informado'),(2,'Laboratório 46','08:30:00','12:30:00','4º Andar','Técnico em Informática T03 - 50436','Não Informado'),(3,'Laboratório 47','08:30:00','12:30:00','4º Andar','Assistente Financeiro - 96252','Não Informado'),(4,'Laboratório 51','08:30:00','12:30:00','5º Andar','Técnico em Enfermagem (M05) - 94032','Não Informado'),(5,'Laboratório 52','08:30:00','12:30:00','5º Andar','Maquiador - 96626','Não Informado'),(6,'Sala 21','08:30:00','12:30:00','2º Andar','Técnico em Logística - 85450 - T11','Não Informado'),(7,'Sala 22','08:30:00','12:30:00','2º Andar','Técnico em Cozinha - T3 - 50373 (Kit Móvel)','Não Informado'),(8,'Sala 24','08:30:00','12:30:00','2º Andar','Técnico em Segurança do Trabalho - T14 - 92690','Não Informado'),(9,'Sala 25','08:30:00','12:30:00','2º Andar','Técnico em Segurança do Trabalho - T11 - 74083','Não Informado'),(10,'Sala 26','08:30:00','12:30:00','2º Andar','Técnico em Recursos Humanos - 96242','Não Informado'),(11,'Sala 31','08:30:00','12:30:00','3º Andar','Técnico em Administração - 96225 T16','Não Informado'),(12,'Sala 32','08:30:00','12:30:00','3º Andar','Técnico em Logística - 83076 - T9','Não Informado'),(13,'Sala 33','08:30:00','12:30:00','3º Andar','Recepcionista em Meios de Hospedagem','Não Informado'),(14,'Sala 34','08:30:00','12:30:00','3º Andar','Técnico em Nutrição e Dietética - T02 - 53202','Não Informado'),(15,'Sala 35','08:30:00','12:30:00','3º Andar','Técnico em Enfermagem (M04) - 94028','Não Informado'),(16,'Sala 36','08:30:00','12:30:00','3º Andar','Técnico em Administração - 91037 - T14','Não Informado'),(17,'Sala 41','08:30:00','12:30:00','4º Andar','Técnico em Administração - 70871 - T13','Não Informado'),(18,'Sala 43','08:30:00','12:30:00','4º Andar','Auxiliar de Escritório 109899','Não Informado'),(19,'Sala 44','08:30:00','12:30:00','4º Andar','Técnico em Enfermagem - 56187','Não Informado'),(20,'Sala 54','08:30:00','12:30:00','5º Andar','Técnico em Nutrição e Dietética - T3','Não Informado'),(21,'Sala 42','08:30:00','12:30:00','4º Andar','Jardineiro - 106597','Não Informado'),(22,'Laboratório 52','13:00:00','17:00:00','5º Andar','Cabelereiro - FLA - 83527','Não Informado'),(23,'Sala 21','13:00:00','17:00:00','2º Andar','Aprendizagem - T44 - 91233','Não Informado'),(24,'Sala 22','13:00:00','17:00:00','2º Andar','Aprendizagem - T49 - 111415','Não Informado'),(25,'Sala 25','13:00:00','17:00:00','2º Andar','Aprendizagem - T35 - 74710','Não Informado'),(26,'Sala 26','13:00:00','17:00:00','2º Andar','Aprendizagem - T47 - 107431','Não Informado'),(27,'Sala 48','13:00:00','17:00:00','4º Andar','Aprendizagem - T48 - 101057','Não Informado'),(28,'Sala 49','13:00:00','17:00:00','4º Andar','Aprendizagem - T38 - 62192','Não Informado'),(29,'Auditório','13:30:00','17:30:00','3º Andar','Auxiliar de Recursos Humanos - 105983','Não Informado'),(30,'Laboratório 45','13:30:00','17:30:00','4º Andar','Técnico em Informática T05 - 96747','Não Informado'),(31,'Laboratório 46','13:30:00','17:30:00','4º Andar','Programador Web - 81396','Não Informado'),(32,'Laboratório 47','13:30:00','17:30:00','4º Andar','Técnico em Produção de Moda','Não Informado'),(33,'Laboratório 51','13:30:00','17:30:00','5º Andar','Cuidador de Idoso - 96693','Não Informado'),(34,'Sala 24','13:30:00','17:30:00','2º Andar','Auxiliar de Escritório - 96261','Não Informado'),(35,'Sala 32','13:30:00','17:30:00','3º Andar','Técnico em Design de Interiores - 945','Não Informado'),(36,'Sala 33','13:30:00','17:30:00','3º Andar','Técnico em Administração - 50977 - T11','Não Informado'),(37,'Sala 35','13:30:00','17:30:00','3º Andar','Técnico em Enfermagem - 53714 - mód/comp: 12ES3','Não Informado'),(38,'Sala 43','13:30:00','17:30:00','4º Andar','Agente Cultural - 106593','Não Informado'),(39,'Laboratório 52','18:00:00','22:00:00','5º Andar','Cabelereiro - MAG - 83527','Não Informado'),(40,'Laboratório 45','19:00:00','22:00:00','4º Andar','Técnico em Informática Manut. e Sup','Não Informado'),(41,'Laboratório 46','19:00:00','22:00:00','4º Andar','Técnico em Informática para Internet','Não Informado'),(42,'Laboratório 47','19:00:00','22:00:00','4º Andar','Técnico Design de Interiores - 53729','Não Informado'),(43,'Laboratório 51','19:00:00','22:30:00','5º Andar','Cuidador Infantil - 96695','Não Informado'),(44,'Laboratório 53','19:00:00','22:30:00','5º Andar','Confeccionista de Patchwork - 96907','Não Informado'),(45,'Laboratório 54','19:00:00','22:00:00','5º Andar','Formação Básica em Gastronomia - 92','Não Informado'),(46,'Sala 21','19:00:00','22:30:00','2º Andar','Técnico em Logística - 83097 - T10','Não Informado'),(47,'Sala 22','19:00:00','22:00:00','2º Andar','Educador Social - 91373','Não Informado'),(48,'Sala 24','19:00:00','22:30:00','2º Andar','ESocial - 110716','Não Informado'),(49,'Sala 25','19:00:00','22:30:00','2º Andar','Auxiliar de Serviços Contábeis - 105443','Não Informado'),(50,'Sala 26','19:00:00','22:30:00','2º Andar','Técnico em Logística - 96235 - T12','Não Informado'),(51,'Sala 31','19:00:00','22:30:00','3º Andar','Técnico em Administração - 91038 - T15','Não Informado'),(52,'Sala 32','19:00:00','22:30:00','3º Andar','Técnico Recursos Humanos - 70870 - T6','Não Informado'),(53,'Sala 33','19:00:00','22:30:00','3º Andar','Técnico em Segurança no Trabalho - T12 - 74082','Não Informado'),(54,'Sala 34','19:00:00','22:30:00','3º Andar','Organizador de Eventos - 96234','Não Informado'),(55,'Sala 35','19:00:00','22:30:00','3º Andar','Técnico em Administração - 70869 - T12','Não Informado'),(56,'Sala 36','19:00:00','22:30:00','3º Andar','Técnico em Segurança do Trabalho - T13 - 92684','Não Informado'),(57,'Sala 44','19:00:00','22:30:00','4º Andar','Técnico em Cozinha - T4 - 92483','Não Informado'),(58,'Sala 48','19:00:00','22:30:00','4º Andar','Técnico em Segurança no Trabalho - T8 - 53676','Não Informado'),(59,'Auditório','19:00:00','21:30:00','3º Andar','Fotografia: A Viagem Está Dentro de ','Não Informado'),(60,'Sala 49','19:00:00','22:30:00','4º Andar','Técnico em Produção de Moda','Não Informado');
/*!40000 ALTER TABLE `cadastro_sala` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Ronaldo Mendes da Silva','master','a3cd7be7a148e8380e3fbd21e1508065');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-12 23:23:21
