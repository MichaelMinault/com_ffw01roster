<?php
defined('_JEXEC') or die('Restricted access');

class FFW01RosterModelEvents extends JModelList
{
    protected function getListQuery()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query->select('*')
              ->from($db->quoteName('#__ffw01roster_events'));

        return $query;
    }
}
