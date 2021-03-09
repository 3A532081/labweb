-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `member` (`id`, `name`, `name_en`, `year`, `class`, `skill`, `email`, `created_at`, `updated_at`) VALUES
(1,	'陳曼欣',	'Mandy',	'108',	'醫資二',	'SAS',	'm504541422@gmail.com',	NULL,	NULL),
(2,	'林玲蓉',	'Carol',	'108',	'醫資二',	'Java,SQL,Unity',	'caroltail110204@gmail.com',	NULL,	NULL),
(3,	'郭庭維',	'Geannie',	'108',	'資管二',	'Java、Android',	'berrypie.wei@gmail.com',	NULL,	NULL),
(4,	'詹惠婷',	'Doris',	'108',	'資管二',	'Java、Python',	'doris10152016@gmail.com',	NULL,	NULL),
(5,	'蔡卓庭',	'Joe',	'108',	'資管二',	'Java、C、SQL',	'joe51151108@gmail.com',	NULL,	NULL),
(6,	'陳貞樺',	'Jane',	'108',	'醫資二',	'MATLAB、PHP、Wordpress',	'jen850909@gmail.com',	NULL,	NULL),
(7,	'黃資昂',	'Nick',	'108',	'前瞻製造二',	'C#,Python,Flexsim',	'608445003ccu@gmail.com',	NULL,	NULL),
(8,	'史博先',	'Barry',	'108',	'資管二',	'Java, Android, AWS',	'index50710@gmail.com',	NULL,	NULL),
(9,	'楊雅婷',	'Raina',	'108',	'資管二',	'C++、php、SQL',	'Raina0229@gmail.com',	NULL,	NULL),
(10,	'游程傑',	'Duck',	'108',	'資管二',	'C++,python',	'yseyableach@yahoo.com.tw',	NULL,	NULL),
(11,	'李奇鴻',	'Kevin',	'108',	'醫資二',	'C、Java',	'decadehope0604@gmail.com',	NULL,	NULL),
(12,	'謝雨錡',	'Ariel',	'108',	'資管二',	'C#、Python、SQL',	'ych60819@gmail.com',	NULL,	NULL),
(13,	'曾怡樺',	'Winnie',	'108',	'資管二',	'Java、php、SQL',	'yihua2486@gmail.com',	NULL,	NULL),
(14,	'黃彥筑',	'Mia',	'109',	'醫資一',	'Java、Python、C',	'miaychuang@gmail.com',	NULL,	NULL),
(15,	'陳冠宇',	'Manu',	'109',	'資管一',	'Laravel、SQL',	'tanshui601@gmail.com',	NULL,	NULL),
(16,	'楊渝婷',	'Ting',	'109',	'醫資一',	'HTML5、PHP、SQL、Python',	'aa0929099119@gmail.com',	NULL,	NULL),
(17,	'卓恩安',	'Ann',	'109',	'醫資一',	'',	's669130123@gmail.com',	NULL,	NULL),
(18,	'李珮妤',	'Bobo',	'109',	'資管一',	'Java、Android、C++',	'lip549a@gmail.com',	NULL,	NULL);

-- 2021-03-02 08:44:53
