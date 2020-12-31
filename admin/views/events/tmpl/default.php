<?php
defined('_JEXEC') or die('Restricted Access');
?>
<form action="<?php echo JRoute::_('index.php?option=com_ffw01roster&view=events'); ?>" method="post" id="adminForm"
    name="adminForm">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th width="1%">
                    <?php echo JText::_('COM_FFW01ROSTER_EVENT_NUM_FIELD_LABEL'); ?>
                </th>
                <th width="2%">
                    <?php echo JHtml::_('grid.checkall'); ?>
                </th>
                <th width="95%">
                    <?php echo JText::_('COM_FFW01ROSTER_EVENT_TITLE_FIELD_LABEL') ;?>
                </th>
                <th width="2%">
                    <?php echo JText::_('COM_FFW01ROSTER_EVENT_ID_FIELD_LABEL'); ?>
                </th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="4">
                    <?php echo $this->pagination->getListFooter(); ?>
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?php if (!empty($this->items)) : ?>
            <?php foreach ($this->items as $i => $row) :
                $link = JRoute::_('index.php?option=com_ffw01roster&task=event.edit&id=' . $row->id);
            ?>
            <tr>
                <td>
                    <?php echo $this->pagination->getRowOffset($i); ?>
                </td>
                <td>
                    <?php echo JHtml::_('grid.id', $i, $row->id); ?>
                </td>
                <td>
                    <a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_FFW01ROSTER_EVENTS_EDIT'); ?>">
                        <?php echo $row->title; ?>
                    </a>
                </td>
                <td>
                    <?php echo $row->id; ?>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <?php echo JHtml::_('form.token'); ?>
</form>