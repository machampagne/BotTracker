CREATE TABLE IF NOT EXISTS `'.Common::prefixTable('bot_db').'` 
 (`botId` INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idsite` INTEGER(10) UNSIGNED NOT NULL,
  `botName` VARCHAR(100) NOT NULL,
  `botActive` BOOLEAN NOT NULL,
  `botKeyword` VARCHAR(128) NOT NULL,
  `botCount` INTEGER(10) UNSIGNED NOT NULL,
  `botLastVisit` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE,
   PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `'.Common::prefixTable('bot_db_stat').'`
(			 			`botId` INTEGER(10) UNSIGNED NOT NULL,
			 			`idsite` INTEGER(10) UNSIGNED NOT NULL,
			 			`page` VARCHAR(100) NOT NULL,
			 			`visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
			 			`useragent` VARCHAR(100) NOT NULL,
			 
			 			PRIMARY KEY(`botId`,`visit_timestamp`)
)  DEFAULT CHARSET=utf8;