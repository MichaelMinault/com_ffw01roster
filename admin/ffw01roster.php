<?php
defined('_JEXEC') or die('Restricted access');

JLoader::register('FFW01RosterHelper', JPATH_COMPONENT . '/helpers/ffw01roster.php');

$controller = JControllerLegacy::getInstance('FFW01Roster');

$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

$controller->redirect();
