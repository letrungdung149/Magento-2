<?php


namespace Mageplaza\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class Display extends Template{

    protected $_template = 'Mageplaza_HelloWorld::sayhello.phtml';
    public function __construct(Template\Context $context)
    {
        parent::__construct($context);
    }

    public function sayhello(){
        return '123';
    }
}
