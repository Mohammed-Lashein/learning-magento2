<?php

namespace Pulsestorm\Nofrillslayout\Controller\Chapter3;
use Pulsestorm\Nofrillslayout\Controller\Base;

class Index extends Base {
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
    ){
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    public function execute()
    {
        $pageObj = $this->resultPageFactory->create();
        $pageObj->addHandle('our_1st_custom_handle');

        return $pageObj;
    }
}
