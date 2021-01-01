<?php
defined('_JEXEC') or die('Restricted access');

class FFW01RosterModelEvents extends JModelList
{
    public function __construct($config = array())
    {
        if (empty($config['filter_fields'])) {
            $config['filter_fields'] = array(
                'id',
                'title'
            );
        }

        parent::__construct($config);
    }

    protected function getListQuery()
    {
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query->select('*')
              ->from($db->quoteName('#__ffw01roster_events'));
              
        $filterSearch = $db->escape($this->getFilterSearch(), true);

        if (!empty($filterSearch)) {
            $query->where('title LIKE ' . $db->quote('%' . $filterSearch . '%'));
        }

        $listOrdering = $db->escape($this->getListOrdering());
        $listDirection = $db->escape($this->getListDirection());
              
        $query->order($db->quoteName($listOrdering) . ' ' . $listDirection);

        return $query;
    }

    public function getFilterSearch()
    {
        return $this->getState('filter.search');
    }

    public function getListOrdering($default = 'title')
    {
        return $this->getState('list.ordering', $default);
    }

    public function getListDirection($default = 'ASC')
    {
        return $this->getState('list.direction', $default);
    }
}
