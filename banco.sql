-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: Bazarro
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.13.10.1

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
-- Table structure for table `carrinho`
--

DROP TABLE IF EXISTS `carrinho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrinho` (
  `codusu` int(11) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  KEY `codusu` (`codusu`),
  CONSTRAINT `codusu` FOREIGN KEY (`codusu`) REFERENCES `usuario` (`codusu`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrinho`
--

LOCK TABLES `carrinho` WRITE;
/*!40000 ALTER TABLE `carrinho` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrinho` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `endereco` (
  `endereco` varchar(100) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemeto` varchar(30) DEFAULT NULL,
  `CEP` varchar(15) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` bit(30) DEFAULT NULL,
  `codusu` int(11) DEFAULT NULL,
  KEY `codusu` (`codusu`),
  CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`codusu`) REFERENCES `usuario` (`codusu`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produto` (
  `codpro` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `comentario` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codpro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'Mascara de Bebê',40,'/Img/Produtos/Mascaras/mascara_bebe.jpg','descriçao mascara bebe','http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Bazarro/620119341440567','cocô'),(2,'Mascara de Pug',25,'/Img/Produtos/Mascaras/mascara_pug.jpg','descriçao mascara pug','http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Bazarro/620119341440567','cocô'),(3,'Mascara do Sloth',58,'/Img/Produtos/Mascaras/mascara_sloth.jpg','descriçao mascara sloth','http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Bazarro/620119341440567','cocô'),(4,'Arranhador Kim Jong Un',89,'/Img/Produtos/Pet/arranhador.jpg','descriçao arranhaor','http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Bazarro/620119341440567','cocô'),(5,'Poopy Puppy',25,'/Img/Produtos/Pet/poopy_puppy.jpg','descriçao poopy puppy','http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Bazarro/620119341440567','cocô'),(6,'Treine seu gato a ir ao banheiro',65,'/Img/Produtos/Pet/toilet_train.jpg','descriçao mascara bebe','http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Bazarro/620119341440567','cocô'),(7,'Sabonete de feto',10,'/Img/Produtos/Higiene/sabonete_feto.jpg','descriçao mascara bebe','http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Bazarro/620119341440567','cocô'),(8,'Sabonete de dedos decepados',13,'/Img/Produtos/Higiene/sabonete_dedos.jpg','descriçao mascara bebe','http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Bazarro/620119341440567','cocô'),(9,'Dispenser de meleca',28,'/Img/Produtos/Higiene/booger_dispenser.jpg','descriçao mascara bebe','http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Bazarro/620119341440567','cocô'),(10,'Torradeira Selfie',99,'/Img/Produtos/Cozinha/torradeira_selfie.jpg','descriçao mascara bebe','http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Bazarro/620119341440567','cocô'),(11,'Xícara gigante de café',130,'/Img/Produtos/Cozinha/xicara_gigante.jpg','descriçao mascara bebe','http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Bazarro/620119341440567','cocô'),(12,'Spray comestível',30,'/Img/Produtos/Cozinha/spray_comestivel.jpg','descriçao mascara bebe','http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/pages/Bazarro/620119341440567','cocô');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `codusu` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `RG` varchar(10) DEFAULT NULL,
  `CPF` varchar(20) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`codusu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-12 11:26:04
