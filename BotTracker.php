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
		$query = file_get_contents('misc/sql/bottbl.sql');
		
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
				$params3 = array_fill(0, 1380, $site['idsite']);
				$query3 = file_get_contents('misc/sql/bots.sql');		     
				Db::query($query3,$params3);
			}
		}
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
