/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100110
Source Host           : localhost:3306
Source Database       : application

Target Server Type    : MYSQL
Target Server Version : 100110
File Encoding         : 65001

Date: 2016-04-13 13:46:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categorie
-- ----------------------------
DROP TABLE IF EXISTS `categorie`;
CREATE TABLE `categorie` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('ACTIVE','DELETED') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `icone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `codeTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of categorie
-- ----------------------------
INSERT INTO `categorie` VALUES ('7', 'Transportation', 'ACTIVE', 'fa fa-home', '1', '2016-04-11 10:13:51', '2016-04-11 10:13:51', 'Transportation');
INSERT INTO `categorie` VALUES ('8', 'Electronics', 'ACTIVE', 'fa fa-home', '2', '2016-04-11 10:14:41', '2016-04-11 10:14:41', 'Electronics');

-- ----------------------------
-- Table structure for language
-- ----------------------------
DROP TABLE IF EXISTS `language`;
CREATE TABLE `language` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '0',
  `fallback_locale` smallint(6) DEFAULT '0',
  `country_code` varchar(3) NOT NULL,
  `lang_country` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `language_code_unique` (`code`),
  UNIQUE KEY `language_lang_country` (`lang_country`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of language
-- ----------------------------
INSERT INTO `language` VALUES ('1', 'ar', 'Arabic', '0', '0', 'SA', 'ar_SA', '0000-00-00 00:00:00', '2016-04-11 09:11:28');
INSERT INTO `language` VALUES ('2', 'be', 'Belarusian', '0', '0', 'BY', 'be_BY', '0000-00-00 00:00:00', '2016-03-31 16:39:52');
INSERT INTO `language` VALUES ('3', 'bg', 'Bulgarian', '0', '0', 'BG', 'bg_BG', '0000-00-00 00:00:00', '2016-04-11 09:09:07');
INSERT INTO `language` VALUES ('4', 'bs', 'Bosnian', '0', '0', 'BA', 'bs_BA', '0000-00-00 00:00:00', '2016-03-09 16:07:21');
INSERT INTO `language` VALUES ('5', 'ca', 'Catalan', '0', '0', 'ES', 'ca_ES', '0000-00-00 00:00:00', '2016-04-11 09:09:42');
INSERT INTO `language` VALUES ('6', 'cs', 'Czech', '0', '0', 'CZ', 'cs_CZ', '0000-00-00 00:00:00', '2016-04-11 12:50:02');
INSERT INTO `language` VALUES ('7', 'cy', 'Welsh', '0', '0', 'GB', 'cy_GB', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('8', 'da', 'Danish', '0', '0', 'DK', 'da_DK', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('9', 'de', 'German', '0', '0', 'DE', 'de_DE', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('10', 'el', 'Greek', '0', '0', 'GR', 'el_GR', '0000-00-00 00:00:00', '2016-04-11 09:09:35');
INSERT INTO `language` VALUES ('11', 'es', 'Spanish', '0', '0', 'ES', 'es_ES', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('12', 'fa', 'Farsi', '0', '0', 'IR', 'fa_IR', '0000-00-00 00:00:00', '2016-04-11 09:09:37');
INSERT INTO `language` VALUES ('13', 'fi', 'Finnish', '0', '0', 'FI', 'fi_FI', '0000-00-00 00:00:00', '2016-04-11 09:09:37');
INSERT INTO `language` VALUES ('14', 'fr', 'French', '0', '0', 'FR', 'fr_FR', '2016-03-05 19:28:20', '2016-04-11 09:09:45');
INSERT INTO `language` VALUES ('15', 'gl', 'Galician', '0', '0', 'ES', 'gl_ES', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('16', 'he', 'Hebrew', '0', '0', 'IL', 'he_IL', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('17', 'hr', 'Croatian', '0', '0', 'HR', 'hr_HR', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('18', 'hu', 'Hungarian', '0', '0', 'HU', 'hu_HU', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('19', 'id', 'Indonesian', '0', '0', 'ID', 'id_ID', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('20', 'is', 'Icelandic', '0', '0', 'IS', 'is_IS', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('21', 'it', 'Italian', '0', '0', 'IT', 'it_IT', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('22', 'mk', '	FYRO Macedonian', '0', '0', 'MK', 'mk_MK', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('23', 'ms', 'Malay', '0', '0', 'MY', 'ms_MY', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('24', 'nb', 'Norwegian', '0', '0', 'NO', 'nb_NO', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('25', 'nl', 'Dutch', '0', '0', 'NL', 'nl_NL', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('26', 'pl', 'Polish', '0', '0', 'PL', 'pl_PL', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('27', 'pt', 'Portuguese', '0', '0', 'PT', 'pt_PT', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('28', 'pt_BR', '	Portuguese (Brazil)', '0', '0', 'BR', 'pt_BR', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('29', 'ro', 'Romanian', '0', '0', 'RO', 'ro_RO', '0000-00-00 00:00:00', '2016-03-09 18:04:47');
INSERT INTO `language` VALUES ('30', 'ru', 'Russian', '1', '0', 'RU', 'ru_RU', '2016-03-05 17:34:42', '2016-03-31 16:42:39');
INSERT INTO `language` VALUES ('31', 'sk', 'Slovak', '0', '0', 'SK', 'sk_SK', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('32', 'sl', 'Slovenian', '0', '0', 'SL', 'sl_SL', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('33', 'sq', 'Albanian ', '0', '0', 'AL', 'sq_AL', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('34', 'sr', 'Serbian ', '0', '0', 'SP', 'sr_SP', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('35', 'sv', 'Swedish', '0', '0', 'SE', 'sv_SE', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('36', 'th', 'Thai', '0', '0', 'TH', 'th_TH', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('37', 'tr', 'Turkish', '0', '0', 'TR', 'tr_TR', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('38', 'uk', 'Ukrainian', '0', '0', 'UA', 'uk_UA', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('39', 'vi', 'Vietnamese', '0', '0', 'VN', 'vi_VN', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('40', 'zh_CN', 'Chinese (S)', '0', '0', 'CN', 'zh_CN', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('41', 'zh_HK', 'Chinese (Hong Kong)', '0', '0', 'HK', 'zh_HK', '0000-00-00 00:00:00', '2016-03-09 16:07:22');
INSERT INTO `language` VALUES ('42', 'zh_TW', 'Chinese (T)', '0', '0', 'TW', 'zh_TW', '0000-00-00 00:00:00', '2016-03-09 16:07:23');
INSERT INTO `language` VALUES ('43', 'en', 'English', '1', '1', 'US', 'en_US', '2016-03-05 17:34:36', '2016-03-30 11:54:31');
INSERT INTO `language` VALUES ('44', 'hy', 'Armenian', '1', '0', 'AM', 'hy_AM', '2016-03-30 15:54:02', '2016-04-11 10:17:53');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'top', '2016-03-29 12:59:10', '2016-03-29 12:59:10');

-- ----------------------------
-- Table structure for menu_page
-- ----------------------------
DROP TABLE IF EXISTS `menu_page`;
CREATE TABLE `menu_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of menu_page
-- ----------------------------
INSERT INTO `menu_page` VALUES ('37', '1', '1', '2016-04-07 08:19:10', '2016-04-07 08:19:10', null);
INSERT INTO `menu_page` VALUES ('38', '3', '1', '2016-04-07 08:19:10', '2016-04-07 08:19:10', null);
INSERT INTO `menu_page` VALUES ('39', '2', '1', '2016-04-07 08:19:10', '2016-04-07 08:19:10', null);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2016_03_22_164606_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2016_03_22_211457_add_salt_to_users', '2');
INSERT INTO `migrations` VALUES ('2016_03_22_144218_add_categorie_table', '3');
INSERT INTO `migrations` VALUES ('2016_03_22_151116_create_categories_table', '4');
INSERT INTO `migrations` VALUES ('2016_03_25_094653_create_subcategories_table', '5');
INSERT INTO `migrations` VALUES ('2016_03_25_140343_create_service_table', '6');
INSERT INTO `migrations` VALUES ('2016_03_25_154251_add_service_images_table', '7');
INSERT INTO `migrations` VALUES ('2016_03_29_121712_add_menu_table', '8');
INSERT INTO `migrations` VALUES ('2016_03_29_121817_add_pages_table', '8');
INSERT INTO `migrations` VALUES ('2016_03_29_122005_add_menu_page_table', '8');
INSERT INTO `migrations` VALUES ('2016_03_29_175050_add_menu_page_image_table', '9');

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `html` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titleCode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES ('1', 'test sdsa', 'dasds1111', '0', '<p><u><em><strong>dsasdasda sad as asfd sad gsdfgtsf r sd gsfhg</strong></em></u></p>\r\n\r\n<p><img alt=\"\" src=\"/page/thumb_6808fc08965a1410d07c25f4e8a00fc3.jpg\" /></p>\r\n', '2016-03-29 13:12:34', '2016-04-07 08:19:08', 'test_sdsa');
INSERT INTO `pages` VALUES ('2', 'test3', 'tes666', '2', '<p>asdasd aa a a f</p>\r\n', '2016-03-29 13:12:34', '2016-04-07 08:13:39', 'test3');
INSERT INTO `pages` VALUES ('3', 'est2asddasdas', 'asdasdsa', '1', '<p>sad</p>\r\n', '2016-03-29 13:12:34', '2016-04-07 08:19:08', 'est2asddasdas');

-- ----------------------------
-- Table structure for page_image
-- ----------------------------
DROP TABLE IF EXISTS `page_image`;
CREATE TABLE `page_image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of page_image
-- ----------------------------
INSERT INTO `page_image` VALUES ('47', '2d84606eea07874e512c998826c01572.png', null, null);
INSERT INTO `page_image` VALUES ('49', '74815abe5bd02e0079b2eb93e1c01a1d.png', null, null);
INSERT INTO `page_image` VALUES ('51', '6808fc08965a1410d07c25f4e8a00fc3.jpg', null, null);
INSERT INTO `page_image` VALUES ('53', 'eed78febba39bdffbdafff8254270429.png', null, null);
INSERT INTO `page_image` VALUES ('55', 'e770a006b5d7c9d380b2d2e274b5b2ad.png', null, null);
INSERT INTO `page_image` VALUES ('57', '48487f355bee032159d530a011b74ef2.png', null, null);
INSERT INTO `page_image` VALUES ('58', '2f9eec3ee8047fa8ccde525fe9503c17.jpg', null, null);
INSERT INTO `page_image` VALUES ('59', 'a94c98d8f93072e17e898fe042caa042.png', null, null);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for service
-- ----------------------------
DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('NEW','APPROVED','BLOCKED','DELETED') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NEW',
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `subCat_id` int(11) DEFAULT NULL,
  `codeTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of service
-- ----------------------------
INSERT INTO `service` VALUES ('6', 'test', 'edsadsadsasad', 'NEW', '1', null, '2016-04-11 12:50:02', '2', '7', '15', 'test');

-- ----------------------------
-- Table structure for service_images
-- ----------------------------
DROP TABLE IF EXISTS `service_images`;
CREATE TABLE `service_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mine` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of service_images
-- ----------------------------
INSERT INTO `service_images` VALUES ('104', '1', '0', '6', '748d1164c47cfe23a6613fdef4f16abf.jpg', '2016-04-11 12:50:02', '2016-04-11 12:50:21');

-- ----------------------------
-- Table structure for subcategories
-- ----------------------------
DROP TABLE IF EXISTS `subcategories`;
CREATE TABLE `subcategories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('ACTIVE','DELETED') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `codeTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of subcategories
-- ----------------------------
INSERT INTO `subcategories` VALUES ('15', '7', 'Cars for Hire', 'fa fa-home', 'ACTIVE', '1', '2016-04-11 10:15:54', '2016-04-11 10:15:54', 'Cars_for_Hire');
INSERT INTO `subcategories` VALUES ('16', '8', 'Computers and Internet', 'fa fa-home', 'ACTIVE', '2', '2016-04-11 10:18:37', '2016-04-11 10:18:37', 'Computers_and_Internet');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('USER','ADMIN','MODERATOR') COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('ACTIVE','DELETED','BLOCKED','BANNED','NEW') COLLATE utf8_unicode_ci NOT NULL,
  `online` enum('YES','NO') COLLATE utf8_unicode_ci NOT NULL,
  `home_phone` int(11) NOT NULL,
  `mobile_phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'asdasddsa', 'asdsadsadsa', 'admin@ad.ad', '$2y$10$INlbP71aiT1E3BWvb0cxu.7Su5jD7sNmZNi2JXMI3W.HTy.iLXoeq', 'ADMIN', 'ACTIVE', 'YES', '1111', '1111', 'asasddas', '', 'HoHdwijDWCnhngVNMz70nwdmvhKCAELUp0hHIzWjBpcsYqvuAjBVviQqlKNC', '2016-03-24 08:18:57', '2016-03-30 10:33:08', '1560456f3a2f11b1c52.44014119', '');
INSERT INTO `users` VALUES ('2', 'test', 'test', 'test@test.com', '$2y$10$INlbP71aiT1E3BWvb0cxu.7Su5jD7sNmZNi2JXMI3W.HTy.iLXoeq', 'USER', 'ACTIVE', 'YES', '1699161', '2147483647', 'test', '', '1Zul2URW9DVT23J9riKIb4qA2PLm5XSLLLzbiv3W7VrSavCtaY4aqG7GuKaa', '2016-03-24 08:18:57', '2016-03-30 10:55:40', '1560456f3a2f11b1c52.44014119', null);
