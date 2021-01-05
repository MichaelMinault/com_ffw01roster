<?php
defined('_JEXEC') or die('Restricted access');

class FFW01RosterController extends JControllerLegacy
{
    protected $default_view = 'events';

    public function display($cachable = false, $urlparams = array())
    {
        $view   = $this->input->get('view', $default_view);
        $layout = $this->input->get('layout', 'default');
        $id     = $this->input->getInt('id');

        // Check for edit form.
        if ($view == 'event' && $layout == 'edit' && !$this->checkEditId('com_ffw01roster.edit.event', $id)) {
            // Somehow the person just went to the form - we don't allow that.
            $this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
            $this->setMessage($this->getError(), 'error');
            $this->setRedirect(JRoute::_('index.php?option=com_ffw01roster&view=events', false));

            return false;
        }

        return parent::display();
    }
}
