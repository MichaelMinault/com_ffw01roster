<?php
defined('_JEXEC') or die('Restricted access');

class FFW01RosterTableEvents extends JTable
{
    public function __construct(&$db)
    {
        parent::__construct('#__ffw01roster_events', 'id', $db);
    }
}
