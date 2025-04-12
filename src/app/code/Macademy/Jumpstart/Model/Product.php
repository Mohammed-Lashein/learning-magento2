<?php

declare(strict_types=1);
use Macademy\Jumpstart\Api\CategoryInterface;

class Product {
    function __construct(
        /* It is wild that magento got the place of the interface
        automatically by searching through Api dir and I didn't even
        need to write a use stmt for it */
        private CategoryInterface $category
    ) {}
    public function getCategoryName() {
        return $this->category->getName();
    }
}
