<?php

declare(strict_types=1);

// ===== IMPORTANT !  ======
// Adding namespace is mandatory otherwise the controller won't work !
namespace Pulsestorm\Nofrillslayout\Controller\Chapter1;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Result\Page;
use Pulsestorm\Nofrillslayout\Block\Chapter1\Hello;
use Pulsestorm\Nofrillslayout\Block\Chapter1\Hello2;

class Index implements HttpGetActionInterface {
    private PageFactory $pageFactory;

    public function __construct(
        PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
    }
    // public function execute(): Page {
    //     echo "hello from pulsestorm controller";
    //     exit;
    //     return $this->pageFactory->create();
    // }
    // public function execute() {
    //     echo "hello from pulsestorm controller";
    //     $block = new Hello();
    //     echo $block->toHtml();
    //     exit;
    //     // return $this->pageFactory->create();
    // }

    public function execute() {

    $objManager = \Magento\Framework\App\ObjectManager::getInstance();
    /* Note that we are creating a template block (hence Template class is extending
    AbstractBlock) */
    $layout = $objManager->get(\Magento\Framework\View\Layout::class);
    $parentTemplateBlock = $layout->createBlock(\Magento\Framework\View\Element\Template::class);
    $parentTemplateBlock->setTemplate("Pulsestorm_Nofrillslayout::chapter1/user/parent.phtml");

    $child1TemplateBlock = $layout->createBlock(
        \Magento\Framework\View\Element\Template::class,
        'pulsestorm_nofrills_child1'
    );
    $child1TemplateBlock->setTemplate("Pulsestorm_Nofrillslayout::chapter1/user/child1.phtml");


    $child2TemplateBlock = $layout->createBlock(
        \Magento\Framework\View\Element\Template::class,
        'pulsestorm_nofrills_child2'
    );
    $child2TemplateBlock->setTemplate("Pulsestorm_Nofrillslayout::chapter1/user/child2.phtml");


    $parentTemplateBlock->append($child1TemplateBlock);
    $parentTemplateBlock->append($child2TemplateBlock);
    echo $parentTemplateBlock->toHtml();

    # echo $child1TemplateBlock->toHtml();
    exit;
}

}
