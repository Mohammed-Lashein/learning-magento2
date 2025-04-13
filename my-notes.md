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

