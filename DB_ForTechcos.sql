/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 5.7.24 : Database - lara_techcefacos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`lara_techcefacos` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `lara_techcefacos`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_11_25_142036_create_permission_tables',2);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_type`,`model_id`) values 
(1,'App\\User',7);

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `metaKeyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `metaDescription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fkThemeId` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contents` text COLLATE utf8_unicode_ci NOT NULL,
  `pageLocation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `parentPageId` int(11) NOT NULL,
  `externalLink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `targetWindow` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `url` (`url`),
  KEY `fkThemeId` (`fkThemeId`)
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `pages` */

insert  into `pages`(`title`,`metaKeyword`,`metaDescription`,`fkThemeId`,`url`,`contents`,`pageLocation`,`rank`,`parentPageId`,`externalLink`,`targetWindow`,`id`,`created_at`,`updated_at`) values 
('Home','home','home',1,'home','<div>{SLIDER}</div>\r\n<div>{OUR-CAUSES}{HELP-US}</div>\r\n<div>{OUR-GALLARY}</div>\r\n<div>{COUNT-AREA}</div>\r\n<div>{OUR-VOLUNTEER}</div>\r\n<div>{PEOPLE-SAYS}</div>\r\n<div>{BLOG-AREA}</div>\r\n<div>{BRAND-LOGO}</div>','Top',1,0,NULL,'_blank',121,'2019-11-28 15:33:56','2019-11-29 16:02:20'),
('Programmes','Programmes','Programmes',1,'programmes','<p>Programmes</p>','Top',1,0,'Programmes','_blank',122,'2019-11-29 14:45:23','2019-11-29 14:45:23'),
('Projects','Project','Project',1,'project','<p>Project</p>','Top',1,0,'Project','_blank',123,'2019-11-29 14:46:20','2019-11-29 14:46:44'),
('Activities','Activities','Activities',1,'activities','<p><a href=\"../../\">Activities</a></p>','Top',1,0,'Activities','_blank',124,'2019-11-29 14:47:24','2019-11-29 14:47:24'),
('Campaign','Campaign','Campaign',1,'campaign','<p><a href=\"../../\">Campaign</a></p>','Top',1,0,'Campaign','_blank',125,'2019-11-29 14:47:52','2019-11-29 14:47:52'),
('ICMs','ICMs','ICMs',1,'icms','<p><a href=\"../../\">ICMs</a></p>','Top',1,0,'ICMs','_blank',126,'2019-11-29 14:48:37','2019-11-29 14:48:37'),
('About us','About us','About us',1,'about-us','<p>About us</p>','Top',1,121,'About us','_blank',127,'2019-11-29 14:58:47','2019-11-29 14:59:05'),
('What We Offer','What We Offer','What We Offer',1,'what-we-offer','<p>What We Offer</p>','Top',1,122,'What We Offer','_blank',128,'2019-11-29 14:59:56','2019-11-29 14:59:56'),
('What We Do','What We Do','What We Do',0,'what-we-do','<p>What We Do</p>','Top',1,123,NULL,'_blank',129,'2019-11-29 15:01:16','2019-11-29 16:25:39'),
('How It’s Done','How It’s Done','How It’s Done',1,'how-its-done','<p>How It&rsquo;s Done</p>','Top',1,124,'How It’s Done','_blank',130,'2019-11-29 15:02:25','2019-11-29 15:02:25'),
('Get Involved','Get Involved','Get Involved',1,'get-involved','<p>Get Involved</p>','Top',1,125,'Get Involved','_blank',131,'2019-11-29 15:03:11','2019-11-29 15:03:11'),
('Resource','Resource','Resource',1,'resource','<p>Resource</p>','Top',1,126,'Resource','_blank',132,'2019-11-29 15:04:10','2019-11-29 15:04:10');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

insert  into `permissions`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values 
(3,'Administer roles & permissions','web','2019-11-25 15:33:56','2019-11-25 15:33:56'),
(4,'admin2','web','2019-11-28 18:34:42','2019-11-28 18:34:42');

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

insert  into `role_has_permissions`(`permission_id`,`role_id`) values 
(3,1);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values 
(1,'Admin','web','2017-10-06 04:38:39','2017-10-06 04:38:39');

/*Table structure for table `styles` */

DROP TABLE IF EXISTS `styles`;

CREATE TABLE `styles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `styleTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `StyleName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `styles` */

insert  into `styles`(`id`,`created_at`,`updated_at`,`styleTitle`,`StyleName`) values 
(1,'2017-10-22 20:04:19','2017-10-22 20:04:19','sdfsd','dsfsdf');

/*Table structure for table `theme_styles` */

DROP TABLE IF EXISTS `theme_styles`;

CREATE TABLE `theme_styles` (
  `fkThemeId` int(11) NOT NULL,
  `StyleContents` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fkStyleId` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `theme_styles` */

insert  into `theme_styles`(`fkThemeId`,`StyleContents`,`id`,`created_at`,`updated_at`,`fkStyleId`) values 
(1,'<p>sdgfsdfsdf</p>',1,'2017-10-22 20:04:36','2017-10-22 20:04:36',1);

/*Table structure for table `themes` */

