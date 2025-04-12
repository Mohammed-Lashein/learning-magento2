<?php

namespace Pulsestorm\Nofrillslayout\Block\Chapter1;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\BlockInterface;

// class Hello extends Template {
//     public function _toHtml() {
//         return '<h1>Hello from the Hello block</h1>';
//     }
// }

class Hello implements BlockInterface
{
    /*
        What is Context ?
        =>
        - It bundles together many useful services that blocks usually need .
        - Magento usually injects this Context automatically using the object manager
    */
    // public function __construct(Context $context, array $data = [])
    // {
    //     parent::__construct($context, $data);
    // }

    // protected function _toHtml()
    // {
    //     return '<h1>Hello from Hello block (with DI context)</h1>';
    // }
    public function toHtml() {
        return "<p>Hello world from a block !</p>";
    }
}
