# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.22-MariaDB)
# Database: got
# Generation Time: 2017-07-17 14:05:41 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table answer_sets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `answer_sets`;

CREATE TABLE `answer_sets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `episode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `answer_sets` WRITE;
/*!40000 ALTER TABLE `answer_sets` DISABLE KEYS */;

INSERT INTO `answer_sets` (`id`, `episode`, `answer`, `created_at`, `updated_at`)
VALUES
	(1,'2','ABC','2017-07-17 13:29:06','2017-07-17 13:29:06'),
	(2,'2','XYZ','2017-07-17 13:29:06','2017-07-17 13:29:06'),
	(3,'2','123','2017-07-17 13:29:06','2017-07-17 13:29:06'),
	(4,'2','456','2017-07-17 13:29:06','2017-07-17 13:29:06');

/*!40000 ALTER TABLE `answer_sets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table articles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;

INSERT INTO `articles` (`id`, `title`, `short_description`, `long_description`, `media_type`, `media_url`, `created_at`, `updated_at`, `slug`)
VALUES
	(2,'GOT Blog','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>','photo','public/article/DGyR77oQNlibgOAKGPd2cXZyaLy6dCe7L3OoA0zx.jpeg','2017-07-14 14:58:41','2017-07-15 10:08:51','got-blog'),
	(6,'Winter is here!','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummied text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummied text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;<strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','video','<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/1Mlhnt0jMlg\" frameborder=\"0\" allowfullscreen></iframe>','2017-07-15 10:20:30','2017-07-15 10:20:30','winter-is-here');

/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'apparels',NULL,NULL),
	(2,'drinkwares',NULL,NULL),
	(3,'keychains',NULL,NULL),
	(4,'games',NULL,NULL),
	(5,'laptop-covers',NULL,NULL),
	(6,'mobile-covers',NULL,NULL);

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table dead_parties
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dead_parties`;

CREATE TABLE `dead_parties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `execution` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `return` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `dead_parties` WRITE;
/*!40000 ALTER TABLE `dead_parties` DISABLE KEYS */;

