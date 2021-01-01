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
            JError::raiseError(500, implode('<br />', $errors));
            return false;
        }

        $this->addToolBar();

        parent::display($tpl);
    }

    protected function addToolBar()
    {
        JToolbarHelper::title(JText::_('COM_FFW01ROSTER_EVENTS_CAPTION'), 'stack');
        JToolbarHelper::addNew('event.add');
        JToolbarHelper::editList('event.edit');
        JToolbarHelper::deleteList('', 'events.delete');
    }
}
