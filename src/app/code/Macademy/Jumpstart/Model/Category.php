<?php

use Macademy\Jumpstart\Api\CategoryInterface;

class Category implements CategoryInterface {
    public function getName() {
        echo "hello name from my 1st model";
        return "hello name from my 1st model";
    }
}
