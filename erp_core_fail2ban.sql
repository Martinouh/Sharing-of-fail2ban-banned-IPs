CREATE TABLE IF NOT EXISTS `erp_core_fail2ban` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `hostname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `protocol` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `port` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `hostname` (`hostname`,`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
