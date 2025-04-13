## Note 1
AbstractBlock **vs** BlockInterface **vs** Template . What's going on here ?  
=> 
```php
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\AbstractBlock;
use Magento\Framework\View\Element\BlockInterface;
```
BlockInterface : 
- Defined only that a block must have toHtml()
- Any block should have that method anyway

AbstractBlock : 
- The base class of blocks that they should extend (but not directly)
- It gives a created block more functionality

Template : 
- The class any newly created Block should extend, why ?
- Because Template class is a child class of AbstractBlock which adds more to its capabalities
___

## My first manually created text block 
```php
// In a controller's execute() method

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
```
___
**Note 2**
How are we using `$escaper` in a template file even though it is not manually injected by us in the template Block class, and also I don't see a file for `\Magento\Framework\Escaper` ?  
=> Actually in magento2 code in github the class exists, but we are able to use it here even though I don't see the place where the class code is present . 

Note that we should default to using `$escaper` instead of `$block->escapeHtml()` as the latter is deprecated . 

