<?php
defined('_JEXEC') or die('Restricted access');

class FFW01RosterControllerEvent extends JControllerForm
{
    protected function allowEdit($data = array(), $key = 'id')
    {
        // TODO
        return parent::allowEdit($data, $key);
    }

    protected function allowSave($data, $key = 'id')
    {
        // TODO
        return parent::allowSave($data, $key);
    }
}
