<?php

declare(strict_types=1);

namespace Pulsestorm\Nofrillslayout\Controller\Chapter2;

use Pulsestorm\Nofrillslayout\Controller\Base;

class Page extends Base {
    public function __construct(
    ){}
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

        $page_block_xml = $this->loadXmlFromSampleXmlFolder('chapter2/page.xml');
        $updateManager->addUpdate($page_block_xml);

        $layout->generateXml();
        $layout->generateElements();

        echo $layout->getOutput();
        exit;
    }
}
