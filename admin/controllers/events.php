<?php
defined('_JEXEC') or die('Restricted access');

class FFW01RosterControllerEvents extends JControllerAdmin
{
    protected $text_prefix = "COM_FFW01ROSTER_EVENTS";

    public function getModel($name = 'Event', $prefix = '', $config = array('ignore_request' => true))
    {
        return parent::getModel($name, $prefix, $config);
    }
}
