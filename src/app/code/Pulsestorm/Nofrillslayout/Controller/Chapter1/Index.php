<?php

declare(strict_types=1);

// ===== IMPORTANT !  ======
// Adding namespace is mandatory otherwise the controller won't work !
namespace Pulsestorm\Nofrillslayout\Controller\Chapter1;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\View\Result\Page;
use Pulsestorm\Nofrillslayout\Block\Chapter1\Hello;

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

    // Output block HTML
    $block = new Hello;
    echo $block->toHtml();
    exit;
}

}
