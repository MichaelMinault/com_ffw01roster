<?php
defined('_JEXEC') or die('Restricted access');

use Joomla\Utilities\ArrayHelper;

class FFW01RosterControllerEvent extends JControllerForm
{
    protected function allowAdd($data = array())
    {
        $filter = $this->input->getInt('filter_category_id');
        $categoryId = ArrayHelper::getValue($data, 'catid', $filter, 'int');

        if ($categoryId) {
            return JFactory::getUser()->authorise('core.create', 'com_ffw01roster.category.' . $categoryId);
        } else {
            return parent::allowAdd($data);
        }
    }

    protected function allowEdit($data = array(), $key = 'id')
    {
        $recordId   = (int) isset($data[$key]) ? $data[$key] : 0;

        if ($recordId) {
            $item = $this->getModel()->getItem($recordId);
            $oldCategoryId = (int) $item->catid;

            if ($oldCategoryId) {
                $user  = JFactory::getUser();
                $allow = $user->authorise('core.edit', 'com_ffw01roster.category.' . $oldCategoryId);
                
                if (!$allow && $user->id == $item->created_by) {
                    $allow = $user->authorise('core.edit.own', 'com_ffw01roster.category.' . $oldCategoryId);
                }

                if ($allow) {
                    $newCategoryId = ArrayHelper::getValue($data, 'catid', 0, 'int');

                    if ($newCategoryId && $newCategoryId != $oldCategoryId) {
                        $allow = $user->authorise('core.create', 'com_ffw01roster.category.' . $newCategoryId);
                    }
                }

                return $allow;
            }
        }

        return false;
    }
}
