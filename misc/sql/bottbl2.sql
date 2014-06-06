CREATE TABLE IF NOT EXISTS `'.Common::prefixTable('bot_db_stat').'`
(			 			`botId` INTEGER(10) UNSIGNED NOT NULL,
			 			`idsite` INTEGER(10) UNSIGNED NOT NULL,
			 			`page` VARCHAR(100) NOT NULL,
			 			`visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
			 			`useragent` VARCHAR(100) NOT NULL,
			 
			 			PRIMARY KEY(`botId`,`visit_timestamp`)
)  DEFAULT CHARSET=utf8