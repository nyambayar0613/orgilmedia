-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: orgilmedia
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_deleted` tinyint(1) DEFAULT '0',
  `article_title` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `article_image` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `article_description` text COLLATE utf32_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,0,'What are key elements of successful event?','article_xpjk608PoeXo8EZEBZuU_1619898616.jpg','<p>7 Key Elements of Event Management-Explained! No event can be successfully completed without interaction and inputs from the six key elements of events, event infrastructure, target audience, clients, event organizers, venue and the media.</p>','2021-05-01 11:33:34','2021-05-01 11:50:16'),(2,0,'What is a corporate film?','article_QXDR2x1G4vKJHr6jHkht_1619898627.jpg','<p>Corporate films, or corporate videos, are used to connect the boardroom to its employees and convey the company&#39;s ethics and ethos to the consumer. Video content online has become increasingly popular for company websites alongside the written material.</p>','2021-05-01 11:36:09','2021-05-01 11:50:28'),(3,0,'Why event highlight reel is important?','article_tqTD0ESo28dzo1lqcGWi_1619898596.jpg','<p>It is a great way to summarize the purpose and key messages of your event. Not only does the highlight video reinforce the key message of the event, it can be a useful way to remind guests of what actually happened!</p>','2021-05-01 11:36:54','2021-05-01 11:49:56'),(4,0,'We are partner in your photo and design needs','article_6090Xx1mWMuct4EQa84q_1619898636.jpg','<p>We provide photo and design service at your convenience. From event posters and photography to all types of campaign print content....we do it all. <a href=\"https://www.facebook.com/hashtag/photography?__eep__=6&amp;__cft__[0]=AZVSzw_aSxEdp1dZg7AGLPfgLZ8gyskzShVSswsE532DGaAGEEvm3mng7Q1pwv-aUgNVXk70aEEHvSOPmxLuUPRDv6-G1TTH2Oxn05robG1_QWeURNQG_ce05JS1p-X0gFitw2-mEMyCigkn96h7xpeCeoEHA41HGeNgSwLRCf8JSVx-WsKNuID2jpNt5-KvaNw&amp;__tn__=*NK-R\" role=\"link\" tabindex=\"0\">#photography</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/photodesgn?__eep__=6&amp;__cft__[0]=AZVSzw_aSxEdp1dZg7AGLPfgLZ8gyskzShVSswsE532DGaAGEEvm3mng7Q1pwv-aUgNVXk70aEEHvSOPmxLuUPRDv6-G1TTH2Oxn05robG1_QWeURNQG_ce05JS1p-X0gFitw2-mEMyCigkn96h7xpeCeoEHA41HGeNgSwLRCf8JSVx-WsKNuID2jpNt5-KvaNw&amp;__tn__=*NK-R\" role=\"link\" tabindex=\"0\">#photodesgn</a>&nbsp;<a href=\"https://www.facebook.com/hashtag/orgilmedia?__eep__=6&amp;__cft__[0]=AZVSzw_aSxEdp1dZg7AGLPfgLZ8gyskzShVSswsE532DGaAGEEvm3mng7Q1pwv-aUgNVXk70aEEHvSOPmxLuUPRDv6-G1TTH2Oxn05robG1_QWeURNQG_ce05JS1p-X0gFitw2-mEMyCigkn96h7xpeCeoEHA41HGeNgSwLRCf8JSVx-WsKNuID2jpNt5-KvaNw&amp;__tn__=*NK-R\" role=\"link\" tabindex=\"0\">#orgilmedia</a></p>','2021-05-01 11:38:34','2021-05-01 11:50:37'),(5,0,'Why multiple cameras for live streaming?','article_fKJ81J5L3o7jn3gmsEkB_1619898547.jpg','<p>Using&nbsp;<strong>multiple cameras</strong>&nbsp;for your live broadcast has its advantages. You can cover more territory and enhance the content with varied angles and interesting shots&mdash;all of which have the potential to make your live&nbsp;<strong>stream</strong>&nbsp;more appealing to viewers.</p>','2021-05-01 11:39:06','2021-05-01 11:49:07');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_info`
--

