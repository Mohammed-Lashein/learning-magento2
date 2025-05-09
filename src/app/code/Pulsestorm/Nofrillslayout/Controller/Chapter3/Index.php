<?php

namespace Pulsestorm\Nofrillslayout\Controller\Chapter3;
use Pulsestorm\Nofrillslayout\Controller\Base;

class Index extends Base {
    protected $resultPageFactory;
    protected $request;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\App\RequestInterface $request
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->request = $request;
        /* What is the importance of  parent::__construct() ?
        => It lets the parent constructor receive the dependencies injected by the
        obj manager so that it (the parent class, which is Base class implementing HttpGetActionInterface) can use it */
        parent::__construct($context, $request, $resultPageFactory);
    }
    public function execute()
    {
        $pageObj = $this->resultPageFactory->create();
        // $pageObj->addHandle('our_1st_custom_handle');

        /* I can't find getFullActionName() either in the code or online . It seems that
        it is deprecated however I couldn't find the release that deprecated it .

        MAJOR UPADTE : I found a call to the previously mentioned method in
        \Magento\Framework\View\Result\Page.php, and also my IDE couldn't recognize its
        definition .

        I gave it a try (since it is used internally by magento and everything is working
        ) and it worked !
        */
        // var_dump($this->request->getActionName());
        // var_dump($this->request->getModuleName());
        // var_dump($this->request->getFullActionName())
        return $pageObj;
    }
}