INSERT INTO `dead_parties` (`id`, `name`, `role`, `execution`, `time`, `return`, `photo`, `created_at`, `updated_at`)
VALUES
	(1,'Will','Ranger of the Night\'s Watch','Beheaded for desertion by Ned Stark.','Season 1, Episode 1','0%','public/DeadParty/Xv6OrVgxkH4miSIYfjlqdnXOTeWSsOdKglTu9N2Y.jpeg','2017-07-14 08:50:08','2017-07-14 08:56:33'),
	(2,'Jon Arryn','Hand to the King before Ned Stark','Poisoned by Lysa Arryn and Littlefinger','Season 1, Episode 1','0%','public/DeadParty/a2WpZ0W6uLQyinBDJxtzNSbAVELTBMLxN1BeIGyg.jpeg','2017-07-14 09:42:04','2017-07-14 09:42:04'),
	(3,'Jory Cassel','Captain of the guards to House Stark','Stabbed by Jaime Lannister through the eye','Season 1, Episode 5','0%','public/DeadParty/TYn5RECqXpzHzaSfCzfAkrjCcAI5mc0qhb1uX1l3.jpeg','2017-07-14 09:43:14','2017-07-14 09:43:14'),
	(4,'Viserys Targaryen','Exiled head of House Targaryen and brother to Daenerys Targaryen','Khal Drogo pours molten gold on his head at Daenerys\' command','Season 1, Episode 6','0%','public/DeadParty/X4497RxNuzULrBDnhhxqCGmZ83JyPPwfa1DukEAe.jpeg','2017-07-14 09:45:55','2017-07-14 09:45:55'),
	(5,'Benjen Stark','First Ranger of the Night\'s Watch, Brother of Ned Stark','Unknown','Season 1, Episode 7','15% (He could have survived all this time—or become a wight)','public/DeadParty/D0SmoSSyAN3VlO1T3ydBbzrafvuQsX7jl2YdrTFW.jpeg','2017-07-14 09:47:01','2017-07-14 09:47:01'),
	(6,'Robert Baratheon','Lord of the Seven Kingdoms','Mortally wounded by a wild boar after drinking wine given to him by Lancel Lannister at Cersei Lannister\'s command','Season 1, Episode 7','0%','public/DeadParty/KrlP8wN7wGMNWva6LVhyd7Mrp33sXOrw6yYGOeot.jpeg','2017-07-14 09:48:02','2017-07-14 09:48:02'),
	(7,'Syrio Forel','Master sword fighter and Arya Stark\'s instructor in combat','Presumably killed by Ser Meryn in a sword fight (he was only armed with a training sword)','Season 1, Episode 8','30% (We never actually see him die. He was a master swordsman, after all.)','public/DeadParty/4MHdQKhEhWe1TDuzHWzHMVo0wRDKFID8TN5hERxt.jpeg','2017-07-14 09:49:13','2017-07-14 09:49:13'),
	(8,'Eddard Stark','Hand of the King and Lord of the North','Beheaded by Ser Ilyn Payne at the order of Joffrey Baratheon','Season 1, Episode 9','0%','public/DeadParty/5jk2X6NDib5Hx8RH1JZ6FKnHIrV1f5v7P2pjIIXx.jpeg','2017-07-14 09:50:14','2017-07-14 09:50:14'),
	(9,'Drogo','Chieftain of the Dothraki people and husband of Daenerys Targaryen','Smothered by Daenerys Targaryen in a mercy killing after a spell by Mirri Maz Duur leaves him in a catatonic state','Season 1, Episode 10','0% (Unless it\'s in another vision like Daenerys had in season 2)','public/DeadParty/pFVBFEdLPfwH2SPOpGradI3hB9qAwedIcZ3Tew0H.jpeg','2017-07-14 09:51:18','2017-07-14 09:51:18'),
	(10,'Rhaego','Son of Khal Drogo and Khaleesi Daenerys Targaryen','Stillborn because of a blood magic ritual performed by Mirri Maz Duur','Season 1, Episode 10','0%',NULL,'2017-07-14 09:52:18','2017-07-14 09:52:18'),
	(11,'Mirri Maz Duur','Enslaved godswife','Burned alive on Drogo\'s funeral pyre by Daenerys Targaryen','Season 1, Episode 10','0%','public/DeadParty/TXzjPtjylwGZUYUxCywNljiBPUTFB1jvjaxyinZd.jpeg','2017-07-14 09:53:19','2017-07-14 09:53:19'),
	(12,'Rakharo','Dothraki bodyguard to Daenerys Targaryen','Killed and decapitated by a rival khalasar while scouting the Red Waste','Season 2, Episode 2','0%','public/DeadParty/NFwKXYkVOKMHcIctKrdBV8sW3Hx5yAZm7O4zg0YX.jpeg','2017-07-14 09:54:20','2017-07-14 09:54:20'),
	(13,'Yoren','Recruiter for the Night\'s Watch','Killed by Ser Amory Lorch, loyal to House Lannister, in a fight','Season 2, Episode 3','0%','public/DeadParty/GFalrk9qAohOdlNqaw6GD9TNaqPsE992w1IMZWwJ.jpeg','2017-07-14 09:55:26','2017-07-14 09:55:26'),
	(14,'Renly Baratheon','Master of Laws, Claimant to the Iron Throne, brother of Robert and Stannis Baratheon','Killed by a shadow with Stannis Baratheon\'s face that was birthed by Melisandre','Season 2, Episode 5','0%','public/DeadParty/DeOSLPnZZ2UdUG3jKuty1iQCaGHtuxo3EPHcq0W2.jpeg','2017-07-14 09:56:20','2017-07-14 09:56:20'),
	(15,'Rodrik Cassel','Master-at-Arms at Winterfell, Servant of House Stark','Decapitated by Theon Greyjoy','Season 2, Episode 6','0%','public/DeadParty/L3oMsPwauLft8BUAhr3YBDVesDalBXpRE3AzFRyy.jpeg','2017-07-14 09:57:33','2017-07-14 09:57:33'),
	(16,'Irri','Dothraki handmaiden to Daenerys Targaryen','Murdered during Xaro Xhoan Daxos\' theft of the dragons at Qarth','Season 2, Episode 7','0%','public/DeadParty/cf8OtCRoDFiaeMEhUqirbxIlSxAXWmygxBDqp0lb.jpeg','2017-07-14 09:58:24','2017-07-14 09:58:24'),
	(17,'Maester Luwin','Maester of Winterfell','Osha ends his suffering after he is stabbed with a spear by ironborn raider Dagmer','Season 2, Episode 10','0%','public/DeadParty/aCxysrQ3QNGzyd0QBTbSb5vUqywrseq2etC8EyW3.jpeg','2017-07-14 09:59:17','2017-07-14 09:59:17'),
	(18,'Qhorin','Night\'s Watch ranger','Killed by Jon Snow (at Qhorin\'s own behest) in order to trick the Wildlings into thinking Jon has left the Night\'s Watch','Season 2, Episode 10','0%','public/DeadParty/0VZVgfjSgVREj33LQMxPfKZNWeNM7zN7gCyaMsPf.jpeg','2017-07-14 10:00:12','2017-07-14 10:00:12'),
	(19,'Pyat Pree','Warlock from Qarth, Member of the Thirteen','Burned alive by Daenerys Targaryen\'s dragons','Season 2, Episode 10','0%','public/DeadParty/Xe4e0WajIhzUemDkchF61XuHhMWTapWsViJHVZlT.jpeg','2017-07-14 10:01:08','2017-07-14 10:01:08'),
	(20,'Doreah','Handmaiden to Daenerys Targaryen','Locked with Xaro Xhoan Daxos inside a Valyrian stone vault by Jorah Mormont at the order of Daenerys Targaryen','Season 2, Episode 10','1% (We didn\'t actually see her die, but unlikely save a miracle)','public/DeadParty/8xIpZbgepISfpSBoslgZWolvpOUuxlaX08AJObyj.jpeg','2017-07-14 10:02:12','2017-07-14 10:02:12'),
	(21,'Xaro Xhoan Daxos','Merchant in Qarth','Locked in a Valyrian stone vault by Jorah Mormont on the orders of Daenerys Targaryen','Season 2, Episode 10','1% (Again, we didn\'t actually see him die)','public/DeadParty/xIs3r91B1WbKv9rSk7pHswRbjS2HhCsujWcnZDCP.jpeg','2017-07-14 10:03:19','2017-07-14 10:03:19'),
	(22,'Hoster Tully','Lord of Riverrun, Father of Edmure Tully, Catelyn Stark and Lysa Arryn','Illness','Season 3, Episode 3','0%',NULL,'2017-07-14 10:03:55','2017-07-14 10:03:55'),
	(23,'Jeor Mormont','Lord Commander of the Night\'s Watch','Stabbed to death by Night\'s Watchman Rast during a mutiny','Season 3, Episode 4','0%','public/DeadParty/LcSOiQgt07NMdoYinIyzGgA1pLmRrPNKOl9nrvki.jpeg','2017-07-14 10:04:53','2017-07-14 10:04:53'),
	(24,'Craster','A Wildling who lived with his daughter-wives beyond the Wall','Killed by Karl Tanner, a Night\'s Watchman','Season 3, Episode 4','0%',NULL,'2017-07-14 10:05:37','2017-07-14 10:05:37'),
	(25,'Kraznys','Salve-trader in Slaver\'s Bay and one of the Good Masters','Burned alive by Drogon after he tries to trade the Unsullied for the dragon and insults Daenerys','Season 3, Episode 4','0%','public/DeadParty/kyYYTD2bGN5ojWpEyfFIpm8j9v5j8zPYUmMzWyxS.jpeg','2017-07-14 10:06:40','2017-07-14 10:06:40'),
	(26,'Beric Dondarrion','Leader of Brotherhood Without Banners','Killed by the Hound in trial by combat','Season 3, Episode 5','100% (He\'s already back! Thoros of Myr has resuscitated Dondarrion six times via prayers to the Lord of Light)','public/DeadParty/JwDFneHu0SwoqrECN2H2IwVFuNMKZJWGkvgtFU4T.jpeg','2017-07-14 10:07:42','2017-07-14 10:07:42'),
	(27,'Ros','Prostitute in Littlefinger\'s brothel and spy for Varys','Shot by Joffrey Baratheon with a crossbow','Season 3, Episode 6','0%','public/DeadParty/5qgwElFYa2Q9ZzAabCN0UnPJgjSac36kJ7NnoBWl.jpeg','2017-07-14 10:08:36','2017-07-14 10:08:36'),
	(28,'Talisa Stark','Wife of Robb Stark','Stabbed in the stomach while pregnant by Lothar Frey at the Red Wedding','Season 3, Episode 9','0%','public/DeadParty/v5YZg8Tj9OLxpgyRJP6ObYkRwMoBW1ApEsnHxCnN.jpeg','2017-07-14 10:09:34','2017-07-14 10:09:34'),
	(29,'Robb Stark','King of the North, son of Lord Eddard Stark and Lady Catelyn of Winterfell','Shot by a Frey crossbowman and then stabbed through the heart by Roose Bolton at the Red Wedding','Season 3, Episode 9','0%','public/DeadParty/s0j78bHlsv9twz4VMQ0CdoH8Kyx240orq1LFED4N.jpeg','2017-07-14 10:10:38','2017-07-14 10:10:38'),
	(30,'Catelyn Stark','Wife of Eddard Stark, Mother of Robb, Sansa, Arya, Bran and Rickon','Throat slit by Black Walder Rivers at the Red Wedding','Season 3, Episode 9','0%','public/DeadParty/FIC0qx9r0OFoFlIWoU8uA8QzI1NAszSzwEZTtDXm.jpeg','2017-07-14 10:11:42','2017-07-14 10:11:42'),
	(31,'Polliver','Man-at-arms for House Lannister','Stabbed in the throat by Arya Stark','Season 4, Episode 1','0%',NULL,'2017-07-14 10:12:24','2017-07-14 10:12:24'),
	(32,'Tansy','Servant of House Bolton','Hunted down by Ramsay Snow and eaten by his dogs','Season 4, Episode 2','0%',NULL,'2017-07-14 10:13:02','2017-07-14 10:13:02'),
	(33,'Joffrey Baratheon','Lord of the Seven Kingdoms','Poisoned at the Purple Wedding by Olenna Tyrell and Littlefinger','Season 4, Episode 2','0%','public/DeadParty/IuqfeesGLmXzvD9AZsDj6IWFmgzswRqzhPKjNIha.jpeg','2017-07-14 10:14:06','2017-07-14 10:14:06'),
	(34,'Karl Tanner','Brother of the Night\'s Watch, leader of the mutiny at Craster\'s Keep','Impaled by Jon Snow during the raid on Craster\'s Keep','Season 4, Episode 5','0%',NULL,'2017-07-14 10:15:04','2017-07-14 10:15:04'),
	(35,'Locke','Man-at-arms for House Bolton','Neck snapped by Bran Stark while Bran is warging into Hodor','Season 4, Episode 5','0%','public/DeadParty/P31edHFm8Y4oquXfPeZPZQnG3kOJYqFklaR6tZuD.jpeg','2017-07-14 10:15:54','2017-07-14 10:15:54'),
	(36,'Rast','Ranger in the Night\'s Watch','Ripped apart by Jon\'s direwolf, Ghost, during the raid on Craster\'s Keep','Season 4, Episode 5','0%','public/DeadParty/QNs7SCFYVIdb9BYcX3RVSFdfhNUSzgZv1zAClpLX.jpeg','2017-07-14 10:16:46','2017-07-14 10:16:46'),
	(37,'Lysa Arryn','Lady Regent of the Vale, sister to Catelyn Stark, briefly the wife of Littlefinger','Pushed out of the Moon Door by Littlefinger','Season 4, Episode 7','0%','public/DeadParty/lR1cgZOC8CBsDhJsJ03AK90cYHami7PD65Y3BYWh.jpeg','2017-07-14 10:17:38','2017-07-14 10:17:38'),
	(38,'Oberyn Martell','Prince of the House Martell','Skull crushed by the Mountain in a trial by combat','Season 4, Episode 8','0%','public/DeadParty/7v6DhFNNRkoloPh2WGNbuDSaRwTHeU7wLAgpYWqT.jpeg','2017-07-14 10:18:38','2017-07-14 10:18:38'),
	(39,'The Mountain','Knight and Head of House Clegane, loyal to House Lannister','Poisoned by the spear of Oberyn Martell in a trial by combat','Season 4, Episode 8','100% (Reanimated by Qyburn)','public/DeadParty/5z7WfqF6fvOkgZMnoqI300W0QA3Q2cim1xIKS8Zd.jpeg','2017-07-14 10:19:34','2017-07-14 10:19:34'),
	(40,'Grenn','Ranger in the Night\'s Watch','Killed fighting the giant Mag the Mighty in the Battle of Castle Black','Season 4, Episode 9','0%','public/DeadParty/JR5p8OSkGgCq1jJIuBP3OqL1KTY9v7eh4hk9V73b.jpeg','2017-07-14 10:20:28','2017-07-14 10:20:28'),
	(41,'Mag the Mighty','Giant fighting in Mance Rayder\'s army','Killed by Grenn and five other members of the Night\'s Watch in the Battle of Castle Black','Season 4, Episode 9','0%','public/DeadParty/rVXGlIPBP7YdLmqpGnkGx17wTYG0TZPDCEPGld88.jpeg','2017-07-14 10:21:25','2017-07-14 10:21:25'),
	(42,'Pyp','Brother of the Night\'s Watch','Shot through the neck with an arrow by Ygritte during the Battle of Castle Black','Season 4, Episode 9','0%','public/DeadParty/AemKPkKWOts2IhK1WPpfO4hGdXXoo0fjy68tQCnG.jpeg','2017-07-14 10:22:22','2017-07-14 10:22:22'),
	(43,'Styr','Thenn fighting in Mance Rayder\'s army','Bludgeoned in the head with a hammer by Jon Snow during the Battle of Castle Black','Season 4, Episode 9','0%','public/DeadParty/2mVvDHYba7FAW96NwTdYl3D0arR5Iw5dZp0EERs3.jpeg','2017-07-14 10:23:18','2017-07-14 10:23:18'),
	(44,'Ygritte','Soldier in Mance Rayder\'s army and Jon Snow\'s lover','Shot with an arrow by Olly in the Battle of Castle Black','Season 4, Episode 9','0%','public/DeadParty/eE6iWpGjI3DJL94oJ5fIQZ6mWZB0KqK0vKgydXZB.jpeg','2017-07-14 10:24:11','2017-07-14 10:24:11'),
	(45,'Jojen Reed','Warg, brother of Meera Reed, traveling companion of Bran Stark','Mercy killed by Meera after being stabbed multiple times by a wight; burned by a fireball thrown by \"the Children\"','Season 4, Episode 10','30% (Could Jojen have warged into someone or something before he died?)','public/DeadParty/Ed3OJoo9yagq6jOPmiGtPgq6xEi76NglAy4SoRzP.jpeg','2017-07-14 10:25:21','2017-07-14 10:25:21'),
	(46,'Shae','Prostitute and girlfriend of Tyrion Lannister','Strangled to death by Tyrion Lannister','Season 4, Episode 10','0%','public/DeadParty/er3p4hgHHjF8IL0RHJ8Itbope2SeCM9Gf0RGKSi5.jpeg','2017-07-14 10:26:13','2017-07-14 10:26:13'),
	(47,'Tywin Lannister','Head of House Lannister, Lord of Casterly Rock, father of Cersei, Jaime and Tyrion Lannister','shot on the toilet by Tyrion with a crossbow','Season 4, Episode 10','0%','public/DeadParty/5UaVxwLpunPmcT2yMybnlVrBZpqUq5UQa83MzIJ0.jpeg','2017-07-14 10:27:14','2017-07-14 10:27:14'),
	(48,'Mance Rayder','Leader of the Free Folk','Shot with a mercy arrow by Jon Snow before he\'s burned alive','Season 5, Episode 1','0%','public/DeadParty/y8ao6g0v8rYc7xrbRa0hPsNb8EsqJRDNUzFV0UMF.jpeg','2017-07-14 10:28:11','2017-07-14 10:28:11'),
	(49,'Janos Slynt','Former commander of the City Watch in King\'s Landing, exiled to Night\'s Watch by Tyrion Lannister','Beheaded for insubordination by Jon Snow','Season 5, Episode 3','0%','public/DeadParty/hWNYmCoWBdLKQr6cXtiASoh9WwcdyPG9yBGPsHcz.jpeg','2017-07-14 10:29:10','2017-07-14 10:29:10'),
	(50,'Barristan Selmy','Former member of the Kingsguard, advisor of Daenerys Targaryen','Killed fighting the Sons of the Harpy in Meereen','Season 5, Episode 4','0%','public/DeadParty/DtUEdQGlJKQKCz2fT4lTfgTmUf9fgAByQrSVeAJ5.jpeg','2017-07-14 10:30:08','2017-07-14 10:30:08'),
	(51,'Maester Aemon','Maester at Castle Black','Dies of old age','Season 5, Episode 7','0%','public/DeadParty/UMKuesO5queHv6bJqFiLk5Xwznb1ual7MtMEJFbW.jpeg','2017-07-14 10:30:54','2017-07-14 10:30:54'),
	(52,'Karsi','Chieftainess of the Ice-river clans','Mauled to death by Wights','Season 5, Episode 8','100% (We see her become a wight)','public/DeadParty/ZpwLpWkajEHhIZnyNe02P3bjd28TUTBM8FQ6swzz.jpeg','2017-07-14 10:31:49','2017-07-14 10:31:49'),
	(53,'Shireen Baratheon','Daughter of Stannis and Selyse Baratheon','Burned alive as a sacrifice to the Lord of Light by Melisandre at the order of Stannis Baratheon','Season 5, Episode 9','0%','public/DeadParty/A2ROfhWbbDvXC44iRiZg7gZTgwGQ4YrLiIuE59XD.jpeg','2017-07-14 10:32:48','2017-07-14 10:32:48'),
	(54,'Hizdahr zo Loraq','Scion of the House Loraq, former slave trader, husband of Daenerys Targaryen','Stabbed to death by the Sons of the Harpy','Season 5, Episode 9','0%','public/DeadParty/DT4oazZeSugXBuuBPUQbN2lM829HGuNct8xwT6Cs.jpeg','2017-07-14 10:33:43','2017-07-14 10:33:43'),
	(55,'Selyse Baratheon','Wife of Stannis Baratheon','Hangs herself following the death of her daughter','Season 5, Episode 10','0%','public/DeadParty/9r4sOPjjooI1qLtBDZcZ6ohx75lFGRM0aMGbybSz.jpeg','2017-07-14 10:34:39','2017-07-14 10:34:39'),
	(56,'Stannis Baratheon','Lord of Dragonstone, brother of Robert and Renly Baratheon, claimant to the Iron Throne','Executed by Brienne of Tarth','Season 5, Episode 10','50% (We don\'t actually see Brienne kill Stannis)','public/DeadParty/1FJ3T9fkRacvvYNAyOz4oKpnef7lG5jCwsjsLs9u.jpeg','2017-07-14 10:35:44','2017-07-14 10:35:44'),
	(57,'Myranda','Servant of House Bolton and Ramsay Snow\'s lover','Pushed off a ledge by Theon Grejoy','Season 5, Episode 10','0%','public/DeadParty/Ra623G12mKUBAdEyLeYFEwvMGxIsrS0CnAiWSouo.jpeg','2017-07-14 10:36:40','2017-07-14 10:36:40'),
	(58,'Meryn Trant','Knight in the Kingsguard','Blinded and stabbed before having his throat slit by Arya Stark','Season 5, Episode 10','0%','public/DeadParty/2aHdc4Sn4Mo6p46xIu4bRMrZKVK1ueHyNIrL9S5H.jpeg','2017-07-14 10:37:31','2017-07-14 10:37:31'),
	(59,'Myrcella Baratheon','Daughter of Cersei Lannister and Jaime Lannister, sister to King Tommen Baratheon','Poisoned with a kiss by Ellaria Sand with the help of the Sand Snakes','Season 5, Episode 10','0%','public/DeadParty/lku30W0zEIP9Gg1z3fXPdY9g8S75LAQ32Rjppeyq.jpeg','2017-07-14 10:38:18','2017-07-14 10:38:18'),
	(60,'Jon Snow','Commander of the Night\'s Watch, bastard son of Eddard Stark (or maybe not)','Stabbed by Night\'s Watch mutineers, including Alliser Thorne and Olly','Season 5, Episode 10','100% (Resurrected by Melisandre)','public/DeadParty/4wf2oUTaG2Zxg1tJLf3mP6YdVoGDCyW7CoxIFGzU.jpeg','2017-07-14 10:39:24','2017-07-14 10:39:24'),
	(61,'Areo Hotah','Captain of the Guard for the Martells','Stabbed in the back by Tyene, one of the Sand Snakes','Season 6, Episode 1','0%','public/DeadParty/GlGa5yKqzuSzXjYvuiZWQG5KvJ1D4meek9MHOEFC.jpeg','2017-07-14 10:40:13','2017-07-14 10:40:13'),
	(62,'Doran Martell','Prince of Dorne','Stabbed in the chest by Ellaria Sand','Season 6, Episode 1','0%','public/DeadParty/Nxc2QWSS26N4My7vgS190BlDQRd3Po83CvT65qeL.jpeg','2017-07-14 10:42:24','2017-07-14 10:42:24'),
	(63,'Trystane Martell','Prince of Dorne, betrothed to Myrcella','Impaled through the back of the head by Obara, one of the Sand Snakes','Season 6, Episode 1','0%','public/DeadParty/mxpBSCFn0cWGEvPQEWxrzlOqCnMMLBtrenKhxffg.jpeg','2017-07-14 10:43:11','2017-07-14 10:43:11'),
	(64,'The Flasher','Man who flashes Cersei Lannister during her walk of atonement','Head smashed against a wall by Gregor Clegane, a.k.a The Mountain','Season 6, Episode 2','0%',NULL,'2017-07-14 10:44:05','2017-07-14 10:44:05'),
	(65,'Roose Bolton','Lord of the Dreadfort, Warden of the North','Stabbed in the chest by his own son, Ramsay Bolton','Season  6, Episode 2','0%','public/DeadParty/YrX0039dLwzKNpLmEpqDKRZeGRk7ULus3vtj8kWv.jpeg','2017-07-14 10:44:55','2017-07-14 10:44:55'),
	(66,'Walda Bolton','Wife to Roose Bolton, granddaughter of Walder Frey','Mauled to death by Ramsay Bolton’s dogs','Season 6, Episode 2','0%','public/DeadParty/sWxrkdn8q8DifOC4E9Lc0YOri7hUmCxmh5QCYzp3.jpeg','2017-07-14 10:45:51','2017-07-14 10:45:51'),
	(67,'Unnamed Bolton Child','Child of Roose and Walda Bolton','Mauled to death by Ramsay Bolton’s dogs','Season 6, Episode 2','0%','public/DeadParty/y1FcvTHr5YY4ZCCEFHuSqJOi82WCMwAd2P6tNSU4.jpeg','2017-07-14 10:46:49','2017-07-14 10:46:49'),
	(68,'Balon Greyjoy','Lord of the Iron Islands','Thrown from a bridge by his brother, Euron Greyjoy','Season 6, Episode 2','0%','public/DeadParty/cQ2Ml6J7J552Vh35Nw0pKarCULliHxJiyzhqeikh.jpeg','2017-07-14 10:47:41','2017-07-14 10:47:41'),
	(69,'Alliser Thorne','Acting Lord Commander of the Night’s Watch','Hanged for treason by Jon Snow','Season 6, Episode 3','0%','public/DeadParty/GNOiTcwc3ppVOz7juCAwfArchBQYLRcdRqoSDeMu.jpeg','2017-07-14 10:48:26','2017-07-14 10:48:26'),
	(70,'Olly','Steward of the Night’s Watch','Hanged for treason by Jon Snow','Season 6, Episode 3','0%','public/DeadParty/0fZdJcAhMuoQoUKSrf6Psd615CJHLrI942EEWv0X.jpeg','2017-07-14 10:49:25','2017-07-14 10:49:25'),
	(71,'Ser Arthur Dayne','Member of the Kingsguard of King Aerys II Targaryen','Stabbed in the back by Howland Reed and partially decapitated by Ned Stark','Season 6, Episode 3 in a flashback','0%',NULL,'2017-07-14 10:50:08','2017-07-14 10:50:08'),
	(72,'Osha','Wildling loyal to Rickon Stark','Stabbed in the neck by Ramsay Bolton','Season 6, Episode 4','0%','public/DeadParty/kEAn3e9cvKS2pfUs7vXLRz15bxl6luJorgfHJ19q.jpeg','2017-07-14 10:50:57','2017-07-14 10:50:57'),
	(73,'Khal Moro','Khal who presides over khalar vezhven','Burned alive along with the other khals by Daenerys Targaryen','Season 6, Episode 4','0%','public/DeadParty/p1mbZF8o7R9fbT896Of1kLOB6OlNooEQDXvF4cT9.jpeg','2017-07-14 10:51:59','2017-07-14 10:51:59'),
	(74,'Three-Eyed Raven','Sorcerer and Bran’s mentor','Killed by the Night King','Season 6, Episode 5','25% (Yes, his body is gone, but with time travel in play Bran could be seeing him again)','public/DeadParty/KFLYL1Hfi47GBEDIEWRSD2b1LH6juRmiSZ1metB9.jpeg','2017-07-14 10:53:03','2017-07-14 10:53:03'),
	(75,'Leaf','Child of the Forest','Committed suicide with explosive device when attacked by Wights to save Bran','Season 6, Episode 5','0%','public/DeadParty/vo3XRMecrjFeHE26Ir6E61BE8J20IIhEb9cJPdQo.jpeg','2017-07-14 10:53:57','2017-07-14 10:53:57'),
	(76,'Hodor','Servant to the House Stark','Torn apart by Wights','Season 6, Episode 5','0%','public/DeadParty/B35438qOOUFf6Lu5EL3A0tvkDJhRA0FIYRGPA28y.jpeg','2017-07-14 10:58:31','2017-07-14 10:58:31'),
	(77,'Aerys II Targaryen, \"The Mad King\"','Lord of the Seven Kingdoms','Stabbed in the back by Jaime Lannister','Season 6, Episode 6 in a flashback','0%','public/DeadParty/akCJtJmWNRCAv2EGD5R7JjXXvIbuMf84w5fSioS9.jpeg','2017-07-14 10:59:31','2017-07-14 10:59:31'),
	(78,'Brother Ray','Faith of the Seven Septon','Hanged by rogue members of the Brotherhood Without Banners','Season 6, Episode 7','0%','public/DeadParty/EvNUyxtSJa5i6otxdtDLkjgJ78600ZfqltSRBRGs.jpeg','2017-07-14 11:01:11','2017-07-14 11:01:11'),
	(79,'Lem','Member of Brotherhood Without Banners','Hanged by the Hound','Season 6, Episode 8','0%','public/DeadParty/RmNQ6YNAJGENzGYjv8FW1x7hTXbzod6qHSvzv15B.jpeg','2017-07-14 11:02:02','2017-07-14 11:02:02'),
	(80,'Brynden Tully (The Blackfish)','Lord of Riverrun','Killed defending Riverrun','Season 6, Episode 8','50% (We don’t actually see the Blackfish killed)','public/DeadParty/JPokLVtIfVw1pUfhEU8bnPSKP48HI0OBil83TAOz.jpeg','2017-07-14 11:02:57','2017-07-14 11:02:57'),
	(81,'Lady Crane','Actress in Braavos','Throat slit by the Waif','Season 6, Episode 8','0%','public/DeadParty/3FgGk8E4wk97D2lDIB4QcJHakXADtogE6swRMOkr.jpeg','2017-07-14 11:03:56','2017-07-14 11:03:56'),
	(82,'The Waif','Acolyte of the Faceless Men','Killed by Arya Stark','Season 6, Episode 8','0%','public/DeadParty/OZqEbS41ELRkWUqGZCP4cMB6DJ1K9QbltIvFEl3r.jpeg','2017-07-14 11:04:42','2017-07-14 11:04:42'),
	(83,'Razdal mo Eraz','Wise Master','Throat cut by Grey Worm','Season 6, Episode 9','0%','public/DeadParty/zPz84qnDa1Ry21kFIFCwgotesRE65GEfno0DG6VV.jpeg','2017-07-14 11:05:41','2017-07-14 11:05:41'),
	(84,'Belicho Paenymion','Volantis Nobleman','Throat cut by Grey Worm','Season 6, Episode 9','0%',NULL,'2017-07-14 11:06:18','2017-07-14 11:06:18'),
	(85,'Rickon Stark','Lord of House Stark','Shot with an arrow in the back by Ramsay Bolton','Season 6, Episode 9','0%',NULL,'2017-07-14 11:07:03','2017-07-14 11:07:03'),
	(86,'Jon Umber','Lord of House Umber','Throat torn out and head stabbed by Tormund','Season 6, Episode 9','0%',NULL,'2017-07-14 11:08:25','2017-07-14 11:08:25'),
	(87,'Wun Weg Wun Dar Wun','Giant in Wildling army','Shot through the eye by Ramsay Bolton','Season 6, Episode 9','0%','public/DeadParty/N8yJcqswWkFSIaLC8tbWDw80moQYykMKgYrPndlN.jpeg','2017-07-14 11:10:10','2017-07-14 11:10:10'),
	(88,'Ramsay Bolton','Warden of the North','Eaten alive by his hounds on the order of Sansa Stark','Season 6, Episode 9','0%','public/DeadParty/BRTnS0adxQY5MTFMx9GO8igea28EkL1e09DK8BAU.jpeg','2017-07-14 11:10:59','2017-07-14 11:10:59'),
	(89,'Grand Maester Pycelle','Grand Maester in King\'s Landing','Stabbed by one of Quburn\'s little birds','Season 6, Episode 10','0%','public/DeadParty/zqACpH1cO682LyieNtdYZ3cXb0cZvOETisB1atHd.jpeg','2017-07-14 11:11:43','2017-07-14 11:11:43'),
	(90,'Lancel','A brother with the Sparrows','Stabbed by one of Qyburn\'s little birds, blown up by wildfire','Season 6, Episode 10','0%','public/DeadParty/JaTjkheprFQTsQ9VhIuINRw2jTV2kdrmouXPFfyd.jpeg','2017-07-14 11:12:25','2017-07-14 11:12:25'),
	(91,'The High Sparrow','High Septon','Burned alive in a wildfire explosion orchestrated by Cersei','Season 6, Episode 10','0%','public/DeadParty/j8WNvrXN7RIIhG76njyDkGq8WRT5AxETBY26BEtV.jpeg','2017-07-14 11:13:12','2017-07-14 11:13:12'),
	(92,'Loras Tyrell','Former Lord Commander','Burned alive in a wildfire explosion orchestrated by Cersei','Season 6, Episode 10','0%','public/DeadParty/8hllMIJuNEm8N5AmN1nZqdXhGqsiQ66Hm69fouLd.jpeg','2017-07-14 11:13:56','2017-07-14 11:13:56'),
	(93,'Mace Tyrell','Lord of Highgarden, Warden of the South','Burned alive in a wildfire explosion orchestrated by Cersei','Season 6, Episode 10','0%','public/DeadParty/p3m0dQCk5OTpjlTiRWHgf8uxtiYhzt9AixpSKxwQ.jpeg','2017-07-14 11:14:39','2017-07-14 11:14:39'),
	(94,'Kevan Lannister','Hand of the King','Burned alive in a wildfire explosion orchestrated by Cersei','Season 6, Episode 10','0%',NULL,'2017-07-14 11:15:09','2017-07-14 11:15:09'),
	(95,'Margaery Tyrell','Queen of the Seven Kingdoms','Burned alive in a wildfire explosion orchestrated by Cersei','Season 6, Episode 10','0%','public/DeadParty/LSKyBnhIabHXsZf2uhV6HMIFOoh1ORPyYZaMQpPx.jpeg','2017-07-14 11:15:52','2017-07-14 11:15:52'),
	(96,'Tommen Baratheon','Lord of the Seven Kingdoms','Committed suicide by jumping from a window following Maergery\'s death by wildfire as orchestrated by Cersei','Season 6, Episode 10','0%','public/DeadParty/pkLkZyf8DZ6sgaiTHW4eOSWs2LbZuBVZSAMDgTPq.jpeg','2017-07-14 11:16:38','2017-07-14 11:16:38'),
	(97,'Walder Rivers','Bastard son of Walder Frey','Killed and baked in a pie by Arya Stark','Season 6, Episode 10','0%','public/DeadParty/VvUEhGarVaUXoRDl6E7jZqJKuhwGFOUgvFgU06CR.jpeg','2017-07-14 11:17:22','2017-07-14 11:17:22'),
	(98,'Lothar Frey','Son of Walder Frey','Killed and baked into a pie by Arya Stark','Season 6, Episode 10','0%',NULL,'2017-07-14 11:17:54','2017-07-14 11:17:54'),
	(99,'Walder Frey','Lord of the Crossing, Lord of Riverrun','Throat slit by Arya Stark','Season 6, Episode 10','0%','public/DeadParty/aFuyZpavF9sRmgcOgxVhjgklzGVhKEr0XRAQTMQy.jpeg','2017-07-14 11:18:53','2017-07-14 11:18:53'),
	(100,'Lyanna Stark','Sister of Eddard Stark, Mother of Jon Snow','Died after giving birth to Jon Snow during Robert\'s Rebellion','Season 6, Episode 10','0%','public/DeadParty/IbNhLoyDetevnqIdcy1VDtn1tONIoD2iOZYFykru.jpeg','2017-07-14 11:19:36','2017-07-14 11:19:36');