DROP TABLE IF EXISTS `contact_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` text COLLATE utf32_unicode_ci,
  `phone_number` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `long` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `zipcode` varchar(45) COLLATE utf32_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_info`
--

LOCK TABLES `contact_info` WRITE;
/*!40000 ALTER TABLE `contact_info` DISABLE KEYS */;
INSERT INTO `contact_info` VALUES (1,'#202 “New Horizon” building,\r\n\r\nOlympic street, Sukhbaatar District,\r\n\r\n1st Khoroo, Ulaanbaatar, Mongolia','976-91915686 976-88009995','contact@orgilmedia.mn','47.913099140541675','106.92355756300272','14191-0009','https://www.facebook.com/orgilmedia/','https://www.youtube.com/channel/UCbK12ENUF4sbm2SyrN6Dbag','https://www.instagram.com/orgilmedia/',NULL,'2021-05-02 01:32:37');
/*!40000 ALTER TABLE `contact_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_deleted` varchar(45) COLLATE utf32_unicode_ci DEFAULT '0',
  `name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf32_unicode_ci,
  `url` varchar(150) COLLATE utf32_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio`
--

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
INSERT INTO `portfolio` VALUES (1,'0','Video/Photo Production','portfolio_NmkCBSkhLp7CI4U7VEqF_1619901413.jpg','<p>Video/Photo Production</p>','#','2021-05-01 12:36:56','2021-05-01 12:41:23'),(2,'0','Multi-Cam Live streaming and Recording','portfolio_pA6kMvZA123yWQRJDbof_1619901522.jpg','<p>Multi-Cam Live streaming and Recording</p>','#','2021-05-01 12:38:44','2021-05-01 12:38:44'),(3,'0','Event Management','portfolio_7uhPZtCdgoWlLYMD5QWI_1619901603.jpg','<p>Event Management</p>','#','2021-05-01 12:40:06','2021-05-01 12:40:06'),(4,'0','Film and Video Logistics','portfolio_gxspnULTOzcjk44TvFOl_1619901639.jpg','<p>Film and Video Logistics</p>','#','2021-05-01 12:40:43','2021-05-01 12:40:43');
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_deleted` tinyint(1) DEFAULT '0',
  `slider_title` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL,
  `slider_text` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `slider_image` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `slider_url` varchar(100) COLLATE utf32_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (1,0,'Original Solutions','If you need to redesign your new project, new visual strategy, ux structure or you do have some cool ideas for collaboration.','slider_7elEqpUimeMTUhn1ohDG_1619947334.jpg','#','2021-05-01 04:37:10','2021-05-02 01:22:14'),(2,0,'Digital <br> Design Awards','If you need to redesign your new project, new visual strategy, ux structure  or you do have some cool ideas for collaboration.','slider_Ho0cBIULTvNCTnw4KpzT_1619947325.jpg','#','2021-05-01 04:43:44','2021-05-02 01:22:05'),(3,0,'Unique <br> brand Stories','If you need to redesign your new project, new visual strategy, ux structure   or you do have some cool ideas for collaboration.','slider_GaaiKfhmTslncpuSYTAN_1619947314.jpg','#','2021-05-01 04:44:43','2021-05-02 01:21:55'),(4,0,'We are <br> content production','We\'re a creative content production agency that helps organizations, businesses & brands to achieve more with video/photo content, live streaming and more.','slider_8nZJjTbvQDlfqltVZuxI_1619896905.jpg','#','2021-05-01 11:21:46','2021-05-01 11:22:21');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_deleted` tinyint(1) DEFAULT '0',
  `staff_name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `staff_image` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `staff_position` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (1,0,'B. Bat-Orgil','staff_rKwLAzkcJh24Bkh89pDu_1619878364.jpg','General Producer/Director','2021-05-01 06:10:48','2021-05-01 06:26:10'),(2,0,'A.Otgonchimeg','staff_ZwVXHc9UVerevP3AshnX_1619878639.jpg','Producer and Journalist','2021-05-01 06:17:20','2021-05-01 06:17:20'),(3,0,'P.Altankhulug','staff_8mokE6L1UILV0FHPzB7x_1619878695.jpg','Production Manager','2021-05-01 06:18:15','2021-05-01 06:18:15'),(4,0,'B.Bayanmunkh','staff_QPQbde1ncHw7PQPHwHt0_1619878736.jpg','Editor and Motion Graphic Designer','2021-05-01 06:18:59','2021-05-01 06:18:59'),(5,0,'B.Tumurkhuyag','staff_kEaaiMaLZjRaHzLgO0AU_1619878784.jpg','Videographer','2021-05-01 06:19:46','2021-05-01 06:19:46'),(6,0,'O.Murun','staff_pAzjqipQzqS2nO1uQNTp_1619878835.jpg','Journalist/Copywriter','2021-05-01 06:20:37','2021-05-01 06:20:37'),(7,0,'E.Otgonjargal','staff_BFM2YDH5I324nLyH6niw_1619878924.jpg','Cameraman','2021-05-01 06:22:06','2021-05-01 06:22:06'),(8,0,'A.Battulga','staff_gtG1noGQuOvS8a7T9KAe_1619879000.jpg','Graphic Designer','2021-05-01 06:23:23','2021-05-01 06:23:23'),(9,0,'G.Batzaya','staff_9DVI1MWyJNChhvKb7Cxl_1619879049.jpg','Finance Manager','2021-05-01 06:24:12','2021-05-01 06:24:12');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,3,'admin','admin@orgilmedia.mn',NULL,'$2y$10$UnpaktzUiUTIM3eR3BsOfO4YArJXP8erscC9rzp0jiRKqri1AmOzO','feeXMlPb5fQzADdVRYC4nM6lfZexPdafzVr2Quzw9TMfGKKx7euXkm24JyeV','2021-05-01 03:39:13','2021-05-01 03:39:13');
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

-- Dump completed on 2021-06-28 16:30:12
