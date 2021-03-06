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
-- Table structure for table `PagSeguroProdutos`
--

/*ALTER DATABASE `Bazarro` CHARSET = Latin1 COLLATE = latin1_swedish_ci;*/

ALTER DATABASE `Bazarro` CHARSET = UTF8 COLLATE = utf8_general_ci;

DROP TABLE IF EXISTS `PagSeguroProdutos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PagSeguroProdutos` (
  `VendedorEmail` varchar(255) NOT NULL,
  `TransacaoID` varchar(32) NOT NULL,
  `Ordem` mediumint(5) unsigned NOT NULL,
  `ProdID` varchar(100) DEFAULT NULL,
  `ProdDescricao` varchar(100) DEFAULT NULL,
  `ProdValor` decimal(10,2) DEFAULT NULL,
  `ProdQuantidade` mediumint(5) unsigned DEFAULT NULL,
  `ProdFrete` decimal(10,2) DEFAULT NULL,
  KEY `VendedorEmail` (`VendedorEmail`,`TransacaoID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PagSeguroProdutos`
--

LOCK TABLES `PagSeguroProdutos` WRITE;
/*!40000 ALTER TABLE `PagSeguroProdutos` DISABLE KEYS */;
/*!40000 ALTER TABLE `PagSeguroProdutos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PagSeguroTransacoes`
--

DROP TABLE IF EXISTS `PagSeguroTransacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PagSeguroTransacoes` (
  `VendedorEmail` varchar(255) NOT NULL,
  `TransacaoID` varchar(32) NOT NULL,
  `Referencia` varchar(255) DEFAULT NULL,
  `Extras` decimal(10,2) DEFAULT NULL,
  `TipoFrete` char(2) DEFAULT NULL,
  `ValorFrete` decimal(10,2) DEFAULT NULL,
  `Anotacao` varchar(250) DEFAULT NULL,
  `DataTransacao` datetime NOT NULL,
  `TipoPagamento` varchar(30) NOT NULL,
  `StatusTransacao` varchar(30) NOT NULL,
  `CliNome` varchar(100) NOT NULL,
  `CliEmail` varchar(255) NOT NULL,
  `CliEndereco` varchar(200) NOT NULL,
  `CliNumero` varchar(10) DEFAULT NULL,
  `CliComplemento` varchar(100) DEFAULT NULL,
  `CliBairro` varchar(100) NOT NULL,
  `CliCidade` varchar(100) NOT NULL,
  `CliEstado` char(2) NOT NULL,
  `CliCEP` varchar(10) NOT NULL,
  `CliTelefone` varchar(16) DEFAULT NULL,
  `NumItens` mediumint(5) unsigned NOT NULL,
  `Data` datetime NOT NULL,
  `Status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  KEY `VendedorTransacao` (`VendedorEmail`,`TransacaoID`),
  KEY `StatusTransacao` (`StatusTransacao`),
  KEY `Status` (`Status`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PagSeguroTransacoes`
--

LOCK TABLES `PagSeguroTransacoes` WRITE;
/*!40000 ALTER TABLE `PagSeguroTransacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `PagSeguroTransacoes` ENABLE KEYS */;
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
  `complemento` varchar(30) DEFAULT NULL,
  `CEP` varchar(15) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `codusu` int(11) NOT NULL AUTO_INCREMENT,
  KEY `codusu` (`codusu`),
  CONSTRAINT `endereco_ibfk_1` FOREIGN KEY (`codusu`) REFERENCES `usuario` (`codusu`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES ('rua a b c',1,'null','123456789','sao paulo','sp',1),('rua x y z',4,'null','987654321','sao paulo','sp',2),('rua oi oi',8,'null','123456789','sao paulo','sp',3);
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `codcat` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`codcat`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Mascara'),(2,'Pet'),(3,'Higiene'),(4,'Cozinha');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
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
  `descricao` varchar(500) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `comentario` varchar(255) DEFAULT NULL,
  `codcat` int(11) NOT NULL,
  PRIMARY KEY (`codpro`)
  --FOREIGN KEY (`codcat`) REFERENCES `categoria` (`codcat`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'Mascara de Bebe',40,'Img/Produtos/Mascaras/mascara_bebe.jpg','Traga de volta aquele brilho juvenil, sem entrar na faca quando você cobrir seu lindo rosto com uma dessas máscaras de bebê assustadoras. Estas máscaras de látex de qualidade de Hollywood vão voltar aos seus anos de inocência e o susto nos mais velhos será garantido!','http://www.facebook.com/plugins/like.php?href=http://on.fb.me/1EI6bMp','coco','1'),(2,'Mascara de Pug',25,'Img/Produtos/Mascaras/mascara_pug.jpg','Agora você pode abraçar o adorável estilo de vida canino! Pode realmente se sentir na pele do melhor amigo do homem com esta máscara pug hiperrealista. Garanta a sua e corra pra cheirar o traseiro do cão de um estranho!','http://www.facebook.com/plugins/like.php?href=http://on.fb.me/1GUfZ85','coco','1'),(3,'Mascara do Sloth',58,'Img/Produtos/Mascaras/mascara_sloth.jpg','Preste homenagem a um dos maiores párias de todo o cinema, Sloth Fratelli. Incompreendido, heróico —ele é o salvador do Chunk e parte da razão pela qual os Goonies são capazes de escapar—. Advertência: quando você coloca essa máscara, a vontade de comer sorvete Rocky Road e barras de chocolate Baby Ruth será impreterível.','http://www.facebook.com/plugins/like.php?href=http://bitly.com/11mtXzv','coco','1'),(4,'Arranhador Kim Jong Un',89,'Img/Produtos/Pet/arranhador.jpg','Dê ao líder indiscutível da Coreia do Norte uma saudação apropriada ao deixar seu gatinho rasgá-lo com o arranhador de gato Kim Jong Un. Ele foi cuidadosamente trabalhada para parecer exatamente como o glorioso líder e é o brinquedo ideal para qualquer proprietário de gato que odeia censura.','http://www.facebook.com/plugins/like.php?href=http://on.fb.me/1ui2dat','coco','2'),(5,'Poopy Puppy',25,'Img/Produtos/Pet/poopy_puppy.jpg','Fogos de artifícios diferentes. Este cãozinho não aguentou tanta festividade e está com um problema de soltura! Viva o feriado prolongado! É só acender o pavio indicado no produto e ver o espetáculo.','http://www.facebook.com/plugins/like.php?href=http://on.fb.me/1qGuHoY','coco','2'),(6,'Treine seu gato a ir ao banheiro',65,'Img/Produtos/Pet/toilet_train.jpg','Livre sua casa daquele desagradável cheiro de caixa de areia com este sistema de treino pro seu gato ir ao toalete. Dentro de oito semanas o seu gato vai deixar os seus caminhos primitivos para trás e aprender a fazer suas necessidades como um lorde!','http://www.facebook.com/plugins/like.php?href=http://on.fb.me/1u7AIP5','coco','2'),(7,'Sabonete de feto',10,'Img/Produtos/Higiene/sabonete_feto.jpg','Reflita sobre o sentido da vida e lave as mãos ao mesmo tempo com essas barras de sabão em formato de feto. Cada uma destas barras de sabão estranhas são feitas usando sabonete de leite de cabra e óleo de lavanda para uma sensação de frescor e hidratação.','http://www.facebook.com/plugins/like.php?href=http://on.fb.me/1tOllHH','coco','3'),(8,'Sabonete de dedos decepados',13,'Img/Produtos/Higiene/sabonete_dedos.jpg','Mantenha os dedos frescos e as mãos limpas, lavando-as com os dedos decepados! Calma, antes que você se assuste com a ambiguidade, este produto não vai decepar os seus dedos, são apenas imitações de dedos humanos assustadores. Sabonetes com um maravilhoso aroma de melancia adicionados a eles.','http://www.facebook.com/plugins/like.php?href=http://on.fb.me/1znzBg5','coco','3'),(9,'Dispenser de meleca',28,'Img/Produtos/Higiene/booger_dispenser.jpg','Este dispenser de parede em formato de nariz e tamanho um pouco maior que o do Luciano Huck é loucura-loucura-loucura! Carregue-o com xampu de aloe vera, sabão líquido verde ou esfoliante e você terá dificuldade em se sentir limpo enquanto esfrega meleca pelo corpo.','http://www.facebook.com/plugins/like.php?href=http://on.fb.me/1xCPj7z','coco','3'),(10,'Torradeira Selfie',99,'Img/Produtos/Cozinha/torradeira_selfie.jpg','Alimente o seu corpo — e seu ego — com um café-da-manhã/almoço/lanche da tarde/jantar/lanche da madrugada leve usando a Torradeira Selfie. Depois de selecionar aquela selfie que ganhou 300 curtidas no Instagram, a torradeira, em seguida, \"imprime\" seu autorretrato comestível. #Toastie','http://www.facebook.com/plugins/like.php?href=http://on.fb.me/1xxDvTc','coco','4'),(11,'Xicara gigante de cafe',130,'Img/Produtos/Cozinha/xicara_gigante.jpg','Dificuldade pra ficar acordado no trabalho? Não está conseguindo estudar? Se a resposta foi sim é porque você ainda não tem A Maior Xícara de Café do Mundo. Esta caneca de porcelana fina (como um mamute) comporta o equivalente a vinte xícaras normais de café, então, uma única xícara fará com que você atinja níveis de produtividade ainda desconhecidos pelo homem — ou, eventualmente, ter um ataque cardíaco.','http://www.facebook.com/plugins/like.php?href=http://on.fb.me/1ui6yKF','coco','4'),(12,'Spray comestivel',30,'Img/Produtos/Cozinha/spray_comestivel.jpg','Já imaginou \"Se eu ganhasse uma pedra de ouro sempre que comesse algo, eu já estaria rico!\"? Agora você pode tornar esse desejo realidade e fazer todas as suas refeições parecerem um verdadeiro banquete com este Spray Comestível! Disponível em ouro, prata, ferrugem e alguns tons de azul, esta tinta spray vai fazer qualquer lanchinho em uma explosão de cores!','http://www.facebook.com/plugins/like.php?href=http://on.fb.me/1pX85pw','coco','4');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Thomaz','1995-12-24','M','1111111111','11111111111111','null','111111111','thomazpicelli@gmail.com','e10adc3949ba59abbe56'),(2,'Gabriel ','1996-12-23','M','222222222','222222222222','null','222222222222','gabriel@oi.com','e10adc3949ba59abbe56'),(3,'Rhenan','1995-10-12','M','3333333333','333333333333','null','33333333333','rhenan@oi.com.br','e10adc3949ba59abbe56');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `codusu` int(11) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Thomaz','1995-12-24','M','1111111111','11111111111111','null','111111111','thomazpicelli@gmail.com','e10adc3949ba59abbe56'),(2,'Gabriel ','1996-12-23','M','222222222','222222222222','null','222222222222','gabriel@oi.com','e10adc3949ba59abbe56'),(3,'Rhenan','1995-10-12','M','3333333333','333333333333','null','33333333333','rhenan@oi.com.br','e10adc3949ba59abbe56');
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

-- Dump completed on 2014-11-20 20:43:21
