<?php

namespace denis303\bootstrap4;

class FormGroup extends \denis303\codeigniter4\Widget
{

    public $label;

    public $labelOptions = [];

    public $content;

    public $error;

    public function run()
    {
        return $this->render('form-group', [
            'label' => $this->label,
            'labelOptions' => $this->labelOptions,
            'content' => $this->content,
            'error' => $this->error,
        ]);
    }

}