/*!40000 ALTER TABLE `dead_parties` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table episodes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `episodes`;

CREATE TABLE `episodes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `episodes` WRITE;
/*!40000 ALTER TABLE `episodes` DISABLE KEYS */;

INSERT INTO `episodes` (`id`, `number`, `created_at`, `updated_at`)
VALUES
	(1,'1',NULL,NULL),
	(2,'2',NULL,NULL),
	(3,'3',NULL,NULL),
	(4,'4',NULL,NULL),
	(5,'5',NULL,NULL),
	(6,'6',NULL,NULL),
	(7,'7',NULL,NULL);

/*!40000 ALTER TABLE `episodes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table merchandises
# ------------------------------------------------------------

DROP TABLE IF EXISTS `merchandises`;

CREATE TABLE `merchandises` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `merchandises` WRITE;
/*!40000 ALTER TABLE `merchandises` DISABLE KEYS */;

INSERT INTO `merchandises` (`id`, `type`, `created_at`, `updated_at`)
VALUES
	(1,'Indian',NULL,NULL),
	(2,'International',NULL,NULL);

/*!40000 ALTER TABLE `merchandises` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2017_07_12_101102_create_products_table',1),
	(4,'2017_07_12_102321_create_categories_table',1),
	(5,'2017_07_12_104420_create_merchandises_table',2),
	(12,'2017_07_13_100802_create_twists_table',3),
	(13,'2017_07_13_101318_create_answer_sets_table',3),
	(14,'2017_07_13_103235_create_episodes_table',3),
	(15,'2017_07_13_114226_create_user_guesses_table',3),
	(16,'2017_07_13_140119_create_news_table',3),
	(17,'2017_07_13_140132_create_articles_table',3),
	(18,'2017_07_14_082022_create_dead_parties_table',4),
	(19,'2017_07_14_091014_create_predictions_table',5);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;

INSERT INTO `news` (`id`, `title`, `short_description`, `long_description`, `media_type`, `media_url`, `created_at`, `updated_at`, `slug`)
VALUES
	(1,'Some news','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>','photo','public/news/46XXYiUBxAOcaH3AeMzDhHC5sGE5TVOgxKM0eP6V.jpeg','2017-07-14 14:57:52','2017-07-15 11:40:02','some-news');

/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table predictions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `predictions`;

CREATE TABLE `predictions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `predictions` WRITE;
/*!40000 ALTER TABLE `predictions` DISABLE KEYS */;

