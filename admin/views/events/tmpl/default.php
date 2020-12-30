<?php
defined('_JEXEC') or die('Restricted Access');
?>
<form action="index.php?option=com_ffw01roster&view=events" method="post" id="adminForm" name="adminForm">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th width="1%">
                    <?php echo JText::_('COM_FFW01ROSTER_NUM'); ?>
                </th>
                <th width="2%">
                    <?php echo JHtml::_('grid.checkall'); ?>
                </th>
                <th width="95%">
                    <?php echo JText::_('COM_FFW01ROSTER_EVENTS_TITLE') ;?>
                </th>
                <th width="2%">
                    <?php echo JText::_('COM_FFW01ROSTER_ID'); ?>
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
            <?php foreach ($this->items as $i => $row) : ?>
            <tr>
                <td>
                    <?php echo $this->pagination->getRowOffset($i); ?>
                </td>
                <td>
                    <?php echo JHtml::_('grid.id', $i, $row->id); ?>
                </td>
                <td>
                    <?php echo $row->title; ?>
                </td>
                <td align="center">
                    <?php echo $row->id; ?>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</form>