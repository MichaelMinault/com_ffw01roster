<?php
defined('_JEXEC') or die('Restricted access');

class FFW01RosterViewEvent extends JViewLegacy
{
    public function display($tpl = null)
    {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');

        $this->canDo = JHelperContent::getActions('com_ffw01roster', 'category', $this->item->catid);

        if (count($errors = $this->get('Errors'))) {
            throw new Exception(implode("\n", $errors), 500);
        }

        $this->addToolBar();

        parent::display($tpl);
    }

    protected function addToolBar()
    {
        $input = JFactory::getApplication()->input;

        $input->set('hidemainmenu', true);

        $isNew = ($this->item->id == 0);

        if ($isNew) {
            JToolbarHelper::title(JText::_('COM_FFW01ROSTER_EVENT_NEW_CAPTION'), 'pencil-2');

            if ($this->canDo->get('core.create')) {
                JToolbarHelper::apply('event.apply');
                JToolbarHelper::save('event.save');
            }

            JToolbarHelper::cancel('event.cancel', 'JTOOLBAR_CANCEL');
        } else {
            JToolbarHelper::title(JText::_('COM_FFW01ROSTER_EVENT_EDIT_CAPTION'), 'pencil-2');

            if ($this->canDo->get('core.edit')) {
                JToolbarHelper::apply('event.apply');
                JToolbarHelper::save('event.save');
            }

            JToolbarHelper::cancel('event.cancel', 'JTOOLBAR_CLOSE');
        }
    }
}
