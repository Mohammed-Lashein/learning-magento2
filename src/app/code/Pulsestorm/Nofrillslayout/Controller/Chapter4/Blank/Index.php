<?php

namespace Pulsestorm\Nofrillslayout\Controller\Chapter4\Blank;
use Pulsestorm\Nofrillslayout\Controller\Base;

class Index extends Base {
    protected $resultPageFactory;
    protected $request;
    protected $appState;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\App\State $appState
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->request = $request;
        $this->appState = $appState;
        /* What is the importance of  parent::__construct() ?
        => It lets the parent constructor receive the dependencies injected by the
        obj manager so that it (the parent class, which is Base class implementing HttpGetActionInterface) can use it */
        parent::__construct($context, $request, $resultPageFactory, $appState);
    }
    public function execute()
    {
        $pageObj = $this->resultPageFactory->create();
        // $pageObj->addHandle('nofrillslayout_chapter4_blank_index');
        var_dump($this->appState->getAreaCode());
        return $pageObj;
    }
}