INSERT INTO `predictions` (`id`, `title`, `description`, `photo`, `created_at`, `updated_at`)
VALUES
	(1,'Littlefinger will turn Sansa against Jon.','This one bothers me because I just can\'t imagine Jon and Sansa turning against one another after everything they\'ve been through. After all, they\'re the first of the Stark children to reunite since the very beginning of the show.\r\n\r\nAnd yet...how can it not happen? Littlefinger is there in the North with his army, like a bad poison. He\'s still trying to manipulate Sansa and he\'s the ultimate player of the Game of Thrones, going from rags to riches up a long ladder of blood and chaos.\r\n\r\nHe was able to manipulate both Ned and Catelyn, and Sansa is even more vulnerable than either of them. Meanwhile, Jon\'s claim to the throne of Winterfell is shaky at best and we already know from the episode descriptions that he faces a revolt (though that could be for any number of reasons.)\r\n\r\nI don\'t think Littlefinger will be successful in the end, but I do think he\'s going to cause serious trouble for the Stark children in Season 7.','public/prediction/ngT4w5JkTYzXc9nexz5a1ckZUrzzkqbEuasLid7l.jpeg','2017-07-14 09:27:10','2017-07-14 09:27:10'),
	(2,'Cersei will have some tricks up her sleeve.','When it comes to the face-off between Dany and Cersei, the winner seems all but certain. The queen with the dragons, the Dothraki horde and the Unsullied, not to mention mercenaries and the armies of Sunspear and Highgarden will almost certainly triumph over the isolated, unloved queen in King\'s Landing. The Lannister armies have been at war for years and though the Lannisters are rich and have many men, they\'ll be hard pressed to fight off the might of Dany\'s army.\r\n\r\nBut it can\'t be that easy, can it? Not in Game of Thrones.\r\n\r\nSo Cersei must have a trick up her sleeve, something we aren\'t expecting. That\'s how she took down the High Sparrow, after all, using a trick from the Mad King\'s playbook. It\'s hard to know what this might be, but I can think of one potential ally: Euron Greyjoy.\r\n\r\nEuron is the enemy of Yara Greyjoy, who has joined up with Dany and her army. He\'s also crazy and ambitious and deadly. And while we don\'t know if the show is sticking to the books in this regard, it\'s possible he also has the horn Dragonbinder. That\'s the second magical horn in these stories. The first is the Horn of Winter, also known as the Horn of Joramun. It has the power to bring down the magical ice Wall separating Westeros from the frozen north and the army of dead.\r\n\r\nBoth these horns sound incredibly over-powered to me, and it\'s possible that they simply won\'t show up in the TV adaptation, but if Euron does have Dragonbinder he can use it to take control of Dany\'s dragons and turn them against her. This would even the playing field in a pretty major way.','public/prediction/0xbWzDOjcATargqG3FjQhmimXkAThoLuTdqNuPCj.jpeg','2017-07-14 09:34:30','2017-07-14 09:34:30'),
	(3,'Arya will reunite with the Brotherhood Without Banners (and the Hound.)','Arya just got through killing the vile Walder Frey and his sons. But she still has plenty of names on her kill list. She\'s also in the general vicinity of the Brotherhood Without Banners, who just met back up with Sandor \"The Hound\" Clegane.\r\n\r\nIt seems incredibly likely that she\'ll reunite with the Brotherhood on their way to the North. Will she also find her lost direwolf, Nymeria? Probably not, but we can dream. What all this likely means is that....',NULL,'2017-07-14 09:35:17','2017-07-14 09:35:17'),
	(4,'Cleganebowl is coming. Finally.','While the Hound and the Brotherhood may be heading to fight in the North, there\'s reason to believe the Hound at least finds himself in warmer climes. In the latest Season 7 trailer we get an ever-so-brief glimpse of Sandor Clegane drawing his sword against a backdrop that looks nothing like the frozen North.\r\n\r\nIt would make sense for Arya and the Hound to travel together to cross two more names off of the young Stark\'s list: Both Cersei and Gregor \"The Mountain\" Clegane are on it still. Perhaps Sandor will finally kill his murderous brother, and Arya will get a shot at Cersei. Whether she\'s successful is another question altogether.','public/prediction/6sFiqWMrdzMN1n9mlAqpO7z48aiYaHHmX2JeUQbx.png','2017-07-14 09:36:04','2017-07-14 09:36:38'),
	(5,'Jaime will finally leave Cersei.','In the books, Jaime grows disillusioned with Cersei long before the point we are at in the show. His relationship with Brienne is explored more deeply, for one thing. But in the show he\'s already showing signs that Cersei has lost his trust and love. After all, she\'s done so many horrible things, and her last play, wiping out all her enemies including Margaery Tyrell, led directly to their son Tommen\'s suicide.\r\n\r\nAt some point, Jaime needs to wake up to his sister\'s wickedness and go be a better man. I think that time will come in this season. If Euron allies with Cersei he may precipitate the break. After all, Euron wants a Queen and she needs allies. I can\'t imagine Jaime being very happy if she were to take up with the Iron Islander.','public/prediction/40VQ3nZSWddLSlozwjUTp5Oxea4pAhorz7GSsg5u.jpeg','2017-07-14 09:37:29','2017-07-14 09:37:29'),
	(6,'The Wall comes crashing down.','I\'m not sure how the Wall will fall just yet, but I have two guesses. First, the Horn of Winter is finally blown. That would be the most straightforward solution, in any case.\r\n\r\nBut I wonder if that\'s just a distraction from a more pressing threat: Bran Stark.\r\n\r\nAfter Hodor\'s heartbreaking sacrifice, Meera and Bran escaped the Night King and his horde of dead and were rescued by none other than Benjen Stark, Bran\'s long lost uncle and Night\'s Watch ranger. But Benjen had changed. He was nearly killed by the White Walkers, but was saved by the Children of the Forest who placed a dragonglass shard in his chest, preventing him from turning into a wight.\r\n\r\nHe reveals that the magic in the Wall prevents the dead from crossing---much like the magic that protected the Three-Eyed Raven\'s cave. That magic was broken when Bran entered the Three-Eyed Raven\'s vision and encountered the Night King there, who reached out and touched him. The mark that was left on Bran\'s arm destroyed the magic protecting the cave, allowing the Night King and his underlings to attack, killing the Three-Eyed Raven.\r\n\r\nSo what happens if Bran crosses through the Wall with the Night King\'s mark? Will it destroy the spell? That seems likely. I suspect that by the second-to-last episode of the season the Wall will fall, unless they save it for the season finale.\r\n\r\nMeanwhile, I imagine Sam will find some Very Important Information at the Citadel pertinent to the Wall, the Night King and the rest of the huge magical forces swirling toward one another for an epic conclusion.','public/prediction/MS4WhX5rMsbM5qSL1fJ02PfbqNPA4alhQrOziqYu.jpeg','2017-07-14 09:38:56','2017-07-14 09:39:34'),
	(7,'Jon and Dany won\'t meet...yet.','It\'s possible that the Wall will fall in the second-to-last episode and that Jon and Dany will finally meet in the finale, but I still think it\'s more likely that they\'ll come face to face in the final season. I\'m less certain about when Jon will learn the truth of his parentage, though this revelation will be pretty crucial when he eventually meets Dany, his very young aunt.\r\n\r\nPeople have been making lots of predictions about Jon and Dany getting married but I doubt it. I also doubt he and Sansa will get married. Jon just doesn\'t strike me as the type to marry a relative, even if it\'s a cousin or an aunt.\r\n\r\nI can see Jon remaining King in the North while Dany takes the Iron Throne in the South. When Aegon the Conqueror subdued Westeros with his dragons, Torrhen Stark relinquished his crown, earning him the title The King Who Knelt and becoming the first Warden of the North.\r\n\r\nPerhaps Jon will bring that full circle by becoming The King Who Would Not Kneel, or something along those lines. Whatever the case, the meeting between young Stark and young Targaeryn will be frosty rather than hot and bothered.\r\n\r\nIn the end, I think the whole One Westeros thing is a bad idea. The North, Sunspear, all the High Houses should pull a Brexit.\r\n\r\nBonus: We still won\'t get Lady Stoneheart. I think she\'s been written out of the show.',NULL,'2017-07-14 09:40:19','2017-07-14 09:40:19');

