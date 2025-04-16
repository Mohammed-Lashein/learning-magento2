<?php

declare(strict_types=1);

namespace Pulsestorm\Nofrillslayout\Controller\Chapter2;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Pulsestorm\Nofrillslayout\Controller\Base;

class Index extends Base {
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
        $layout  = $objectManager->get(\Pulsestorm\Nofrillslayout\Framework\view\Layout::class);

        // fetch the update manager (a special obj) from the layout obj
        /*
        Responsibility of the update manager obj :
            keeping track of the changes a client programmer wants to make to the layout.
            i.e. It manages the XML updates.
        */
        $updateManager = $layout->getUpdate();
        $container_xml = $this->loadXmlFromSampleXmlFolder('chapter2/user/top-container.xml');
        $updateManager->addUpdate($container_xml);

        $block_xml = $this->loadXmlFromSampleXmlFolder('chapter2/user/blocks.xml');
        $updateManager->addUpdate($block_xml);

        /*
            Important : The writer mentioned that we no longer need the generateElements() method, however my code didn't work without it .

            The generateXml() seems to be optional (I commented it out and the code
            still works)
        */
        $layout->generateXml();
        $layout->generateElements();

        // debugging
        // var_dump($layout->getStructure()->getElement('top'));
        // print_r($layout->getAllBlocks());

        // $layout->generateElements();
        echo $layout->getOutput();
        exit;
    }
}
