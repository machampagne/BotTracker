<?php
/**
 * Piwik - Open source web analytics
 * 
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html Gpl v3 or later
 * @version $Id:  $
 */
	
/**
 * @package Piwik_BotTracker
 */
namespace Piwik\Plugins\BotTracker;

use Piwik\WidgetsList;
use Piwik\Menu\MenuMain;
use Piwik\Settings\SystemSetting;
use Piwik\Common;
use Piwik\Db;
use Piwik\Plugins\SitesManager\API as APISitesManager;
use Piwik\Menu\MenuAdmin;
use Piwik\Piwik;
use Piwik\Tracker;

class BotTracker extends \Piwik\Plugin
{	
	protected $botDb = null;
	
	public function __destruct()
	{
		if(!is_null($this->botDb))
		{
			botDb_close($this->botDb);
		}
	}
	
	public function install()
	{
		$tableExists = false;
			
		// create new table "botDB"
		$query = "CREATE TABLE `".Common::prefixTable('bot_db')."` 
 (`botId` INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idsite` INTEGER(10) UNSIGNED NOT NULL,
  `botName` VARCHAR(100) NOT NULL,
  `botActive` BOOLEAN NOT NULL,
  `botKeyword` VARCHAR(128) NOT NULL,
  `botCount` INTEGER(10) UNSIGNED NOT NULL,
  `botLastVisit` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
  `extra_stats` BOOLEAN NOT NULL DEFAULT FALSE,
  PRIMARY KEY(`botId`)
)  DEFAULT CHARSET=utf8";
		
		// if the table already exist do not throw error. Could be installed twice...
		try {
			Db::query($query);
		}
		catch(\Exception $e){
			$tableExists = true;
		}
		
		if (!$tableExists){		
			$sites = APISitesManager::getInstance()->getSitesWithAdminAccess();
			foreach ($sites as $site){
				$params3 = array($site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']
,$site['idsite']);
				$query3 = "INSERT INTO `".Common::prefixTable('bot_db')."` 
				(idsite,botName, botActive, botKeyword, botCount, botLastVisit)
				VALUES (?,'008',1,'Mozilla/5.0 (compatible; 80bot/0.71; http://www.80legs.com/spider.html;) Gecko/2008032620',0,'0000-00-00 00:00:00')
, (?,'008',1,'Mozilla/5.0 (compatible; 008/0.83; http://www.80legs.com/spider.html;) Gecko/2008032620',0,'0000-00-00 00:00:00')
, (?,'008',1,'Mozilla/5.0 (compatible; 008/0.83; http://www.80legs.com/webcrawler.html;) Gecko/2008032620',0,'0000-00-00 00:00:00')
, (?,'008',1,'Mozilla/5.0 (compatible; 008/0.85; http://www.80legs.com/webcrawler.html) Gecko/2008032620',0,'0000-00-00 00:00:00')
, (?,'192.comAgent',1,'192.comAgent',0,'0000-00-00 00:00:00')
, (?,'200PleaseBot',1,'Mozilla/5.0 (compatible; 200PleaseBot/1.0; +http://www.200please.com/bot)',0,'0000-00-00 00:00:00')
, (?,'360Spider',1,'Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.8.0.11) Gecko/20070312 Firefox/1.5.0.11; 360Spider',0,'0000-00-00 00:00:00')
, (?,'360Spider',1,'Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.8.0.11)  Firefox/1.5.0.11; 360Spider',0,'0000-00-00 00:00:00')
, (?,'360Spider',1,'Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; )  Firefox/1.5.0.11; 360Spider',0,'0000-00-00 00:00:00')
, (?,'4seohuntBot',1,'Mozilla/5.0 (compatible; 4SeoHuntBot; +http://4seohunt.biz/about.html)',0,'0000-00-00 00:00:00')
, (?,'50.nu',1,'50.nu/0.01 ( +http://50.nu/bot.html )',0,'0000-00-00 00:00:00')
, (?,'A6-Indexer',1,'A6-Indexer/1.0 (http://www.a6corp.com/a6-web-scraping-policy/)',0,'0000-00-00 00:00:00')
, (?,'abby',1,'Mozilla/5.0 (compatible; abby/1.0; +http://www.ellerdale.com/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'Aboundexbot',1,'Aboundex/0.2 (http://www.aboundex.com/crawler/)',0,'0000-00-00 00:00:00')
, (?,'Aboundexbot',1,'Aboundex/0.3 (http://www.aboundex.com/crawler/)',0,'0000-00-00 00:00:00')
, (?,'AboutUsBot',1,'AboutUsBot',0,'0000-00-00 00:00:00')
, (?,'AboutUsBot',1,'Mozilla/5.0 (compatible; AboutUsBot/0.9; +http://www.aboutus.org/AboutUsBot)',0,'0000-00-00 00:00:00')
, (?,'AboutUsBot',1,'Mozilla/5.0 (compatible; AboutUsBot Johnny5/2.0; +http://www.AboutUs.org/)',0,'0000-00-00 00:00:00')
, (?,'AboutUsBot',1,'AboutUsBot/Harpy (Website Analysis; http://www.aboutus.org/Aboutus:Bot; help@aboutus.org)',0,'0000-00-00 00:00:00')
, (?,'Abrave Spider',1,'Abrave Spider v4 Robot 1 (http://robot.abrave.co.uk)',0,'0000-00-00 00:00:00')
, (?,'Abrave Spider',1,'Abrave Spider v4 Robot 2 (http://robot.abrave.co.uk)',0,'0000-00-00 00:00:00')
, (?,'Accelobot',1,'Mozilla/5.0 (compatible; heritrix/1.12.0 +http://www.accelobot.com)',0,'0000-00-00 00:00:00')
, (?,'Accelobot',1,'Accelobot',0,'0000-00-00 00:00:00')
, (?,'Accelobot',1,'Mozilla/5.0 (compatible; heritrix/1.14.3 +http://www.accelobot.com)',0,'0000-00-00 00:00:00')
, (?,'Accoona-AI-Agent',1,'Accoona-AI-Agent/1.1.1 (crawler at accoona dot com)',0,'0000-00-00 00:00:00')
, (?,'Accoona-AI-Agent',1,'Accoona-AI-Agent/1.1.2 (aicrawler at accoonabot dot com)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Acoon-Robot 4.0.0RC2 (http://www.acoon.de)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Acoon-Robot 4.0.1 (http://www.acoon.de)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Acoon-Robot 4.0.2 (http://www.acoon.de)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Acoon-Robot 4.0.2.17 (http://www.acoon.de)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'OpenAcoon v4.1.0 (www.openacoon.de)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Acoon v4.1.0 (www.acoon.de)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Acoon v4.9.5 (www.acoon.de)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Acoon v4.10.1 (www.acoon.de)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Acoon v4.10.3 (www.acoon.de)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Acoon v4.10.4 (www.acoon.de)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Acoon v4.10.5 (www.acoon.de)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'OpenAcoon v4.10.5 (www.openacoon.de)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'AcoonBot/4.10.5 (+http://www.acoon.de)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Mozilla/5.0 (compatible; AcoonBot/4.10.6; +http://www.acoon.de/robot.asp)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Mozilla/5.0 (compatible; AcoonBot/4.10.7; +http://www.acoon.de/robot.asp)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Mozilla/5.0 (compatible; AcoonBot/4.10.8; +http://www.acoon.de/robot.asp)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Mozilla/5.0 (compatible; AcoonBot/4.11.0; +http://www.acoon.de/robot.asp)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Mozilla/5.0 (compatible; AcoonBot/4.11.1; +http://www.acoon.de/robot.asp)',0,'0000-00-00 00:00:00')
, (?,'AcoonBot',1,'Mozilla/5.0 (compatible; AcoonBot/4.12.1; +http://www.acoon.de/robot.asp)',0,'0000-00-00 00:00:00')
, (?,'Acorn',1,'Acorn/Nutch-0.9 (Non-Profit Search Engine; acorn.isara.org; acorn at isara dot org)',0,'0000-00-00 00:00:00')
, (?,'AddThis.com',1,'AddThis.com robot tech.support@clearspring.com',0,'0000-00-00 00:00:00')
, (?,'ADmantX Platform Semantic Analyzer',1,'ADmantX Platform Semantic Analyzer - ADmantX Inc. - www.admantx.com - support@admantx.com',0,'0000-00-00 00:00:00')
, (?,'adressendeutschland.de',1,'www.adressendeutschland.de',0,'0000-00-00 00:00:00')
, (?,'AdsBot-Google',1,'AdsBot-Google (+http://www.google.com/adsbot.html)',0,'0000-00-00 00:00:00')
, (?,'AdsBot-Google',1,'AdsBot-Google',0,'0000-00-00 00:00:00')
, (?,'AhrefsBot',1,'Mozilla/5.0 (compatible; AhrefsBot/1.0; +http://ahrefs.com/robot/)',0,'0000-00-00 00:00:00')
, (?,'AhrefsBot',1,'Mozilla/5.0 (compatible; AhrefsBot/2.0; +http://ahrefs.com/robot/)',0,'0000-00-00 00:00:00')
, (?,'AhrefsBot',1,'Mozilla/5.0 (compatible; AhrefsBot/3.0; +http://ahrefs.com/robot/)',0,'0000-00-00 00:00:00')
, (?,'AhrefsBot',1,'Mozilla/5.0 (compatible; AhrefsBot/3.1; +http://ahrefs.com/robot/)',0,'0000-00-00 00:00:00')
, (?,'AhrefsBot',1,'Mozilla/5.0 (compatible; AhrefsBot/4.0; +http://ahrefs.com/robot/)',0,'0000-00-00 00:00:00')
, (?,'AhrefsBot',1,'Mozilla/5.0 (compatible; AhrefsBot/5.0; +http://ahrefs.com/robot/)',0,'0000-00-00 00:00:00')
, (?,'aiHitBot',1,'Mozilla/5.0 (compatible; aiHitBot-DM/2.0.2 +http://www.aihit.com)',0,'0000-00-00 00:00:00')
, (?,'aiHitBot',1,'Mozilla/5.0 (compatible; aiHitBot/1.0-DS; +http://www.aihit.com/)',0,'0000-00-00 00:00:00')
, (?,'aiHitBot',1,'Mozilla/5.0 (compatible; aiHitBot/1.0; +http://www.aihit.com/)',0,'0000-00-00 00:00:00')
, (?,'aiHitBot',1,'Mozilla/5.0 (compatible; aiHitBot/1.1; +http://www.aihit.com/)',0,'0000-00-00 00:00:00')
, (?,'aiHitBot',1,'Mozilla/5.0 (compatible; aiHitBot-BP/1.1; +http://www.aihit.com/)',0,'0000-00-00 00:00:00')
, (?,'aiHitBot',1,'Mozilla/5.0 (compatible; aiHitBot/2.7; +http://www.aihit.com/)',0,'0000-00-00 00:00:00')
, (?,'aiHitBot',1,'Mozilla/5.0 (compatible; aiHitBot/2.8; +http://endb-consolidated.aihit.com/)',0,'0000-00-00 00:00:00')
, (?,'aippie',1,'appie 1.1 (www.walhello.com)',0,'0000-00-00 00:00:00')
, (?,'akula',1,'Mozilla/5.0 (compatible; akula/k311; +http://k311.fd.cvut.cz/)',0,'0000-00-00 00:00:00')
, (?,'akula',1,'Mozilla/5.0 (compatible; akula/12.0rc-2; +http://k311.fd.cvut.cz/)',0,'0000-00-00 00:00:00')
, (?,'alexa site audit',1,'Mozilla/5.0 (compatible; alexa site audit/1.0; +http://www.alexa.com/help/webmasters; siteaudit@alexa.com)',0,'0000-00-00 00:00:00')
, (?,'Almaden',1,'http://www.almaden.ibm.com/cs/crawler   [bc22]',0,'0000-00-00 00:00:00')
, (?,'Almaden',1,'http://www.almaden.ibm.com/cs/crawler   [hc4]',0,'0000-00-00 00:00:00')
, (?,'Almaden',1,'http://www.almaden.ibm.com/cs/crawler   [bc14]',0,'0000-00-00 00:00:00')
, (?,'Almaden',1,'http://www.almaden.ibm.com/cs/crawler   [bc5]',0,'0000-00-00 00:00:00')
, (?,'Almaden',1,'http://www.almaden.ibm.com/cs/crawler   [fc13]',0,'0000-00-00 00:00:00')
, (?,'Almaden',1,'http://www.almaden.ibm.com/cs/crawler   [bc6]',0,'0000-00-00 00:00:00')
, (?,'Almaden',1,'http://www.almaden.ibm.com/cs/crawler   [bc12]',0,'0000-00-00 00:00:00')
, (?,'Almaden',1,'http://www.almaden.ibm.com/cs/crawler',0,'0000-00-00 00:00:00')
, (?,'Amagit.COM',1,'http://www.amagit.com/',0,'0000-00-00 00:00:00')
, (?,'Amfibibot',1,'Amfibibot/0.07 (Amfibi Robot; http://www.amfibi.com; agent@amfibi.com)',0,'0000-00-00 00:00:00')
, (?,'amibot',1,'amibot - http://www.amidalla.de - tech@amidalla.com libwww-perl/5.831',0,'0000-00-00 00:00:00')
, (?,'AMZNKAssocBot',1,'Mozilla/5.0 (compatible; AMZNKAssocBot/4.0 +http://affiliate-program.amazon.com)',0,'0000-00-00 00:00:00')
, (?,'AntBot',1,'Mozilla/5.0 (compatible; AntBot/1.0; +http://www.ant.com/)',0,'0000-00-00 00:00:00')
, (?,'AntBot',1,'AntBot/1.0 (http://www.ant.com)',0,'0000-00-00 00:00:00')
, (?,'Apercite',1,'Mozilla/5.0 (compatible; Apercite; +http://www.apercite.fr/robot/index.html)',0,'0000-00-00 00:00:00')
, (?,'AportWorm',1,'Mozilla/5.0 (compatible; AportWorm/3.2; +http://www.aport.ru/help)',0,'0000-00-00 00:00:00')
, (?,'AraBot',1,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6 Ara.com.tr AraBot 1.0',0,'0000-00-00 00:00:00')
, (?,'arachnode.net',1,'http://arachnode.net 1.2',0,'0000-00-00 00:00:00')
, (?,'arachnode.net',1,'http://arachnode.net 2.5',0,'0000-00-00 00:00:00')
, (?,'Arachnophilia',1,'Mozilla/5.0 (compatible; Arachnophilia/1.0; +http://arachnys.com/)',0,'0000-00-00 00:00:00')
, (?,'archive.org_bot',1,'Mozilla/5.0 (compatible; archive.org_bot +http://www.archive.org/details/archive.org_bot)',0,'0000-00-00 00:00:00')
, (?,'archive.org_bot',1,'Mozilla/5.0 (compatible; special_archiver/3.1.1 +http://www.archive.org/details/archive.org_bot)',0,'0000-00-00 00:00:00')
, (?,'archive.org_bot',1,'Mozilla/5.0 (compatible; archive.org_bot; Wayback Machine Live Record; +http://archive.org/details/archive.org_bot)',0,'0000-00-00 00:00:00')
, (?,'ASAHA Search Engine Turkey',1,'ASAHA Search Engine Turkey V.001 (http://www.asaha.com/)',0,'0000-00-00 00:00:00')
, (?,'Ask Jeeves/Teoma',1,'Mozilla/2.0 (compatible; Ask Jeeves/Teoma; +http://sp.ask.com/docs/about/tech_crawling.html)',0,'0000-00-00 00:00:00')
, (?,'Ask Jeeves/Teoma',1,'Mozilla/2.0 (compatible; Ask Jeeves/Teoma)',0,'0000-00-00 00:00:00')
, (?,'Ask Jeeves/Teoma',1,'Mozilla/2.0 (compatible; Ask Jeeves/Teoma; +http://about.ask.com/en/docs/about/webmasters.shtml)',0,'0000-00-00 00:00:00')
, (?,'Ask Jeeves/Teoma',1,'Mozilla/5.0 (compatible; Ask Jeeves/Teoma; +http://about.ask.com/en/docs/about/webmasters.shtml)',0,'0000-00-00 00:00:00')
, (?,'Ask Jeeves/Teoma',1,'Mozilla/2.0 (compatible; Ask Jeeves/Teoma; http://about.ask.com/en/docs/about/webmasters.shtml)',0,'0000-00-00 00:00:00')
, (?,'Automattic Analytics Crawler',1,'Automattic Analytics Crawler/0.1; http://wordpress.com/crawler/',0,'0000-00-00 00:00:00')
, (?,'BabalooSpider',1,'BabalooSpider/1.3 (BabalooSpider; http://www.babaloo.si; spider@babaloo.si)',0,'0000-00-00 00:00:00')
, (?,'backlink-check.de',1,'Backlink-Ceck.de (+http://www.backlink-check.de/bot.html)',0,'0000-00-00 00:00:00')
, (?,'BacklinkCrawler',1,'BacklinkCrawler (http://www.backlinktest.com/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'BacklinkCrawler',1,'BacklinkCrawler V (http://www.backlinktest.com/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'Bad-Neighborhood',1,'Bad-Neighborhood Link Analyzer (http://www.bad-neighborhood.com/)',0,'0000-00-00 00:00:00')
, (?,'Bad-Neighborhood',1,'Bad Neighborhood Header Detector (http://www.bad-neighborhood.com/header_detector.php)',0,'0000-00-00 00:00:00')
, (?,'Baiduspider',1,'Baiduspider+(+http://www.baidu.com/search/spider.htm)',0,'0000-00-00 00:00:00')
, (?,'Baiduspider',1,'Baiduspider+(+http://www.baidu.jp/spider/)',0,'0000-00-00 00:00:00')
, (?,'Baiduspider',1,'Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)',0,'0000-00-00 00:00:00')
, (?,'Baiduspider',1,'Baiduspider-image+(+http://www.baidu.com/search/spider.htm)',0,'0000-00-00 00:00:00')
, (?,'baypup',1,'baypup/colbert (Baypup; http://sf.baypup.com/webmasters; jason@baypup.com)',0,'0000-00-00 00:00:00')
, (?,'baypup',1,'baypup/1.1 (Baypup; http://www.baypup.com/; jason@baypup.com)',0,'0000-00-00 00:00:00')
, (?,'baypup',1,'baypup/colbert (Baypup; http://www.baypup.com/webmasters; jason@baypup.com)',0,'0000-00-00 00:00:00')
, (?,'BDCbot',1,'Mozilla/5.0 (Windows NT 6.1; compatible; BDCbot/1.0; +http://ecommerce.bigdatacorp.com.br/faq.aspx) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/13.0.782.107 Safari/535.1',0,'0000-00-00 00:00:00')
, (?,'BDFetch',1,'BDFetch',0,'0000-00-00 00:00:00')
, (?,'BecomeBot',1,'Mozilla/5.0 (compatible; BecomeBot/2.3; MSIE 6.0 compatible; +http://www.become.com/site_owners.html)',0,'0000-00-00 00:00:00')
, (?,'BecomeBot',1,'Mozilla/5.0 (compatible; BecomeBot/3.0; MSIE 6.0 compatible; +http://www.become.com/site_owners.html)',0,'0000-00-00 00:00:00')
, (?,'BecomeBot',1,'Mozilla/5.0 (compatible; BecomeBot/3.0; +http://www.become.com/site_owners.html)',0,'0000-00-00 00:00:00')
, (?,'BecomeBot',1,'Mozilla/5.0 (compatible; BecomeJPBot/2.3; MSIE 6.0 compatible; +http://www.become.co.jp/site_owners.html)',0,'0000-00-00 00:00:00')
, (?,'BegunAdvertising',1,'Mozilla/5.0 (compatible; BegunAdvertising/3.0; +http://begun.ru/begun/technology/indexer/)',0,'0000-00-00 00:00:00')
, (?,'Bigsearch.ca',1,'Bigsearch.ca/Nutch-0.9-dev (Bigsearch.ca Internet Spider; http://www.bigsearch.ca/; info@enhancededge.com)',0,'0000-00-00 00:00:00')
, (?,'Bigsearch.ca',1,'Bigsearch.ca/Nutch-1.0-dev (Bigsearch.ca Internet Spider; http://www.bigsearch.ca/; info@enhancededge.com)',0,'0000-00-00 00:00:00')
, (?,'bingbot',1,'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)',0,'0000-00-00 00:00:00')
, (?,'bingbot',1,'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm',0,'0000-00-00 00:00:00')
, (?,'bingbot',1,'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) SitemapProbe',0,'0000-00-00 00:00:00')
, (?,'BingPreview',1,'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/534+ (KHTML, like Gecko) BingPreview/1.0b',0,'0000-00-00 00:00:00')
, (?,'bitlybot',1,'bitlybot',0,'0000-00-00 00:00:00')
, (?,'biwec',1,'Mozilla/5.0 (compatible; socketcrawler; http://nlp.fi.muni.cz/projects/biwec/)',0,'0000-00-00 00:00:00')
, (?,'bixocrawler',1,'Mozilla/5.0 (compatible; ptd-crawler; +http://bixolabs.com/crawler/ptd/; crawler@bixolabs.com)',0,'0000-00-00 00:00:00')
, (?,'bixocrawler',1,'Mozilla/5.0 (compatible; bixolabs/1.0; +http://bixolabs.com/crawler/general; crawler@bixolabs.com)',0,'0000-00-00 00:00:00')
, (?,'bixocrawler',1,'Mozilla/5.0 (compatible; bixolabs/1.0; +http://bixolabs.com/crawler/general; crawler@mail.bixolabs.com)',0,'0000-00-00 00:00:00')
, (?,'bixocrawler',1,'Mozilla/5.0 (compatible; Finderbots finder bot; +http://wiki.github.com/bixo/bixo/bixocrawler; bixo-dev@yahoogroups.com)',0,'0000-00-00 00:00:00')
, (?,'bixocrawler',1,'Mozilla/5.0 (compatible; Mozilla; +http://wiki.github.com/bixo/bixo/bixocrawler; bixo-dev@yahoogroups.com)',0,'0000-00-00 00:00:00')
, (?,'bixocrawler',1,'Mozilla/5.0 (compatible; BIXOCRAWLER; +http://wiki.github.com/bixo/bixo/bixocrawler; bixo-dev@yahoogroups.com)',0,'0000-00-00 00:00:00')
, (?,'bixocrawler',1,'Mozilla/5.0 (compatible; Mozilla/5.0; +http://wiki.github.com/bixo/bixo/bixocrawler; bixo-dev@yahoogroups.com)',0,'0000-00-00 00:00:00')
, (?,'bl.uk_lddc_bot',1,'bl.uk_lddc_bot/3.1.1 (+http://www.bl.uk/aboutus/legaldeposit/websites/websites/faqswebmaster/index.html)',0,'0000-00-00 00:00:00')
, (?,'Blaiz-Bee',1,'Blaiz-Bee/2.00.5622 (+http://www.blaiz.net)',0,'0000-00-00 00:00:00')
, (?,'Blaiz-Bee',1,'Blaiz-Bee/2.00.5655 (+http://www.blaiz.net)',0,'0000-00-00 00:00:00')
, (?,'Blaiz-Bee',1,'Blaiz-Bee/2.00.6082 (+http://www.blaiz.net)',0,'0000-00-00 00:00:00')
, (?,'Blaiz-Bee',1,'Blaiz-Bee/2.00.8315 (BE Internet Search Engine http://www.rawgrunt.com)',0,'0000-00-00 00:00:00')
, (?,'Blekkobot',1,'Mozilla/5.0 (compatible; Blekkobot; ScoutJet; +http://blekko.com/about/blekkobot)',0,'0000-00-00 00:00:00')
, (?,'BLEXBot',1,'BLEXBot',0,'0000-00-00 00:00:00')
, (?,'BLEXBot',1,'Mozilla/5.0 (compatible; BLEXBot/1.0; +http://webmeup.com/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'BLEXBot',1,'Mozilla/5.0 (compatible; BLEXBot/1.0; +http://webmeup-crawler.com/)',0,'0000-00-00 00:00:00')
, (?,'BLEXBot',1,'Mozilla/5.0 (compatible; BLEXBotTest/1.0; +http://webmeup.com/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'BlinkaCrawler',1,'Mozilla/5.0 (compatible; BlinkaCrawler/1.0; +http://www.blinka.jp/crawler/)',0,'0000-00-00 00:00:00')
, (?,'Bloggsi',1,'Bloggsi/1.0 (http://bloggsi.com/)',0,'0000-00-00 00:00:00')
, (?,'BlogPulse',1,'BlogPulseLive (support@blogpulse.com)',0,'0000-00-00 00:00:00')
, (?,'BlogPulse',1,'BlogPulse (ISSpider-3.0)',0,'0000-00-00 00:00:00')
, (?,'bnf.fr_bot',1,'Mozilla/5.0 (compatible; bnf.fr_bot; +http://www.bnf.fr/fr/outils/a.dl_web_capture_robot.html)',0,'0000-00-00 00:00:00')
, (?,'boitho.com-dc',1,'boitho.com-dc/0.83 ( http://www.boitho.com/dcbot.html )',0,'0000-00-00 00:00:00')
, (?,'boitho.com-dc',1,'boitho.com-dc/0.79 ( http://www.boitho.com/dcbot.html )',0,'0000-00-00 00:00:00')
, (?,'boitho.com-dc',1,'boitho.com-dc/0.85 ( http://www.boitho.com/dcbot.html )',0,'0000-00-00 00:00:00')
, (?,'boitho.com-dc',1,'boitho.com-dc/0.86 ( http://www.boitho.com/dcbot.html )',0,'0000-00-00 00:00:00')
, (?,'boitho.com-dc',1,'boitho.com-dc/0.82 ( http://www.boitho.com/dcbot.html )',0,'0000-00-00 00:00:00')
, (?,'bot-pge.chlooe.com',1,'bot-pge.chlooe.com/1.0.0 (+http://www.chlooe.com/)',0,'0000-00-00 00:00:00')
, (?,'bot.wsowner.com',1,'bot.wsowner.com/1.0.0 (+http://wsowner.com/)',0,'0000-00-00 00:00:00')
, (?,'botmobi',1,'Nokia6680/1.0 (4.04.07) SymbianOS/8.0 Series60/2.6 Profile/MIDP-2.0 Configuration/CLDC-1.1 (botmobi find.mobi/bot.html find@mtld.mobi)',0,'0000-00-00 00:00:00')
, (?,'BotOnParade',1,'BotOnParade, http://www.bots-on-para.de/bot.html',0,'0000-00-00 00:00:00')
, (?,'BrainbruBot',1,'BrainbruBot/1.0 (+http://www.brainbru.com/)',0,'0000-00-00 00:00:00')
, (?,'Browsershots',1,'Browsershots',0,'0000-00-00 00:00:00')
, (?,'btbot',1,'btbot/0.4 (+http://www.btbot.com/btbot.html)',0,'0000-00-00 00:00:00')
, (?,'BUbiNG',1,'BUbiNG (+http://law.di.unimi.it/BUbiNG.html)',0,'0000-00-00 00:00:00')
, (?,'Butterfly',1,'Mozilla/5.0 (compatible; Butterfly/1.0; +http://labs.topsy.com/butterfly.html) Gecko/2009032608 Firefox/3.0.8',0,'0000-00-00 00:00:00')
, (?,'Butterfly',1,'Mozilla/5.0 (compatible; Butterfly/1.0; +http://labs.topsy.com/butterfly/) Gecko/2009032608 Firefox/3.0.8',0,'0000-00-00 00:00:00')
, (?,'BuzzRankingBot',1,'Mozilla/5.0 (compatible; BuzzRankingBot/1.0; +http://www.buzzrankingbot.com/)',0,'0000-00-00 00:00:00')
, (?,'CamontSpider',1,'CamontSpider/1.0 +http://epweb2.ph.bham.ac.uk/user/slater/camont/info.html',0,'0000-00-00 00:00:00')
, (?,'CareerBot',1,'Mozilla/5.0 (compatible; CareerBot/1.1; +http://www.career-x.de/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Castabot',1,'Castabot/0.1 (+http://topixtream.com/)',0,'0000-00-00 00:00:00')
, (?,'CatchBot',1,'CatchBot/1.0; +http://www.catchbot.com',0,'0000-00-00 00:00:00')
, (?,'CatchBot',1,'CatchBot/3.0; +http://www.catchbot.com',0,'0000-00-00 00:00:00')
, (?,'CatchBot',1,'CatchBot/2.0; +http://www.catchbot.com',0,'0000-00-00 00:00:00')
, (?,'CatchBot',1,'CatchBot/5.0; +http://www.catchbot.com',0,'0000-00-00 00:00:00')
, (?,'CazoodleBot',1,'Cazoodle/Nutch-0.9-dev (Cazoodle Nutch Crawler; http://www.cazoodle.com; mqbot@cazoodle.com)',0,'0000-00-00 00:00:00')
, (?,'CazoodleBot',1,'CazoodleBot/Nutch-0.9-dev (CazoodleBot Crawler; http://www.cazoodle.com; mqbot@cazoodle.com)',0,'0000-00-00 00:00:00')
, (?,'CazoodleBot',1,'CazoodleBot/0.1 (CazoodleBot Crawler; http://www.cazoodle.com; mqbot@cazoodle.com)',0,'0000-00-00 00:00:00')
, (?,'CazoodleBot',1,'CazoodleBot/Nutch-0.9-dev (CazoodleBot Crawler; http://www.cazoodle.com/cazoodlebot; cazoodlebot@cazoodle.com)',0,'0000-00-00 00:00:00')
, (?,'CazoodleBot',1,'CazoodleBot/CazoodleBot-0.1 (CazoodleBot Crawler; http://www.cazoodle.com/cazoodlebot; cazoodlebot@cazoodle.com)',0,'0000-00-00 00:00:00')
, (?,'CazoodleBot',1,'CazoodleBot/0.0.2 (http://www.cazoodle.com/contact.php; cbot@cazoodle.com)',0,'0000-00-00 00:00:00')
, (?,'CCBot',1,'CCBot/1.0 (+http://www.commoncrawl.org/bot.html)',0,'0000-00-00 00:00:00')
, (?,'CCBot',1,'CCBot/2.0',0,'0000-00-00 00:00:00')
, (?,'CCBot',1,'CCBot/2.0 (http://commoncrawl.org/faq/)',0,'0000-00-00 00:00:00')
, (?,'CCResearchBot',1,'CCResearchBot/1.0 commoncrawl.org/research//Nutch-1.7-SNAPSHOT',0,'0000-00-00 00:00:00')
, (?,'ccubee',1,'ccubee/3.2',0,'0000-00-00 00:00:00')
, (?,'ccubee',1,'ccubee/3.3',0,'0000-00-00 00:00:00')
, (?,'ccubee',1,'ccubee/3.7',0,'0000-00-00 00:00:00')
, (?,'ccubee',1,'ccubee/4.0',0,'0000-00-00 00:00:00')
, (?,'ccubee',1,'ccubee/3.5',0,'0000-00-00 00:00:00')
, (?,'ccubee',1,'ccubee/9.0',0,'0000-00-00 00:00:00')
, (?,'ccubee',1,'ccubee/10.0',0,'0000-00-00 00:00:00')
, (?,'ccubee',1,'ccubee/3.5',0,'0000-00-00 00:00:00')
, (?,'ccubee',1,'ccubee/2008',0,'0000-00-00 00:00:00')
, (?,'ChangeDetection',1,'mozilla/4.0 (compatible; changedetection/1.0 (admin@changedetection.com))',0,'0000-00-00 00:00:00')
, (?,'ChangeDetection',1,'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1;  http://www.changedetection.com/bot.html )',0,'0000-00-00 00:00:00')
, (?,'Charlotte',1,'Mozilla/5.0 (compatible; Charlotte/1.1; http://www.searchme.com/support/)',0,'0000-00-00 00:00:00')
, (?,'CirrusExplorer',1,'CirrusExplorer/1.1 (http://www.cireu.com/explorer.php)',0,'0000-00-00 00:00:00')
, (?,'City4you',1,'City4you/1.3 Cesky (+http://www.city4you.pl)',0,'0000-00-00 00:00:00')
, (?,'cityreview',1,'Cityreview Robot (+http://www.cityreview.org/crawler/)',0,'0000-00-00 00:00:00')
, (?,'CJB.NET Proxy',1,'CJB.NET Proxy',0,'0000-00-00 00:00:00')
, (?,'classbot',1,'classbot (+http://allclasses.com)',0,'0000-00-00 00:00:00')
, (?,'CligooRobot',1,'Mozilla/5.0 (compatible; CligooRobot/2.0; +http://www.cligoo.de/wk/technik.php)',0,'0000-00-00 00:00:00')
, (?,'CliqzBot',1,'Cliqz Bot (+http://www.cliqz.com)',0,'0000-00-00 00:00:00')
, (?,'Cliqzbot',1,'Cliqzbot/0.1 (+http://cliqz.com +cliqzbot@cliqz.com)',0,'0000-00-00 00:00:00')
, (?,'Cliqzbot',1,'Cliqzbot/0.1 (+http://cliqz.com/company/cliqzbot)',0,'0000-00-00 00:00:00')
, (?,'CloudFlare-AlwaysOnline',1,'Mozilla/5.0 (compatible; CloudFlare-AlwaysOnline/1.0; +http://www.cloudflare.com/always-online) AppleWebKit/534.34',0,'0000-00-00 00:00:00')
, (?,'CloudServerMarketSpider',1,'Mozilla/5.0 (compatible; CloudServerMarketSpider/1.0; +http://www.cloudservermarket.com/spider.html)',0,'0000-00-00 00:00:00')
, (?,'CMS Crawler',1,'Mozilla/4.0 (CMS Crawler: http://www.cmscrawler.com)',0,'0000-00-00 00:00:00')
, (?,'coccoc',1,'coccoc',0,'0000-00-00 00:00:00')
, (?,'coccoc',1,'coccoc/1.0 ()',0,'0000-00-00 00:00:00')
, (?,'coccoc',1,'coccoc/1.0 (http://help.coccoc.vn/)',0,'0000-00-00 00:00:00')
, (?,'coccoc',1,'coccoc/1.0 (http://help.coccoc.com/)',0,'0000-00-00 00:00:00')
, (?,'coccoc',1,'Mozilla/5.0 (compatible; coccoc/1.0; +http://help.coccoc.com/)',0,'0000-00-00 00:00:00')
, (?,'Combine',1,'Combine/3 http://combine.it.lth.se/',0,'0000-00-00 00:00:00')
, (?,'Company News Search engine',1,'CorporateNewsSearchEngine/Nutch-1.7 (http://pibs.co/news-search-engine)',0,'0000-00-00 00:00:00')
, (?,'CompSpyBot',1,'Mozilla/5.0 (compatible; CompSpyBot/1.0; +http://www.compspy.com/spider.html)',0,'0000-00-00 00:00:00')
, (?,'ConveraCrawler',1,'ConveraMultiMediaCrawler/0.1 (+http://www.authoritativeweb.com/crawl)',0,'0000-00-00 00:00:00')
, (?,'ConveraCrawler',1,'ConveraCrawler/0.9d (+http://www.authoritativeweb.com/crawl)',0,'0000-00-00 00:00:00')
, (?,'ConveraCrawler',1,'ConveraCrawler/0.9e (+http://www.authoritativeweb.com/crawl)',0,'0000-00-00 00:00:00')
, (?,'copyright sheriff',1,'copyright sheriff (+http://www.copyrightsheriff.com/)',0,'0000-00-00 00:00:00')
, (?,'CorpusCrawler',1,'CorpusCrawler 2.0.0 (http://corpora.fi.muni.cz/crawler/)',0,'0000-00-00 00:00:00')
, (?,'CorpusCrawler',1,'CorpusCrawler 2.0.8 (http://corpora.fi.muni.cz/crawler/)',0,'0000-00-00 00:00:00')
, (?,'CorpusCrawler',1,'CorpusCrawler 2.0.9 (http://corpora.fi.muni.cz/crawler/)',0,'0000-00-00 00:00:00')
, (?,'CorpusCrawler',1,'CorpusCrawler 2.0.10 (http://corpora.fi.muni.cz/crawler/)',0,'0000-00-00 00:00:00')
, (?,'CorpusCrawler',1,'CorpusCrawler 2.0.15 (http://corpora.fi.muni.cz/crawler/)',0,'0000-00-00 00:00:00')
, (?,'CorpusCrawler',1,'CorpusCrawler 2.0.12 (http://corpora.fi.muni.cz/crawler/)',0,'0000-00-00 00:00:00')
, (?,'CorpusCrawler',1,'CorpusCrawler 2.0.13 (http://corpora.fi.muni.cz/crawler/)',0,'0000-00-00 00:00:00')
, (?,'CorpusCrawler',1,'CorpusCrawler 2.0.14 (http://corpora.fi.muni.cz/crawler/)',0,'0000-00-00 00:00:00')
, (?,'CorpusCrawler',1,'CorpusCrawler 2.0.22 (http://corpora.fi.muni.cz/crawler/);Project:CzCorpus',0,'0000-00-00 00:00:00')
, (?,'CorpusCrawler',1,'CorpusCrawler 2.0.24 (http://corpora.fi.muni.cz/crawler/);Project:CzCorpus',0,'0000-00-00 00:00:00')
, (?,'CorpusCrawler',1,'CorpusCrawler 2.0.25 (http://corpora.fi.muni.cz/crawler/);Project:CzCorpus',0,'0000-00-00 00:00:00')
, (?,'CorpusCrawler',1,'CorpusCrawler 2.0.17 (http://corpora.fi.muni.cz/crawler/);Project:CzCorpus',0,'0000-00-00 00:00:00')
, (?,'CorpusCrawler',1,'CorpusCrawler 2.0.19 (http://corpora.fi.muni.cz/crawler/);Project:CzCorpus',0,'0000-00-00 00:00:00')
, (?,'CorpusCrawler',1,'CorpusCrawler 2.0.20 (http://corpora.fi.muni.cz/crawler/);Project:CzCorpus',0,'0000-00-00 00:00:00')
, (?,'CorpusCrawler',1,'CorpusCrawler 2.0.21 (http://corpora.fi.muni.cz/crawler/);Project:CzCorpus',0,'0000-00-00 00:00:00')
, (?,'Covario-IDS',1,'Covario-IDS/1.0 (Covario; http://www.covario.com/ids; support at covario dot com)',0,'0000-00-00 00:00:00')
, (?,'Covario-IDS',1,'CovarioIDS/1.1 (http://www.covario.com/ids; support at covario dot com)',0,'0000-00-00 00:00:00')
, (?,'crawler for netopian',1,'crawler for netopian (http://www.netopian.co.uk/)',0,'0000-00-00 00:00:00')
, (?,'Crawler4j',1,'crawler4j (http://code.google.com/p/crawler4j/)',0,'0000-00-00 00:00:00')
, (?,'Crowsnest',1,'Crowsnest/0.5 (+http://www.crowsnest.tv/)',0,'0000-00-00 00:00:00')
, (?,'csci_b659',1,'csci_b659/0.13',0,'0000-00-00 00:00:00')
, (?,'Curious George',1,'Curious George - www.analyticsseo.com/crawler',0,'0000-00-00 00:00:00')
, (?,'DataFountains',1,'DataFountains/Dmoz Downloader (http://ivia.ucr.edu/useragents.shtml)',0,'0000-00-00 00:00:00')
, (?,'DataFountains',1,'DataFountains/DMOZ Feature Vector Corpus Creator (http://ivia.ucr.edu/useragents.shtml)',0,'0000-00-00 00:00:00')
, (?,'DataparkSearch',1,'DataparkSearch/4.40.1 (+http://www.dataparksearch.org/)',0,'0000-00-00 00:00:00')
, (?,'Daumoa',1,'Mozilla/4.0 (compatible; MSIE is not me; DAUMOA/1.0.0; DAUM Web Robot; Daum Communications Corp., Korea)',0,'0000-00-00 00:00:00')
, (?,'Daumoa',1,'Mozilla/4.0 (compatible; MSIE is not me; DAUMOA/1.0.1; DAUM Web Robot; Daum Communications Corp., Korea)',0,'0000-00-00 00:00:00')
, (?,'Daumoa',1,'Mozilla/4.0 (compatible; MSIE enviable; DAUMOA/1.0.1; DAUM Web Robot; Daum Communications Corp., Korea; +http://ws.daum.net/aboutkr.html)',0,'0000-00-00 00:00:00')
, (?,'Daumoa',1,'Mozilla/4.0 (compatible; MSIE enviable; DAUMOA 2.0; DAUM Web Robot; Daum Communications Corp., Korea; +http://ws.daum.net/aboutkr.html)',0,'0000-00-00 00:00:00')
, (?,'Daumoa',1,'Mozilla/5.0 (compatible; MSIE or Firefox mutant; not on Windows server; +http://ws.daum.net/aboutWebSearch.html) Daumoa/2.0',0,'0000-00-00 00:00:00')
, (?,'Daumoa',1,'Mozilla/5.0 (compatible; MSIE or Firefox mutant; not on Windows server; + http://tab.search.daum.net/aboutWebSearch.html) Daumoa/3.0',0,'0000-00-00 00:00:00')
, (?,'DBLBot',1,'Mozilla/5.0 (compatible; DBLBot/1.0; +http://www.dontbuylists.com/)',0,'0000-00-00 00:00:00')
, (?,'DCPbot',1,'Mozilla/5.0 (compatible; DCPbot/1.0; +http://domains.checkparams.com/)',0,'0000-00-00 00:00:00')
, (?,'DCPbot',1,'Mozilla/5.0 (compatible; DCPbot/1.1; +http://domains.checkparams.com/)',0,'0000-00-00 00:00:00')
, (?,'DealGates Bot',1,'DealGates Bot/1.1 by Luc Michalski (http://spider.dealgates.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'del.icio.us-thumbnails',1,'Mozilla/5.0 (compatible; del.icio.us-thumbnails/1.0; FreeBSD) KHTML/4.3.2 (like Gecko)',0,'0000-00-00 00:00:00')
, (?,'del.icio.us-thumbnails',1,'del.icio.us-thumbnails/1.0 Mozilla/5.0 (compatible; Konqueror/3.4; FreeBSD) KHTML/3.4.2 (like Gecko)',0,'0000-00-00 00:00:00')
, (?,'DepSpid',1,'Mozilla/4.0 (compatible; DepSpid/5.07; +http://about.depspid.net)',0,'0000-00-00 00:00:00')
, (?,'DepSpid',1,'depspid - the dependency spider',0,'0000-00-00 00:00:00')
, (?,'DepSpid',1,'Mozilla/4.0 (compatible; DepSpid/5.10; +http://about.depspid.net)',0,'0000-00-00 00:00:00')
, (?,'DepSpid',1,'Mozilla/4.0 (compatible; DepSpid/5.24; +http://about.depspid.net)',0,'0000-00-00 00:00:00')
, (?,'DepSpid',1,'Mozilla/4.0 (compatible; DepSpid/5.25; +http://about.depspid.net)',0,'0000-00-00 00:00:00')
, (?,'DepSpid',1,'Mozilla/4.0 (compatible; DepSpid/5.26; +http://about.depspid.net)',0,'0000-00-00 00:00:00')
, (?,'discoverybot',1,'mozilla/5.0 (compatible; discobot/1.1; +http://discoveryengine.com/discobot.html)',0,'0000-00-00 00:00:00')
, (?,'discoverybot',1,'Mozilla/5.0 (compatible; discobot/1.0; +http://discoveryengine.com/discobot.html)',0,'0000-00-00 00:00:00')
, (?,'discoverybot',1,'Mozilla/5.0 (compatible; discobot/2.0; +http://discoveryengine.com/discobot.html)',0,'0000-00-00 00:00:00')
, (?,'discoverybot',1,'Mozilla/5.0 (compatible; discoverybot/2.0; +http://discoveryengine.com/discoverybot.html)',0,'0000-00-00 00:00:00')
, (?,'DKIMRepBot',1,'Mozilla/5.0 (compatible; DKIMRepBot/1.0; +http://www.dkim-reputation.org)',0,'0000-00-00 00:00:00')
, (?,'Dlvr.it/1.0',1,'Dlvr.it/1.0 (http://dlvr.it/)',0,'0000-00-00 00:00:00')
, (?,'DNS-Digger-Explorer',1,'Mozilla/5.0 (compatible; DNS-Digger-Explorer/1.0; +http://www.dnsdigger.com)',0,'0000-00-00 00:00:00')
, (?,'DomainDB',1,'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; DomainDB-1.1; http://domaindb.com/crawler/)',0,'0000-00-00 00:00:00')
, (?,'Dot TK - spider',1,'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.5) Gecko/2010033101 Gentoo Firefox/3.0.5 (Dot TK - spider 3.0)',0,'0000-00-00 00:00:00')
, (?,'DotBot',1,'Mozilla/5.0 (compatible; DotBot/1.1; http://www.dotnetdotcom.org/, crawler@dotnetdotcom.org)',0,'0000-00-00 00:00:00')
, (?,'DotBot',1,'Mozilla/5.0 (compatible; DotBot/1.1; http://www.opensiteexplorer.org/dotbot, help@moz.com)',0,'0000-00-00 00:00:00')
, (?,'dotSemantic',1,'Mozilla/5.0 (compatible; dotSemantic/1.0; +http://www.dotsemantic.org)',0,'0000-00-00 00:00:00')
, (?,'DripfeedBot',1,'Mozilla/5.0 (compatible; DripfeedBot/2.0; +http://dripfeedbookmark.com/bot.html',0,'0000-00-00 00:00:00')
, (?,'drupact',1,'drupact/0.7; http://www.arocom.de/drupact',0,'0000-00-00 00:00:00')
, (?,'DuckDuckBot',1,'DuckDuckBot/1.0; (+http://duckduckgo.com/duckduckbot.html)',0,'0000-00-00 00:00:00')
, (?,'DuckDuckPreview',1,'DuckDuckPreview/1.0; (+http://duckduckgo.com/duckduckpreview.html)',0,'0000-00-00 00:00:00')
, (?,'e-SocietyRobot',1,'e-SocietyRobot(http://www.yama.info.waseda.ac.jp/~yamana/es/)',0,'0000-00-00 00:00:00')
, (?,'EasouSpider',1,'Mozilla/5.0 (compatible; EasouSpider; +http://www.easou.com/search/spider.html)',0,'0000-00-00 00:00:00')
, (?,'EasyBib AutoCite',1,'EasyBib AutoCite (http://content.easybib.com/autocite/)',0,'0000-00-00 00:00:00')
, (?,'eCairn-Grabber',1,'eCairn-Grabber/1.0 (+http://ecairn.com/grabber) curl/7.15',0,'0000-00-00 00:00:00')
, (?,'eCommerceBot',1,'eCommerceBot (http://www.ehandel.se/botinfo.html)',0,'0000-00-00 00:00:00')
, (?,'EDI',1,'EDI/1.6.5 (Edacious & Intelligent Web Robot, Daum Communications Corp.)',0,'0000-00-00 00:00:00')
, (?,'EDI',1,'Mozilla/4.0 (compatible; EDI/1.6.6; Edacious & Intelligent Web Robot; Daum Communications Corp., Korea)',0,'0000-00-00 00:00:00')
, (?,'EDI',1,'Mozilla/4.0 (compatible; MSIE is not me; EDI/1.6.6; Edacious & Intelligent Web Robot; Daum Communications Corp., Korea)',0,'0000-00-00 00:00:00')
, (?,'EdisterBot',1,'EdisterBot (http://www.edister.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'egothor',1,'egothor/8.0f (+http://ego.ms.mff.cuni.cz/)',0,'0000-00-00 00:00:00')
, (?,'egothor',1,'Mozilla/5.0 (compatible; egothor/8.0g; +http://ego.ms.mff.cuni.cz/)',0,'0000-00-00 00:00:00')
, (?,'egothor',1,'Mozilla/5.0 (compatible; egothor/11.0d; +http://ego.ms.mff.cuni.cz/)',0,'0000-00-00 00:00:00')
, (?,'egothor',1,'Mozilla/5.0 (compatible; egothor/11.0d; +https://kocour.ms.mff.cuni.cz/ego/)',0,'0000-00-00 00:00:00')
, (?,'egothor',1,'Mozilla/5.0 (compatible; egothor/12.0rc-2; +http://ego.ms.mff.cuni.cz/)',0,'0000-00-00 00:00:00')
, (?,'ejupiter.com',1,'ejupiter.com',0,'0000-00-00 00:00:00')
, (?,'ejupiter.com',1,'crawler43.ejupiter.com',0,'0000-00-00 00:00:00')
, (?,'Embedly',1,'Mozilla/5.0 (compatible; Embedly/0.2; +http://support.embed.ly/)',0,'0000-00-00 00:00:00')
, (?,'emefgebot',1,'Mozilla/5.0 (compatible; emefgebot/beta; +http://emefge.de/bot.html)',0,'0000-00-00 00:00:00')
, (?,'emefgebot',1,'emefgebot/beta (+http://emefge.de/bot.html)',0,'0000-00-00 00:00:00')
, (?,'EnaBot',1,'EnaBot/1.1 (http://www.enaball.com/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'EnaBot',1,'EnaBot/1.2 (http://www.enaball.com/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'Enterprise_Search',1,'Enterprise_Search/1.00.143;MSSQL (http://www.innerprise.net/es-spider.asp)',0,'0000-00-00 00:00:00')
, (?,'envolk',1,'envolk/1.7 (+http://www.envolk.com/envolkspiderinfo.html)',0,'0000-00-00 00:00:00')
, (?,'Esribot',1,'Mozilla/5.0 (compatible; Esribot/1.0; http://www.esrihu.hu/)',0,'0000-00-00 00:00:00')
, (?,'EuripBot',1,'EuripBot/1.1 (+http://www.eurip.com) GetRobots',0,'0000-00-00 00:00:00')
, (?,'Eurobot',1,'Eurobot/1.1 (http://eurobot.ayell.eu)',0,'0000-00-00 00:00:00')
, (?,'Eurobot',1,'Eurobot/1.2 (http://eurobot.ayell.eu)',0,'0000-00-00 00:00:00')
, (?,'EventGuruBot',1,'Mozilla/5.0 (compatible; EventGuruBot/1.0; +http://www.eventguru.com/spider.html)',0,'0000-00-00 00:00:00')
, (?,'EveryoneSocialBot',1,'Mozilla/5.0 (compatible; EveryoneSocialBot/1.0; support@everyonesocial.com http://everyonesocial.com/)',0,'0000-00-00 00:00:00')
, (?,'EvriNid',1,'Mozilla/5.0 (compatible; Evrinid Iudex 1.0.0; +http://www.evri.com/evrinid)',0,'0000-00-00 00:00:00')
, (?,'Exabot',1,'Mozilla/5.0 (compatible; Exabot/3.0; +http://www.exabot.com/go/robot)',0,'0000-00-00 00:00:00')
, (?,'Exabot',1,'Mozilla/5.0 (compatible; Exabot-Images/3.0; +http://www.exabot.com/go/robot)',0,'0000-00-00 00:00:00')
, (?,'Exabot',1,'Mozilla/5.0 (compatible; Exabot/3.0 (BiggerBetter); +http://www.exabot.com/go/robot)',0,'0000-00-00 00:00:00')
, (?,'Exabot',1,'Mozilla/5.0 (compatible; Konqueror/3.5; Linux) KHTML/3.5.5 (like Gecko) (Exabot-Thumbnails)',0,'0000-00-00 00:00:00')
, (?,'Exabot',1,'Mozilla/5.0 (compatible; ExaleadCloudview/6;)',0,'0000-00-00 00:00:00')
, (?,'Exabot',1,'Mozilla/5.0 (compatible; ExaleadCloudView/5;)',0,'0000-00-00 00:00:00')
, (?,'ExactSEEK',1,'exactseek.com',0,'0000-00-00 00:00:00')
, (?,'ExB Language Crawler',1,'ExB Language Crawler 2.1.5 (+http://www.exb.de/crawler)',0,'0000-00-00 00:00:00')
, (?,'ExB Language Crawler',1,'ExB Language Crawler 2.1.2 (+http://www.exb.de/crawler)',0,'0000-00-00 00:00:00')
, (?,'ExB Language Crawler',1,'ExB Language Crawler 2.1.1 (+http://www.exb.de/crawler)',0,'0000-00-00 00:00:00')
, (?,'Ezooms',1,'Mozilla/5.0 (compatible; Ezooms/1.0; ezooms.bot@gmail.com)',0,'0000-00-00 00:00:00')
, (?,'Ezooms',1,'Mozilla/5.0 (compatible; Ezooms/1.0; help@moz.com)',0,'0000-00-00 00:00:00')
, (?,'FacebookExternalHit',1,'facebookexternalhit/1.0 (+http://www.facebook.com/externalhit_uatext.php)',0,'0000-00-00 00:00:00')
, (?,'FacebookExternalHit',1,'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)',0,'0000-00-00 00:00:00')
, (?,'facebookplatform',1,'facebookplatform/1.0 (+http://developers.facebook.com)',0,'0000-00-00 00:00:00')
, (?,'factbot',1,'Factbot 1.09',0,'0000-00-00 00:00:00')
, (?,'factbot',1,'Factbot 1.09 (see http://www.factbites.com/webmasters.php)',0,'0000-00-00 00:00:00')
, (?,'FairShare',1,'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1 + FairShare-http://fairshare.cc)',0,'0000-00-00 00:00:00')
, (?,'Falconsbot',1,'Mozilla/5.0 (compatible; Falconsbot; +http://iws.seu.edu.cn/services/falcons/contact_us.jsp)',0,'0000-00-00 00:00:00')
, (?,'Falconsbot',1,'Mozilla/5.0 (compatible; Falconsbot; +http://ws.nju.edu.cn/falcons/)',0,'0000-00-00 00:00:00')
, (?,'FAST Enterprise Crawler',1,'FAST Enterprise Crawler/6.4 (crawler@fast.no)',0,'0000-00-00 00:00:00')
, (?,'FAST Enterprise Crawler',1,'FAST Enterprise Crawler 6 used by FAST (jim.mosher@fastsearch.com)',0,'0000-00-00 00:00:00')
, (?,'FAST Enterprise Crawler',1,'FAST Enterprise Crawler 6 used by Virk.dk - udvikling (thomas.bentzen@capgemini.com)',0,'0000-00-00 00:00:00')
, (?,'FAST MetaWeb Crawler',1,'FAST MetaWeb Crawler (helpdesk at fastsearch dot com)',0,'0000-00-00 00:00:00')
, (?,'fastbot crawler',1,'fastbot crawler beta 2.0 (+http://www.fastbot.de)',0,'0000-00-00 00:00:00')
, (?,'fastbot crawler',1,'fastbot.de crawler 2.0 beta (http://www.fastbot.de)',0,'0000-00-00 00:00:00')
, (?,'FauBot',1,'Mozilla/5.0 (FauBot/0.1; +http://buzzvolume.com/fau/)',0,'0000-00-00 00:00:00')
, (?,'favorstarbot',1,'favorstarbot/1.0 (+http://favorstar.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'FeedCatBot',1,'FeedCatBot/3.0 (+http://www.feedcat.net/)',0,'0000-00-00 00:00:00')
, (?,'FeedFinder/bloggz.se',1,'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0; FeedFinder-2.0; http://bloggz.se/crawler)',0,'0000-00-00 00:00:00')
, (?,'Feedly',1,'FeedlyBot/1.0 (http://feedly.com)',0,'0000-00-00 00:00:00')
, (?,'Feedly',1,'Feedly/1.0 (+http://www.feedly.com/fetcher.html; like FeedFetcher-Google)',0,'0000-00-00 00:00:00')
, (?,'Fetch-Guess',1,'Fetch/2.0a (CMS Detection/Web/SEO analysis tool, see http://guess.scritch.org)',0,'0000-00-00 00:00:00')
, (?,'Findexa Crawler',1,'Findexa Crawler (http://www.findexa.no/gulesider/article26548.ece)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/1.1.5-beta7 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/1.1.6-beta4 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/1.1.6-beta5 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/2.0 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/1.1.6-beta6 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/2.0.1 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/1.1.6-beta1 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/1.1.6-beta2 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/1.1.6-beta1 (+http://wortschatz.uni-leipzig.de/findlinks/; YaCy 0.1; yacy.net)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/1.1.6-beta3 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/2.0.2 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/2.0.4 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/1.1.3-beta9 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/2.0.9 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/2.1 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/2.1.3 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/2.1.5 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/2.2 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/2.0.5 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/2.5 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'findlinks',1,'findlinks/2.6 (+http://wortschatz.uni-leipzig.de/findlinks/)',0,'0000-00-00 00:00:00')
, (?,'firmilybot',1,'Mozilla/5.0 (compatible; firmilybot/0.3; +http://www.firmily.com/bot.php',0,'0000-00-00 00:00:00')
, (?,'Flatland Industries Web Spider',1,'flatlandbot/baypup (Flatland Industries Web Spider; http://www.flatlandindustries.com/flatlandbot; jason@flatlandindustries.com)',0,'0000-00-00 00:00:00')
, (?,'flatlandbot',1,'great-plains-web-spider/gpws (Flatland Industries Web Spider; http://www.flatlandindustries.com/flatlandbot.php; jason@flatlandindustries.com)',0,'0000-00-00 00:00:00')
, (?,'flatlandbot',1,'great-plains-web-spider/flatlandbot (Flatland Industries Web Robot; http://www.flatlandindustries.com/flatlandbot.php; jason@flatlandindustries.com)',0,'0000-00-00 00:00:00')
, (?,'flatlandbot',1,'flatlandbot/flatlandbot (Flatland Industries Web Spider; http://www.flatlandindustries.com/flatlandbot.php; jason@flatlandindustries.com)',0,'0000-00-00 00:00:00')
, (?,'flatlandbot',1,'great-plains-web-spider/flatlandbot (Flatland Industries Web Spider; http://www.flatlandindustries.com/flatlandbot.php; jason@flatlandindustries.com)',0,'0000-00-00 00:00:00')
, (?,'FlightDeckReportsBot',1,'FlightDeckReportsBot/2.0 (http://www.flightdeckreports.com/pages/bot)',0,'0000-00-00 00:00:00')
, (?,'FlipboardProxy',1,'Mozilla/5.0 (compatible; FlipboardProxy/1.1; +http://flipboard.com/browserproxy)',0,'0000-00-00 00:00:00')
, (?,'FlipboardProxy',1,'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6 (FlipboardProxy/0.0.5; +http://flipboard.com/browserproxy)',0,'0000-00-00 00:00:00')
, (?,'FlipboardProxy',1,'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6 (FlipboardProxy/1.1; +http://flipboard.com/browserproxy)',0,'0000-00-00 00:00:00')
, (?,'FlipboardProxy',1,'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6 (FlipboardProxy/2.0; +http://flipboard.com/browserproxy)',0,'0000-00-00 00:00:00')
, (?,'FlipboardProxy',1,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.9; rv:28.0) Gecko/20100101 Firefox/28.0 (FlipboardProxy/1.1; +http://flipboard.com/browserproxy)',0,'0000-00-00 00:00:00')
, (?,'Flocke bot',1,'http://www.uni-koblenz.de/~flocke/robot-info.txt',0,'0000-00-00 00:00:00')
, (?,'FollowSite Bot',1,'FollowSite Bot ( http://www.followsite.com/bot.html )',0,'0000-00-00 00:00:00')
, (?,'Fooooo_Web_Video_Crawl',1,'Mozilla/4.0 (compatible; Fooooo_Web_Video_Crawl http://fooooo.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Forschungsportal',1,'Forschungsportal/0.8-dev (Testinstallation; http://www.forschungsportal.net/; fpcrawler@rrzn.uni-hannover.de)',0,'0000-00-00 00:00:00')
, (?,'Francis',1,'Francis/2.0 (francis@neomo.de http://www.neomo.de/pages/crawler.php)',0,'0000-00-00 00:00:00')
, (?,'FunnelBack',1,'Mozilla/5.0 (compatible; FunnelBack; http://cyan.funnelback.com/robot.html)',0,'0000-00-00 00:00:00')
, (?,'FurlBot',1,'Mozilla/4.0 compatible FurlBot/Furl Search 2.0 (FurlBot; http://www.furl.net; wn.furlbot@looksmart.net)',0,'0000-00-00 00:00:00')
, (?,'FyberSpider',1,'FyberSpider/1.2 (http://www.fybersearch.com/fyberspider.php)',0,'0000-00-00 00:00:00')
, (?,'FyberSpider',1,'FyberSpider/1.3 (http://www.fybersearch.com/fyberspider.php)',0,'0000-00-00 00:00:00')
, (?,'g2crawler',1,'g2Crawler (nobody@airmail.net)',0,'0000-00-00 00:00:00')
, (?,'Gaisbot',1,'Gaisbot/3.0+(robot@gais.cs.ccu.edu.tw;+http://gais.cs.ccu.edu.tw/robot.php)',0,'0000-00-00 00:00:00')
, (?,'Gaisbot',1,'Gaisbot/3.0+(robot06@gais.cs.ccu.edu.tw;+http://gais.cs.ccu.edu.tw/robot.php)',0,'0000-00-00 00:00:00')
, (?,'Gallent Search Spider',1,'Gallent Search Spider v1.4 Robot 3 (http://www.GallentSearch.com/robot)',0,'0000-00-00 00:00:00')
, (?,'GarlikCrawler',1,'GarlikCrawler/1.1 (http://garlik.com/, crawler@garik.com)',0,'0000-00-00 00:00:00')
, (?,'GarlikCrawler',1,'GarlikCrawler/1.1 (http://garlik.com/, crawler@garlik.com)',0,'0000-00-00 00:00:00')
, (?,'GarlikCrawler',1,'GarlikCrawler/1.2 (http://garlik.com/, crawler@garlik.com)',0,'0000-00-00 00:00:00')
, (?,'GeliyooBot',1,'Mozilla/5.0 (compatible; GeliyooBot/1.0beta; +http://www.geliyoo.com/)',0,'0000-00-00 00:00:00')
, (?,'GeliyooBot',1,'Mozilla/5.0 (compatible; GeliyooBot/1.0; +http://www.geliyoo.com/)',0,'0000-00-00 00:00:00')
, (?,'genieBot',1,'genieBot (wgao@genieknows.com)',0,'0000-00-00 00:00:00')
, (?,'genieBot',1,'genieBot ((http://64.5.245.11/faq/faq.html))',0,'0000-00-00 00:00:00')
, (?,'Genieo Web filter',1,'Mozilla/5.0 (compatible; Genieo/1.0 http://www.genieo.com/webfilter.html)',0,'0000-00-00 00:00:00')
, (?,'Genieo Web filter',1,'Mozilla/5.0 (compatible; Genieo/1.0 http://www.genieo.com/webfilter.html) AppEngine-Google; (+http://code.google.com/appengine; appid: s~natmacdevice)',0,'0000-00-00 00:00:00')
, (?,'GeonaBot',1,'GeonaBot/1.2; http://www.geona.com/',0,'0000-00-00 00:00:00')
, (?,'Giant/1.0',1,'Giant/1.0 (Openmaru bot; robot@openmaru.com)',0,'0000-00-00 00:00:00')
, (?,'Gigabot',1,'Gigabot/3.0 (http://www.gigablast.com/spider.html)',0,'0000-00-00 00:00:00')
, (?,'Gigabot',1,'Mozilla/5.0 (compatible; GigaBot/1.0; +http://www.gigablast.com/ )',0,'0000-00-00 00:00:00')
, (?,'GingerCrawler',1,'GingerCrawler/1.0 (Language Assistant for Dyslexics; www.gingersoftware.com/crawler_agent.htm; support at ginger software dot com)',0,'0000-00-00 00:00:00')
, (?,'Girafabot',1,'Mozilla/4.0 (compatible; MSIE 5.0; Windows NT; Girafabot; girafabot at girafa dot com; http://www.girafa.com)',0,'0000-00-00 00:00:00')
, (?,'Girafabot',1,'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 4.0; Girafabot; girafabot at girafa dot com; http://www.girafa.com)',0,'0000-00-00 00:00:00')
, (?,'Girafabot',1,'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322; Girafabot [girafa.com])',0,'0000-00-00 00:00:00')
, (?,'gocrawl',1,'Googlebot (gocrawl v0.4)',0,'0000-00-00 00:00:00')
, (?,'GOFORITBOT',1,'GOFORITBOT ( http://www.goforit.com/about/ )',0,'0000-00-00 00:00:00')
, (?,'gonzo',1,'gonzo2[P] +http://www.suchen.de/faq.html',0,'0000-00-00 00:00:00')
, (?,'gonzo',1,'gonzo1[P] +http://www.suchen.de/faq.html',0,'0000-00-00 00:00:00')
, (?,'gonzo',1,'gonzo/1[P] (+http://www.suchen.de/faq.html)',0,'0000-00-00 00:00:00')
, (?,'gonzo',1,'gonzo2[p] (+http://www.suchen.de/faq.html)',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'Googlebot-Image/1.0',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'Mediapartners-Google',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'AdsBot-Google-Mobile (+http://www.google.com/mobile/adsbot.html) Mozilla (iPhone; U; CPU iPhone OS 3 0 like Mac OS X) AppleWebKit (KHTML, like Gecko) Mobile Safari',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'Googlebot-Video/1.0',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'Googlebot/2.1 (+http://www.google.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.51 (KHTML, like Gecko; Google Web Preview) Chrome/12.0.742 Safari/534.51',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'Mozilla/5.0 (en-us) AppleWebKit/525.13 (KHTML, like Gecko; Google Web Preview) Version/3.1 Safari/525.13',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.24 (KHTML, like Gecko; Google Web Preview) Chrome/11.0.696 Safari/534.24 ',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'SAMSUNG-SGH-E250/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 (compatible; Googlebot-Mobile/2.1; +http://www.google.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'DoCoMo/2.0 N905i(c100;TB;W24H16) (compatible; Googlebot-Mobile/2.1; +http://www.google.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_1 like Mac OS X; en-us) AppleWebKit/532.9 (KHTML, like Gecko) Version/4.0.5 Mobile/8B117 Safari/6531.22.7 (compatible; Googlebot-Mobile/2.1; +http://www.google.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.4 (KHTML, like Gecko; Google Web Preview) Chrome/22.0.1229 Safari/537.4',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20110814 Firefox/6.0 Google (+https://developers.google.com/+/web/snippet/)',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e Safari/8536.25 (compatible; Googlebot-Mobile/2.1; +http://www.google.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'SAMSUNG-SGH-E250/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 UP.Browser/6.2.3.3.c.1.101 (GUI) MMP/2.0 (compatible; Googlebot-Mobile/2.1; +http://www.google.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'DoCoMo/2.0 N905i(c100;TB;W24H16) (compatible; Googlebot-Mobile/2.1; +http://www.google.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko; Google Web Preview) Chrome/27.0.1453 Safari/537.36',0,'0000-00-00 00:00:00')
, (?,'Googlebot',1,'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5376e Safari/8536.25 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Grahambot',1,'Grahambot/0.1 (+http://www.sunaga-lab.com/graham-bot)',0,'0000-00-00 00:00:00')
, (?,'GrapeshotCrawler',1,'Mozilla/5.0 (compatible; GrapeshotCrawler/2.0; +http://www.grapeshot.co.uk/crawler.php)',0,'0000-00-00 00:00:00')
, (?,'GrapeshotCrawler',1,'Mozilla/5.0 (compatible; grapeFX/0.9; crawler@grapeshot.co.uk',0,'0000-00-00 00:00:00')
, (?,'GurujiBot',1,'Mozilla/5.0 (compatible; GurujiBot/1.0; +http://www.guruji.com/en/WebmasterFAQ.html)',0,'0000-00-00 00:00:00')
, (?,'Hailoobot',1,'Mozilla/5.0 (compatible; Hailoobot/1.2; +http://www.hailoo.com/spider.html)',0,'0000-00-00 00:00:00')
, (?,'HatenaScreenshot',1,'HatenaScreenshot/1.0 (checker)',0,'0000-00-00 00:00:00')
, (?,'hawkReader',1,'hawkReader/1.8 (Link Parser; http://www.hawkreader.com/; Allow like Gecko) Build/f2b2566',0,'0000-00-00 00:00:00')
, (?,'HeartRails_Capture',1,'Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.8.1.20) Gecko/20090429 HeartRails_Capture/0.6 (+http://capture.heartrails.com/) BonEcho/2.0.0.20',0,'0000-00-00 00:00:00')
, (?,'heritrix',1,'Mozilla/5.0 (compatible; heritrix/1.12.1 +http://www.webarchiv.cz)',0,'0000-00-00 00:00:00')
, (?,'heritrix',1,'Mozilla/5.0 (compatible; heritrix/1.14.3 +http://archive.org)',0,'0000-00-00 00:00:00')
, (?,'heritrix',1,'Mozilla/5.0 (compatible; heritrix/2.0.2 +http://seekda.com)',0,'0000-00-00 00:00:00')
, (?,'heritrix',1,'Mozilla/5.0 (compatible; heritrix/1.14.2 +http://rjpower.org)',0,'0000-00-00 00:00:00')
, (?,'heritrix',1,'Mozilla/5.0 (compatible; heritrix/2.0.2 +http://aihit.com)',0,'0000-00-00 00:00:00')
, (?,'heritrix',1,'Mozilla/5.0 (compatible; heritrix/1.12.1b +http://netarkivet.dk/website/info.html)',0,'0000-00-00 00:00:00')
, (?,'heritrix',1,'Mozilla/5.0 (compatible; heritrix/1.14.3 +http://www.webarchiv.cz)',0,'0000-00-00 00:00:00')
, (?,'heritrix',1,'Mozilla/5.0 (compatible; heritrix/1.14.3.r6601 +http://www.buddybuzz.net/yptrino)',0,'0000-00-00 00:00:00')
, (?,'heritrix',1,'Mozilla/5.0 (compatible; heritrix/3.0.0-SNAPSHOT-20091120.021634 +http://crawler.archive.org)',0,'0000-00-00 00:00:00')
, (?,'heritrix',1,'Mozilla/5.0 (compatible; heritrix/1.14.2 +http://www.webarchiv.cz)',0,'0000-00-00 00:00:00')
, (?,'heritrix',1,'Mozilla/5.0 (compatible; heritrix/3.1.1-SNAPSHOT-20120116.200628 +http://www.archive.org/details/archive.org_bot)',0,'0000-00-00 00:00:00')
, (?,'HiddenMarket',1,'HiddenMarket-1.0-beta (www.hiddenmarket.net/crawler.php)',0,'0000-00-00 00:00:00')
, (?,'Holmes',1,'holmes/3.12.4 (http://morfeo.centrum.cz/bot)',0,'0000-00-00 00:00:00')
, (?,'Holmes',1,'holmes/3.11 (http://morfeo.centrum.cz/bot)',0,'0000-00-00 00:00:00')
, (?,'Holmes',1,'holmes/3.9 (onet.pl)',0,'0000-00-00 00:00:00')
, (?,'Holmes',1,'holmes/3.9 (OnetSzukaj/5.0; +http://szukaj.onet.pl)',0,'0000-00-00 00:00:00')
, (?,'Holmes',1,'holmes/3.10.1 (OnetSzukaj/5.0; +http://szukaj.onet.pl)',0,'0000-00-00 00:00:00')
, (?,'Holmes',1,'holmes/3.11 (OnetSzukaj/5.0; +http://szukaj.onet.pl)',0,'0000-00-00 00:00:00')
, (?,'HolmesBot',1,'HolmesBot (http://holmes.ge)',0,'0000-00-00 00:00:00')
, (?,'HomeTags',1,'Mozilla/5.0 (compatible; HomeTags/1.0; +http://www.hometags.nl/bot)',0,'0000-00-00 00:00:00')
, (?,'HomeTags',1,'Mozilla/5.0 (compatible; HomeTags/1.0;  http://www.hometags.nl/bot)',0,'0000-00-00 00:00:00')
, (?,'HooWWWer',1,'HooWWWer/2.1.3 (debugging run) (+http://cosco.hiit.fi/search/hoowwwer/ | mailto:crawler-info<at>hiit.fi)',0,'0000-00-00 00:00:00')
, (?,'HooWWWer',1,'HooWWWer/2.2.0 (debugging run) (+http://cosco.hiit.fi/search/hoowwwer/ | mailto:crawler-info<at>hiit.fi)',0,'0000-00-00 00:00:00')
, (?,'HostTracker',1,'Mozilla/4.0 (compatible;HostTracker/2.0;+http://www.host-tracker.com/)',0,'0000-00-00 00:00:00')
, (?,'HostTracker.com',1,'Mozilla/4.0 (compatible; HostTracker.com/1.0;+http://host-tracker.com/)',0,'0000-00-00 00:00:00')
, (?,'ht://Dig',1,'cinetic_htdig',0,'0000-00-00 00:00:00')
, (?,'HuaweiSymantecSpider',1,'HuaweiSymantecSpider/1.0+DSE-support@huaweisymantec.com+(compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR ; http://www.huaweisymantec.com/en/IRL/spider)',0,'0000-00-00 00:00:00')
, (?,'HubSpot Connect',1,'HubSpot Connect 1.0 (http://dev.hubspot.com/)',0,'0000-00-00 00:00:00')
, (?,'iaskspider',1,'iaskspider/2.0(+http://iask.com/help/help_index.html)',0,'0000-00-00 00:00:00')
, (?,'ia_archiver',1,'ia_archiver-web.archive.org',0,'0000-00-00 00:00:00')
, (?,'ia_archiver',1,'ia_archiver (+http://www.alexa.com/site/help/webmasters; crawler@alexa.com)',0,'0000-00-00 00:00:00')
, (?,'ICC-Crawler',1,'ICC-Crawler(Mozilla-compatible; ; http://kc.nict.go.jp/project1/crawl.html)',0,'0000-00-00 00:00:00')
, (?,'ICC-Crawler',1,'ICC-Crawler/2.0 (Mozilla-compatible; ; http://kc.nict.go.jp/project1/crawl.html)',0,'0000-00-00 00:00:00')
, (?,'ICF_Site_Crawler',1,'ICF_Site_Crawler+(see+http://www.infocenter.fi/spiderinfo.html)',0,'0000-00-00 00:00:00')
, (?,'ichiro',1,'ichiro/1.0 (ichiro@nttr.co.jp)',0,'0000-00-00 00:00:00')
, (?,'ichiro',1,'ichiro/2.0 (ichiro@nttr.co.jp)',0,'0000-00-00 00:00:00')
, (?,'ichiro',1,'ichiro/2.0 (http://help.goo.ne.jp/door/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'ichiro',1,'ichiro/2.01 (http://help.goo.ne.jp/door/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'ichiro',1,'ichiro/3.0 (http://help.goo.ne.jp/door/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'ichiro',1,'ichiro/4.0 (http://help.goo.ne.jp/door/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'ichiro',1,'ichiro/5.0 (http://help.goo.ne.jp/door/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'ichiro',1,'ichiro/3.0 (http://help.goo.ne.jp/help/article/1142)',0,'0000-00-00 00:00:00')
, (?,'ichiro',1,'ichiro/3.0 (http://search.goo.ne.jp/option/use/sub4/sub4-1/)',0,'0000-00-00 00:00:00')
, (?,'iCjobs',1,'Mozilla/5.0 (X11; U; Linux i686; de; rv:1.9.0.1; compatible; iCjobs Stellenangebote Jobs; http://www.icjobs.de) Gecko/20100401 iCjobs/3.2.3',0,'0000-00-00 00:00:00')
, (?,'IdeelaborPlagiaat',1,'IdeelaborPlagiaat/1',0,'0000-00-00 00:00:00')
, (?,'Iframely',1,'Iframely/0.6.0 (+http://iframely.com/;)',0,'0000-00-00 00:00:00')
, (?,'IlseBot',1,'IlseBot/1.1',0,'0000-00-00 00:00:00')
, (?,'IlTrovatore',1,'IlTrovatore/1.2 (IlTrovatore; http://www.iltrovatore.it/bot.html; bot@iltrovatore.it)',0,'0000-00-00 00:00:00')
, (?,'IlTrovatore-Setaccio',1,'IlTrovatore-Setaccio/1.2 (It search engine; http://www.iltrovatore.it/bot.html; bot@iltrovatore.it)',0,'0000-00-00 00:00:00')
, (?,'IlTrovatore-Setaccio',1,'IlTrovatore-Setaccio/1.2 (Italy search engine; http://www.iltrovatore.it/bot.html; bot@iltrovatore.it)',0,'0000-00-00 00:00:00')
, (?,'imbot',1,'Mozilla/5.0 (compatible; imbot/0.1 +http://internetmemory.org/en/)',0,'0000-00-00 00:00:00')
, (?,'immediatenet thumbnails',1,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535. Safari/535.22+; (+http://immediatenet.com/thumbnail_api.html; free thumbnails)',0,'0000-00-00 00:00:00')
, (?,'Influencebot',1,'Influencebot/0.9; (Automatic classification of websites; http://www.influencebox.com/; info@influencebox.com)',0,'0000-00-00 00:00:00')
, (?,'InfociousBot',1,'InfociousBot (+http://corp.infocious.com/tech_crawler.php)',0,'0000-00-00 00:00:00')
, (?,'Infohelfer',1,'infohelfer/1.1.0 (http://www.infohelfer.de/)',0,'0000-00-00 00:00:00')
, (?,'Infohelfer',1,'Mozilla/5.0 (compatible; Infohelfer/1.2.0; +http://www.infohelfer.de/crawler.php)',0,'0000-00-00 00:00:00')
, (?,'Infohelfer',1,'Mozilla/5.0 (compatible; Infohelfer/1.3.0; +http://www.infohelfer.de/crawler.php)',0,'0000-00-00 00:00:00')
, (?,'Infohelfer',1,'Mozilla/5.0 (compatible; Infohelfer/1.3.3; +http://www.infohelfer.de/crawler.php)',0,'0000-00-00 00:00:00')
, (?,'IntegromeDB',1,'www.integromedb.org/Crawler',0,'0000-00-00 00:00:00')
, (?,'InternetSeer',1,'InternetSeer.com',0,'0000-00-00 00:00:00')
, (?,'Ipselonbot',1,'Ipselonbot/0.47-beta (Ipselon; http://www.ipselon.com/intl/en/ipselonbot.html; ipselonbot@ipselon.com)',0,'0000-00-00 00:00:00')
, (?,'Ipselonbot',1,'Ipselonbot/1.0-beta (+; http://www.ipselon.com/intl/en/ipselonbot.html)',0,'0000-00-00 00:00:00')
, (?,'IRLbot',1,'IRLbot/2.0 (+http://irl.cs.tamu.edu/crawler)',0,'0000-00-00 00:00:00')
, (?,'IRLbot',1,'IRLbot/2.0 (compatible; MSIE 6.0; http://irl.cs.tamu.edu/crawler)',0,'0000-00-00 00:00:00')
, (?,'IRLbot',1,'IRLbot/3.0 (compatible; MSIE 6.0; http://irl.cs.tamu.edu/crawler)',0,'0000-00-00 00:00:00')
, (?,'IRLbot',1,'IRLbot/3.0 (compatible; MSIE 6.0; http://irl.cs.tamu.edu/crawler/)',0,'0000-00-00 00:00:00')
, (?,'IstellaBot',1,'Mozilla/5.0 (compatible; IstellaBot/1.01.18 +http://www.tiscali.it/)',0,'0000-00-00 00:00:00')
, (?,'IstellaBot',1,'Mozilla/5.0 (compatible; IstellaBot/1.10.2 +http://www.tiscali.it/)',0,'0000-00-00 00:00:00')
, (?,'IstellaBot',1,'Mozilla/5.0 (compatible; IstellaBot/1.18.81 +http://www.tiscali.it/)',0,'0000-00-00 00:00:00')
, (?,'IXEbot',1,'Mozilla/5.0 (compatible; IXEbot; +http://medialab.di.unipi.it/IXEbot.html)',0,'0000-00-00 00:00:00')
, (?,'Jabse.com Crawler',1,'Jabse.com Crawler v.1.0 www.jabse.com/crawler.php//imagecrawler',0,'0000-00-00 00:00:00')
, (?,'JadynAve',1,'JadynAve - http://www.jadynave.com/robot',0,'0000-00-00 00:00:00')
, (?,'JadynAveBot',1,'Mozilla/5.0 (compatible; JadynAveBot; +http://www.jadynave.com/robot)',0,'0000-00-00 00:00:00')
, (?,'Jambot',1,'Jambot/0.1.1 (Jambot; http://www.jambot.com/blog; crawler@jambot.com)',0,'0000-00-00 00:00:00')
, (?,'JikeSpider',1,'JikeSpider Mozilla/5.0 (compatible; JikeSpider; +http://shoulu.jike.com/spider.html)',0,'0000-00-00 00:00:00')
, (?,'JikeSpider',1,'Mozilla/5.0 (compatible; JikeSpider; +http://shoulu.jike.com/spider.html)',0,'0000-00-00 00:00:00')
, (?,'Job Roboter Spider',1,'Mozilla/5.0 (compatible;WI Job Roboter Spider Version 3;+http://www.webintegration.at)',0,'0000-00-00 00:00:00')
, (?,'JUST-CRAWLER',1,'JUST-CRAWLER(+http://www.justsystems.com/jp/tech/crawler/)',0,'0000-00-00 00:00:00')
, (?,'Jyxobot',1,'Jyxobot/1',0,'0000-00-00 00:00:00')
, (?,'Jyxobot',1,'JyxobotRSS/0.06',0,'0000-00-00 00:00:00')
, (?,'Kakle Bot',1,'kakle-spider/0.1 (kakle-spider; http://www.kakle.com/bot.html; support@kakle.com)',0,'0000-00-00 00:00:00')
, (?,'Kalooga',1,'kalooga/KaloogaBot (Kalooga; http://www.kalooga.com/info.html?page=crawler)',0,'0000-00-00 00:00:00')
, (?,'Kalooga',1,'kalooga/KaloogaBot (Kalooga; http://www.kalooga.com/info.html?page=crawler; crawler@kalooga.com)',0,'0000-00-00 00:00:00')
, (?,'Karneval-Bot',1,'Karneval-Bot (Version: 1.06, powered by www.karnevalsuchmaschine.de +http://www.karnevalsuchmaschine.de/bot.html)',0,'0000-00-00 00:00:00')
, (?,'KeywenBot',1,'KeywenBot/4.1  http://www.keywen.com/Encyclopedia/Links',0,'0000-00-00 00:00:00')
, (?,'KeywordDensityRobot',1,'KeywordDensityRobot/0.8 (http://www.seocentro.com/tools/search-engines/keyword-density.html)',0,'0000-00-00 00:00:00')
, (?,'KomodiaBot',1,'Mozilla/5.0 (Windows NT 6.1; Win64; x64) KomodiaBot/1.0',0,'0000-00-00 00:00:00')
, (?,'Kongulo',1,'Kongulo v0.1 personal web crawler',0,'0000-00-00 00:00:00')
, (?,'Kraken',1,'Mozilla/5.0 (compatible; Kraken/0.1; http://linkfluence.net/; bot@linkfluence.net)',0,'0000-00-00 00:00:00')
, (?,'KRetrieve',1,'KRetrieve/1.1/dbsearchexpert.com',0,'0000-00-00 00:00:00')
, (?,'KrOWLer',1,'KrOWLer/0.0.1, matentzn at cs dot man dot ac dot uk',0,'0000-00-00 00:00:00')
, (?,'KrOWLer',1,'KrOWLer/0.1.0, matentzn at cs dot man dot ac dot uk',0,'0000-00-00 00:00:00')
, (?,'Krugle',1,'Krugle/Krugle,Nutch/0.8+ (Krugle web crawler; http://www.krugle.com/crawler/info.html; webcrawler@krugle.com)',0,'0000-00-00 00:00:00')
, (?,'Krugle',1,'Krugle/Krugle,Nutch/0.8+ (Krugle web crawler; http://corp.krugle.com/crawler/info.html; webcrawler@krugle.com)',0,'0000-00-00 00:00:00')
, (?,'ksibot',1,'ksibot/5.2m (+http://ego.ms.mff.cuni.cz/)',0,'0000-00-00 00:00:00')
, (?,'ksibot',1,'ksibot/7.0d (+http://ego.ms.mff.cuni.cz/)',0,'0000-00-00 00:00:00')
, (?,'ksibot',1,'ksibot/8.0a (+http://ego.ms.mff.cuni.cz/)',0,'0000-00-00 00:00:00')
, (?,'kulturarw',1,'Mozilla/5.0 (compatible; kulturarw3 +http://www.kb.se/om/projekt/Svenska-webbsidor---Kulturarw3/)',0,'0000-00-00 00:00:00')
, (?,'L.webis',1,'L.webis/0.50 (http://webalgo.iit.cnr.it/index.php?pg=lwebis)',0,'0000-00-00 00:00:00')
, (?,'L.webis',1,'L.webis/0.51 (http://webalgo.iit.cnr.it/index.php?pg=lwebis)',0,'0000-00-00 00:00:00')
, (?,'L.webis',1,'L.webis/0.53 (http://webalgo.iit.cnr.it/index.php?pg=lwebis)',0,'0000-00-00 00:00:00')
, (?,'L.webis',1,'L.webis/0.44 (http://webalgo.iit.cnr.it/index.php?pg=lwebis)',0,'0000-00-00 00:00:00')
, (?,'LapozzBot',1,'LapozzBot/1.4 (+http://robot.lapozz.hu)',0,'0000-00-00 00:00:00')
, (?,'LapozzBot',1,'LapozzBot/1.4 (+http://robot.lapozz.com)',0,'0000-00-00 00:00:00')
, (?,'LapozzBot',1,'LapozzBot/1.5 (+http://robot.lapozz.hu) ',0,'0000-00-00 00:00:00')
, (?,'Larbin',1,'Larbin (larbin2.6.3@unspecified.mail)',0,'0000-00-00 00:00:00')
, (?,'Leikibot',1,'Leikibot/1.0 (+http://www.leiki.com)',0,'0000-00-00 00:00:00')
, (?,'LemurWebCrawler',1,'LarbinWebCrawler (spider@download11.com)',0,'0000-00-00 00:00:00')
, (?,'LemurWebCrawler',1,'The Lemur Web Crawler/Nutch-1.3 (Lemur Web Crawler; http://boston.lti.cs.cmu.edu/crawler_12/; admin@lemurproject.org)',0,'0000-00-00 00:00:00')
, (?,'LemurWebCrawler',1,'Mozilla/5.0 (compatible; heritrix/3.1.0-RC1 +http://boston.lti.cs.cmu.edu/crawler_12/)',0,'0000-00-00 00:00:00')
, (?,'LexxeBot',1,'LexxeBot/1.0 (lexxebot@lexxe.com)',0,'0000-00-00 00:00:00')
, (?,'Lijit',1,'Lijit Crawler (+http://www.lijit.com/robot/crawler)',0,'0000-00-00 00:00:00')
, (?,'LinguaBot',1,'LinguaBot/v0.001-dev (MultiLinual Sarch Engine v0.001; LinguaSeek; admin at linguaseek dot com)',0,'0000-00-00 00:00:00')
, (?,'linguatools',1,'linguatools-bot/Nutch-1.6 (searching for translated pages; http://www.linguatools.de/linguatoolsbot.html; peter dot kolb at linguatools dot org)',0,'0000-00-00 00:00:00')
, (?,'Linguee Bot',1,'Linguee Bot (http://www.linguee.com/bot)',0,'0000-00-00 00:00:00')
, (?,'Linguee Bot',1,'Linguee Bot (http://www.linguee.com/bot; bot@linguee.com)',0,'0000-00-00 00:00:00')
, (?,'Link Valet Online',1,'Link Valet Online 1.1',0,'0000-00-00 00:00:00')
, (?,'Link Valet Online',1,'Link Valet Online 1.2',0,'0000-00-00 00:00:00')
, (?,'LinkAider',1,'LinkAider (http://linkaider.com/crawler/)',0,'0000-00-00 00:00:00')
, (?,'linkdex.com',1,'linkdex.com/v2.0',0,'0000-00-00 00:00:00')
, (?,'linkdexbot',1,'linkdexbot/Nutch-1.0-dev (http://www.linkdex.com/; crawl at linkdex dot com)',0,'0000-00-00 00:00:00')
, (?,'linkdexbot',1,'Mozilla/5.0 (compatible; linkdexbot/2.0; +http://www.linkdex.com/about/bots/)',0,'0000-00-00 00:00:00')
, (?,'linkdexbot',1,'Mozilla/5.0 (compatible; linkdexbot/2.1; +http://www.linkdex.com/about/bots/)',0,'0000-00-00 00:00:00')
, (?,'linkdexbot',1,'Mozilla/5.0 (compatible; linkdexbot/2.0; +http://www.linkdex.com/bots/)',0,'0000-00-00 00:00:00')
, (?,'linkdexbot',1,'Mozilla/5.0 (compatible; linkdexbot/2.1; +http://www.linkdex.com/bots/)',0,'0000-00-00 00:00:00')
, (?,'LinkedInBot',1,'LinkedInBot/1.0 (compatible; Mozilla/5.0; Jakarta Commons-HttpClient/3.1 +http://www.linkedin.com)',0,'0000-00-00 00:00:00')
, (?,'linksmanager_bot',1,'Mozilla/5.0 (compatible; LinksManager.com_bot +http://linksmanager.com/linkchecker.html)',0,'0000-00-00 00:00:00')
, (?,'LinkWalker',1,'LinkWalker',0,'0000-00-00 00:00:00')
, (?,'LinkWalker',1,'LinkWalker/2.0',0,'0000-00-00 00:00:00')
, (?,'Lipperhey Spider',1,'Mozilla/5.0 (compatible; Lipperhey SEO Service; http://www.lipperhey.com/)',0,'0000-00-00 00:00:00')
, (?,'livedoor ScreenShot',1,'livedoor ScreenShot/0.10',0,'0000-00-00 00:00:00')
, (?,'lmspider',1,'lmspider (lmspider@scansoft.com)',0,'0000-00-00 00:00:00')
, (?,'lmspider',1,'lmspider/Nutch-0.9-dev (For research purposes.; www.nuance.com)',0,'0000-00-00 00:00:00')
, (?,'LoadImpactPageAnalyzer',1,'LoadImpactPageAnalyzer/1.3.0 (Load Impact; http://loadimpact.com/)',0,'0000-00-00 00:00:00')
, (?,'LoadTimeBot',1,'Mozilla/5.0 (compatible; LoadTimeBot/0.7; +http://www.load-time.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'LoadTimeBot',1,'Mozilla/5.0 (compatible; LoadTimeBot/0.81; +http://www.load-time.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'LoadTimeBot',1,'Mozilla/5.0 (compatible; LoadTimeBot/0.9; +http://www.loadtime.net/bot.html)',0,'0000-00-00 00:00:00')
, (?,'LuminateBot',1,'Mozilla/5.0 (compatible; LuminateBot/1.0; +http://www.luminate.com/bot/)',0,'0000-00-00 00:00:00')
, (?,'magpie-crawler',1,'magpie-crawler/1.1 (U; Linux amd64; en-GB; +http://www.brandwatch.net)',0,'0000-00-00 00:00:00')
, (?,'Mahiti Crawler',1,'Mahiti.Com/Mahiti Crawler-1.0 (Mahiti.Com; http://mahiti.com ; mahiti.com)',0,'0000-00-00 00:00:00')
, (?,'Mail.Ru bot',1,'Mail.Ru/1.0',0,'0000-00-00 00:00:00')
, (?,'Mail.Ru bot',1,'Mail.RU/2.0',0,'0000-00-00 00:00:00')
, (?,'Mail.Ru bot',1,'Mozilla/5.0 (compatible; Mail.RU/2.0)',0,'0000-00-00 00:00:00')
, (?,'Mail.Ru bot',1,'Mozilla/5.0 (compatible; Mail.RU_Bot/2.0)',0,'0000-00-00 00:00:00')
, (?,'Mail.Ru bot',1,'Mozilla/5.0 (compatible; Mail.RU_Bot/2.0; +http://go.mail.ru/help/robots)',0,'0000-00-00 00:00:00')
, (?,'Mail.Ru bot',1,'Mozilla/5.0 (compatible; Linux x86_64; Mail.RU_Bot/2.0; +http://go.mail.ru/help/robots)',0,'0000-00-00 00:00:00')
, (?,'Mail.Ru bot',1,'Mozilla/5.0 (compatible; Linux x86_64; Mail.RU_Bot/Img/2.0; +http://go.mail.ru/help/robots)',0,'0000-00-00 00:00:00')
, (?,'Mail.Ru bot',1,'Mozilla/5.0 (compatible; Linux x86_64; Mail.RU_Bot/Fast/2.0; +http://go.mail.ru/help/robots)',0,'0000-00-00 00:00:00')
, (?,'meanpathbot',1,'Mozilla/5.0 (compatible; meanpathbot/1.0; +http://www.meanpath.com/meanpathbot.html)',0,'0000-00-00 00:00:00')
, (?,'Megatext',1,'Megatext/Nutch-0.8.1 (Beta; http://www.megatext.cz/; microton@microton.cz)',0,'0000-00-00 00:00:00')
, (?,'Megatext',1,'Megatext/Megatext-0.5 (beta; http://www.megatext.cz/; microton@microton.cz)',0,'0000-00-00 00:00:00')
, (?,'MeMoNewsBot',1,'MeMoNewsBot/2.0 (http://www.memonews.com/en/crawler)',0,'0000-00-00 00:00:00')
, (?,'MetaGeneratorCrawler',1,'MetaGeneratorCrawler/1.1 (www.metagenerator.info)',0,'0000-00-00 00:00:00')
, (?,'MetaGeneratorCrawler',1,'MetaGeneratorCrawler/1.3.3 (www.metagenerator.info)',0,'0000-00-00 00:00:00')
, (?,'MetaGeneratorCrawler',1,'MetaGeneratorCrawler/1.3.14 (www.metagenerator.info)',0,'0000-00-00 00:00:00')
, (?,'MetaGeneratorCrawler',1,'MetaGeneratorCrawler/1.3.4 (www.metagenerator.info)',0,'0000-00-00 00:00:00')
, (?,'MetaGeneratorCrawler',1,'MetaGeneratorCrawler/1.3.2 (www.metagenerator.info)',0,'0000-00-00 00:00:00')
, (?,'MetaGeneratorCrawler',1,'MetaGeneratorCrawler/1.3.9 (www.metagenerator.info)',0,'0000-00-00 00:00:00')
, (?,'MetaHeadersBot',1,'MetaHeadersBot (+http://www.metaheaders.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'MetaJobBot',1,'Mozilla/5.0 (compatible; MetaJobBot; http://www.metajob.at/crawler)',0,'0000-00-00 00:00:00')
, (?,'MetamojiCrawler',1,'Mozilla/5.0 (compatible; MetamojiCrawler/1.0; +http://www.metamoji.com/jp/crawler.html',0,'0000-00-00 00:00:00')
, (?,'Metaspinner/0.01',1,'Metaspinner/0.01 (Metaspinner; http://www.meta-spinner.de/; support@meta-spinner.de/)',0,'0000-00-00 00:00:00')
, (?,'MetaTagRobot',1,'MetaTagRobot/1.6 (http://www.widexl.com/remote/search-engines/metatag-analyzer.html)',0,'0000-00-00 00:00:00')
, (?,'MetaTagRobot',1,'MetaTagRobot/2.1 (http://www.widexl.com/remote/search-engines/metatag-analyzer.html)',0,'0000-00-00 00:00:00')
, (?,'MetaURI',1,'MetaURI API +metauri.com',0,'0000-00-00 00:00:00')
, (?,'MetaURI API',1,'MetaURI API/2.0 +metauri.com',0,'0000-00-00 00:00:00')
, (?,'MIA Bot',1,'MIA DEV/search:robot/0.0.1 (This is the MIA Bot - crawling for mia research project. If you feel unhappy and do not want to be visited by our crawler send an email to spider@neofonie.de; http://spider.neofonie.de; spider@neofonie.de)',0,'0000-00-00 00:00:00')
, (?,'MiaDev',1,'MiaDev/0.0.1 (MIA Bot for research project MIA (www.MIA-marktplatz.de); http://www.mia-marktplatz.de/spider; spider@mia-marktplatz.de)',0,'0000-00-00 00:00:00')
, (?,'miniRank',1,'miniRank/1.2 (miniRank; http://minirank.com/; MiniRank)',0,'0000-00-00 00:00:00')
, (?,'miniRank',1,'miniRank/1.5 (miniRank; www.minirank.com; robot)',0,'0000-00-00 00:00:00')
, (?,'miniRank',1,'miniRank/1.6 (Website ranking; www.minirank.com; robot)',0,'0000-00-00 00:00:00')
, (?,'miniRank',1,'miniRank/2.0 (miniRank; http://minirank.com/; website ranking engine)',0,'0000-00-00 00:00:00')
, (?,'miniRank',1,'miniRank/3.1 (miniRank; www.minirank.com; website ranking engine)',0,'0000-00-00 00:00:00')
, (?,'MJ12bot',1,'Mozilla/5.0 (compatible; MJ12bot/v1.2.5; http://www.majestic12.co.uk/bot.php?+)',0,'0000-00-00 00:00:00')
, (?,'MJ12bot',1,'Mozilla/5.0 (compatible; MJ12bot/v1.2.4; http://www.majestic12.co.uk/bot.php?+)',0,'0000-00-00 00:00:00')
, (?,'MJ12bot',1,'Mozilla/5.0 (compatible; MJ12bot/v1.2.1; http://www.majestic12.co.uk/bot.php?+)',0,'0000-00-00 00:00:00')
, (?,'MJ12bot',1,'Mozilla/5.0 (compatible; MJ12bot/v1.2.3; http://www.majestic12.co.uk/bot.php?+)',0,'0000-00-00 00:00:00')
, (?,'MJ12bot',1,'Mozilla/5.0 (compatible; MJ12bot/v1.3.0; http://www.majestic12.co.uk/bot.php?+)',0,'0000-00-00 00:00:00')
, (?,'MJ12bot',1,'Mozilla/5.0 (compatible; MJ12bot/v1.3.1; http://www.majestic12.co.uk/bot.php?+)',0,'0000-00-00 00:00:00')
, (?,'MJ12bot',1,'Mozilla/5.0 (compatible; MJ12bot/v1.3.2; http://www.majestic12.co.uk/bot.php?+)',0,'0000-00-00 00:00:00')
, (?,'MJ12bot',1,'Mozilla/5.0 (compatible; MJ12bot/v1.3.3; http://www.majestic12.co.uk/bot.php?+)',0,'0000-00-00 00:00:00')
, (?,'MJ12bot',1,'Mozilla/5.0 (compatible; MJ12bot/v1.4.0; http://www.majestic12.co.uk/bot.php?+)',0,'0000-00-00 00:00:00')
, (?,'MJ12bot',1,'Mozilla/5.0 (compatible; MJ12bot/v1.4.1; http://www.majestic12.co.uk/bot.php?+)',0,'0000-00-00 00:00:00')
, (?,'MJ12bot',1,'Mozilla/5.0 (compatible; MJ12bot/v1.4.2; http://www.majestic12.co.uk/bot.php?+)',0,'0000-00-00 00:00:00')
, (?,'MJ12bot',1,'Mozilla/5.0 (compatible; MJ12bot/v1.4.3; http://www.majestic12.co.uk/bot.php?+)',0,'0000-00-00 00:00:00')
, (?,'MJ12bot',1,'Mozilla/5.0 (compatible; MJ12bot/v1.4.4; http://www.majestic12.co.uk/bot.php?+)',0,'0000-00-00 00:00:00')
, (?,'MJ12bot',1,'Mozilla/5.0 (compatible; MJ12bot/v1.4.5; http://www.majestic12.co.uk/bot.php?+)',0,'0000-00-00 00:00:00')
, (?,'MLBot',1,'MLBot (www.metadatalabs.com)',0,'0000-00-00 00:00:00')
, (?,'MLBot',1,'MLBot (www.metadatalabs.com/mlbot)',0,'0000-00-00 00:00:00')
, (?,'MnoGoSearch',1,'MnoGoSearch/3.3.2',0,'0000-00-00 00:00:00')
, (?,'MnoGoSearch',1,'MnoGoSearch/3.3.6',0,'0000-00-00 00:00:00')
, (?,'MnoGoSearch',1,'MnoGoSearch/3.3.9',0,'0000-00-00 00:00:00')
, (?,'MnoGoSearch',1,'MnoGoSearch/3.2.37',0,'0000-00-00 00:00:00')
, (?,'Moatbot',1,'Mozilla/5.0 (compatible; Moatbot/2.2; +http://www.moat.com/pages/moatbot)',0,'0000-00-00 00:00:00')
, (?,'moba-crawler',1,'DoCoMo/2.0 N902iS(c100;TB;W24H12)(compatible; moba-crawler; http://crawler.dena.jp/)',0,'0000-00-00 00:00:00')
, (?,'MojeekBot',1,'MojeekBot/0.2 (archi; http://www.mojeek.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'MojeekBot',1,'Mozilla/5.0 (compatible; MojeekBot/0.2; http://www.mojeek.com/bot.html#relaunch)',0,'0000-00-00 00:00:00')
, (?,'MojeekBot',1,'Mozilla/5.0 (compatible; MojeekBot/0.2; http://www.mojeek.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'MojeekBot',1,'Mozilla/5.0 (compatible; MojeekBot/0.5; http://www.mojeek.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'MojeekBot',1,'Mozilla/5.0 (compatible; MojeekBot/0.6; http://www.mojeek.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Motoricerca-Robots.txt-Checker',1,'Motoricerca-Robots.txt-Checker/1.0 (http://tool.motoricerca.info/robots-checker.phtml)',0,'0000-00-00 00:00:00')
, (?,'mozDex',1,'Mozdex/0.7.2-dev (Mozdex; http://www.mozdex.com/bot.html; spider@mozdex.com)',0,'0000-00-00 00:00:00')
, (?,'mozDex',1,'Mozdex/0.7.2 (Mozdex; http://www.mozdex.com/bot.html; spider@mozdex.com)',0,'0000-00-00 00:00:00')
, (?,'mozDex',1,'Mozdex/0.7.1 (Mozdex; http://www.mozdex.com/bot.html; spider@mozdex.com)',0,'0000-00-00 00:00:00')
, (?,'Mp3Bot',1,'Mozilla/5.0 (compatible; Mp3Bot/0.4; +http://mp3realm.org/mp3bot/)',0,'0000-00-00 00:00:00')
, (?,'Mp3Bot',1,'Mozilla/5.0 (compatible; Mp3Bot/0.7; +http://mp3realm.org/mp3bot/)',0,'0000-00-00 00:00:00')
, (?,'MQbot',1,'MQbot metaquerier.cs.uiuc.edu/crawler',0,'0000-00-00 00:00:00')
, (?,'MQbot',1,'MQBOT/Nutch-0.9-dev (MQBOT Nutch Crawler; http://falcon.cs.uiuc.edu; mqbot@cs.uiuc.edu)',0,'0000-00-00 00:00:00')
, (?,'MQbot',1,'MQBOT/Nutch-0.9-dev (MQBOT Crawler; http://falcon.cs.uiuc.edu; mqbot@cs.uiuc.edu)',0,'0000-00-00 00:00:00')
, (?,'MQbot',1,'MQBOT/Nutch-0.9-dev (MQBOT Nutch Crawler; http://vwbot.cs.uiuc.edu; mqbot@cs.uiuc.edu)',0,'0000-00-00 00:00:00')
, (?,'MSNBot',1,'msnbot/1.0 (+http://search.msn.com/msnbot.htm)',0,'0000-00-00 00:00:00')
, (?,'MSNBot',1,'msnbot/2.0b (+http://search.msn.com/msnbot.htm)',0,'0000-00-00 00:00:00')
, (?,'MSNBot',1,'msnbot/1.1 (+http://search.msn.com/msnbot.htm)',0,'0000-00-00 00:00:00')
, (?,'MSNBot',1,'msnbot-media/1.1 (+http://search.msn.com/msnbot.htm)',0,'0000-00-00 00:00:00')
, (?,'MSNBot',1,'adidxbot/1.1 (+http://search.msn.com/msnbot.htm)',0,'0000-00-00 00:00:00')
, (?,'MSNBot',1,'msnbot/2.0b (+http://search.msn.com/msnbot.htm).',0,'0000-00-00 00:00:00')
, (?,'MSNBot',1,'msnbot/2.0b (+http://search.msn.com/msnbot.htm)._',0,'0000-00-00 00:00:00')
, (?,'MSNBot',1,'msnbot-NewsBlogs/2.0b (+http://search.msn.com/msnbot.htm)',0,'0000-00-00 00:00:00')
, (?,'MSNBot',1,'msnbot-UDiscovery/2.0b (+http://search.msn.com/msnbot.htm)',0,'0000-00-00 00:00:00')
, (?,'MSNBot',1,'msnbot-media/2.0b (+http://search.msn.com/msnbot.htm)',0,'0000-00-00 00:00:00')
, (?,'MSNBot',1,'adidxbot/2.0 (+http://search.msn.com/msnbot.htm)',0,'0000-00-00 00:00:00')
, (?,'MSRBOT',1,'MSRBOT',0,'0000-00-00 00:00:00')
, (?,'MSRBOT',1,'MSRBOT (http://research.microsoft.com/research/sv/msrbot/)',0,'0000-00-00 00:00:00')
, (?,'MSRBOT',1,'MSRBOT (http://research.microsoft.com/research/sv/msrbot)',0,'0000-00-00 00:00:00')
, (?,'MSRBOT',1,'MSRBOT (http://research.microsoft.com/research/sv/msrbot/',0,'0000-00-00 00:00:00')
, (?,'MultiCrawler',1,'multicrawler (+http://sw.deri.org/2006/04/multicrawler/robots.html)',0,'0000-00-00 00:00:00')
, (?,'musobot',1,'Mozilla/5.0 (compatible; musobot/1.0; info@muso.com; +http://www.muso.com)',0,'0000-00-00 00:00:00')
, (?,'MyFamilyBot',1,'Mozilla/4.0 (compatible; MyFamilyBot/1.0; http://www.myfamilyinc.com)',0,'0000-00-00 00:00:00')
, (?,'MyFamilyBot',1,'Mozilla/4.0 (compatible; MyFamilyBot/1.0; http://www.ancestry.com/learn/bot.aspx)',0,'0000-00-00 00:00:00')
, (?,'MyFamilyBot',1,'mozilla/4.0 (compatible; myfamilybot/1.0; http://www.ancestry.com/learn/bot.aspx)',0,'0000-00-00 00:00:00')
, (?,'Najdi.si',1,'Mozilla/5.0 (compatible; Najdi.si/3.1)',0,'0000-00-00 00:00:00')
, (?,'NalezenCzBot',1,'NalezenCzBot/1.0 (http://www.nalezen.cz)',0,'0000-00-00 00:00:00')
, (?,'NalezenCzBot',1,'NalezenCzBot/1.0 (http://www.nalezen.cz/about-crawler)',0,'0000-00-00 00:00:00')
, (?,'NaverBot',1,'Yeti/1.0 (NHN Corp.; http://help.naver.com/robots/)',0,'0000-00-00 00:00:00')
, (?,'NaverBot',1,'Mozilla/4.0 (compatible; NaverBot/1.0; http://help.naver.com/customer_webtxt_02.jsp)',0,'0000-00-00 00:00:00')
, (?,'NaverBot',1,'Mozilla/5.0 (iPhone; CPU iPhone OS 5_0_1 like Mac OS X) (compatible; Yeti-Mobile/0.1; +http://help.naver.com/robots/)',0,'0000-00-00 00:00:00')
, (?,'NaverBot',1,'Yeti-FeedItemCrawler/1.0 (NHN Corp.; http://help.naver.com/robots/)',0,'0000-00-00 00:00:00')
, (?,'NaverBot',1,'Yepi/1.0 (NHN Corp.; http://help.naver.com/robots/)',0,'0000-00-00 00:00:00')
, (?,'NaverBot',1,'Yeti/1.1 (NHN Corp.; http://help.naver.com/robots/)',0,'0000-00-00 00:00:00')
, (?,'NaverBot',1,'Yeti/1.1 (Naver Corp.; http://help.naver.com/robots/)',0,'0000-00-00 00:00:00')
, (?,'navissobot',1,'navissobot/1.7  (+http://navisso.com/)',0,'0000-00-00 00:00:00')
, (?,'nekstbot',1,'Nekstbot - http://www.ipipan.waw.pl/nekst/nekstbot/',0,'0000-00-00 00:00:00')
, (?,'nekstbot',1,'Mozilla/5.0 (Nekstbot; http://www.ipipan.waw.pl/nekst/nekstbot/)',0,'0000-00-00 00:00:00')
, (?,'NerdByNature.Bot',1,'Mozilla/5.0 (compatible; NerdByNature.Bot; http://www.nerdbynature.net/bot)',0,'0000-00-00 00:00:00')
, (?,'nestReader',1,'nestReader/0.2 (discovery; http://echonest.com/reader.shtml; reader at echonest.com)',0,'0000-00-00 00:00:00')
, (?,'NetcraftSurveyAgent',1,'Mozilla/5.0 (compatible; NetcraftSurveyAgent/1.0; +info@netcraft.com)',0,'0000-00-00 00:00:00')
, (?,'netEstate Crawler',1,'netEstate RSS crawler (+http://www.rss-directory.info/)',0,'0000-00-00 00:00:00')
, (?,'netEstate Crawler',1,'netEstate NE Crawler (+http://www.sengine.info/)',0,'0000-00-00 00:00:00')
, (?,'netEstate Crawler',1,'netEstate NE Crawler (+http://www.website-datenbank.de/)',0,'0000-00-00 00:00:00')
, (?,'Netintelligence LiveAssessment',1,'Netintelligence LiveAssessment - www.netintelligence.com',0,'0000-00-00 00:00:00')
, (?,'NetResearchServer',1,'nrsbot/5.0(loopip.com/robot.html)',0,'0000-00-00 00:00:00')
, (?,'NetResearchServer',1,'nrsbot/6.0(loopip.com/robot.html)',0,'0000-00-00 00:00:00')
, (?,'Netseer',1,'Mozilla/5.0 (compatible; Netseer crawler/2.0; +http://www.netseer.com/crawler.html; crawler@netseer.com)',0,'0000-00-00 00:00:00')
, (?,'NetWhatCrawler',1,'NetWhatCrawler/0.06-dev (NetWhatCrawler from NetWhat.com; http://www.netwhat.com; support@netwhat.com)',0,'0000-00-00 00:00:00')
, (?,'NextGenSearchBot',1,'NextGenSearchBot 1 (for information visit http://about.zoominfo.com/About/NextGenSearchBot.aspx)',0,'0000-00-00 00:00:00')
, (?,'NextGenSearchBot',1,'NextGenSearchBot 1 (for information visit http://www.zoominfo.com/About/misc/NextGenSearchBot.aspx)',0,'0000-00-00 00:00:00')
, (?,'nextthing.org',1,'Mozilla/5.0 (compatible; nextthing.org/1.0; +http://www.nextthing.org/bot)',0,'0000-00-00 00:00:00')
, (?,'NG',1,'NG/2.0',0,'0000-00-00 00:00:00')
, (?,'NG-Search',1,'NG-Search/0.90 (NG-SearchBot; http://www.ng-search.com;  )',0,'0000-00-00 00:00:00')
, (?,'NG-Search',1,'NG-Search/0.9.8 (NG-SearchBot; http://www.ng-search.com)',0,'0000-00-00 00:00:00')
, (?,'Nigma.ru',1,'Mozilla/5.0 (compatible; Nigma.ru/3.0; crawler@nigma.ru)',0,'0000-00-00 00:00:00')
, (?,'NimbleCrawler',1,'Mozilla/5.0 (Windows;) NimbleCrawler 1.14 obeys UserAgent NimbleCrawler For problems contact: crawler@healthline.com',0,'0000-00-00 00:00:00')
, (?,'NimbleCrawler',1,'Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.7) NimbleCrawler 1.11 obeys UserAgent NimbleCrawler For problems contact: crawler_at_dataalchemy.com',0,'0000-00-00 00:00:00')
, (?,'NimbleCrawler',1,'Mozilla/5.0 (Windows;) NimbleCrawler 1.12 obeys UserAgent NimbleCrawler For problems contact: crawler@healthline.com',0,'0000-00-00 00:00:00')
, (?,'NimbleCrawler',1,'Mozilla/5.0 (Windows;) NimbleCrawler 1.13 obeys UserAgent NimbleCrawler For problems contact: crawler@healthline.com',0,'0000-00-00 00:00:00')
, (?,'NimbleCrawler',1,'Mozilla/5.0 (Windows;) NimbleCrawler 1.15 obeys UserAgent NimbleCrawler For problems contact: crawler@healthline.com',0,'0000-00-00 00:00:00')
, (?,'NimbleCrawler',1,'Mozilla/5.0 (Windows;) NimbleCrawler 2.0.0 obeys UserAgent NimbleCrawler For problems contact: crawler@healthline.com',0,'0000-00-00 00:00:00')
, (?,'NimbleCrawler',1,'Mozilla/5.0 (Windows;) NimbleCrawler 2.0.1 obeys UserAgent NimbleCrawler For problems contact: crawler@healthline.com',0,'0000-00-00 00:00:00')
, (?,'NimbleCrawler',1,'Mozilla/5.0 (Windows;) NimbleCrawler 2.0.2 obeys UserAgent NimbleCrawler For problems contact: crawler@healthline.com',0,'0000-00-00 00:00:00')
, (?,'NLNZ_IAHarvester2013',1,'Mozilla/5.0 (compatible; NLNZ_IAHarvester2013 +http://natlib.govt.nz/about-us/current-initiatives/web-harvest-2013)',0,'0000-00-00 00:00:00')
, (?,'nodestackbot',1,'nodestackbot/0.1 (bot@nodestack.com http://nodestack.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'noyona',1,'noyona_0_1',0,'0000-00-00 00:00:00')
, (?,'NPBot',1,'NPBot/3 (NPBot; http://www.nameprotect.com; npbot@nameprotect.com)',0,'0000-00-00 00:00:00')
, (?,'Nuhk',1,'Nuhk/2.4 ( http://www.neti.ee/cgi-bin/abi/Otsing/Nuhk/)',0,'0000-00-00 00:00:00')
, (?,'Nuhk',1,'Nuhk/2.4 (+http://www.neti.ee/cgi-bin/abi/otsing.html)',0,'0000-00-00 00:00:00')
, (?,'NuSearch Spider',1,'NuSearch Spider (compatible; MSIE 6.0)',0,'0000-00-00 00:00:00')
, (?,'NuSearch Spider',1,'Nusearch Spider (www.nusearch.com)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'NutchCVS/0.8-dev (Nutch; http://lucene.apache.org/nutch/bot.html; nutch-agent@lucene.apache.org)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'NutchCVS/0.06-dev (http://www.nutch.org/docs/en/bot.html; rhwarren+nutch@uwaterloo.ca)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'NutchCVS/0.7 (Nutch; http://lucene.apache.org/nutch/bot.html; nutch-agent@lucene.apache.org)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'NutchOSU-VLIB/0.7 (Nutch; http://lucene.apache.org/nutch/bot.html; nutch-agent@lucene.apache.org)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'InternetArchive/0.8-dev (Nutch; http://lucene.apache.org/nutch/bot.html; nutch-agent@lucene.apache.org)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'NutchCVS/0.7.1 (Nutch; http://lucene.apache.org/nutch/bot.html; nutch-agent@lucene.apache.org)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'NutchCVS/0.7.1 (Nutch; http://www.vvdb.org; voorzitter@vvdb.org)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'NutchCVS/0.06-dev (Nutch; http://www.nutch.org/docs/en/bot.html; nutch-agent@lists.sourceforge.net)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'NutchCVS/0.7.1 (Nutch running at UW; http://www.nutch.org/docs/en/bot.html; sycrawl@cs.washington.edu)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'NutchCVS/0.7.1 (Nutch running at UW; http://crawlers.cs.washington.edu/; sycrawl@cs.washington.edu)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'NutchCVS/0.7.2 (Nutch; http://lucene.apache.org/nutch/bot.html; nutch-agent@lucene.apache.org)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'NutchCVS/0.8-dev (Nutch running at UW; http://www.nutch.org/docs/en/bot.html; sycrawl@cs.washington.edu)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'asked/Nutch-0.8 (web crawler; http://asked.jp; epicurus at gmail dot com)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'HouxouCrawler/Nutch-0.9-dev',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'BilgiBetaBot/0.8-dev (bilgi.com (Beta) ; http://lucene.apache.org/nutch/bot.html; nutch-agent@lucene.apache.org)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'HouxouCrawler/Nutch-0.8',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'NutchCVS/0.7.1 (Nutch; http://lucene.apache.org/nutch/bot.html; raphael@unterreuth.de)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'heeii/Nutch-0.9-dev (heeii.com; www.heeii.com; nutch at heeii.com)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'HouxouCrawler/Nutch-0.8.2-dev',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'NutchCVS/Nutch-0.9 (Nutch; http://lucene.apache.org/nutch/bot.html; nutch-agent@lucene.apache.org)',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'HouxouCrawler/Nutch-0.9',0,'0000-00-00 00:00:00')
, (?,'Nutch',1,'Zscho.de Crawler/Nutch-1.0-Zscho.de-semantic_patch (Zscho.de Crawler, collecting for machine learning; http://zscho.de/)',0,'0000-00-00 00:00:00')
, (?,'nworm',1,'nWormFeedFinder (http://www.nworm.com)',0,'0000-00-00 00:00:00')
, (?,'Nymesis',1,'Nymesis/2.0 (http://nymesis.com)',0,'0000-00-00 00:00:00')
, (?,'oBot',1,'oBot',0,'0000-00-00 00:00:00')
, (?,'oBot',1,'Mozilla/4.0 (compatible; MSIE 5.5; Windows NT 4.0; obot)',0,'0000-00-00 00:00:00')
, (?,'oBot',1,'Mozilla/5.0 (compatible; oBot/2.3.1; +http://www-935.ibm.com/services/us/index.wss/detail/iss/a1029077?cntxt=a1027244)',0,'0000-00-00 00:00:00')
, (?,'oBot',1,'Mozilla/5.0 (compatible; oBot/2.3.1; +http://filterdb.iss.net/crawler/)',0,'0000-00-00 00:00:00')
, (?,'Ocelli',1,'Ocelli/1.4 (http://www.globalspec.com/Ocelli)',0,'0000-00-00 00:00:00')
, (?,'omgilibot',1,'omgilibot/0.4 +http://omgili.com',0,'0000-00-00 00:00:00')
, (?,'OmniExplorer_Bot',1,'OmniExplorer_Bot/4.02 (+http://www.omni-explorer.com) WorldIndexer',0,'0000-00-00 00:00:00')
, (?,'OmniExplorer_Bot',1,'OmniExplorer_Bot/4.06 (+http://www.omni-explorer.com) WorldIndexer',0,'0000-00-00 00:00:00')
, (?,'OmniExplorer_Bot',1,'OmniExplorer_Bot/6.47 (+http://www.omni-explorer.com) WorldIndexer',0,'0000-00-00 00:00:00')
, (?,'OnetSzukaj',1,'Mozilla/5.0 (compatible; OnetSzukaj/5.0; +http://szukaj.onet.pl)',0,'0000-00-00 00:00:00')
, (?,'OnetSzukaj',1,'Mozilla/5.0 (compatible; OnetSzukaj/5.0; +http://szukaj.onet.pl',0,'0000-00-00 00:00:00')
, (?,'OoyyoBot',1,'OoyyoBot (Used and new cars search engine;+http://www.ooyyo.com) ',0,'0000-00-00 00:00:00')
, (?,'Open Web Analytics Bot',1,'Open Web Analytics Bot 1.5.4',0,'0000-00-00 00:00:00')
, (?,'Openbot',1,'Openfind data gatherer, Openbot/3.0+(robot-response@openfind.com.tw;+http://www.openfind.com.tw/robot.html)',0,'0000-00-00 00:00:00')
, (?,'OpenCalaisSemanticProxy',1,'OpenCalaisSemanticProxy',0,'0000-00-00 00:00:00')
, (?,'OpenindexSpider',1,'Mozilla/5.0 (compatible; OpenindexDeepSpider/Nutch-1.5-dev; +http://openindex.io/spider.html; systemsATopenindexDOTio)',0,'0000-00-00 00:00:00')
, (?,'OpenindexSpider',1,'Mozilla/5.0 (compatible; OpenindexDeepSpider/Nutch-1.5-dev; +http://www.openindex.io/en/webmasters/spider.html; systemsATopenindexDOTio)',0,'0000-00-00 00:00:00')
, (?,'OpenindexSpider',1,'Mozilla/5.0 (compatible; OpenindexShallowSpider/Nutch-1.5-dev; +http://www.openindex.io/en/webmasters/spider.html; systemsATopenindexDOTio)',0,'0000-00-00 00:00:00')
, (?,'OpenindexSpider',1,'Mozilla/5.0 (compatible; OpenindexDeepSpider/Nutch-1.5-dev; +http://www.openindex.io/en/webmasters/spider.html)',0,'0000-00-00 00:00:00')
, (?,'OpenindexSpider',1,'Mozilla/5.0 (compatible; OpenindexShallowSpider/Nutch-1.5-dev; +http://www.openindex.io/en/webmasters/spider.html)',0,'0000-00-00 00:00:00')
, (?,'OpenindexSpider',1,'Mozilla/5.0 (compatible; OpenindexSpider/Nutch-1.5-dev; +http://www.openindex.io/en/webmasters/spider.html)',0,'0000-00-00 00:00:00')
, (?,'OpenindexSpider',1,'Mozilla/5.0 (compatible; OpenindexSpider; +http://www.openindex.io/en/webmasters/spider.html)',0,'0000-00-00 00:00:00')
, (?,'OpenWebSpider',1,'OpenWebSpider v0.1.2.B (http://www.openwebspider.org/)',0,'0000-00-00 00:00:00')
, (?,'OpenWebSpider',1,'OpenWebSpider v0.1.4 (http://www.openwebspider.org/)',0,'0000-00-00 00:00:00')
, (?,'Orbiter',1,'Orbiter (+http://www.dailyorbit.com/bot.htm)',0,'0000-00-00 00:00:00')
, (?,'OrgbyBot',1,'Orgbybot/OrgbyBot v1.2 (Spidering the net for Orgby; http://www.orgby.com/  ; Orgby.com Search Engine)',0,'0000-00-00 00:00:00')
, (?,'OrgbyBot',1,'Orgbybot/OrgbyBot v1.3 (Spider; http://orgby.com/bot/  ; Orgby.com Search Engine)',0,'0000-00-00 00:00:00')
, (?,'OsObot',1,'Mozilla/5.0 (compatible; OsO; http://oso.octopodus.com/abot.html)',0,'0000-00-00 00:00:00')
, (?,'ownCloud Server Crawler',1,'ownCloud Server Crawler',0,'0000-00-00 00:00:00')
, (?,'owsBot',1,'owsBot/0.1 (Nutch; www.oneworldstreet.com; nutch-agent@lucene.apache.org)',0,'0000-00-00 00:00:00')
, (?,'owsBot',1,'owsBot/0.2 (owsBot; www.oneworldstreet.com; owsBot)',0,'0000-00-00 00:00:00')
, (?,'Page2RSS',1,'Mozilla/5.0 (compatible;  Page2RSS/0.7; +http://page2rss.com/)',0,'0000-00-00 00:00:00')
, (?,'PageBitesHyperBot',1,'PageBitesHyperBot/600 (http://www.pagebites.com/)',0,'0000-00-00 00:00:00')
, (?,'PagePeeker',1,'PagePeeker.com',0,'0000-00-00 00:00:00')
, (?,'PagePeeker',1,'PagePeeker.com (info: http://pagepeeker.com/robots)',0,'0000-00-00 00:00:00')
, (?,'PagePeeker',1,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.21 (KHTML, like Gecko) Chrome/19.0.1042.0 Safari/535.21 PagePeeker/2.1; +http://pagepeeker.com/robots/',0,'0000-00-00 00:00:00')
, (?,'page_verifier',1,'page_verifier (http://www.securecomputing.com/goto/pv)',0,'0000-00-00 00:00:00')
, (?,'Panscient web crawler',1,'panscient.com',0,'0000-00-00 00:00:00')
, (?,'PaperLiBot',1,'Mozilla/5.0 (compatible; PaperLiBot/2.1; http://support.paper.li/entries/20023257-what-is-paper-li)',0,'0000-00-00 00:00:00')
, (?,'ParchBot',1,'Mozilla/5.0 (compatible;+ParchBot/1.0;++http://www.parchmenthill.com/search.htm)',0,'0000-00-00 00:00:00')
, (?,'parsijoo',1,'Mozilla/5.0 (compatible; parsijoo; +http://www.parsijoo.ir/; ehsan.mousakazemi@gmail.com)',0,'0000-00-00 00:00:00')
, (?,'PayPal IPN',1,'PayPal IPN ( https://www.paypal.com/ipn )',0,'0000-00-00 00:00:00')
, (?,'Peeplo Screenshot Bot',1,'Peeplo Screenshot Bot/0.20 ( abuse at peeplo dot_com )',0,'0000-00-00 00:00:00')
, (?,'Peepowbot',1,'Mozilla/5.0 (compatible; Peepowbot/1.0; +http://www.peepow.com/bot.php)',0,'0000-00-00 00:00:00')
, (?,'peerindex',1,'peerindex/0.1 (http://www.peerindex.com/; crawler AT peerindex DOT com)',0,'0000-00-00 00:00:00')
, (?,'Peew',1,'Mozilla/5.0 (compatible; Peew/1.0; http://www.peew.de/crawler/)',0,'0000-00-00 00:00:00')
, (?,'PercolateCrawler',1,'percbotspider <ops@percolate.com>',0,'0000-00-00 00:00:00')
, (?,'PercolateCrawler',1,'PercolateCrawler/3.1.30 (ops@percolate.com)',0,'0000-00-00 00:00:00')
, (?,'PercolateCrawler',1,'PercolateCrawler/4 (ops@percolate.com)',0,'0000-00-00 00:00:00')
, (?,'pingdom.com_bot',1,'Pingdom.com_bot_version_1.4_(http://www.pingdom.com/)',0,'0000-00-00 00:00:00')
, (?,'pingdom.com_bot',1,'Pingdom GIGRIB (http://www.pingdom.com)',0,'0000-00-00 00:00:00')
, (?,'Pinterest',1,'Pinterest/0.1 +http://pinterest.com/',0,'0000-00-00 00:00:00')
, (?,'PiplBot',1,'Mozilla/5.0+(compatible;+PiplBot;++http://www.pipl.com/bot/)',0,'0000-00-00 00:00:00')
, (?,'Pixray-Seeker',1,'Pixray-Seeker/1.1 (Pixray-Seeker; crawler@pixray.com)',0,'0000-00-00 00:00:00')
, (?,'Pixray-Seeker',1,'Pixray-Seeker/1.1 (Pixray-Seeker; http://www.pixray.com/pixraybot; crawler@pixray.com)',0,'0000-00-00 00:00:00')
, (?,'Pixray-Seeker',1,'Pixray-Seeker/2.0 (Pixray-Seeker; http://www.pixray.com/pixraybot; crawler@pixray.com)',0,'0000-00-00 00:00:00')
, (?,'Pixray-Seeker',1,'Pixray-Seeker/2.0 (http://www.pixray.com/pixraybot; crawler@pixray.com)',0,'0000-00-00 00:00:00')
, (?,'Plukkie',1,'Mozilla/5.0 (compatible; Plukkie/1.1; http://www.botje.com/plukkie.htm)',0,'0000-00-00 00:00:00')
, (?,'Plukkie',1,'Mozilla/5.0 (compatible; Plukkie/1.2; http://www.botje.com/plukkie.htm)',0,'0000-00-00 00:00:00')
, (?,'Plukkie',1,'Mozilla/5.0 (compatible; Plukkie/1.3; http://www.botje.com/plukkie.htm)',0,'0000-00-00 00:00:00')
, (?,'Plukkie',1,'Mozilla/5.0 (compatible; Plukkie/1.4; http://www.botje.com/plukkie.htm)',0,'0000-00-00 00:00:00')
, (?,'Plukkie',1,'Mozilla/5.0 (compatible; Plukkie/1.5; http://www.botje.com/plukkie.htm)',0,'0000-00-00 00:00:00')
, (?,'pmoz.info ODP link checker',1,'Mozilla/5.0 (compatible; pmoz.info ODP link checker; +http://pmoz.info/doc/botinfo.htm)',0,'0000-00-00 00:00:00')
, (?,'Pogodak.co.yu',1,'Mozilla/5.0 (compatible; Pogodak.co.yu/3.1)',0,'0000-00-00 00:00:00')
, (?,'polixea.de',1,'Mozilla/5.0 (compatible; polixea.de-Robot +http://www.polixea.de)',0,'0000-00-00 00:00:00')
, (?,'Pompos',1,'Pompos/1.3 http://dir.com/pompos.html',0,'0000-00-00 00:00:00')
, (?,'posterus',1,'posterus (seek.se) +http://www.seek.se/studio/index.php?id=47&t=details',0,'0000-00-00 00:00:00')
, (?,'PostPost',1,'PostPost/1.0 (+http://postpo.st/crawlers)',0,'0000-00-00 00:00:00')
, (?,'PostPost',1,'PostPost/1.0 (+http://postpost.com/crawlers)',0,'0000-00-00 00:00:00')
, (?,'ProCogBot',1,'Mozilla/5.0 (compatible; ProCogBot/1.0; +http://www.procog.com/spider.html)',0,'0000-00-00 00:00:00')
, (?,'ProCogSEOBot',1,'Mozilla/5.0 (compatible; ProCogSEOBot/1.0; +http://www.procog.com/ )',0,'0000-00-00 00:00:00')
, (?,'proximic',1,'Mozilla/5.0 (compatible; proximic; +http://www.proximic.com/info/spider.php)',0,'0000-00-00 00:00:00')
, (?,'psbot',1,'psbot/0.1 (+http://www.picsearch.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'psbot',1,'psbot-page (+http://www.picsearch.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Qirina Hurdler',1,'Qirina Hurdler v. 1.05 10.11.01 (+http://www.qirina.com/hurdler.html)',0,'0000-00-00 00:00:00')
, (?,'Qseero',1,'Qseero v1.0.0',0,'0000-00-00 00:00:00')
, (?,'Qseero',1,'Mozilla/5.0 (compatible; Qseero; +http://www.q0.com)',0,'0000-00-00 00:00:00')
, (?,'Qualidator.com Bot',1,'Mozilla/5.0 (compatible; Qualidator.com Bot 1.0;)',0,'0000-00-00 00:00:00')
, (?,'Qualidator.com SiteAnalyzer 1.0',1,'Mozilla/5.0 (compatible; Qualidator.com SiteAnalyzer 1.0;)',0,'0000-00-00 00:00:00')
, (?,'Quantcastbot',1,'Mozilla/5.0 (compatible; Quantcastbot/1.0; www.quantcast.com)',0,'0000-00-00 00:00:00')
, (?,'QuerySeekerSpider',1,'QuerySeekerSpider ( http://queryseeker.com/bot.html )',0,'0000-00-00 00:00:00')
, (?,'quickobot',1,'quickobot/quickobot-1 (Quicko Labs; http://quicko.co; robot at quicko dot co)',0,'0000-00-00 00:00:00')
, (?,'R6 bot',1,'R6_FeedFetcher(www.radian6.com/crawler)',0,'0000-00-00 00:00:00')
, (?,'R6 bot',1,'R6_CommentReader(www.radian6.com/crawler)',0,'0000-00-00 00:00:00')
, (?,'RADaR-Bot',1,'RADaR-Bot/Nutch-1.3 (http://radar-bot.com/)',0,'0000-00-00 00:00:00')
, (?,'RankurBot',1,'RankurBot/Rankur2.1 (http://rankur.com; info at rankur dot com)',0,'0000-00-00 00:00:00')
, (?,'Readability',1,'Readability/6a54d4 - http://readability.com/about/',0,'0000-00-00 00:00:00')
, (?,'RedBot',1,'RedBot/redbot-1.0 (Rediff.com Crawler; redbot at rediff dot com)',0,'0000-00-00 00:00:00')
, (?,'Robo Crawler',1,'Robo Crawler 6.4.5 (robocrawler@bb.softbank.co.jp)',0,'0000-00-00 00:00:00')
, (?,'Robots_Tester',1,'Robots_Tester_http_www.searchenginepromotionhelp.com',0,'0000-00-00 00:00:00')
, (?,'Robozilla',1,'Robozilla/1.0',0,'0000-00-00 00:00:00')
, (?,'rogerbot',1,'rogerbot/1.0 (http://www.seomoz.org/dp/rogerbot, rogerbot-crawler@seomoz.org)',0,'0000-00-00 00:00:00')
, (?,'rogerbot',1,'rogerbot/1.0 (http://www.seomoz.org/dp/rogerbot, rogerbot-crawler+shiny@seomoz.org)',0,'0000-00-00 00:00:00')
, (?,'rogerbot',1,'rogerbot/1.0 (http://www.seomoz.org/dp/rogerbot, rogerbot-wherecat@moz.com)',0,'0000-00-00 00:00:00')
, (?,'rogerbot',1,'Mozilla/5.0 (compatible; rogerBot/1.0; UrlCrawler; http://www.seomoz.org/dp/rogerbot)',0,'0000-00-00 00:00:00')
, (?,'rogerbot',1,'rogerbot/1.0 (http://moz.com/help/pro/what-is-rogerbot-, rogerbot-crawler+shiny@moz.com)',0,'0000-00-00 00:00:00')
, (?,'rogerbot',1,'rogerbot/1.0 (http://moz.com/help/pro/what-is-rogerbot-, rogerbot-wherecat@moz.com)',0,'0000-00-00 00:00:00')
, (?,'Ronzoobot',1,'Ronzoobot/1.3 (http://www.ronzoo.com/about.php)',0,'0000-00-00 00:00:00')
, (?,'Ronzoobot',1,'Ronzoobot/1.2 (http://www.ronzoo.com/about.php)',0,'0000-00-00 00:00:00')
, (?,'Ronzoobot',1,'Ronzoobot/1.5 (http://www.ronzoo.com/about/)',0,'0000-00-00 00:00:00')
, (?,'Ronzoobot',1,'Ronzoobot/1.6 (http://www.ronzoo.com/about/)',0,'0000-00-00 00:00:00')
, (?,'RSSMicro.com RSS/Atom Feed Robot',1,'RSSMicro.com RSS/Atom Feed Robot',0,'0000-00-00 00:00:00')
, (?,'Ruky-Roboter',1,'Ruky-Roboter (Version: 1.06, powered by www.ruky.de +http://www.ruky.de/bot.html)',0,'0000-00-00 00:00:00')
, (?,'RyzeCrawler',1,'RyzeCrawler/1.1.1 ( http://www.domain2day.nl/crawler/)',0,'0000-00-00 00:00:00')
, (?,'RyzeCrawler',1,'RyzeCrawler/1.1.1 (+http://www.domain2day.nl/crawler/)',0,'0000-00-00 00:00:00')
, (?,'SAI Crawler',1,'http://domino.research.ibm.com/comm/research_projects.nsf/pages/sai-crawler.callingcard.html',0,'0000-00-00 00:00:00')
, (?,'SanszBot',1,'SanszBot/1.7(http://www.sansz.org/sanszbot, spider@sansz.org) (spider@sansz.org)',0,'0000-00-00 00:00:00')
, (?,'SBIder',1,'SBIder/0.7 (SBIder; http://www.sitesell.com/sbider.html; http://support.sitesell.com/contact-support.html)',0,'0000-00-00 00:00:00')
, (?,'SBIder',1,'SBIder/0.8-dev (SBIder; http://www.sitesell.com/sbider.html; http://support.sitesell.com/contact-support.html)',0,'0000-00-00 00:00:00')
, (?,'SBIder',1,'SBIder/SBIder-0.8.2-dev (http://www.sitesell.com/sbider.html)',0,'0000-00-00 00:00:00')
, (?,'SBIder',1,'SBIder/Nutch-1.0-dev (http://www.sitesell.com/sbider.html)',0,'0000-00-00 00:00:00')
, (?,'SBSearch',1,'Mozilla/5.0 (compatible; SecretSerachEngineLabs.com-SBSearch/0.9; http://www.secretsearchenginelabs.com/secret-web-crawler.php)',0,'0000-00-00 00:00:00')
, (?,'Scarlett',1,'Mozilla/5.0 (compatible; Scarlett/ 1.0; +http://www.ellerdale.com/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'schibstedsokbot',1,'schibstedsokbot (compatible; Mozilla/5.0; MSIE 5.0; FAST FreshCrawler 6; +http://www.schibstedsok.no/bot/)',0,'0000-00-00 00:00:00')
, (?,'ScollSpider',1,'Mozilla/3.0 (compatible; ScollSpider; http://www.webwobot.com)',0,'0000-00-00 00:00:00')
, (?,'Scooter',1,'Scooter/3.3',0,'0000-00-00 00:00:00')
, (?,'ScoutJet',1,'Mozilla/5.0 (compatible; ScoutJet; +http://www.scoutjet.com/)',0,'0000-00-00 00:00:00')
, (?,'ScoutJet',1,'Mozilla/5.0 (compatible; ScoutJet; http://www.scoutjet.com/)',0,'0000-00-00 00:00:00')
, (?,'ScreenerBot Crawler',1,'ScreenerBot Crawler Beta 2.0 (+http://www.ScreenerBot.com)',0,'0000-00-00 00:00:00')
, (?,'Search Engine World Robots.txt Validator',1,'Search Engine World Robots.txt Validator at http://www.searchengineworld.com/cgi-bin/robotcheck.cgi',0,'0000-00-00 00:00:00')
, (?,'search.KumKie.com',1,'search.KumKie.com',0,'0000-00-00 00:00:00')
, (?,'Search17Bot',1,'Mozilla/5.0 (compatible; Search17Bot/1.1; http://www.search17.com/bot.php)',0,'0000-00-00 00:00:00')
, (?,'SearchmetricsBot',1,'Mozilla/5.0 (compatible; SearchmetricsBot; http://www.searchmetrics.com/en/searchmetrics-bot/)',0,'0000-00-00 00:00:00')
, (?,'SecurityResearchBot',1,'Mozilla/5.0 (compatible; SecurityResearch.bot; +http://besome1.info/securityresearchbot.html)',0,'0000-00-00 00:00:00')
, (?,'seegnifybot',1,'seegnifybot/1.0.0 (http://www.seegnify.com/bot)',0,'0000-00-00 00:00:00')
, (?,'seegnifybot',1,'seebot/1.0.0 (http://www.seegnify.com/bot)',0,'0000-00-00 00:00:00')
, (?,'Semager',1,'Mozilla/5.0 (compatible; Semager/1.4; http://www.semager.de/blog/semager-bots/)',0,'0000-00-00 00:00:00')
, (?,'Semager',1,'Mozilla/5.0 (compatible; Semager/1.4c; +http://www.semager.de/blog/semager-bots/)',0,'0000-00-00 00:00:00')
, (?,'Semantifire',1,'Semantifire1/0.20 ( http://www.setooz.com/oozbot.html ; agentname at setooz dot_com )',0,'0000-00-00 00:00:00')
, (?,'SemrushBot',1,'SemrushBot/0.9',0,'0000-00-00 00:00:00')
, (?,'SemrushBot',1,'SemrushBot/Nutch-1.5-SNAPSHOT',0,'0000-00-00 00:00:00')
, (?,'SemrushBot',1,'SemrushBot/0.91',0,'0000-00-00 00:00:00')
, (?,'SemrushBot',1,'SemrushBot/0.92',0,'0000-00-00 00:00:00')
, (?,'SemrushBot',1,'Mozilla/5.0 (compatible; SemrushBot/0.95; +http://www.semrush.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'SemrushBot',1,'Mozilla/5.0 (compatible; SemrushBot/0.96.2; +http://www.semrush.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'SemrushBot',1,'Mozilla/5.0 (compatible; SemrushBot/0.96.3; +http://www.semrush.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'SemrushBot',1,'Mozilla/5.0 (compatible; SemrushBot/0.97; +http://www.semrush.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'SemrushBot',1,'Mozilla/5.0 (compatible; SemrushBot/0.96.4; +http://www.semrush.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'SemrushBot',1,'Mozilla/5.0 (compatible; SemrushBot/0.97~bl; +http://www.semrush.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Sensis Web Crawler',1,'Sensis Web Crawler (search_comments\at\sensis\dot\com\dot\au)',0,'0000-00-00 00:00:00')
, (?,'Sensis Web Crawler',1,'Sensis Web Crawler (search_comments\\at\\sensis\\dot\\com\\dot\\au)',0,'0000-00-00 00:00:00')
, (?,'Seobility',1,'Urlstat (http://bit.ly/1dJuuzs)',0,'0000-00-00 00:00:00')
, (?,'Seobility',1,'Seobility (SEO-Check; http://bit.ly/1dJuuzs)',0,'0000-00-00 00:00:00')
, (?,'SeoCheckBot',1,'SeoCheckBot (FischerNetzDesign Seo Checker, info@fischernetzdesign.de)',0,'0000-00-00 00:00:00')
, (?,'SeoCheckBot',1,'SeoCheck (FischerNetzDesign Seo Checker, info@fischernetzdesign.de)',0,'0000-00-00 00:00:00')
, (?,'SeoCheckBot',1,'SeoCheckBot (Seo-Check, http://www.kfsw.de/bot.html)',0,'0000-00-00 00:00:00')
, (?,'SEODat',1,'Mozilla/5.0 (compatible; SEODat/0.1 http://crawler.seodat.com)',0,'0000-00-00 00:00:00')
, (?,'SEOENGBot',1,'SEOENGBot/1.2 (+http://learn.seoeng.com/seoengbot.htm)',0,'0000-00-00 00:00:00')
, (?,'SEOENGBot',1,'SEOENGBot/1.2 (+http://learn.seoengine.com/seoengbot.htm)',0,'0000-00-00 00:00:00')
, (?,'SEOENGBot',1,'SEOENGWorldBot/1.0 (+http://www.seoengine.com/seoengbot.htm)',0,'0000-00-00 00:00:00')
, (?,'SEOENGBot',1,'SEOENGBot/1.2 (+http://www.seoengine.com/seoengbot.htm)',0,'0000-00-00 00:00:00')
, (?,'SEOkicks-Robot',1,'Mozilla/5.0 (compatible; SEOkicks-Robot +http://www.seokicks.de/robot.html)',0,'0000-00-00 00:00:00')
, (?,'SEOkicks-Robot',1,'Mozilla/5.0 (compatible; SEOkicks-Robot; +http://www.seokicks.de/robot.html)',0,'0000-00-00 00:00:00')
, (?,'Setoozbot',1,'OOZBOT/0.20 ( Setooz vÃ½raznÃ½ ako say-th-uuz, znamenÃ¡ mosty.  ; http://www.setooz.com/oozbot.html ; agentname at setooz dot_com )',0,'0000-00-00 00:00:00')
, (?,'Setoozbot',1,'OOZBOT/0.20 ( -- ; http://www.setooz.com/oozbot.html ; agentname at setooz dot_com )',0,'0000-00-00 00:00:00')
, (?,'Setoozbot ',1,'OOZBOT/0.20 ( http://www.setooz.com/oozbot.html ; agentname at setooz dot_com )',0,'0000-00-00 00:00:00')
, (?,'Setoozbot',1,'Mozilla/5.0 ( compatible; SETOOZBOT/0.30 ; http://www.setooz.com/bot.html ; agentname at setooz dot_com )',0,'0000-00-00 00:00:00')
, (?,'Setoozbot',1,'Mozilla/5.0 ( compatible; SETOOZBOT/0.30 ; http://www.setooz.com/bot.html )',0,'0000-00-00 00:00:00')
, (?,'Setoozbot',1,'Setooz/Nutch-1.0 (http://www.setooz.com)',0,'0000-00-00 00:00:00')
, (?,'Setoozbot',1,'SETOOZBOT/5.0 ( compatible; SETOOZBOT/0.30 ; http://www.setooz.com/bot.html )',0,'0000-00-00 00:00:00')
, (?,'Setoozbot',1,'SETOOZBOT/5.0 ( http://www.setooz.com/bot.html )',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'Mozilla/5.0 (compatible; Seznam screenshot-generator 2.0; +http://fulltext.sblog.cz/screenshot/)',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'SeznamBot/2.0 (+http://fulltext.sblog.cz/robot/)',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'SeznamBot/2.0 (+http://fulltext.seznam.cz/)',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'SeznamBot/2.0-Test (+http://fulltext.sblog.cz/robot/)',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'SeznamBot/3.0-alpha (+http://fulltext.sblog.cz/)',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'SeznamBot/3.0-beta (+http://fulltext.sblog.cz/)',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'SeznamBot/3.0-beta (+http://fulltext.sblog.cz/), I',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'SeznamBot/3.0 (+http://fulltext.sblog.cz/)',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'SeznamBot/3.0-test (+http://fulltext.sblog.cz/)',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'SeznamBot/3.0-test (+http://fulltext.sblog.cz/), I',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'SeznamBot/3.0 (HaF+http://fulltext.sblog.cz/)',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'Mozilla/5.0 (compatible; SeznamBot/3.1-test1; +http://fulltext.sblog.cz/)',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'Mozilla/5.0 (compatible; Seznam screenshot-generator 2.1; +http://fulltext.sblog.cz/screenshot/)',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'Mozilla/5.0 (Linux; U; Android 4.1.2; cs-cz; Seznam screenshot-generator Build/Q3) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'Mozilla/5.0 (compatible; SeznamBot/3.2; +http://fulltext.sblog.cz/)',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'Mozilla/5.0 (compatible; SeznamBot/3.2-test1; +http://fulltext.sblog.cz/)',0,'0000-00-00 00:00:00')
, (?,'SeznamBot',1,'SklikBot/2.0 (sklik@firma.seznam.cz;+http://napoveda.sklik.cz/)',0,'0000-00-00 00:00:00')
, (?,'Shareaholicbot',1,'Mozilla/5.0 (compatible; Shareaholicbot/1.0; +http://www.shareaholic.com/bot)',0,'0000-00-00 00:00:00')
, (?,'Shelob',1,'Shelob (shelob@gmx.net)',0,'0000-00-00 00:00:00')
, (?,'Shim-Crawler',1,'Shim-Crawler(Mozilla-compatible; http://www.logos.ic.i.u-tokyo.ac.jp/crawler/; crawl@logos.ic.i.u-tokyo.ac.jp)',0,'0000-00-00 00:00:00')
, (?,'Shim-Crawler',1,'Shim-Crawler(Mozilla-compatible; http://www.logos.ic.i.u-tokyo.ac.jp/crawl/; crawl@logos.ic.i.u-tokyo.ac.jp)',0,'0000-00-00 00:00:00')
, (?,'ShopWiki',1,'ShopWiki/1.0 ( +http://www.shopwiki.com/wiki/Help:Bot)',0,'0000-00-00 00:00:00')
, (?,'ShowyouBot',1,'ShowyouBot (http://showyou.com/crawler)',0,'0000-00-00 00:00:00')
, (?,'silk',1,'Silk/1.0',0,'0000-00-00 00:00:00')
, (?,'silk',1,'silk/1.0 (+http://www.slider.com/silk.htm)/3.7',0,'0000-00-00 00:00:00')
, (?,'Sirketce/Busiverse',1,'Sirketcebot/v.01 (http://www.sirketce.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Sirketce/Busiverse',1,'Busiversebot/v1.0 (http://www.busiverse.com/bot.php)',0,'0000-00-00 00:00:00')
, (?,'sistrix',1,'Mozilla/5.0 (compatible; SISTRIX Crawler; http://crawler.sistrix.net/)',0,'0000-00-00 00:00:00')
, (?,'SiteCondor',1,'Mozilla/5.0 (compatible; SiteCondor; http://www.sitecondor.com)',0,'0000-00-00 00:00:00')
, (?,'Sitedomain-Bot',1,'Sitedomain-Bot(Sitedomain-Bot 1.0, http://www.sitedomain.de/sitedomain-bot/)',0,'0000-00-00 00:00:00')
, (?,'SkreemRBot',1,'Mozilla/5.0 (compatible; SkreemRBot +http://skreemr.com)',0,'0000-00-00 00:00:00')
, (?,'smart.apnoti.com Robot',1,'smart.apnoti.com Robot/v1.34 (http://smart.apnoti.com/en/aboutApnotiWebCrawler.html)',0,'0000-00-00 00:00:00')
, (?,'snap.com',1,'snap.com beta crawler v0',0,'0000-00-00 00:00:00')
, (?,'Snapbot',1,'Snapbot/1.0',0,'0000-00-00 00:00:00')
, (?,'Snapbot',1,'Snapbot/1.0 (+http://www.snap.com)',0,'0000-00-00 00:00:00')
, (?,'SnapBot',1,'Mozilla/5.0 (compatible; SnapPreviewBot; en-US; rv:1.8.0.9) Gecko/20061206 Firefox/1.5.0.9',0,'0000-00-00 00:00:00')
, (?,'Snapbot',1,'Snapbot/1.0 (Snap Shots, +http://www.snap.com)',0,'0000-00-00 00:00:00')
, (?,'Snapbot',1,'Snapbot/1.0 (Site Search Crawler, +http://www.snap.com)',0,'0000-00-00 00:00:00')
, (?,'Snappy',1,'Snappy/1.1 ( http://www.urltrends.com/ )',0,'0000-00-00 00:00:00')
, (?,'SniffRSS',1,'SniffRSS/0.5beta (+http://www.blogator.com/)',0,'0000-00-00 00:00:00')
, (?,'socialbm_bot',1,'Mozilla/5.0 (compatible; socialbm_bot/1.0; +http://spider.socialbm.net)',0,'0000-00-00 00:00:00')
, (?,'socialbm_bot',1,'socialbm_bot http://spider.socialbm.net',0,'0000-00-00 00:00:00')
, (?,'sogou spider',1,'Sogou web spider/4.0(+http://www.sogou.com/docs/help/webmasters.htm#07)',0,'0000-00-00 00:00:00')
, (?,'sogou spider',1,'Sogou develop spider/4.0(+http://www.sogou.com/docs/help/webmasters.htm#07)',0,'0000-00-00 00:00:00')
, (?,'sogou spider',1,'sogou spider',0,'0000-00-00 00:00:00')
, (?,'sogou spider',1,'sogou web spider http://www.sogou.com/docs/help/webmasters.htm#07',0,'0000-00-00 00:00:00')
, (?,'sogou spider',1,'sogou web spider(+http://www.sogou.com/docs/help/webmasters.htm#07)',0,'0000-00-00 00:00:00')
, (?,'sogou spider',1,'Sogou web spider/3.0(+http://www.sogou.com/docs/help/webmasters.htm#07)',0,'0000-00-00 00:00:00')
, (?,'sogou spider',1,'Sogou-Test-Spider/4.0 (compatible; MSIE 5.5; Windows 98)',0,'0000-00-00 00:00:00')
, (?,'sogou spider',1,'Sogou Web Spider',0,'0000-00-00 00:00:00')
, (?,'sogou spider',1,'Sogou web spider/4.0',0,'0000-00-00 00:00:00')
, (?,'sogou spider',1,'Sogou web spider/4.0l-2m!',0,'0000-00-00 00:00:00')
, (?,'SolomonoBot',1,'SolomonoBot/1.04 (http://www.solomono.ru)',0,'0000-00-00 00:00:00')
, (?,'Sosospider',1,'Sosospider+(+http://help.soso.com/webspider.htm)',0,'0000-00-00 00:00:00')
, (?,'Sosospider',1,'Mozilla/5.0(compatible; Sosospider/2.0; +http://help.soso.com/webspider.htm)',0,'0000-00-00 00:00:00')
, (?,'Sosospider',1,'Mozilla/5.0(compatible;Sosospider/2.0;+http://help.soso.com/webspider.htm)',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/2.0.3; +http://www.seoprofiler.com/bot/ )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/2.0.4; +http://www.seoprofiler.com/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/1.0; +http://www.seoprofiler.com/bot/ )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/2.1; +http://www.seoprofiler.com/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/3.0; +http://www.seoprofiler.com/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/1.1; +http://www.seoprofiler.com/bot/ )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/2.0; +http://www.seoprofiler.com/bot/ )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/1.2; +http://www.seoprofiler.com/bot/ )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/2.0.1; +http://www.seoprofiler.com/bot/ )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/2.0.2; +http://www.seoprofiler.com/bot/ )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/3.1; +http://www.seoprofiler.com/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/4.0a; +http://www.seoprofiler.com/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/4.0b; +http://www.seoprofiler.com/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/4.0.1; +http://www.seoprofiler.com/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/4.0; +http://www.seoprofiler.com/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/4.0.3; +http://www.seoprofiler.com/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/4.0.2; +http://www.seoprofiler.com/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/4.0.4; +http://www.seoprofiler.com/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/4.0.5; +http://www.seoprofiler.com/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/4.0.6; +http://www.seoprofiler.com/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/4.0.7; +http://OpenLinkProfiler.org/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/4.0.9; +http://OpenLinkProfiler.org/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/4.0.8; +http://OpenLinkProfiler.org/bot )',0,'0000-00-00 00:00:00')
, (?,'spbot',1,'Mozilla/5.0 (compatible; spbot/4.1.0; +http://OpenLinkProfiler.org/bot )',0,'0000-00-00 00:00:00')
, (?,'Speedy',1,'Speedy Spider (http://www.entireweb.com/about/search_tech/speedy_spider/)',0,'0000-00-00 00:00:00')
, (?,'Speedy',1,'Speedy Spider (Entireweb; Beta/1.2; http://www.entireweb.com/about/search_tech/speedyspider/)',0,'0000-00-00 00:00:00')
, (?,'Speedy',1,'Mozilla/5.0 (compatible; Speedy Spider; http://www.entireweb.com/about/search_tech/speedy_spider/)',0,'0000-00-00 00:00:00')
, (?,'Speedy',1,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) Speedy Spider (http://www.entireweb.com/about/search_tech/speedy_spider/)',0,'0000-00-00 00:00:00')
, (?,'Speedy',1,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) Speedy Spider for SpeedyAds (http://www.entireweb.com/about/search_tech/speedy_spider/)',0,'0000-00-00 00:00:00')
, (?,'Speedy',1,'Speedy Spider (Submit your site at http://www.entireweb.com/free_submission/)',0,'0000-00-00 00:00:00')
, (?,'SpiderLing',1,'Mozilla/5.0 (compatible; SpiderLing (a SPIDER for LINGustic research); http://nlp.fi.muni.cz/projects/biwec/)',0,'0000-00-00 00:00:00')
, (?,'SpiderLing',1,'Mozilla/5.0 (compatible; SpiderLing (a SPIDER for LINGustic research); +http://nlp.fi.muni.cz/projects/biwec/)',0,'0000-00-00 00:00:00')
, (?,'Spinn3r',1,'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.2.1; aggregator:Spinn3r (Spinn3r 3.1); http://spinn3r.com/robot) Gecko/20021130',0,'0000-00-00 00:00:00')
, (?,'Spinn3r',1,'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.0.19; aggregator:Spinn3r (Spinn3r 3.1); http://spinn3r.com/robot) Gecko/2010040121 Firefox/3.0.19',0,'0000-00-00 00:00:00')
, (?,'Spock Crawler',1,'Spock Crawler (http://www.spock.com/crawler)',0,'0000-00-00 00:00:00')
, (?,'SpokeSpider',1,'SpokeSpider/1.0 (http://support.spoke.com/webspider/) Mozilla/5.0 (not really)',0,'0000-00-00 00:00:00')
, (?,'sproose',1,'sproose/0.1-alpha (sproose crawler; http://www.sproose.com/bot.html; crawler@sproose.com)',0,'0000-00-00 00:00:00')
, (?,'sproose',1,'sproose/0.1 (sproose bot; http://www.sproose.com/bot.html; crawler@sproose.com)',0,'0000-00-00 00:00:00')
, (?,'Sproose',1,'sproose/1.0beta (sproose bot; http://www.sproose.com/bot.html; crawler@sproose.com)',0,'0000-00-00 00:00:00')
, (?,'SrevBot',1,'SrevBot/2.0 (SrevBot; http://winsrev.com/bot.html; bot@winsrev.com)',0,'0000-00-00 00:00:00')
, (?,'SrevBot',1,'SrevBot/1.2 (SrevBot; http://winsrev.com/bot.html; bot@winsrev.comg)',0,'0000-00-00 00:00:00')
, (?,'SSL-Crawler',1,'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36; SSL-Crawler: http://crawler.dcsec.uni-hannover.de',0,'0000-00-00 00:00:00')
, (?,'SSLBot',1,'Mozilla/5.0 (compatible; SSLBot/1.0;  http://www.sslstats.com/sslbot)',0,'0000-00-00 00:00:00')
, (?,'StackRambler',1,'StackRambler/2.0 (MSIE incompatible)',0,'0000-00-00 00:00:00')
, (?,'StatoolsBot',1,'StatoolsBot (+http://www.statools.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Steeler',1,'Steeler/3.2 (http://www.tkl.iis.u-tokyo.ac.jp/~crawler/)',0,'0000-00-00 00:00:00')
, (?,'Steeler',1,'Steeler/3.3 (http://www.tkl.iis.u-tokyo.ac.jp/~crawler/)',0,'0000-00-00 00:00:00')
, (?,'Steeler',1,'Mozilla/5.0 (compatible; Steeler/3.5; http://www.tkl.iis.u-tokyo.ac.jp/~crawler/)',0,'0000-00-00 00:00:00')
, (?,'Strokebot',1,'Stroke.cz (http://stroke.cz)',0,'0000-00-00 00:00:00')
, (?,'suggybot',1,'Mozilla/5.0 (compatible; suggybot v0.01a, http://blog.suggy.com/was-ist-suggy/suggy-webcrawler/)',0,'0000-00-00 00:00:00')
, (?,'Surphace Scout',1,'Surphace Scout&v4.0 - scout at surphace dot com',0,'0000-00-00 00:00:00')
, (?,'SurveyBot',1,'SurveyBot/2.3 (Whois Source)',0,'0000-00-00 00:00:00')
, (?,'SWEBot',1,'Mozilla/5.0 (compatible; SWEBot/1.0; +http://swebot.net)',0,'0000-00-00 00:00:00')
, (?,'SWEBot',1,'Mozilla/5.0 (compatible; SWEBot/1.0; +http://swebot-crawler.net)',0,'0000-00-00 00:00:00')
, (?,'SygolBot',1,'SygolBot http://www.sygol.com',0,'0000-00-00 00:00:00')
, (?,'Symfony Spider',1,'Symfony Spider (http://symfony.com/spider)',0,'0000-00-00 00:00:00')
, (?,'SynooBot',1,'SynooBot/0.7.1 (SynooBot; http://www.synoo.de/bot.html; webmaster@synoo.com)',0,'0000-00-00 00:00:00')
, (?,'SynooBot',1,'SynooBot (compatible; Synoobot/0.7.1; http://www.synoo.com/search/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Szukacz',1,'Szukacz/1.5 (robot; www.szukacz.pl/html/jak_dziala_robot.html; info@szukacz.pl)',0,'0000-00-00 00:00:00')
, (?,'Szukacz',1,'Szukacz/1.5 (robot; www.szukacz.pl/jakdzialarobot.html; info@szukacz.pl)',0,'0000-00-00 00:00:00')
, (?,'Szukankobot',1,'Szukankobot /1.0 (+http://www.szukanko.pl/addurl.php)',0,'0000-00-00 00:00:00')
, (?,'Tagoobot',1,'Mozilla/5.0 (compatible; Tagoobot/3.0; +http://www.tagoo.ru)',0,'0000-00-00 00:00:00')
, (?,'taptubot',1,'taptubot *** please read http://www.taptu.com/corp/taptubot ***',0,'0000-00-00 00:00:00')
, (?,'Technoratibot',1,'Technoratibot/7.0',0,'0000-00-00 00:00:00')
, (?,'Technoratibot',1,'Technoratibot/8.0',0,'0000-00-00 00:00:00')
, (?,'TeragramCrawler',1,'TeragramCrawler',0,'0000-00-00 00:00:00')
, (?,'textractor',1,'textractor.queuekeeper/0.1 (+http://ufal.mff.cuni.cz/project/textractor/, textractor@ufal.mff.cuni.cz)',0,'0000-00-00 00:00:00')
, (?,'textractor',1,'textractor.harvester/h7/1.0 (+http://ufal.mff.cuni.cz/project/textractor/, textractor@ufal.mff.cuni.cz)',0,'0000-00-00 00:00:00')
, (?,'textractor',1,'textractor.harvester/h3/1.0 (+http://ufal.mff.cuni.cz/project/textractor/, textractor@ufal.mff.cuni.cz)',0,'0000-00-00 00:00:00')
, (?,'textractor',1,'textractor.harvester/h2/1.0 (+http://ufal.mff.cuni.cz/project/textractor/, textractor@ufal.mff.cuni.cz)',0,'0000-00-00 00:00:00')
, (?,'textractor',1,'textractor.harvester/h27/1.0 (+http://ufal.mff.cuni.cz/project/textractor/, textractor@ufal.mff.cuni.cz)',0,'0000-00-00 00:00:00')
, (?,'textractor',1,'textractor.harvester/h24/1.0 (+http://ufal.mff.cuni.cz/project/textractor/, textractor@ufal.mff.cuni.cz)',0,'0000-00-00 00:00:00')
, (?,'textractor',1,'textractor.harvester/h5/1.0 (+http://ufal.mff.cuni.cz/project/textractor/, textractor@ufal.mff.cuni.cz)',0,'0000-00-00 00:00:00')
, (?,'textractor',1,'textractor.harvester/h39/1.0 (+http://ufal.mff.cuni.cz/project/textractor/, textractor@ufal.mff.cuni.cz)',0,'0000-00-00 00:00:00')
, (?,'textractor',1,'textractor.harvester/h37/1.0 (+http://ufal.mff.cuni.cz/project/textractor/, textractor@ufal.mff.cuni.cz)',0,'0000-00-00 00:00:00')
, (?,'textractor',1,'textractor.harvester/h38/1.0 (+http://ufal.mff.cuni.cz/project/textractor/, textractor@ufal.mff.cuni.cz)',0,'0000-00-00 00:00:00')
, (?,'textractor',1,'textractor.harvester/h12/1.0 (+http://ufal.mff.cuni.cz/project/textractor/, textractor@ufal.mff.cuni.cz)',0,'0000-00-00 00:00:00')
, (?,'textractor',1,'textractor.harvester/h34/1.0 (+http://ufal.mff.cuni.cz/project/textractor/, textractor@ufal.mff.cuni.cz)',0,'0000-00-00 00:00:00')
, (?,'Theophrastus',1,'Mozilla/5.0 (compatible; Theophrastus/2.0; +http://users.cs.cf.ac.uk/N.A.Smith/theophrastus.php)',0,'0000-00-00 00:00:00')
, (?,'Thumbnail.CZ robot',1,'Thumbnail.CZ robot 1.1 (http://thumbnail.cz/why-no-robots-txt.html)',0,'0000-00-00 00:00:00')
, (?,'ThumbShots-Bot',1,'ThumbShots-Bot (+http://thumbshots.in/bot.html)',0,'0000-00-00 00:00:00')
, (?,'thumbshots-de-Bot',1,'thumbshots-de-Bot (Version: 1.02, powered by www.thumbshots.de)',0,'0000-00-00 00:00:00')
, (?,'thumbshots-de-Bot',1,'thumbshots-de-bot (+http://www.thumbshots.de/)',0,'0000-00-00 00:00:00')
, (?,'Thumbshots.ru',1,'Mozilla/5.0 (compatible; Thumbshots.ru; +http://thumbshots.ru/bot) Firefox/3',0,'0000-00-00 00:00:00')
, (?,'ThumbSniper',1,'ThumbSniper (http://thumbsniper.com)',0,'0000-00-00 00:00:00')
, (?,'TinEye',1,'TinEye/1.0; +http://www.tineye.com/',0,'0000-00-00 00:00:00')
, (?,'TinEye',1,'TinEye/1.1 (http://tineye.com/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'TinEye',1,'TinEye-bot/0.02 (see http://www.tineye.com/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'TomTom places company search',1,'Mozilla/5.0 (compatible; heritrix/3.1.1 +http://places.tomtom.com/crawlerinfo)',0,'0000-00-00 00:00:00')
, (?,'Topicbot',1,'Mozilla/5.0 (compatible; Topicbot/12.0rc-2; +http://topicbot.awardspace.us/)',0,'0000-00-00 00:00:00')
, (?,'Toread-Crawler',1,'Mozilla/4.0 (Toread-Crawler/1.1; +http://news.toread.cc/crawler.php)',0,'0000-00-00 00:00:00')
, (?,'Touche',1,'Touche (+http://www.touche.com.ve)',0,'0000-00-00 00:00:00')
, (?,'trendictionbot',1,'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.0; trendictionbot0.4.2; trendiction media ssppiiddeerr; http://www.trendiction.com/bot/; please let us know of any problems; ssppiiddeerr at trendiction.com) Gecko/20071127 Firefox/2.0.0.11',0,'0000-00-00 00:00:00')
, (?,'trendictionbot ',1,'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.0; trendictionbot0.5.0; trendiction search; http://www.trendiction.de/bot; please let us know of any problems; web at trendiction.com) Gecko/20071127 Firefox/3.0.0.11',0,'0000-00-00 00:00:00')
, (?,'TurnitinBot',1,'TurnitinBot/2.0 (http://www.turnitin.com/robot/crawlerinfo.html)',0,'0000-00-00 00:00:00')
, (?,'TurnitinBot',1,'TurnitinBot/2.1 (http://www.turnitin.com/robot/crawlerinfo.html)',0,'0000-00-00 00:00:00')
, (?,'TurnitinBot',1,'TurnitinBot/3.0 (http://www.turnitin.com/robot/crawlerinfo.html)',0,'0000-00-00 00:00:00')
, (?,'TutorGigBot',1,'TutorGigBot/1.5 ( +http://www.tutorgig.info )',0,'0000-00-00 00:00:00')
, (?,'TwengaBot',1,'TwengaBot/1.1 (+http://www.twenga.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'TwengaBot',1,'TwengaBot-Discover (http://www.twenga.fr/bot-discover.html)',0,'0000-00-00 00:00:00')
, (?,'TwengaBot',1,'TwengaBot',0,'0000-00-00 00:00:00')
, (?,'Twiceler',1,'Mozilla/5.0 (Twiceler-0.9 http://www.cuil.com/twiceler/robot.html)',0,'0000-00-00 00:00:00')
, (?,'Twiceler',1,'Twiceler-0.9 http://www.cuill.com/twiceler/robot.html',0,'0000-00-00 00:00:00')
, (?,'Twikle',1,'Twikle/1.0 , http://twikle.com , contact@twikle.com',0,'0000-00-00 00:00:00')
, (?,'Twingly Recon',1,'Mozilla/5.0 (compatible; Twingly Recon; twingly.com)',0,'0000-00-00 00:00:00')
, (?,'UASlinkChecker',1,'Mozilla/5.0 (compatible; UASlinkChecker/1.0; +http://user-agent-string.info/UASlinkChecker)',0,'0000-00-00 00:00:00')
, (?,'uMBot',1,'Mozilla/5.0 (compatible; uMBot-FC/1.0; mailto: crawling@ubermetrics-technologies.com)',0,'0000-00-00 00:00:00')
, (?,'uMBot',1,'Mozilla/5.0 (compatible; uMBot-LN/1.0; mailto: crawling@ubermetrics-technologies.com)',0,'0000-00-00 00:00:00')
, (?,'UnisterBot',1,'Mozilla/5.0 (compatible; UnisterBot; crawler@unister.de)',0,'0000-00-00 00:00:00')
, (?,'UnwindFetchor',1,'UnwindFetchor/1.0 (+http://www.gnip.com/)',0,'0000-00-00 00:00:00')
, (?,'updated',1,'updated/0.1-beta (updated; http://www.updated.com; crawler@updated.com)',0,'0000-00-00 00:00:00')
, (?,'updated',1,'updated/0.1-alpha (updated crawler; http://www.updated.com; crawler@updated.com)',0,'0000-00-00 00:00:00')
, (?,'Updownerbot',1,'Updownerbot (+http://www.updowner.com/bot)',0,'0000-00-00 00:00:00')
, (?,'UptimeDog',1,'UptimeDog Robot (www.uptimedog.com)',0,'0000-00-00 00:00:00')
, (?,'UptimeRobot',1,'Mozilla/5.0 (compatible; UptimeRobot/1.0; http://www.uptimerobot.com/)',0,'0000-00-00 00:00:00')
, (?,'URLAppendBot',1,'Mozilla/5.0 (compatible; URLAppendBot/1.0; +http://www.profound.net/urlappendbot.html)',0,'0000-00-00 00:00:00')
, (?,'urlfan-bot',1,'urlfan-bot/1.0; +http://www.urlfan.com/site/bot/350.html',0,'0000-00-00 00:00:00')
, (?,'Urlfilebot (Urlbot)',1,'Mozilla/5.0 (compatible; Urlfilebot/2.2; +http://urlfile.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Vagabondo',1,'Vagabondo/3.0 (webagent at wise-guys dot nl)',0,'0000-00-00 00:00:00')
, (?,'Vagabondo',1,'Mozilla/4.0 (compatible;  Vagabondo/4.0Beta; webcrawler at wise-guys dot nl; http://webagent.wise-guys.nl/; http://www.wise-guys.nl/)',0,'0000-00-00 00:00:00')
, (?,'Vagabondo',1,'Mozilla/4.0 (compatible;  Vagabondo/4.0; http://webagent.wise-guys.nl/)',0,'0000-00-00 00:00:00')
, (?,'Vagabondo',1,'Mozilla/4.0 (compatible;  Vagabondo/4.0; webcrawler at wise-guys dot nl; http://webagent.wise-guys.nl/; http://www.wise-guys.nl/)',0,'0000-00-00 00:00:00')
, (?,'Vedma',1,'Mozilla/5.0 (Compatible; Vedma/0.91Beta; +http://www.vedma.ru/bot.htm)',0,'0000-00-00 00:00:00')
, (?,'VERASYS 2k',1,'VERASYS 2k Mozilla/4.0 (compatible; en) (compatible; MSIE 6.0; Windows NT 5.2; (+ http://web.verasys.ro); SV1; Unix; .NET CLR 1.1.4322)',0,'0000-00-00 00:00:00')
, (?,'Vermut',1,'Mozilla/5.0 (compatible; Vermut +http://vermut.aol.com)',0,'0000-00-00 00:00:00')
, (?,'Vespa Crawler',1,'Vespa Crawler',0,'0000-00-00 00:00:00')
, (?,'VideoSurf_bot',1,'Mozilla/5.0 (compatible; VideoSurf_bot +http://www.videosurf.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'virus_detector',1,'virus_detector (virus_harvester@securecomputing.com)',0,'0000-00-00 00:00:00')
, (?,'Visbot',1,'Visbot/1.1 (Visvo.com - The Category Search Engine!; http://www.visvo.com/bot.html; bot@visvo.com)',0,'0000-00-00 00:00:00')
, (?,'Visbot',1,'VisBot/2.0 (Visvo.com Crawler; http://www.visvo.com/bot.html; bot@visvo.com)',0,'0000-00-00 00:00:00')
, (?,'Visbot',1,'Visbot/2.0 (+http://www.visvo.com/en/webmasters.jsp;bot@visvo.com)',0,'0000-00-00 00:00:00')
, (?,'VMBot',1,'VMBot/0.7.2 (VMBot; http://www.VerticalMatch.com/; vmbot@tradedot.com)',0,'0000-00-00 00:00:00')
, (?,'VMBot',1,'VMBot/0.9 (VMBot; http://www.verticalmatch.com; vmbot@tradedot.com)',0,'0000-00-00 00:00:00')
, (?,'void-bot',1,'void-bot/0.1 (bot@void.be; http://www.void.be/)',0,'0000-00-00 00:00:00')
, (?,'VoilaBot',1,'Mozilla/4.0 (compatible; MSIE 5.0; Windows 95) VoilaBot BETA 1.2 (http://www.voila.com/)',0,'0000-00-00 00:00:00')
, (?,'VoilaBot',1,'Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.8.1) VoilaBot BETA 1.2 (support.voilabot@orange-ftgroup.com)',0,'0000-00-00 00:00:00')
, (?,'VoilaBot',1,'Mozilla/5.0 (Windows; U; Windows NT 5.1;fr;rv:1.8.1) VoilaBotCollector BETA 0.1  (http://www.voila.com/)',0,'0000-00-00 00:00:00')
, (?,'VoilaBot',1,'Mozilla/5.0 (Windows NT 5.1; U; Win64; fr; rv:1.8.1) VoilaBot BETA 1.2 (support.voilabot@orange-ftgroup.com)',0,'0000-00-00 00:00:00')
, (?,'VORTEX',1,'VORTEX/1.2 (+http://marty.anstey.ca/robots/vortex/)',0,'0000-00-00 00:00:00')
, (?,'voyager',1,'voyager/2.0 (http://www.kosmix.com/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'voyager',1,'voyager/1.0 (+http://www.kosmix.com/html/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'VWBot',1,'VWBOT/Nutch-0.9-dev (VWBOT Nutch Crawler; http://vwbot.cs.uiuc.edu; vwbot@cs.uiuc.edu)',0,'0000-00-00 00:00:00')
, (?,'WASALive-Bot',1,'Mozilla/5.0 (compatible; WASALive-Bot ; http://blog.wasalive.com/wasalive-bots/)',0,'0000-00-00 00:00:00')
, (?,'WatchMouse',1,'WatchMouse/18990 (http://watchmouse.com/ ; hk)',0,'0000-00-00 00:00:00')
, (?,'WatchMouse',1,'WatchMouse/18990 (http://watchmouse.com/ ; ny)',0,'0000-00-00 00:00:00')
, (?,'WatchMouse',1,'WatchMouse/18990 (http://watchmouse.com/ ; se.watchmouse.com)',0,'0000-00-00 00:00:00')
, (?,'WatchMouse',1,'WatchMouse/18990 (http://watchmouse.com/ ; it)',0,'0000-00-00 00:00:00')
, (?,'WatchMouse',1,'WatchMouse/18990 (http://watchmouse.com/ ; bc.watchmouse.com)',0,'0000-00-00 00:00:00')
, (?,'WatchMouse',1,'WatchMouse/18990 (http://watchmouse.com/ ; uk)',0,'0000-00-00 00:00:00')
, (?,'WatchMouse',1,'WatchMouse/18990 (http://watchmouse.com/ ; d2.watchmouse.com)',0,'0000-00-00 00:00:00')
, (?,'WatchMouse',1,'WatchMouse/18990 (http://watchmouse.com/ ; liz)',0,'0000-00-00 00:00:00')
, (?,'WatchMouse',1,'WatchMouse/18990 (http://watchmouse.com/ ; d3.watchmouse.com)',0,'0000-00-00 00:00:00')
, (?,'WatchMouse',1,'WatchMouse/18990 (http://watchmouse.com/ ; gab)',0,'0000-00-00 00:00:00')
, (?,'WBSearchBot',1,'Mozilla/5.0 (compatible; WBSearchBot/1.1; +http://www.warebay.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'Web-Monitoring',1,'Mozilla/5.0 (compatible; Web-Monitoring/1.0; +http://monoid.nic.ru/)',0,'0000-00-00 00:00:00')
, (?,'Web-sniffer',1,'Web-sniffer/1.0.31 (+http://web-sniffer.net/)',0,'0000-00-00 00:00:00')
, (?,'WebAlta Crawler',1,'WebAlta Crawler/1.3.33 (http://www.webalta.net/ru/about_webmaster.html) (Windows; U; Windows NT 5.1; ru-RU)',0,'0000-00-00 00:00:00')
, (?,'WebAlta Crawler',1,'WebAlta Crawler/1.3.34 (http://www.webalta.net/ru/about_webmaster.html) (Windows; U; Windows NT 5.1; ru-RU)',0,'0000-00-00 00:00:00')
, (?,'WebAlta Crawler',1,'WebAlta Crawler/1.3.25 (http://www.webalta.net/ru/about_webmaster.html) (Windows; U; Windows NT 5.1; ru-RU)',0,'0000-00-00 00:00:00')
, (?,'WebarooBot',1,'WebMiner (Web Miner; http://64.124.122.252/feedback.html)',0,'0000-00-00 00:00:00')
, (?,'WebarooBot',1,'RufusBot (Rufus Web Miner; http://64.124.122.252/feedback.html)',0,'0000-00-00 00:00:00')
, (?,'WebarooBot',1,'WebarooBot (Webaroo Bot; http://64.124.122.252/feedback.html)',0,'0000-00-00 00:00:00')
, (?,'WebarooBot',1,'WebarooBot (Webaroo Bot; http://www.webaroo.com/rooSiteOwners.html)',0,'0000-00-00 00:00:00')
, (?,'WebCookies',1,'WebCookies/1.0 (+http://webcookies.info/faq/#agent)',0,'0000-00-00 00:00:00')
, (?,'WebCorp',1,'Mozilla/5.0 (compatible; WebCorp/5.0; +http://www.webcorp.org.uk)',0,'0000-00-00 00:00:00')
, (?,'WebImages',1,'WebImages 0.3 ( http://herbert.groot.jebbink.nl/?app=WebImages )',0,'0000-00-00 00:00:00')
, (?,'webinatorbot',1,'webinatorbot 1.0; +http://www.webinator.de',0,'0000-00-00 00:00:00')
, (?,'webinatorbot',1,'webinatorbot 1.1; +http://www.webinator.de',0,'0000-00-00 00:00:00')
, (?,'webmastercoffee',1,'mozilla/5.0 (compatible; webmastercoffee/0.7; +http://webmastercoffee.com/about)',0,'0000-00-00 00:00:00')
, (?,'WebNL',1,'Mozilla/5.0 (compatible; WebNL; +http://www.web.nl/webmasters/spider.html; helpdesk@web.nl)',0,'0000-00-00 00:00:00')
, (?,'WebRankSpider',1,'WebRankSpider/1.37 (+http://ulm191.server4you.de/crawler/)',0,'0000-00-00 00:00:00')
, (?,'Webscope Crawler',1,'Webscope/Nutch-0.9-dev (http://www.cs.washington.edu/homes/mjc/agent.html)',0,'0000-00-00 00:00:00')
, (?,'WebThumbnail',1,'Mozilla/5.0 (compatible; WebThumbnail/3.x; Website Thumbnail Generator; +http://webthumbnail.org)',0,'0000-00-00 00:00:00')
, (?,'WebThumbnail',1,'Mozilla/5.0 (compatible; WebThumbnail/2.2; Website Thumbnail Generator; +http://webthumbnail.org)',0,'0000-00-00 00:00:00')
, (?,'WebWatch/Robot_txtChecker',1,'WebWatch/Robot_txtChecker',0,'0000-00-00 00:00:00')
, (?,'wectar',1,'wectar/Nutch-0.9 (wectar - wectar extracted from the glorious web; http://goosebumps4all.net/wectar)',0,'0000-00-00 00:00:00')
, (?,'wectar',1,'wectar/Nutch-0.9 (nectar extracted form the glorious web; http://goosebumps4all.net/wectar; see website)',0,'0000-00-00 00:00:00')
, (?,'WeSEE',1,'WeSEE:Search/0.1 (Alpha, http://www.wesee.com/en/support/bot/)',0,'0000-00-00 00:00:00')
, (?,'WeSEE',1,'WeSEE:Search',0,'0000-00-00 00:00:00')
, (?,'WeSEE',1,'WeSEE:Ads/PageBot (http://www.wesee.com/bot/)',0,'0000-00-00 00:00:00')
, (?,'WeSEE',1,'WeSEE',0,'0000-00-00 00:00:00')
, (?,'WeSEE',1,'WeSEE:Ads/PictureBot (http://www.wesee.com/bot/)',0,'0000-00-00 00:00:00')
, (?,'Whoismindbot',1,'Whoismindbot/1.0 (+http://www.whoismind.com/bot.html)',0,'0000-00-00 00:00:00')
, (?,'WikioFeedBot',1,'WikioFeedBot 1.0 (http://www.wikio.com)',0,'0000-00-00 00:00:00')
, (?,'wikiwix-bot',1,'wikiwix-bot-3.0',0,'0000-00-00 00:00:00')
, (?,'Willow Internet Crawler',1,'Willow Internet Crawler by Twotrees V2.1',0,'0000-00-00 00:00:00')
, (?,'WillyBot',1,'WillyBot/1.1 (http://www.willyfogg.com/info/willybot)',0,'0000-00-00 00:00:00')
, (?,'WinkBot',1,'WinkBot/0.06 (Wink.com search engine web crawler; http://www.wink.com/Wink:WinkBot; winkbot@wink.com)',0,'0000-00-00 00:00:00')
, (?,'WinWebBot',1,'WinWebBot/1.0; (Balaena Ltd, UK); http://www.balaena.com/winwebbot.html; winwebbot@balaena.com;)',0,'0000-00-00 00:00:00')
, (?,'WIRE',1,'WIRE/0.10 (Linux; i686; Bot,Robot,Spider,Crawler)',0,'0000-00-00 00:00:00')
, (?,'WIRE',1,'WIRE/0.11 (Linux; i686; Bot,Robot,Spider,Crawler,aromano@cli.di.unipi.it)',0,'0000-00-00 00:00:00')
, (?,'WIRE',1,'WIRE/0.11 (Linux; i686; Robot,Spider,Crawler,aromano@cli.di.unipi.it)',0,'0000-00-00 00:00:00')
, (?,'WMCAI_robot',1,'WMCAI-robot (http://www.topicmaster.jp/wmcai/crawler.html)',0,'0000-00-00 00:00:00')
, (?,'Woko',1,'Woko 3.0',0,'0000-00-00 00:00:00')
, (?,'Woko',1,'Woko robot 3.0',0,'0000-00-00 00:00:00')
, (?,'woriobot',1,'Mozilla/5.0 (compatible; woriobot +http://worio.com)',0,'0000-00-00 00:00:00')
, (?,'woriobot',1,'Mozilla/5.0 (compatible; woriobot support [at] zite [dot] com +http://zite.com)',0,'0000-00-00 00:00:00')
, (?,'Wotbox',1,'Wotbox/2.0 (bot@wotbox.com; http://www.wotbox.com)',0,'0000-00-00 00:00:00')
, (?,'Wotbox',1,'Wotbox/2.01 (+http://www.wotbox.com/bot/)',0,'0000-00-00 00:00:00')
, (?,'wsAnalyzer',1,'wsAnalyzer/1.0; ++http://www.wsanalyzer.com/bot.html',0,'0000-00-00 00:00:00')
, (?,'wscheck.com',1,'wscheck.com/1.0.0 (+http://wscheck.com/)',0,'0000-00-00 00:00:00')
, (?,'www.fi crawler',1,'www.fi crawler, contact crawler@www.fi',0,'0000-00-00 00:00:00')
, (?,'wwwster',1,'wwwster/1.4 (Beta, mailto:gue@cis.uni-muenchen.de)',0,'0000-00-00 00:00:00')
, (?,'x28-job-bot',1,'x28-job-bot; +http://x28.ch/bot.html',0,'0000-00-00 00:00:00')
, (?,'XmarksFetch',1,'Mozilla/5.0 (compatible; XmarksFetch/1.0; +http://www.xmarks.com/about/crawler; info@xmarks.com)',0,'0000-00-00 00:00:00')
, (?,'XML Sitemaps Generator',1,'XML Sitemaps Generator 1.0',0,'0000-00-00 00:00:00')
, (?,'XML Sitemaps Generator',1,'Mozilla/5.0 (compatible; XML Sitemaps Generator; http://www.xml-sitemaps.com) Gecko XML-Sitemaps/1.0',0,'0000-00-00 00:00:00')
, (?,'XRL',1,'XRL/3.00 (Linux; i686; en-us) (+http://metamark.net/about)',0,'0000-00-00 00:00:00')
, (?,'Yaanb',1,'Yaanb/1.5.001 (compatible; Win64;)',0,'0000-00-00 00:00:00')
, (?,'Yaanb',1,'Yaanb/1.5.001 (compatible; Win64;+http://www.yaanb.com/company/bot.hmtl)',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (i386 Linux 2.6.28-gentoo-r5; java 1.5.0_18; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (i386 Linux 2.6.28-11-generic; java 1.6.0_13; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (amd64 Linux 2.6.24-23-generic; java 1.6.0_07; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (x86 Windows Vista 6.1; java 1.6.0_13; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (i386 Linux 2.6.28-13-generic; java 1.6.0_13; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (amd64 Windows 7 6.1; java 1.6.0_14; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (i386 Linux 2.6.23; java 1.6.0_06; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (amd64 Linux 2.6.18-164.el5; java 1.6.0; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (i386 Linux 2.6.24-23-generic; java 1.6.0_16; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (i386 Linux 2.6.23; java 1.6.0_17; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (amd64 Linux 2.6.26-2-openvz-amd64; java 1.6.0_12; UTC/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (amd64 Linux 2.6.32-gentoo; java 1.6.0_17; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (x86 Windows 2003 5.2; java 1.6.0_16; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (i386 Linux 2.6.26-2-686; java 1.6.0_0; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (i386 Linux 2.6.30-2-686; java 1.6.0_0; SystemV/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (i386 Linux 2.6.31-18-generic; java 1.6.0_0; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (amd64 Windows 7 6.1; java 1.6.0_21; Europe/fr) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (amd64 Linux 2.6.31-22-server; java 1.6.0_18; Asia/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (i386 Linux 2.6.31-21-generic; java 1.6.0_0; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (amd64 Linux 2.6.28-18-generic; java 1.6.0_16; GMT/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (x86 Windows XP 5.1; java 1.6.0_18; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (amd64 Linux 2.6.26-2-amd64; java 1.6.0_0; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (i386 Linux 2.6.32-22-generic; java 1.6.0_20; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (x86 Windows 2003 5.2; java 1.6.0_20; America/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; i386 Linux 3.12-1-686-pae; java 1.7.0_21; Europe/fr) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (amd64 Linux 2.6.26-2-amd64; java 1.6.0_20; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (x86 Windows XP 5.1; java 1.6.0_21; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (amd64 Linux 2.6.18-164.15.1.el5xen; java 1.6.0_0; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (amd64 Windows 7 6.1; java 1.6.0_18; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 2.6.32-34-server; java 1.6.0_26; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows 7 6.1; java 1.6.0_29; Europe/fr) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.0.0-14-generic; java 1.6.0_23; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; i386 Linux 2.6.37.6-0.5-desktop; java 1.6.0_20; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (webportal/global; amd64 Linux 2.6.32-5-amd64; java 1.6.0_18; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 2.6.32-5-amd64; java 1.6.0_18; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.0.0-15-server; java 1.6.0_23; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.2.1-gentoo-r2; java 1.6.0_22; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.0.0-12-generic; java 1.6.0_26; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.2.1-gentoo-r2; java 1.6.0_24; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (webportal-global; amd64 Linux 2.6.32-5-amd64; java 1.6.0_18; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 2.6.32-5-amd64; java 1.6.0_18; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 2.6.26-2-amd64; java 1.6.0_18; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows Server 2008 6.0; java 1.7.0_03; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows 7 6.1; java 1.6.0_24; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 2.6.32-custom; java 1.6.0_26; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.1.10-hardened; java 1.7.0_03-icedtea; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; x86_64 Mac OS X 10.6.8; java 1.6.0_29; Asia/ru) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; i386 Linux 2.6.32-39-generic-pae; java 1.6.0_20; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; i386 Linux 3.0.0-17-generic-pae; java 1.6.0_23; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 2.6.32-5-amd64; java 1.6.0_26; Atlantic/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.0.0-17-generic; java 1.6.0_23; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.2.13-1-ARCH; java 1.7.0_03-icedtea; Europe/fr) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.0.0-17-generic; java 1.6.0_23; America/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 2.6.32-5-xen-amd64; java 1.6.0_18; Europe/fr) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; i386 Linux 3.0.0-17-generic; java 1.6.0_23; America/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; x86 Windows 7 6.1; java 1.6.0_31; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.2.0-23-generic; java 1.6.0_24; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows 7 6.1; java 1.6.0_31; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 2.6.32-40-server; java 1.6.0_20; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.1.10-1-desktop; java 1.6.0_22; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 2.6.38-14-generic; java 1.6.0_22; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.2.0-21-generic; java 1.7.0_03-icedtea; America/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.2.0-2-amd64; java 1.6.0_24; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 2.6.32-40-generic; java 1.6.0_20; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows Server 2008 R2 6.1; java 1.6.0_31; America/pt) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 2.6.38-8-generic; java 1.6.0_22; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.1.10-1.9-default; java 1.6.0_24; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 2.6.32-5-amd64; java 1.6.0_18; US/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows Server 2008 R2 6.1; java 1.6.0_29; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows 7 6.1; java 1.6.0_31; America/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.3.4-1-ARCH; java 1.6.0_24; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 2.6.32-41-server; java 1.6.0_26; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; i386 Linux 3.2.0-23-generic-pae; java 1.7.0_03; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; x86 Windows 2003 5.2; java 1.6.0_32; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.2.0-24-generic; java 1.6.0_24; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows 7 6.1; java 1.6.0_25; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.2.0-32-generic; java 1.6.0_24; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; i386 Linux 2.6.32-5-686; java 1.6.0_18; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows 7 6.1; java 1.6.0_23; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.2.0-3-amd64; java 1.6.0_24; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.5.0-27-generic; java 1.7.0_03; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; i386 Linux 3.4.2-linode44; java 1.6.0_27; America/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.8.0-21-generic; java 1.6.0_27; Pacific/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld-global; amd64 Linux 3.2.0-4-amd64; java 1.6.0_24; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.2.0-4-amd64; java 1.6.0_27; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld-global; amd64 Linux 3.2.0-35-generic; java 1.7.0_09; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows XP 5.2; java 1.7.0_04; America/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (webportal-global; amd64 Windows 7 6.1; java 1.7.0_04; America/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 2.6.32-49-server; java 1.6.0_27; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.8.0-23-generic; java 1.6.0_27; Pacific/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.8.13-gentoo; java 1.7.0_21; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows 7 6.1; java 1.7.0_09; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows 7 6.1; java 1.7.0_04; Asia/ja) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.8.0-19-generic; java 1.7.0_25; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows Server 2008 R2 6.1; java 1.7.0_25; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.2.0-4-amd64; java 1.7.0_03; Etc/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.5.0-27-generic; java 1.7.0_25; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows NT (unknown) 6.2; java 1.7.0_05; Africa/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (webportal-global; x86 Windows Vista 6.0; java 1.7.0_25; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows 7 6.1; java 1.7.0_25; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows 8 6.2; java 1.7.0_25; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.10.15-1-MANJARO; java 1.7.0_40; Asia/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.2.0-4-amd64; java 1.7.0_25; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld-global; amd64 Windows 7 6.1; java 1.7.0_02-ea; America/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; i386 Linux 3.2.0-23-generic; java 1.6.0_27; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Linux 3.10.17-gentoo; java 1.7.0_45; UTC/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows 7 6.1; java 1.7.0_45; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows Server 2012 6.2; java 1.7.0_25; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows Server 2012 6.2; java 1.7.0_51; Europe/de) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'yacybot',1,'yacybot (freeworld/global; amd64 Windows Server 2008 6.0; java 1.7.0_25; Europe/en) http://yacy.net/bot.html',0,'0000-00-00 00:00:00')
, (?,'Yahoo!',1,'Mozilla/5.0 (compatible; Yahoo! Slurp; http://help.yahoo.com/help/us/ysearch/slurp)',0,'0000-00-00 00:00:00')
, (?,'Yahoo!',1,'Mozilla/5.0 (compatible; Yahoo! Slurp China; http://misc.yahoo.com.cn/help.html)',0,'0000-00-00 00:00:00')
, (?,'Yahoo!',1,'Mozilla/5.0 (compatible; Yahoo! Slurp/3.0; http://help.yahoo.com/help/us/ysearch/slurp)',0,'0000-00-00 00:00:00')
, (?,'Yahoo!',1,'Y!J-BRI/0.0.1 crawler ( http://help.yahoo.co.jp/help/jp/search/indexing/indexing-15.html )',0,'0000-00-00 00:00:00')
, (?,'Yahoo!',1,'Y!J-BSC/1.0 (http://help.yahoo.co.jp/help/jp/blog-search/)',0,'0000-00-00 00:00:00')
, (?,'Yahoo!',1,'Mozilla/5.0 (Yahoo-MMCrawler/4.0; mailto:vertical-crawl-support@yahoo-inc.com)',0,'0000-00-00 00:00:00')
, (?,'Yahoo!',1,'Yahoo! Site Explorer Feed Validator http://help.yahoo.com/l/us/yahoo/search/siteexplorer/manage/',0,'0000-00-00 00:00:00')
, (?,'Yahoo!',1,'Y!J-BRO/YFSJ crawler (compatible; Mozilla 4.0; MSIE 5.5; http://help.yahoo.co.jp/help/jp/search/indexing/indexing-15.html; YahooFeedSeekerJp/2.0)',0,'0000-00-00 00:00:00')
, (?,'Yahoo!',1,'Y!J-BRW/1.0 crawler (http://help.yahoo.co.jp/help/jp/search/indexing/indexing-15.html)',0,'0000-00-00 00:00:00')
, (?,'Yahoo!',1,'Y!J-BRJ/YATS crawler (http://listing.yahoo.co.jp/support/faq/int/other/other_001.html)',0,'0000-00-00 00:00:00')
, (?,'Yahoo!',1,'Y!J-BSC/1.0 crawler (http://help.yahoo.co.jp/help/jp/blog-search/)',0,'0000-00-00 00:00:00')
, (?,'Yahoo!',1,'Y!J-BRJ/YATS crawler (http://help.yahoo.co.jp/help/jp/search/indexing/indexing-15.html)',0,'0000-00-00 00:00:00')
, (?,'Yahoo!',1,'YahooCacheSystem',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Yandex/1.01.001 (compatible; Win16; I)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Yandex/1.01.001 (compatible; Win16; P)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'YandexSomething/1.0',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Yandex/1.01.001 (compatible; Win16; H)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Yandex/1.01.001 (compatible; Win16; m)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexImages/3.0; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexBot/3.0; MirrorDetector; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexWebmaster/2.0; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexMedia/3.0; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexNews/3.0; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexMetrika/2.0; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexCatalog/3.0; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexDirect/3.0; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexImageResizer/2.0; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Yandex.Server/2009.5',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Yandex.Server/2010.9',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexFavicons/1.0; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexAntivirus/2.0; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexVideo/3.0; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexMedia/3.0; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexBlogs/0.99; robot; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'YandexBot',1,'Mozilla/5.0 (compatible; YandexZakladki/3.0; +http://yandex.com/bots)',0,'0000-00-00 00:00:00')
, (?,'Yanga',1,'Yanga WorldSearch Bot v1.1/beta (http://www.yanga.co.uk/)',0,'0000-00-00 00:00:00')
, (?,'YioopBot',1,'Mozilla/5.0 (compatible; YioopBot; +http://www.yioop.com/bot.php)',0,'0000-00-00 00:00:00')
, (?,'YioopBot',1,'Mozilla/5.0 (compatible; gofind; +http://govid.mobi/bot.php)',0,'0000-00-00 00:00:00')
, (?,'YioopBot',1,'Mozilla/5.0 (compatible; YioopBot; +http://173.13.143.74/bot.php)',0,'0000-00-00 00:00:00')
, (?,'YodaoBot',1,'YodaoBot/1.0 (http://www.yodao.com/help/webmaster/spider/; )',0,'0000-00-00 00:00:00')
, (?,'YodaoBot',1,'Mozilla/5.0 (compatible; YodaoBot/1.0; http://www.yodao.com/help/webmaster/spider/; )',0,'0000-00-00 00:00:00')
, (?,'YodaoBot',1,'Mozilla/5.0 (compatible;YodaoBot-Image/1.0;http://www.youdao.com/help/webmaster/spider/;)',0,'0000-00-00 00:00:00')
, (?,'Yoono Bot',1,'Mozilla/5.0 (compatible; Yoono; http://www.yoono.com/)',0,'0000-00-00 00:00:00')
, (?,'YoudaoBot',1,'Mozilla/5.0 (compatible; YoudaoBot/1.0; http://www.youdao.com/help/webmaster/spider/; )',0,'0000-00-00 00:00:00')
, (?,'YowedoBot',1,'YowedoBot/Yowedo 1.0 (Search Engine crawler for yowedo.com; http://yowedo.com/en/partners.html; crawler@yowedo.com)',0,'0000-00-00 00:00:00')
, (?,'YRSpider',1,'yrspider (Mozilla/5.0 (compatible; YRSpider; +http://www.yunrang.com/yrspider.html))',0,'0000-00-00 00:00:00')
, (?,'YYSpider',1,'Mozilla/5.0 (compatible; YYSpider; +http://www.yunyun.com/spider.html)',0,'0000-00-00 00:00:00')
, (?,'ZACATEK_CZ',1,'ZACATEK_CZ_BOT (www.zacatek.cz)',0,'0000-00-00 00:00:00')
, (?,'ZeerchBot',1,'Mozilla/5.0 (compatible; ZB-1; +http://www.zeerch.com/bot.php)',0,'0000-00-00 00:00:00')
, (?,'Zeusbot',1,'Zeusbot/0.07',0,'0000-00-00 00:00:00')
, (?,'ZookaBot',1,'Zookabot/2.1;++http://zookabot.com',0,'0000-00-00 00:00:00')
, (?,'Zookabot',1,'Zookabot/2.0;++http://zookabot.com',0,'0000-00-00 00:00:00')
, (?,'Zookabot',1,'Zookabot/2.2;++http://zookabot.com',0,'0000-00-00 00:00:00')
, (?,'Zookabot',1,'Zookabot/2.4;++http://zookabot.com',0,'0000-00-00 00:00:00')
, (?,'Zookabot',1,'Zookabot/2.5;++http://zookabot.com',0,'0000-00-00 00:00:00')
, (?,'ZoomSpider (ZSEBOT)',1,'ZoomSpider - wrensoft.com [ZSEBOT]',0,'0000-00-00 00:00:00')
, (?,'ZumBot',1,'ZumBot/1.0 (ZUM Search; http://help.zum.com/inquiry)',0,'0000-00-00 00:00:00')
, (?,'ZumBot',1,'Mozilla/5.0 (compatible; ZumBot/1.0; http://help.zum.com/inquiry)',0,'0000-00-00 00:00:00')
, (?,'ZyBorg',1,'Mozilla/4.0 compatible ZyBorg/1.0 Dead Link Checker (wn.dlc@looksmart.net; http://www.WISEnutbot.com)',0,'0000-00-00 00:00:00')
, (?,'ZyBorg',1,'Mozilla/4.0 compatible ZyBorg/1.0 (wn-14.zyborg@looksmart.net; http://www.WISEnutbot.com)',0,'0000-00-00 00:00:00')
, (?,'ZyBorg',1,'Mozilla/4.0 compatible ZyBorg/1.0 (wn-16.zyborg@looksmart.net; http://www.WISEnutbot.com)',0,'0000-00-00 00:00:00')
, (?,'^Nail',1,'^Nail (http://CaretNail.com)',0,'0000-00-00 00:00:00')
, (?,'2Bone LinkChecker',1,'2Bone_LinkChecker/1.0 libwww-perl/5.803',0,'0000-00-00 00:00:00')
, (?,'A1 Website Analyzer',1,'A1 Website Analyzer/3.2.2 (+http://www.microsystools.com/products/website-analyzer/) miggibot',0,'0000-00-00 00:00:00')
, (?,'A1 Website Analyzer',1,'A1 Website Analyzer/3.1.3 (+http://www.microsystools.com/products/website-analyzer/) miggibot',0,'0000-00-00 00:00:00')
, (?,'A1 Website Analyzer',1,'A1 Website Analyzer/5.0.4 (+http://www.microsystools.com/products/website-analyzer/) miggibot',0,'0000-00-00 00:00:00')
, (?,'anw HTMLChecker',1,'topSUBMIT.de HTMLChecker/1.1',0,'0000-00-00 00:00:00')
, (?,'anw LoadControl',1,'anw webtool LoadControl/1.3',0,'0000-00-00 00:00:00')
, (?,'Checkbot',1,'Checkbot/1.76',0,'0000-00-00 00:00:00')
, (?,'Checkbot',1,'Checkbot/1.80 LWP/5.80',0,'0000-00-00 00:00:00')
, (?,'CSE HTML Validator',1,'CSE HTML Validator Lite Online (http://online.htmlvalidator.com/php/onlinevallite.php)',0,'0000-00-00 00:00:00')
, (?,'Cynthia',1,'Cynthia 1.0',0,'0000-00-00 00:00:00')
, (?,'FeedValidator',1,'FeedValidator/1.3',0,'0000-00-00 00:00:00')
, (?,'HTMLParser',1,'HTMLParser/1.6',0,'0000-00-00 00:00:00')
, (?,'LinkChecker',1,'LinkChecker/4.9 ( http://linkchecker.sourceforge.net/)',0,'0000-00-00 00:00:00')
, (?,'LinkChecker',1,'LinkChecker/5.1 ( http://linkchecker.sourceforge.net/)',0,'0000-00-00 00:00:00')
, (?,'LinkChecker',1,'LinkChecker/7.4 (+http://linkchecker.sourceforge.net/)',0,'0000-00-00 00:00:00')
, (?,'LinkChecker',1,'LinkChecker/8.0 (+http://linkchecker.sourceforge.net/)',0,'0000-00-00 00:00:00')
, (?,'LinkChecker',1,'Mozilla/5.0 (compatible; LinkChecker/8.6; +http://wummel.github.io/linkchecker/)',0,'0000-00-00 00:00:00')
, (?,'LinkExaminer',1,'LinkExaminer/1.00 (Windows)',0,'0000-00-00 00:00:00')
, (?,'LinkExaminer',1,'LinkExaminer/1.01 (Windows)',0,'0000-00-00 00:00:00')
, (?,'LinkWalker',1,'LinkWalker/2.0 - www.seventwentyfour.com/',0,'0000-00-00 00:00:00')
, (?,'Multipage Validator',1,'W3C_Multipage_Validator/2.0 (+http://www.validator.ca/)',0,'0000-00-00 00:00:00')
, (?,'P3P Validator',1,'P3P Validator',0,'0000-00-00 00:00:00')
, (?,'PHP link checker',1,'FPLinkChecker/1.2',0,'0000-00-00 00:00:00')
, (?,'REL Link Checker Lite',1,'REL Link Checker Lite 1.0',0,'0000-00-00 00:00:00')
, (?,'Screaming Frog SEO Spider',1,'Screaming Frog SEO Spider/2.21',0,'0000-00-00 00:00:00')
, (?,'Screaming Frog SEO Spider',1,'Screaming Frog SEO Spider/2.22',0,'0000-00-00 00:00:00')
, (?,'Validator.nu',1,'Validator.nu/3',0,'0000-00-00 00:00:00')
, (?,'Validator.nu',1,'Validator.nu/LV',0,'0000-00-00 00:00:00')
, (?,'W3C Checklink',1,'W3C-checklink/4.2.1 [4.21] libwww-perl/5.803',0,'0000-00-00 00:00:00')
, (?,'W3C Checklink',1,'W3C-checklink/3.6.2.3 libwww-perl/5.64',0,'0000-00-00 00:00:00')
, (?,'W3C CSS Validator',1,'Jigsaw/2.2.5 W3C_CSS_Validator_JFouffa/2.0',0,'0000-00-00 00:00:00')
, (?,'W3C mobileOK Checker',1,'W3C-mobileOK/DDC-1.0 (see http://www.w3.org/2006/07/mobileok-ddc)',0,'0000-00-00 00:00:00')
, (?,'W3C Validator',1,'W3C_Validator/1.654',0,'0000-00-00 00:00:00')
, (?,'W3C Validator',1,'W3C_Validator/1.432.2.22',0,'0000-00-00 00:00:00')
, (?,'WDG CSSCheck',1,'CSSCheck/1.2.2',0,'0000-00-00 00:00:00')
, (?,'WDG Page Valet',1,'Page Valet/4.1pre5',0,'0000-00-00 00:00:00')
, (?,'WDG Validator',1,'WDG_Validator/1.6.4',0,'0000-00-00 00:00:00')
, (?,'WDG Validator',1,'WDG_Validator/1.1',0,'0000-00-00 00:00:00')
, (?,'Xenu',1,'Xenu Link Sleuth 1.2d',0,'0000-00-00 00:00:00')
, (?,'Xenu',1,'Xenu Link Sleuth/1.3.8',0,'0000-00-00 00:00:00')
, (?,'GomezAgent',1,'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:13.0; GomezAgent 3.0) Gecko/20100101 Firefox/13.0.1',0,'0000-00-00 00:00:00')
, (?,'Amazon CloudFront',1,'Amazon CloudFront',0,'0000-00-00 00:00:00')
, (?,'TwitterBot',1,'Twitterbot/1.0',0,'0000-00-00 00:00:00')";		     
				Db::query($query3,$params3);
			}
		}
		// Create extendet_stats_table
		$query4 =  'CREATE TABLE IF NOT EXISTS `'.Common::prefixTable('bot_db_stat').'`
(
			 			`botId` INTEGER(10) UNSIGNED NOT NULL,
			 			`idsite` INTEGER(10) UNSIGNED NOT NULL,
			 			`page` VARCHAR(100) NOT NULL,
			 			`visit_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
			 			`useragent` VARCHAR(100) NOT NULL,
			 
			 			PRIMARY KEY(`botId`,`visit_timestamp`)
)  DEFAULT CHARSET=utf8';
		Db::query($query4);
	}
	
