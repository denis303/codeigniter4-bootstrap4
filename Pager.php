<?php

namespace denis303\bootstrap4;

class Pager extends \denis303\codeigniter4\Widget
{

    public $label = 'Navigation';

    public $currentLabel = 'current';

    public $options = [];

    public $defaultOptions = ['class' => 'pagination'];

    public $items = [];

    public function run()
    {
        $options = array_merge($this->defaultOptions, $this->options);

        return $this->render('pager', [
            'label' => $this->label,
            'currentLabel' => $this->currentLabel,
            'options' => $options,
            'items' => $this->items
        ]);
    }

}