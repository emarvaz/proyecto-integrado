-- MySQL dump 10.13  Distrib 8.0.42, for Linux (x86_64)
--
-- Host: localhost    Database: mundo_de_cartas
-- ------------------------------------------------------
-- Server version	8.0.42-0ubuntu0.24.04.1

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
-- Table structure for table `ability`
--

DROP TABLE IF EXISTS `ability`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ability` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int NOT NULL,
  `value` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_35CFEE3C12469DE2` (`category_id`),
  CONSTRAINT `FK_35CFEE3C12469DE2` FOREIGN KEY (`category_id`) REFERENCES `ability_category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ability`
--

LOCK TABLES `ability` WRITE;
/*!40000 ALTER TABLE `ability` DISABLE KEYS */;
INSERT INTO `ability` VALUES (1,2,'Golpe aplastante','Un ataque poderoso que puede dejar aturdido al enemigo.',50,80),(2,1,'Filo sangriento','Un corte que drena la vida del enemigo gradualmente.',40,65),(3,7,'Toque espectral','Invoca miedo, reduciendo las capacidades del enemigo.',90,100),(4,5,'Estocada profunda','Penetra armaduras pesadas causando daño directo.',70,60),(5,6,'Llama abrasadora','Quema al enemigo infligiendo daño continuo por varios turnos.',45,90),(6,4,'Puñalada venenosa','Ataque rápido que envenena y causa daño lento.',25,10),(7,8,'Resurrección oscura','Levanta a los muertos para que peleen a tu lado.',100,100),(8,2,'Golpe devastador','Un golpe de gran potencia que puede aturdir y causar quemaduras.',85,90),(9,1,'Corte sangriento','Herida que drena la vida poco a poco y reduce la defensa del enemigo.',37,10),(10,4,'Espada fantasma','Ataque que atraviesa armaduras ligeras y causa miedo.',54,67),(11,3,'Impacto corrosivo','Golpe que aplica veneno y reduce la resistencia del enemigo.',77,99),(12,6,'Pincho mortal','Perfora armaduras y provoca quemaduras internas.',99,99),(13,7,'Aura oscura','Emite miedo y drena la vida de enemigos cercanos.',100,100),(14,3,'Lanza espectral','Proyectil que atraviesa obstáculos y envenena al objetivo.',43,67),(15,4,'Cuchillada rápida','Ataque veloz que provoca una herida que drena vida.',5,15),(16,3,'Golpe fantasma','Ataque contundente que aturde y aplica veneno.',70,50),(17,3,'Flecha envenenada','Disparo que atraviesa armaduras y aplica veneno persistente.',40,45),(18,7,'Mordisco de la muerte','Daño cortante que drena vida y reduce capacidades.',100,100),(19,8,'Llama necromántica','Daño por quemadura que revive a un aliado muerto temporalmente.',90,100),(20,7,'Puñalada oscura','Ataque punzante que atraviesa defensas débiles y causa miedo.',33,69);
/*!40000 ALTER TABLE `ability` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ability_category`
--

DROP TABLE IF EXISTS `ability_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ability_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ability_category`
--

LOCK TABLES `ability_category` WRITE;
/*!40000 ALTER TABLE `ability_category` DISABLE KEYS */;
INSERT INTO `ability_category` VALUES (1,'Cortante','Infliges daño que drena vida poco a poco.'),(2,'Contundente','Golpes de gran potencia, capaces de aturdir a los enemigos.'),(3,'Veneno','Tus enemigos pierden vida lentamente.'),(4,'Punzante','Atraviesa armaduras y obstáculos débiles.'),(5,'Perforante','Atraviesa armaduras pesadas y obstáculos duros.'),(6,'Quemadura','Inflige daño durante varios turnos.'),(7,'Miedo','Los enemigos pierden capacidades.'),(8,'Necromancia','Revivir a los muertos.');
/*!40000 ALTER TABLE `ability_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `card`
--

DROP TABLE IF EXISTS `card`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `health` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card`
--

LOCK TABLES `card` WRITE;
/*!40000 ALTER TABLE `card` DISABLE KEYS */;
INSERT INTO `card` VALUES (1,'Titan de Hierro','68495605b9d34.webp','Un coloso que aplasta a sus enemigos con fuerza bruta.',120),(2,'Viejo Guardian','6849136a38909.webp','Ataca rápido y desaparece en la oscuridad.',70),(3,'Llama del Caos','6849134eecfb8.webp','Una tormenta de fuego que consume todo a su paso.',90),(4,'Alma Perdida','684910de04a79.webp','Espíritu que drena la vida y siembra terror.',60),(5,'Rey Esqueleto','6849562c24d16.jpg','Líder de los no-muertos, capaz de levantar a sus caídos.',110),(6,'Asesino Venenoso','6849115c6f666.jpg','Un maestro del veneno y las puñaladas precisas.',75),(7,'Guardián de la Fortaleza','684912672925c.jpg','Su armadura es casi impenetrable.',130),(8,'Espadachín Fantasma','684912385d5d6.jpg','Ataques veloces que atraviesan defensas ligeras.',80),(9,'Hechicero Oscuro','68491273e042a.jpg','Controla la necromancia y el miedo para dominar.',85),(10,'Cazador Venenoso','6849119b7ed15.jpg','Dispara flechas que envenenan a largo alcance.',65),(11,'Bruja del Fuego','6849117b943cf.jpg','Inflige quemaduras mortales con sus hechizos.',75),(12,'Espía Sombrío','684912587c8cf.webp','Se mueve en silencio sembrando miedo.',60),(13,'Coloso de Acero','684911ffaf855.png','Atraviesa cualquier defensa con su lanza.',125),(14,'Nigromante Errante','684912a3e7041.jpg','Revive a los muertos y usa su energía para dañar.',80),(15,'Ladrón Ágil','6849128ebe689.webp','Ataques rápidos que drenan la vida del enemigo.',70),(16,'Caballero de la Muerte','68491188f058d.jpg','Golpes que aturden y causan heridas venenosas.',100),(17,'Arquero Fantasma','68491140645b0.webp','Flechas que atraviesan armaduras y envenenan.',65),(18,'Bestia Ardiente','6849116b6f4de.webp','Feroz y abrasadora, quema todo a su alrededor.',90),(19,'Demonio de la Noche','6849121a178aa.webp','Siembra miedo y causa daño continuo con sus garras.',85),(20,'Espía del Abismo','684910a494055.png','Ataques punzantes y terroríficos que atraviesan cualquier defensa.',75);
/*!40000 ALTER TABLE `card` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `card_ability`
--

DROP TABLE IF EXISTS `card_ability`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card_ability` (
  `card_id` int NOT NULL,
  `ability_id` int NOT NULL,
  PRIMARY KEY (`card_id`,`ability_id`),
  KEY `IDX_62D5644A4ACC9A20` (`card_id`),
  KEY `IDX_62D5644A8016D8B2` (`ability_id`),
  CONSTRAINT `FK_62D5644A4ACC9A20` FOREIGN KEY (`card_id`) REFERENCES `card` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_62D5644A8016D8B2` FOREIGN KEY (`ability_id`) REFERENCES `ability` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card_ability`
--

LOCK TABLES `card_ability` WRITE;
/*!40000 ALTER TABLE `card_ability` DISABLE KEYS */;
INSERT INTO `card_ability` VALUES (1,1),(1,11),(2,13),(2,15),(3,5),(3,8),(4,3),(4,18),(5,7),(5,19),(6,6),(6,17),(7,1),(7,4),(8,10),(8,15),(9,7),(9,13),(10,14),(10,17),(11,5),(11,19),(12,3),(12,20),(13,1),(13,12),(14,7),(14,18),(15,9),(15,15),(16,6),(16,8),(17,14),(17,17),(18,2),(18,5),(19,5),(19,16),(20,4),(20,10);
/*!40000 ALTER TABLE `card_ability` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `card_deck`
--

DROP TABLE IF EXISTS `card_deck`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card_deck` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_favorite` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_A39F3495A76ED395` (`user_id`),
  CONSTRAINT `FK_A39F3495A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card_deck`
--

LOCK TABLES `card_deck` WRITE;
/*!40000 ALTER TABLE `card_deck` DISABLE KEYS */;
INSERT INTO `card_deck` VALUES (1,3,'Mazo 1',0),(2,3,'Mazo 2',0),(3,3,'Mazo 3',0),(4,3,'Mazo 4',0),(5,4,'Los electos',1),(6,4,'Mazo 2',0),(7,4,'Mazo 3',0),(8,4,'Mazo 4',0),(9,5,'Mis favoritos',1),(10,5,'Mazo 2',0),(11,5,'Mazo 3',0),(12,5,'Mazo 4',0),(13,6,'Mazo 1',0),(14,6,'Mazo 2',0),(15,6,'Mazo 3',0),(16,6,'Mazo 4',0),(17,7,'Mazo 1',1),(18,7,'Mazo 2',0),(19,7,'Mazo 3',0),(20,7,'Mazo 4',0),(21,8,'Mazo 1',0),(22,8,'Mazo 2',0),(23,8,'Mazo 3',0),(24,8,'Mazo 4',0),(25,9,'Mazo 1',0),(26,9,'Mazazo',1),(27,9,'Mazo 3',0),(28,9,'Mazo 4',0);
/*!40000 ALTER TABLE `card_deck` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `card_deck_card`
--

DROP TABLE IF EXISTS `card_deck_card`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `card_deck_card` (
  `card_deck_id` int NOT NULL,
  `card_id` int NOT NULL,
  PRIMARY KEY (`card_deck_id`,`card_id`),
  KEY `IDX_5EFB3FB94603C2AA` (`card_deck_id`),
  KEY `IDX_5EFB3FB94ACC9A20` (`card_id`),
  CONSTRAINT `FK_5EFB3FB94603C2AA` FOREIGN KEY (`card_deck_id`) REFERENCES `card_deck` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_5EFB3FB94ACC9A20` FOREIGN KEY (`card_id`) REFERENCES `card` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `card_deck_card`
--

LOCK TABLES `card_deck_card` WRITE;
/*!40000 ALTER TABLE `card_deck_card` DISABLE KEYS */;
INSERT INTO `card_deck_card` VALUES (5,2),(5,3),(5,8),(5,9),(5,10),(5,11),(5,12),(5,13),(9,6),(9,7),(9,8),(9,9),(9,13),(9,18),(9,19),(9,20),(13,1),(13,3),(13,7),(14,1),(14,8),(14,10),(17,1),(17,2),(17,3),(17,4),(17,5),(17,6),(17,7),(17,18),(22,2),(22,3),(22,9),(22,10),(22,11),(22,12),(22,13),(25,1),(25,2),(25,3),(25,4),(25,5),(25,6),(25,7),(25,8),(26,16),(26,18);
/*!40000 ALTER TABLE `card_deck_card` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` json NOT NULL,
  `register_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'administrador','administrador@example.com','$2y$13$X3NVWRnV4poxnDAsn4lLvOF42QJP7X/lc1p6K9wK691WRRMq8Gf7q','Administrador','de la aplicación',NULL,'[\"ROLE_ADMIN\"]','2025-06-11 03:08:21'),(3,'pedro','pedro@gmail.com','$2y$13$.96cMnNSdAwQZvHiz.ZVo.i6Rzr3mPYkLVEdYa38x9nQYJL69aORW','Pedro','Pérez Romero',NULL,'[\"ROLE_ADMIN\"]','2025-06-11 03:21:57'),(4,'carlos','carlos@iescamas.es','$2y$10$EQgDNioaNp4wUJOUGIoRcOJ3j5TIoLtGuubVhR45dj40RoeW0x5Vu','Carlos','Méndez Sánchez','684908582ee05.jpg','[\"ROLE_USER\"]','2025-06-11 04:34:48'),(5,'pepe','martvazqedua@gmail.com','$2y$13$ysqXd2QSAfMiWt0SAFPVpO/pOgISfkEVOiF3WXtNEjWAaPLYbYhKa','Pepe','Vázquez Yerga','68491581d49c3.webp','[]','2025-06-11 04:36:20'),(6,'delia','delia@iescamas.es','$2y$13$G7AcIe.9WDxhodPN/v2/Bu6C8iUDg8/n0ZfrspBFKbOFBgG7iTvjC','Delia','Ramírez Pastor','68492dcada2b4.jpg','[]','2025-06-11 06:55:30'),(7,'manolo','manolo@gmail.com','$2y$13$Bzv3zyZ68hcXlWeCjA6n5.dKriRE274dGfBTHQLAUQh7r..mTnE/y','Manolo','Manolez','684962cf569af.webp','[]','2025-06-11 07:48:20'),(8,'david','david@gmail.com','$2y$13$RETC2fnOrWr4C2.8Z0T1BOto90b2zjqjgkD6mXrI.BhrJprKCO8dS','David','Vaz',NULL,'[]','2025-06-11 10:03:12'),(9,'amieva','amieva@iescamas.es','$2y$13$Nrx36eUrdJNnQ6JrPQgxm.H3dfAR6C/PDGiOr9mnhPyfPPmIVovle','José Antonio','Amieva',NULL,'[]','2025-06-11 10:11:18');
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

-- Dump completed on 2025-06-14  9:19:58
