<?php

namespace Ecommage\FirstModule\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;

class Display extends Template{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __('Hello World 123');
    }
}
