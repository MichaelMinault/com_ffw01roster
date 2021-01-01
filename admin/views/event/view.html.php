<?php
defined('_JEXEC') or die('Restricted access');

class FFW01RosterViewEvent extends JViewLegacy
{
    public function display($tpl = null)
    {
        $this->form = $this->get('Form');
        $this->item = $this->get('Item');

        if (count($errors = $this->get('Errors'))) {
            JError::raiseError(500, implode('<br />', $errors));
            return false;
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
            $title = JText::_('COM_FFW01ROSTER_EVENT_NEW_CAPTION');
        } else {
            $title = JText::_('COM_FFW01ROSTER_EVENT_EDIT_CAPTION');
        }

        JToolbarHelper::title($title, 'pencil-2');
        JToolbarHelper::save('event.save');
        JToolbarHelper::cancel('event.cancel', $isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE');
    }
}
