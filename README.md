# Important Note !

You should use bin/magento from the project root to run the bin from docker container (in normal magento projects, you would run `bin/magento` from the `src` dir)

Similarly, we should run `bin/composer` and not just `composer` . Using the latter will run the binaries from our local machine (which of course is not suitable for our docker setup)