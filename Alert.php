<?php

namespace denis303\bootstrap4;

class Alert extends \denis303\codeigniter4\Widget
{

    public $message;

    public $type = 'info';

    public function run()
    {
        if (!$this->message)
        {
            return '';
        }

        return $this->render('alert', [
            'message' => $this->message,
            'type' => $this->type
        ]);
    }

}