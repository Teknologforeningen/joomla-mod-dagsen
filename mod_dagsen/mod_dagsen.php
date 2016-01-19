<?php
/**
 * Dagsen module
 * 
 * @package    Joomla
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       NULL
 */
 
// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
$taffaAPI = new taffaAPI('sv');
$menuHTML = $taffaAPI->getNextMenu();
/**
 * @todo Comment out the echo below, should be outputted by tmpl/default.php, but this file is not getting ran
 * in my configuration. Might just be me tho, or some override.
 */
echo $menuHTML;