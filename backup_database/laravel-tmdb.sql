-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: laravel_tmdb
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2023_02_06_113526_create_sessions_table',1),(10,'2023_02_06_170409_create_movies_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `movies` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `imdb_id` int NOT NULL,
  `adult` tinyint(1) NOT NULL,
  `backdrop_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre_ids` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` tinyint(1) NOT NULL,
  `vote_average` double(8,2) NOT NULL,
  `vote_count` int NOT NULL,
  `popularity` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,505642,0,'/xDMIl84Qo5Tsu62c9DGWhmPI67A.jpg','a:3:{i:0;i:28;i:1;i:12;i:2;i:878;}','movie','en','Black Panther: Wakanda Forever','Queen Ramonda, Shuri, M’Baku, Okoye and the Dora Milaje fight to protect their nation from intervening world powers in the wake of King T’Challa’s death.  As the Wakandans strive to embrace their next chapter, the heroes must band together with the help of War Dog Nakia and Everett Ross and forge a new path for the kingdom of Wakanda.','/sv1xJUazXeYqALzczSZ3O6nkH75.jpg','2022-11-09','Black Panther: Wakanda Forever',0,7.49,2636,10722.22,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(2,646389,0,'/9Rq14Eyrf7Tu1xk0Pl7VcNbNh1n.jpg','a:3:{i:0;i:28;i:1;i:12;i:2;i:53;}','movie','en','Plane','After a heroic job of successfully landing his storm-damaged aircraft in a war zone, a fearless pilot finds himself between the agendas of multiple militias planning to take the plane and its passengers hostage.','/2g9ZBjUfF1X53EinykJqiBieUaO.jpg','2023-01-13','Plane',0,6.81,165,423.82,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(3,615777,0,'/oCKZAdUROqdlTcUOstqJ1gM8JQt.jpg','a:2:{i:0;i:18;i:1;i:35;}','movie','en','Babylon','A tale of outsized ambition and outrageous excess, tracing the rise and fall of multiple characters in an era of unbridled decadence and depravity during Hollywood\'s transition from silent films and to sound films in the late 1920s.','/wjOHjWCUE0YzDiEzKv8AfqHj3ir.jpg','2022-12-22','Babylon',0,7.70,826,1344.66,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(4,788752,0,'/1pDYetDF3r9V7ZB5SeyoPcUkBiB.jpg','a:3:{i:0;i:27;i:1;i:53;i:2;i:9648;}','movie','no','Vikingulven','After witnessing a grotesque murder at a party in her new town, a teenager starts having strange visions and bizarre desires.','/9CxWs95VQWlOAdgE0iadrz3RPwH.jpg','2022-11-18','Viking Wolf',0,5.76,68,95.04,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(5,739986,0,'/dA34DDakXgvbjnyKocOcLJtKz0.jpg','a:3:{i:0;i:12;i:1;i:18;i:2;i:10751;}','movie','en','True Spirit','When the tenacious young sailor Jessica Watson sets out to be the youngest person to sail solo, nonstop and unassisted around the world, many expect her to fail. With the support of her sailing coach and mentor Ben Bryant and her parents, Jessica is determined to accomplish what was thought to be impossible, navigating some of the world’s most challenging stretches of ocean over the course of 210 days.','/B7m21gukMeVK3NAuk1PLCo9C8p.jpg','2023-01-26','True Spirit',0,6.80,25,97.71,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(6,76600,0,'/s16H6tpK2utvwDtzZ8Qy4qm5Emw.jpg','a:3:{i:0;i:878;i:1;i:12;i:2;i:28;}','movie','en','Avatar: The Way of Water','Set more than a decade after the events of the first film, learn the story of the Sully family (Jake, Neytiri, and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure.','/t6HIqrRAclMCA60NsSmeqe9RmNV.jpg','2022-12-14','Avatar: The Way of Water',0,7.74,5068,2298.71,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(7,1072567,0,'/7TelXvAFWfIGppmnplhfJpzqfd.jpg','a:3:{i:0;i:53;i:1;i:80;i:2;i:18;}','movie','es','Infiesto','As the coronavirus upends their lives, two detectives doggedly pursue those responsible for an abduction they realize is part of a sinister pattern.','/dmO2U0ckWkE6T5hyYY3rUtSH9X4.jpg','2023-02-03','Infiesto',0,6.00,39,100.12,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(8,315162,0,'/faXT8V80JRhnArTAeYXz0Eutpv9.jpg','a:5:{i:0;i:16;i:1;i:12;i:2;i:35;i:3;i:10751;i:4;i:14;}','movie','en','Puss in Boots: The Last Wish','Puss in Boots discovers that his passion for adventure has taken its toll: He has burned through eight of his nine lives, leaving him with only one life left. Puss sets out on an epic journey to find the mythical Last Wish and restore his nine lives.','/kuf6dutpsT0vSVehic3EZIqkOBt.jpg','2022-12-07','Puss in Boots: The Last Wish',0,8.56,3350,5840.19,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(9,536554,0,'/dlrWhn0G3AtxYUx2D9P2bmzcsvF.jpg','a:3:{i:0;i:878;i:1;i:27;i:2;i:35;}','movie','en','M3GAN','A brilliant toy company roboticist uses artificial intelligence to develop M3GAN, a life-like doll programmed to emotionally bond with her newly orphaned niece. But when the doll\'s programming works too well, she becomes overprotective of her new friend with terrifying results.','/d9nBoowhjiiYc4FBNtQkPY7c11H.jpg','2022-12-28','M3GAN',0,7.58,1353,3864.94,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(10,1003580,0,'/1Cdu5HKjG8mQeBNKZfTB0dxvvVR.jpg','a:3:{i:0;i:16;i:1;i:28;i:2;i:878;}','movie','en','Legion of Super-Heroes','Kara, devastated by the loss of Krypton, struggles to adjust to her new life on Earth. Her cousin, Superman, mentors her and suggests she leave their space-time to attend the Legion Academy in the 31st century, where she makes new friends and a new enemy: Brainiac 5. Meanwhile, she must contend with a mysterious group called the Dark Circle as it searches for a powerful weapon held in the Academy’s vault.','/3whQLi8RI7h2h2Si2KTDFJxfEcR.jpg','2023-02-07','Legion of Super-Heroes',0,6.70,10,107.63,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(11,631842,0,'/22z44LPkMyf5nyyXvv8qQLsbom.jpg','a:3:{i:0;i:27;i:1;i:9648;i:2;i:53;}','movie','en','Knock at the Cabin','While vacationing at a remote cabin, a young girl and her two fathers are taken hostage by four armed strangers who demand that the family make an unthinkable choice to avert the apocalypse. With limited access to the outside world, the family must decide what they believe before all is lost.','/dm06L9pxDOL9jNSK4Cb6y139rrG.jpg','2023-02-01','Knock at the Cabin',0,6.76,145,558.83,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(12,746524,0,'/v2GqQcm4Yg54ADrdbEi4Y1FZZhz.jpg','a:2:{i:0;i:53;i:1;i:27;}','movie','en','Blood','Jess, a newly separated mother and nurse, moves into her old family farmhouse with Tyler, her teenage daughter, and Owen, her eight-year-old son. One night, the family dog senses something in the woods and runs off to find it. He returns a couple of days later and attacks Owen, savagely biting him before Jess is able to intervene. Owen is rushed to the hospital. His condition worsens, and no one can figure out why... until Jess discovers a disturbing cure...','/gCUFtTvjK4gbmjVxhx8bhyOhAeW.jpg','2023-01-12','Blood',0,6.20,13,20.54,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(13,640146,0,'/8YFL5QQVPy3AgrEQxNYVSgiPEbe.jpg','a:3:{i:0;i:12;i:1;i:878;i:2;i:35;}','movie','en','Ant-Man and the Wasp: Quantumania','Super-Hero partners Scott Lang and Hope van Dyne, along with with Hope\'s parents Janet van Dyne and Hank Pym, and Scott\'s daughter Cassie Lang, find themselves exploring the Quantum Realm, interacting with strange new creatures and embarking on an adventure that will push them beyond the limits of what they thought possible.','/ngl2FKBlU4fhbdsrtdom9LVLBXw.jpg','2023-02-15','Ant-Man and the Wasp: Quantumania',0,0.00,0,214.45,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(14,850028,0,'/cSjccCESfkHq2AltVkY3WRYXqdg.jpg','a:2:{i:0;i:18;i:1;i:53;}','movie','en','Alice, Darling','A young woman trapped in an abusive relationship becomes an unwitting participant in an intervention staged by her two closest friends.','/ybqS7I4tuMs1TIssvuLMk2lYlLe.jpg','2022-12-30','Alice, Darling',0,6.64,25,40.69,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(15,1075519,0,'/PFJ2wNS3m5A85CFNPszc3bbDsc.jpg','a:3:{i:0;i:18;i:1;i:53;i:2;i:80;}','movie','en','The Locksmith','A thief fresh out of prison, tries to work his way back into the life of his daughter and ex-fiancé. Determined, he is forced to use the skills he has as a gifted locksmith. Things take a tumultuous turn after an unexpected disappearance.','/kNQ9Z3TQ5vU5fvwuHqZvLooFcCI.jpg','2023-02-03','The Locksmith',0,7.00,4,59.60,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(16,1008374,0,'/4q8yxTRcztBW8eMgoqziiELyHhQ.jpg','a:2:{i:0;i:18;i:1;i:27;}','movie','en','Baby Ruby','After welcoming her baby, Ruby, home, the tightly scripted world of lifestyle influencer Jo starts to unravel. As increasingly sinister happenings mount, Jo is plunged into a waking fever dream where everyone is a threat and nothing is what it seems.','/xsQyj1RWeKYafKaDRDfA3x5IVcZ.jpg','2023-02-03','Baby Ruby',0,5.60,5,64.26,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(17,931954,0,'/3LsHvo8VTSrcN7nZSy3jyNYGdCW.jpg','a:3:{i:0;i:18;i:1;i:27;i:2;i:53;}','movie','es','Venus','Lucía, a club dancer on the run, takes refuge in a sinister building on the outskirts of Madrid where her sister Rocío lives with her daughter Alba.','/yGpJbft7JQpQHHHasRr4wWdVcuJ.jpg','2022-12-02','Venus',0,6.44,18,59.44,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(18,758009,0,'/zGoZB4CboMzY1z4G3nU6BWnMDB2.jpg','a:3:{i:0;i:28;i:1;i:10749;i:2;i:35;}','movie','en','Shotgun Wedding','Darcy and Tom gather their families for the ultimate destination wedding but when the entire party is taken hostage, “’Til Death Do Us Part” takes on a whole new meaning in this hilarious, adrenaline-fueled adventure as Darcy and Tom must save their loved ones—if they don’t kill each other first.','/t79ozwWnwekO0ADIzsFP1E5SkvR.jpg','2022-12-28','Shotgun Wedding',0,6.35,270,3291.57,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(19,814757,0,'/evjIPznqESyloCheMfu0vwAEOf.jpg','a:2:{i:0;i:18;i:1;i:10749;}','movie','en','Empire of Light','A love story set in and around an old cinema on the South Coast of England in the 1980s.','/8Ji1h0nZB1fmimAalfi97fnKfXg.jpg','2022-12-09','Empire of Light',0,5.70,21,17.00,'2023-02-07 14:47:53','2023-02-07 14:47:53'),(20,1034629,0,'/v7hAAjqypw9otTERMkIzZCq0fjz.jpg','a:1:{i:0;i:18;}','movie','nl','Stromboli','Haunted by memories of her broken marriage and a fight with her daughter, a woman joins an intense self-help retreat when her vacation goes awry.','/iiPPvhBHxqa1vk7AEmFn5zDbhJF.jpg','2022-11-03','Stromboli',0,5.90,8,10.21,'2023-02-07 14:47:53','2023-02-07 14:47:53');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
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
  PRIMARY KEY (`email`)
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('oqHuh9BH601Ss7nYxPXeqwNT2vAeJBghcscmpqdv',1,'172.26.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiT1FqaFFEeWVKVFFxSFNnNW80aTl4QUNabWh0aks0VEQ1M2pXdkxoNSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI2OiJodHRwOi8vbG9jYWxob3N0L2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkZ0lJMklseWZTYVUxN1lJL0E5R0dJLlNsNXZUYWFQMXpyd1pLL1E4d25odFc0MFRyak5MRzYiO30=',1675765550),('Q8ByVZHSY7XzxF2g5iOUm8ArDvva8fJ9et0ryvZS',1,'172.26.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36','YTo1OntzOjY6Il90b2tlbiI7czo0MDoiM2Nwc1dlMjBBS2N6aklQRHhGMnBSY2g1OG16SzlzR2N1MXdUd3pQMCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3QvZGFzaGJvYXJkIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRnSUkySWx5ZlNhVTE3WUkvQTlHR0kuU2w1dlRhYVAxenJ3WksvUTh3bmh0VzQwVHJqTkxHNiI7fQ==',1675781279);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
INSERT INTO `users` VALUES (1,'adminMovieDBUser','admin@test.fr',NULL,'$2y$10$gII2IlyfSaU17YI/A9GGI.Sl5vTaaP1zrwZK/Q8wnhtW40TrjNLG6',NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-06 13:23:27','2023-02-06 14:10:09');
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

-- Dump completed on 2023-02-07 15:51:50
