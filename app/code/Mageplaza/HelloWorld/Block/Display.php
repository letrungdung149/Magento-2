<?php

namespace Mageplaza\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class Display extends \Magento\Framework\View\Element\Template{
    public function __construct(Template\Context $context)
    {

        parent::__construct($context);
    }

    public function hello(){
        return 'Hello anh Cam';
    }
}
