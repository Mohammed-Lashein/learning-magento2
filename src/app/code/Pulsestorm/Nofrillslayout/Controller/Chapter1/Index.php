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

    public function execute()
{
    // Create a page result object
    // $page = $this->pageFactory->create();

    // Get layout from the page
    // $layout = $page->getLayout();

    // Create block the Magento way
    // $block = $layout->createBlock(Hello::class);

    // Optional: set a template file if needed
    // $block->setTemplate('Pulsestorm_Nofrillslayout::hello.phtml');

    $objManager = \Magento\Framework\App\ObjectManager::getInstance();
    /*
        Here we are creating a text block .
        How did I know that ?
        => The class \Magento\Framework\View\Element\Text extends AbstractBlock class
    */
    $block = $objManager->get(\Magento\Framework\View\Element\Text::class);
    // It seems that setText doesn't sanitize the output ! This is expected since this
    // method is expected to render HTML
    $block->setText('<i>hello txt block</i> !');
    // toHtml() Will render the text passed to the setText()
    echo $block->toHtml();
    exit;
}

}
