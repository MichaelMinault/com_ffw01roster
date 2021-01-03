<?php
defined('_JEXEC') or die('Restricted access');

class FFW01RosterViewEvents extends JViewLegacy
{
    public function display($tpl = null)
    {
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->filterForm = $this->get('FilterForm');
        $this->listOrdering = $this->get('ListOrdering');
        $this->listDirection = $this->get('ListDirection');

        if (count($errors = $this->get('Errors'))) {
            throw new Exception(implode("\n", $errors), 500);
        }

        parent::display($tpl);
    }
}
