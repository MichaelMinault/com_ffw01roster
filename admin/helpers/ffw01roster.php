<?php
defined('_JEXEC') or die('Restricted access');

abstract class FFW01RosterHelper extends JHelperContent
{
    public static function addSubmenu($submenu)
    {
        JHtmlSidebar::addEntry(
            JText::_('COM_FFW01ROSTER_SUBMENU_EVENTS'),
            'index.php?option=com_ffw01roster',
            $submenu == 'events'
        );

        JHtmlSidebar::addEntry(
            JText::_('COM_FFW01ROSTER_SUBMENU_CATEGORIES'),
            'index.php?option=com_categories&view=categories&extension=com_ffw01roster',
            $submenu == 'categories'
        );
    }
}
