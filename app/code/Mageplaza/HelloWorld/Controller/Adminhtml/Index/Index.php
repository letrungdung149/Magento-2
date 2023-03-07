<?php

namespace Mageplaza\HelloWorld\Controller\Adminhtml\Index;

class Index extends \Magento\Backend\App\Action{
    protected $resultPageFactory = false;

    const ADMIN_RESOURCE = 'Mageplaza_HelloWorld::demo_menu';
    public function __construct(\Magento\Backend\App\Action\Context $context,\Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        parent::__construct($context);

        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }

}
