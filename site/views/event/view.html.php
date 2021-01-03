<?php
defined('_JEXEC') or die('Restricted access');

class FFW01RosterViewEvent extends JViewLegacy
{
    public function display($tpl = null)
    {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');

        if (count($errors = $this->get('Errors'))) {
            throw new Exception(implode("\n", $errors), 500);
        }

        parent::display($tpl);
    }
}
