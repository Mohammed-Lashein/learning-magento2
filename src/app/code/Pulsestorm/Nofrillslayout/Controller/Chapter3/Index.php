<?php

// namespace declaration is important in order for the execute method to work
namespace Pulsestorm\Nofrillslayout\Controller\Chapter3;
use Pulsestorm\Nofrillslayout\Controller\Base;

class Index extends Base {
    // Important in order for the class to work
    public function __construct(){}
    public function execute()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        // $layout  = $objectManager->get(\Pulsestorm\Nofrillslayout\Framework\view\Layout::class);
        echo __METHOD__;
        exit;
    }
}
