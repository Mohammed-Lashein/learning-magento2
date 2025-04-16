<?php

declare(strict_types=1);

namespace Pulsestorm\Nofrillslayout\Controller\Chapter2;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;


class Index implements HttpGetActionInterface {
    // private PageFactory $pageFactory;

    /* You can ignore passing  value to the constructor if you don't need it, but
    the constructor should be available as a method otherwise you will get an exception
     (because obj manager won't be able to instantiate you controller action class then) */
    public function __construct(
        // PageFactory $pageFactory
    ) {
        // $this->pageFactory = $pageFactory;
    }
    public function execute()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $layout        = $objectManager->get('Magento\Framework\View\Layout');
        $layout->addContainer('top', 'The top level container');

        $blockOne   = $layout->createBlock(
            'Magento\Framework\View\Element\Template',
            'pulsestorm_nofrills_chapter2_block1'
        );
        $blockOne->setTemplate('Pulsestorm_Nofrillslayout::chapter2/block1.phtml');

        $blockTwo    = $layout->createBlock(
            'Magento\Framework\View\Element\Template',
            'pulsestorm_nofrills_chapter2_block2'
        );
        $blockTwo->setTemplate('Pulsestorm_Nofrillslayout::chapter2/block2.phtml');

        $structure = $layout->getStructure(); //note: not standard magento
        $structure->setAsChild('pulsestorm_nofrills_chapter2_block1', 'top');
        $structure->setAsChild('pulsestorm_nofrills_chapter2_block2', 'top');

        $layout->generateElements();
        echo $layout->getOutput();
        exit;
    }
}
