<?php
defined('_JEXEC') or die('Restricted access');

class FFW01RosterViewList extends JViewLegacy
{
	function display($tpl = null)
	{
		$this->msg = 'Roster FFW01';

		parent::display($tpl);
	}
}
