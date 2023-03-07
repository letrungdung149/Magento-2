<?php


namespace Mageplaza\HelloWorld\Block\Adminhtml;

class Index extends \Magento\Backend\Block\Template{
    public function acl()
    {
        return "admin acl 123";
    }
}
