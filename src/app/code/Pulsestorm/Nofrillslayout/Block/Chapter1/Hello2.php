<?php

namespace Pulsestorm\Nofrillslayout\Block\Chapter1;

use Magento\Framework\View\Element\BlockInterface;


class Hello2 implements BlockInterface {
    public function toHtml() {
        echo "<p>Hello world from <b>our own</b> block </p>";
    }
}