/*!40000 ALTER TABLE `predictions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchandise_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `name`, `photo`, `description`, `link`, `merchandise_type`, `category`, `created_at`, `updated_at`)
VALUES
	(8,'A Game of Thrones The Card Game','public/products/UwkL29vvRylbdqvZcVz2rXT7i0W7aWPeWwUSPNAD.jpeg','Tourney for the Hand is the first pack in the A Tale of Champions cycle and is themed around the great tournaments of Westeros. This Chapter Pack features 60 fixed cards (3 copies each of 20 unique cards) for A Game of Thrones: The Card Game.','http://www.amazon.in/Game-Thrones-Card-Tourney-Chapter/dp/1616611731/ref=sr_1_1?ie=UTF8&qid=1500291603&sr=8-1&keywords=Game+of+Thrones+card','Indian','4','2017-07-17 11:47:31','2017-07-17 11:47:31'),
	(9,'Game of Thrones Playing Cards','public/products/uv6hT9Uuowtw8MwznsW16OQGbHd5LP8ANxlcTdU0.jpeg','Game of Thrones Playing Cards','http://www.amazon.in/Thrones-Playing-Cards-Horse-Deluxe/dp/1616592311/ref=sr_1_2?ie=UTF8&qid=1500291603&sr=8-2&keywords=Game+of+Thrones+card','Indian','4','2017-07-17 11:49:37','2017-07-17 11:49:37'),
	(10,'Monopoly: Game of Thrones Collector\'s Edition','public/products/mLFj8qglraFlwvfTmp1L7p2MndCVhziNYcNp7FX0.jpeg','MONOPOLY: Game of Thrones Collector\'s Edition Vie to hold dominion over the realms of men in the Game of Thrones Collector\'s Edition of MONOPOLY.','http://www.amazon.in/Monopoly-Game-Thrones-Collectors-USAopoly/dp/B00UB25IJA/ref=sr_1_3?ie=UTF8&qid=1500291603&sr=8-3&keywords=Game+of+Thrones+card','Indian','4','2017-07-17 11:52:59','2017-07-17 11:52:59'),
	(11,'Game of Thrones: The Card Game','public/products/u1cJbYbr5X2f2aqeGfp733rfda3vYOWAiVMcumAg.jpeg','Game of Thrones: The Card Game [Toy] [Sep 30, 2015] Lang, Eric M.; French, Nate; Petersen, Christian T. and Hurley, Michael','http://www.amazon.in/Game-Thrones-Eric-M-Lang/dp/1633441903/ref=sr_1_5?ie=UTF8&qid=1500291603&sr=8-5&keywords=Game+of+Thrones+card','Indian','4','2017-07-17 11:57:42','2017-07-17 11:57:42'),
	(12,'Game of Thrones Card Game: Hbo Edition','public/products/L79K8JNxi89SjP8GpuJQ47i1bVqBE3FLFx6haCEF.jpeg','Game of Thrones is a card game for two players based on the epic HBO series where players wage war in the fields of Westeros and conspire to crush their opponents at court in Kings Landing.','http://www.amazon.in/Game-Thrones-Card-Hbo/dp/1616615885/ref=sr_1_6?ie=UTF8&qid=1500291603&sr=8-6&keywords=Game+of+Thrones+card','Indian','4','2017-07-17 11:59:42','2017-07-17 11:59:42'),
	(13,'Winter is coming keychain','public/products/013D9ZJGMOqkrcHAUQWS03PnCPo3EcM2HTHqllHA.jpeg','http://www.amazon.in/Evana-thrones-Winter-coming-keychain/dp/B01H0EUK3K/ref=sr_1_4?s=kitchen&ie=UTF8&qid=1500293025&sr=1-4&keywords=Game+of+Thrones','http://www.amazon.in/Evana-thrones-Winter-coming-keychain/dp/B01H0EUK3K/ref=sr_1_4?s=kitchen&ie=UTF8&qid=1500293025&sr=1-4&keywords=Game+of+Thrones','Indian','3','2017-07-17 12:06:45','2017-07-17 12:06:45'),
	(14,'Game Of Thrones House Stark Coffee Mug','public/products/qj5Ll7D0ZL2ed9FQvExGJU8FPWYRjbNB3oGfsOyg.jpeg','This Mug is made up of fine quality ceramic material which is Microwave & Dishwasher safe. The print on the mug is permanent and fade proof. The product would be delivered in a safe and attractive packaging.','http://www.amazon.in/Game-Thrones-House-Stark-Coffee/dp/B01I155YLA/ref=sr_1_5?s=kitchen&ie=UTF8&qid=1500293025&sr=1-5&keywords=Game+of+Thrones','Indian','2','2017-07-17 12:08:31','2017-07-17 12:08:31'),
	(15,'Game Of Thrones Coffee Mug - 325 ml','public/products/zhqy8GNGbH6gUHLzOjVTCD32eNevse6Ie4zKEKkN.jpeg','This Mug is made up of fine quality ceramic material which is Microwave & Dishwasher safe. The print on the mug is permanent and fade proof. The product would be delivered in a safe and attractive packaging.','http://www.amazon.in/Game-Thrones-Coffee-Mug-325/dp/B01I154NS0/ref=sr_1_6?s=kitchen&ie=UTF8&qid=1500293025&sr=1-6&keywords=Game+of+Thrones','Indian','2','2017-07-17 12:09:52','2017-07-17 12:09:52'),
	(16,'Via Mazzini Famous Game of Thrones Ned Stark Hand Of The King Pin','public/products/sHX00xuQV1tAAvUqsLlsEqeisNqfUSDTTnFVbRS8.jpeg','This beautiful pin is a replica of the Hand of The King pin, exclusively worn by the King\'s Hand. The Hand is the King\'s closest adviser, appointed and authorized to take decisions in the King\'s name.','http://www.amazon.in/Via-Mazzini-Famous-Thrones-Stark/dp/B0105Y3ET4/ref=pd_bxgy_201_img_2?_encoding=UTF8&psc=1&refRID=7SZBMNNFZ265GZ7QWP38','Indian','3','2017-07-17 12:11:56','2017-07-17 12:11:56'),
	(17,'Black Printed Round Neck T-Shirt','public/products/ELN1R3BhL4liavdaB0IXHfuRu8XCaIUTvyAmU2WR.jpeg','Fall in love with the soft texture wearing black coloured regular-fit T-shirt by Game Of Thrones. Your skin will love the feel of this T-shirt as it is fashioned using the material that is famous for comfort – cotton.','https://www.jabong.com/game-of-thrones-Black-Printed-Round-Neck-T-Shirt-2283763.html?pos=1','Indian','1','2017-07-17 12:15:19','2017-07-17 12:15:19'),
	(18,'Black Printed Hoodie','public/products/BpUpIpKQlUzTo08ROOXXtG1mVUSfPiopo3vqVKLP.jpeg','Get instant attention from all your female friends wearing this black coloured hoodie from the house of Game Of Thrones.','https://www.jabong.com/game-of-thrones-Black-Printed-Hoodie-1815442.html?pos=4&cid=GA774MA57HOSINDFAS','Indian','1','2017-07-17 12:17:16','2017-07-17 12:17:16'),
	(19,'Black Printed Sweatshirt','public/products/zPGzAQaobwpZw5fYOmRu4UYv0Lm3SbSeSJu1iZgG.jpeg','Perfectly designed, this stylish sweatshirt will make you stand out from the crowd for your exclusive taste. Made from cotton, it is extremely skin friendly and is comfortable to wear as well.','https://www.jabong.com/game-of-thrones-Black-Printed-Sweatshirt-1815441.html?pos=6','Indian','1','2017-07-17 12:18:29','2017-07-17 12:18:29'),
	(20,'GOT Black Printed Round Neck T-Shirt','public/products/6c2LEgvapPQ6FjSYeFWVpNaN8WjCI6gwaJipMtVv.jpeg','Strut on the streets in comfort wearing this T-Shirt by Game Of Thrones.','https://www.jabong.com/game-of-thrones-Black-Printed-Round-Neck-T-Shirt-2725862.html?pos=9&cid=GA774MA37CIWINDFAS','Indian','1','2017-07-17 12:20:25','2017-07-17 12:20:25'),
	(21,'Loister Game of Thrones Mobile Cover','public/products/kny66lnTUePlu2K1B9bcbOai632CljcG8m8Fs3Yj.jpeg','Loister Provide Mobile Back Cover for Xiaomi Redmi Note 4 with Matte Finish is made of High quality Polycarbonate. Loister provides designs for Passionate people, because its design that reflects you.','http://www.amazon.in/Loister-Thrones-Compatible-Printed-Designer/dp/B071DRSB86/ref=sr_1_1?s=electronics&ie=UTF8&qid=1500294094&sr=1-1&keywords=game+of+thrones+mobile+covers','Indian','6','2017-07-17 12:23:08','2017-07-17 12:23:08'),
	(22,'Game Of Thrones Mobile Cover','public/products/Fgy8nbR3L6XeHNWOZQb9gGmwd7rIaohN8AZXvYG6.jpeg','Loister Provide Mobile Back Cover for Samsung Galaxy J7 Prime with Matte Finish is made of High quality Polycarbonate. Loister provides designs for Passionate people, because its design that reflects you.','http://www.amazon.in/Loister-Thrones-Compatible-Samsung-Designer/dp/B072BHDH1G/ref=sr_1_7?s=electronics&ie=UTF8&qid=1500294094&sr=1-7&keywords=game+of+thrones+mobile+covers','Indian','6','2017-07-17 12:24:29','2017-07-17 12:24:29'),
	(23,'iPhone 6 6S Cases & Covers - GOT - Tyrion - Designer Printed Hard Shell Case','public/products/g6Ja08UWJgP348MPPPb6jv6b8G1Xj8CJNRlCcJAp.jpeg','Cases from JUSTGIRLYTHINGS are made from 100% polycarbonate plastic and printed with cutting edge HD technology.','http://www.amazon.in/iPhone-6S-Cases-Covers-Designer/dp/B01HZPKWTQ/ref=sr_1_10?s=electronics&ie=UTF8&qid=1500294094&sr=1-10&keywords=game+of+thrones+mobile+covers','Indian','6','2017-07-17 12:25:38','2017-07-17 12:25:38');

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table twists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `twists`;

CREATE TABLE `twists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `episode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct_answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `twists` WRITE;
/*!40000 ALTER TABLE `twists` DISABLE KEYS */;

