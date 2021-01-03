<?php
defined('_JEXEC') or die('Restricted access');
?>
<form
    action="<?php echo JRoute::_('index.php?option=com_ffw01roster&view=event&layout=edit&id=' . (int) $this->item->id); ?>"
    method="post" name="adminForm" id="adminForm">
    <div class="form-horizontal">
        <fieldset class="adminform">
            <legend><?php echo JText::_('COM_FFW01ROSTER_EVENT_DETAILS'); ?></legend>
            <div class="row-fluid">
                <div class="span6">
                    <?php
                        foreach ($this->form->getFieldset() as $field) {
                            echo $field->renderField();
                        }
                    ?>
                </div>
            </div>
        </fieldset>
    </div>
    <div class="btn-toolbar">
        <div class="btn-group">
            <button type="button" class="btn btn-small button-save" onclick="Joomla.submitbutton('event.save')">
                <span class="icon-save"></span><?php echo JText::_('JTOOLBAR_SAVE') ?>
            </button>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-small button-cancel" onclick="Joomla.submitbutton('event.cancel')">
                <span class="icon-cancel"></span><?php echo JText::_('JTOOLBAR_CANCEL') ?>
            </button>
        </div>
    </div>
    <input type="hidden" name="task" value="" />
    <?php echo JHtml::_('form.token'); ?>
</form>