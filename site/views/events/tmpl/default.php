<?php
defined('_JEXEC') or die('Restricted access');

JHtml::_('formbehavior.chosen', 'select');

$ordering = $this->escape($this->listOrdering);
$direction = $this->escape($this->listDirection);
?>
<form action="<?php echo JRoute::_('index.php?option=com_ffw01roster&view=events'); ?>" method="post" id="adminForm"
    name="adminForm">
    <div class="btn-toolbar">
        <div class="btn-group">
            <button type="button" class="btn btn-small button-new btn-success"
                onclick="Joomla.submitbutton('event.add')">
                <span class="icon-new icon-white"></span><?php echo JText::_('JTOOLBAR_NEW') ?>
            </button>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-small button-edit" onclick="Joomla.submitbutton('event.edit')">
                <span class="icon-edit"></span><?php echo JText::_('JTOOLBAR_EDIT') ?>
            </button>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-small button-delete" onclick="Joomla.submitbutton('events.delete')">
                <span class="icon-delete"></span><?php echo JText::_('JTOOLBAR_DELETE') ?>
            </button>
        </div>
    </div>
    <div class="row-fluid">
        <?php echo JLayoutHelper::render('joomla.searchtools.default', array('view' => $this)); ?>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th width="1%">
                    <?php echo JText::_('COM_FFW01ROSTER_EVENT_NUM_FIELD_LABEL'); ?>
                </th>
                <th width="2%">
                    <?php echo JHtml::_('grid.checkall'); ?>
                </th>
                <th width="65%">
                    <?php echo JHtml::_('searchtools.sort', 'COM_FFW01ROSTER_EVENT_TITLE_FIELD_LABEL', 'title', $direction, $ordering) ;?>
                </th>
                <th width="30%">
                    <?php echo JHtml::_('searchtools.sort', 'JCATEGORY', 'category_title', $direction, $ordering) ;?>
                </th>
                <th width="2%">
                    <?php echo JHtml::_('searchtools.sort', 'COM_FFW01ROSTER_EVENT_ID_FIELD_LABEL', 'id', $direction, $ordering); ?>
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
                    <?php echo $row->category_title; ?>
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