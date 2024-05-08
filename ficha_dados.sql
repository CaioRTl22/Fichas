-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: db_ficha
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_ficha`
--

DROP TABLE IF EXISTS `tb_ficha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_ficha` (
  `id_ficha` int NOT NULL AUTO_INCREMENT,
  `tb_usuario_usuario_email` varchar(255) NOT NULL,
  `nome_ficha` varchar(255) NOT NULL,
  `idade_ficha` int DEFAULT NULL,
  `nivel_ficha` int DEFAULT NULL,
  `afinidade_ficha` varchar(255) DEFAULT NULL,
  `classe_ficha` varchar(255) DEFAULT NULL,
  `trilha_ficha` varchar(255) DEFAULT NULL,
  `vida_ficha` int DEFAULT NULL,
  `sanidade_ficha` int DEFAULT NULL,
  `pp_ficha` int DEFAULT NULL,
  `forca_ficha` int DEFAULT NULL,
  `destreza_ficha` int DEFAULT NULL,
  `constituicao_ficha` int DEFAULT NULL,
  `sabedoria_ficha` int DEFAULT NULL,
  `inteligencia_ficha` int DEFAULT NULL,
  `carisma_ficha` int DEFAULT NULL,
  `poder_ficha` int DEFAULT NULL,
  `arm_passiva_ficha` int DEFAULT NULL,
  `bloqueio_ficha` int DEFAULT NULL,
  `esquiva_ficha` int DEFAULT NULL,
  `red_fisica_ficha` int DEFAULT NULL,
  `red_paranormal_ficha` int DEFAULT NULL,
  `red_mental_ficha` int DEFAULT NULL,
  `movimento_ficha` int DEFAULT NULL,
  `acrobacia_ficha` tinyint DEFAULT '0',
  `atletismo_ficha` tinyint DEFAULT '0',
  `atualizacoes_ficha` tinyint DEFAULT '0',
  `ciencias_ficha` tinyint DEFAULT '0',
  `enganacao_ficha` tinyint DEFAULT '0',
  `fortitude_ficha` tinyint DEFAULT '0',
  `furtividade_ficha` tinyint DEFAULT '0',
  `iniciativa_ficha` tinyint DEFAULT '0',
  `luta_ficha` tinyint DEFAULT '0',
  `ocultismo_ficha` tinyint DEFAULT '0',
  `percepcao_ficha` tinyint DEFAULT '0',
  `pilotagem_ficha` tinyint DEFAULT '0',
  `pontaria_ficha` tinyint DEFAULT '0',
  `psicologia_ficha` tinyint DEFAULT '0',
  `reflexos_ficha` tinyint DEFAULT '0',
  `tecnologia_ficha` tinyint DEFAULT '0',
  `vontade_ficha` tinyint DEFAULT '0',
  `bonus_pericia_ficha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_ficha`),
  KEY `fk_tb_ficha_tb_usuario_idx` (`tb_usuario_usuario_email`),
  CONSTRAINT `fk_tb_ficha_tb_usuario` FOREIGN KEY (`tb_usuario_usuario_email`) REFERENCES `tb_usuario` (`usuario_email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_ficha`
--

LOCK TABLES `tb_ficha` WRITE;
/*!40000 ALTER TABLE `tb_ficha` DISABLE KEYS */;
INSERT INTO `tb_ficha` VALUES (1,'caiorlima22@gmail.com','Karl',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'caiorlima22@gmail.com','Isaac',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tb_ficha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_usuario` (
  `usuario_email` varchar(255) NOT NULL,
  `usuario_nome` varchar(255) NOT NULL,
  `usuario_senha` varchar(255) NOT NULL,
  PRIMARY KEY (`usuario_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usuario`
--

LOCK TABLES `tb_usuario` WRITE;
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` VALUES ('a@gmail.com','a','$2y$10$rdPfUg6W52AAFH/g7Ucft.vwdrxQzVS03erRw4T.8dX78V6KdWIva'),('caiorlima22@gmail.com','Sollarium','$2y$10$MdnqHzXyJ5wGoXoxCXZ/YOyKUSlZiS9IWXs2T7XvkkMMkZNX2iirK'),('o@gmail.com','o','$2y$10$H5VLra0ZkNTl5UEjuhowT.06RGxQZ8Lp6XTVZyc7L/BFgKTRstptS'),('oi@gmail.com','Oi','$2y$10$GVB4IPSxT.h/DMJYhjlAwO2RJs3PUX4SV5W0OxbD6m/Pln83XNEqW');
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-08 12:47:32
