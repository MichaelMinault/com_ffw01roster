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

        $this->canDo = JHelperContent::getActions('com_ffw01roster');

        if (count($errors = $this->get('Errors'))) {
            throw new Exception(implode("\n", $errors), 500);
        }

        FFW01RosterHelper::addSubmenu('events');

        $this->addToolBar();

        parent::display($tpl);
    }

    protected function addToolBar()
    {
        JToolbarHelper::title(JText::_('COM_FFW01ROSTER_EVENTS_CAPTION'), 'stack');

        if ($this->canDo->get('core.create')) {
            JToolbarHelper::addNew('event.add');
        }
        
        if ($this->canDo->get('core.edit')) {
            JToolbarHelper::editList('event.edit');
        }
        
        if ($this->canDo->get('core.delete')) {
            JToolbarHelper::deleteList('', 'events.delete');
        }

        if ($this->canDo->get('core.admin')) {
            JToolBarHelper::divider();
            JToolBarHelper::preferences('com_ffw01roster');
        }
    }
}