DROP TABLE IF EXISTS `themes`;

CREATE TABLE `themes` (
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `themes` */

insert  into `themes`(`content`,`title`,`id`,`created_at`,`updated_at`) values 
('<!-- Start main area -->\r\n<div class=\"main-area\"><!-- Start header --> {HEADER} <!-- End header -->{CONTENT} {FOOTER} <!-- End footer --></div>\r\n<!-- End main area -->','Default',1,'2017-10-19 00:38:17','2019-11-29 15:33:33'),
('<div>{HEADER}</div>\r\n<div class=\"navigation navigation_two\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"logo col-md-3\"><a href=\"../../\"><img class=\"img-responsive\" src=\"../../images/logo.png\" alt=\"\" class=\"img-responsive\" border=\"0\" class=\"img-responsive\" /> </a></div>\r\n<div class=\"col-md-9\">\r\n<div id=\"navigation\">{NAVIGATION}</div>\r\n</div>\r\n<!-- End: social-nav --></div>\r\n<!--/ row --></div>\r\n<!--/ container --></div>\r\n<div class=\"slides_wrapper\">\r\n<div class=\"slides__preload_wrapper\">&nbsp;</div>\r\n<div class=\"slider_home slider_home_two\">\r\n<div class=\"single_slider slide_bg_1\">\r\n<div class=\"slider_item_tb\">\r\n<div class=\"slider_item_tbcell\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-md-7 col-md-offset-3 col-xs-12\">\r\n<h4>Medex Transportation Association</h4>\r\n<!-- <h2>Computers • <span> Networking • </span> Technology</h2> -->\r\n<p class=\"slider-text\">Our purpose is to provide necessary support to the transportation provider and brokerage by helping them align to today&rsquo;s changing transportation needs. Our goal is to ensure excellent quality of care for your client.</p>\r\n<div class=\"slider_btn\" style=\"text-align: center;\"><a class=\"slider_btn_one\" href=\"../../signup\">Signup</a> <!--<a href=\"login.html\" class=\"slider_btn_two\">Login</a>--></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"single_slider slide_bg_2\">\r\n<div class=\"slider_item_tb\">\r\n<div class=\"slider_item_tbcell\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-md-7 col-md-offset-3 col-xs-12\">\r\n<h4>Medex Transportation Association</h4>\r\n<!-- <h2> Computers • <span> Networking • </span> Technology</h2> -->\r\n<p class=\"slider-text\">Thanks to agreements with our current and future business affiliates, MedEx Transportation Association is excited about bringing you discount costs for services specifically needed for the industry. Call us today for more details on how to get started with these savings. 800 499 4974</p>\r\n<div class=\"slider_btn\" style=\"text-align: center;\"><a class=\"slider_btn_one\" href=\"../../signup\">Signup</a> <!--<a href=\"login.html\" class=\"slider_btn_two\">Login</a>--></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div>{CONTENT}</div>\r\n<div>{FOOTERBAR}</div>','HomeNew',4,'2017-11-23 09:19:28','2019-10-25 03:49:31'),
('<div>{HEADER}</div>\r\n<div class=\"navigation navigation_two\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"logo col-md-3\"><a href=\"../\"><img src=\"https://medexassoc.com/images/logo.png\" alt=\"\" width=\"189\" height=\"73\" /> </a></div>\r\n<div class=\"col-md-9\">\r\n<div id=\"navigation\">{NAVIGATION}</div>\r\n</div>\r\n<!-- End: social-nav --></div>\r\n<!--/ row --></div>\r\n<!--/ container --></div>\r\n<div>{CONTENT}</div>\r\n<div>{FOOTERBAR}</div>','Shopping Cart',5,'2019-07-26 05:16:50','2019-08-02 07:55:13');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(3,'sfsdfdfs','usama0092@live.com',NULL,'$2y$10$u/YPJ2uCPssXD/bySyle0.UaNFQnjue2aO21rdsAbX1u9daWVoIhG',NULL,'2019-11-24 19:42:59','2019-11-24 19:42:59'),
(4,'usama','dddddd@live.com',NULL,'$2y$10$DEzEZwSBBIqAFqiQqzXWKurWTH30KXcL.ikv.3wJSUkq88lXuAXx2',NULL,'2019-11-24 19:44:36','2019-11-24 19:44:36'),
(5,'usama','usama00d92@live.com',NULL,'$2y$10$qvpKb1qWOQ77TXhhrcHvkOVMpyTPtix44s3V.nQkZgaf0XcgLX/xq',NULL,'2019-11-24 19:48:29','2019-11-24 19:48:29'),
(6,'usama','usamaddd0092@live.com',NULL,'$2y$10$LQ5cjDRBuYwPgUBDB3w8IOsYhwt/B2ogwzGb9mxeJZZhm5QdNYcQe',NULL,'2019-11-24 19:55:11','2019-11-24 19:55:11'),
(7,'usama','user1234@gmail.com',NULL,'$2y$10$t/ix4En8FtcnCDHmvpAW9.toJWtW2.98Zqt78aLiw1XPlOitlVp2O',NULL,'2019-11-28 15:31:49','2019-11-28 15:31:49');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