	public function uninstall()
	{
		$query = "DROP TABLE `".Common::prefixTable('bot_db')."` ";
		Db::query($query);
		$query2 = "DROP TABLE `".Common::prefixTable('bot_db_stat')."` ";
		Db::query($query2);
	}
	
	public function getListHooksRegistered()
	{
		return array(
			'Tracker.isExcludedVisit'  => 'checkBot',
			'WidgetsList.addWidgets'   => 'addWidget',
			'Menu.Reporting.addItems'  => 'addMenu',
			'Menu.Admin.addItems'      => 'addConfigMenu'
		);
	}
	function addWidget()
	{
		WidgetsList::add('BotTracker_Widgets', 'BotTracker_DisplayWidget', 'BotTracker', 'displayWidget');
	}
	
	function addMenu()
	{
		MenuMain::getInstance()->add('General_Visitors', 'BotTracker', array('module' => 'BotTracker', 'action' => 'getBotTrackerPage'), true, 30);
	}
	
	public function addConfigMenu() {
		
		MenuAdmin::addEntry(
				'BotTracker',
				array('module' => 'BotTracker', 'action' => 'config'),
				Piwik::isUserHasSomeAdminAccess(),
				$order = 9
		);
	}


	function checkBot(&$exclude)
	{
		$ua = $_SERVER['HTTP_USER_AGENT'];
		$idSite = $_REQUEST['idsite'];
		$currentTimestamp = date("Y-m-d H:i:s");
		$currentUrl = $_REQUEST['url'];
		
		BotTracker::logToFile('SiteID:'.$idSite.' user Agent: '.$ua.' TS:'.$currentTimestamp.' page:'.$currentUrl);
		
		$db = Tracker::getDatabase();
		$result = $db->fetchRow("SELECT `botId`, `extra_stats` FROM ".Common::prefixTable('bot_db')."
		                        WHERE `botActive` = 1 
		                        AND   `idSite` = ?
		                        AND   LOCATE(`botKeyword`,?) >0
            LIMIT 1", array($idSite, $ua));

		$botId = $result['botId'];
		if ($botId > 0 ){
			BotTracker::logToFile('SiteID:'.$idSite.' found Bot: '.$botId);

			$db->query("UPDATE `".Common::prefixTable('bot_db')."` 
			               SET botCount = botCount + 1
			                 , botLastVisit = ?
			             WHERE botId = ?", array($currentTimestamp, $botId));

			$exclude = true;

			if ($result['extra_stats'] > 0){
				$query = "INSERT INTO `".Common::prefixTable('bot_db_stat')."` 
					(idsite, botid, page, visit_timestamp, useragent) VALUES (?,?,?,?,?)";
				$params = array($idSite,$botId,$currentUrl,$currentTimestamp,$ua);
				$db->query($query,$params);
			}
		}
	}


	public function logToFile($msg)
	{ 
		$logActive = false;
		
		if ($logActive){
			$pfad = "tmp/logs/";
			$filename = "log.txt";
			// open file
			$fd = fopen($pfad.$filename, "a");
			// append date/time to message
	    		if(is_array($msg))
	    		{
	  			$str = "[" . date("Y/m/d H:i:s", time()) . "] " . var_export($msg,true);
	    		} else {
				$str = "[" . date("Y/m/d H:i:s", time()) . "] " . $msg; 
			}
			// write string
			fwrite($fd, $str . "\n");
			// close file
			fclose($fd);
		}
	}
	
}
