<?php
defined('_JEXEC') or die('Restricted access');

class FFW01RosterModelEvent extends JModelAdmin
{
    public function getTable($type = 'Events', $prefix = 'FFW01RosterTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm(
            'com_ffw01roster.event',
            'event',
            array(
                'control' => 'jform',
                'load_data' => $loadData
            )
        );

        if (empty($form)) {
            return false;
        }

        return $form;
    }

    protected function loadFormData()
    {
        $data = JFactory::getApplication()->getUserState(
            'com_ffw01roster.edit.event.data',
            array()
        );
        
        if (empty($data)) {
            $data = $this->getItem();
        }

        return $data;
    }

    protected function canDelete($record)
    {
        if (!empty($record->catid)) {
            return JFactory::getUser()->authorise("core.delete", "com_ffw01roster.category." . $record->catid);
        }
    }

    protected function prepareTable($table)
    {
        if (empty($table->created_by)) {
            $table->created_by = JFactory::getUser()->id;
        }
    }
}