INSERT INTO `twists` (`id`, `question`, `episode`, `correct_answer`, `created_at`, `updated_at`)
VALUES
	(1,'Some question goes here.','2','4','2017-07-17 13:30:56','2017-07-17 13:30:56');

/*!40000 ALTER TABLE `twists` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_guesses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_guesses`;

CREATE TABLE `user_guesses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `episode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `provider` text COLLATE utf8mb4_unicode_ci,
  `provider_id` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `provider`, `provider_id`)
VALUES
	(4,'Varun Davda','varund221@gmail.com','','LsjcKThkOd1ioXefcAX6AFUKf6E2yK0zJXkXL7RktCczYKkgOHvBk4UwJcQr','2017-07-13 08:09:20','2017-07-13 08:09:20','facebook','1568399543220550'),
	(5,'Varun Davda',NULL,'',NULL,'2017-07-13 08:34:25','2017-07-13 08:34:25','twitter','1163450790'),
	(6,'Varun Davda','varundavda006@gmail.com','$2y$10$XdaMT05eYEA2is5qCOVwfe3UlSAxmvn6ZTmXtgp0Fqv529o8W28Nu','TQbpXS6PR7WxCHP6fEDfv0pN0XavRT4UdZYqIV0Anhd0bsRP9vatVevtXZh1','2017-07-13 12:18:58','2017-07-13 12:18:58',NULL,NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
