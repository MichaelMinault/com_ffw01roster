<?php
class FFW01RosterModelEvents extends JModelItem
{
    protected $message;

    public function getMsg()
    {
        if (!isset($this->message)) {
            $this->message = 'Roster FFW01!';
        }

        return $this->message;
    }
}
