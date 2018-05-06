<?php
/**
 * @package   	Egolt Project Publisher
 * @link 		http://www.egolt.com
 * @copyright 	Copyright (C) Egolt www.egolt.com
 * @author    	Soheil Novinfard
 * @license    	GNU/GPL 2
 *
 * Name:			Egolt Project Publisher
 * License:    		GNU/GPL 2
 * Project Page: 	http://www.egolt.com/products/egoltproject
 */

// Set flag that this is a parent file
define('_JEXEC', 1);

// No direct access.
defined('_JEXEC') or die;

define( 'DS', DIRECTORY_SEPARATOR );

define('JPATH_BASE', dirname(__FILE__) .DS. '..' .DS. '..' );

// require_once ( 'get_range.php' );
require_once ( JPATH_BASE .DS.'includes'.DS.'defines.php' );
require_once ( JPATH_BASE .DS.'includes'.DS.'framework.php' );

jimport('joomla.database.database');
jimport('joomla.database.table');

$app = JFactory::getApplication('site');
$app->initialise();

$user = JFactory::getUser();
$db	= JFactory::getDBO();

$disable = JFactory::getUser()->authorise('core.admin') ? true : false;

if (!$user->guest or $disable) {
	// Build the related content query.
	$query	= $db->getQuery(true);
	$query->select($db->nameQuote('fulltext'));
	$query->from($db->nameQuote('#__content'));
	$query->where($db->nameQuote('fulltext') . ' like \'%{mp4}' . JRequest::getVar('name') . '{/mp4}%\'' );
	$db->setQuery($query);
	$content = $db->loadObject();

	// set level
	if (preg_match('#level\s?=\s?"(.+?)"#', $content->fulltext, $get_level))
	{
		$get_level = ( isset($get_level) ? strtolower($get_level[1]) : '' );
	} 
	else
	{
		die();
	}
	$get_level_array = explode(':', $get_level);

	// Build the levels query.
	$query	= $db->getQuery(true);
	$query->select('title');
	$query->from($db->nameQuote('#__viewlevels'));
	$query->where($db->nameQuote('id') . ' IN(' . implode(',', $user->getAuthorisedViewLevels()) . ')');
		
	// Set the query for execution.
	$db->setQuery((string) $query);
					
	$result_array = (array) $db->loadResultArray();
	$result_array = array_map('strtolower', $result_array);
					
	if (array_intersect($result_array, $get_level_array) or $disable)
	{
		$rightaccess = true;
	} 
	else
	{
		$rightaccess = false;
	}

	if($rightaccess) {
		if($name = JRequest::getVar('name'))
			$file = JPATH_BASE .DS. 'media' .DS. 'videos' .DS. $name . '.mp4';
		else
			$file = '';

		if (file_exists($file))
		{
			header('Last-Modified:	Thu, 23 Sep 2010 02:00:02 GMT');
			header('ETag:	"c0101-309f8-490e39ebcec80"');
			header('Accept-Ranges:	bytes');
			header('Content-Length:	' . filesize($file));
			header('Connection:	close');
			header('Content-Type:	video/mp4');
			header('X-Pad:	avoid browser bug');
			ob_clean();
			flush();
			readfile($file);	
			exit;
		}
	}
}