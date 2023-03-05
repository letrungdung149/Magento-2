<?php

namespace Mageplaza\HelloWorld\Controller\Config;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Config extends Action{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {
        echo 'config';
    }

}
