# Important Note !

You should use bin/magento from the project root to run the bin from docker container (in normal magento projects, you would run `bin/magento` from the `src` dir)

Similarly, we should run `bin/composer` and not just `composer` . Using the latter will run the binaries from our local machine (which of course is not suitable for our docker setup)

____
# Another important note
This setup is not a complete setup you can clone and run magento . 
You need to have a running magento app . 
This code is just a reference to the code I wrote throughout my learning . 
___
# Directories explained 

src/app/code/Macademy/Jumpstart : This is the code from [Mark Shust course on youtube](https://www.youtube.com/watch?v=C1DlspXjPRE&ab_channel=MarkShust) .    

src/app/code/Pulsestorm/Nofrillslayout : This is the code from [Alana storm book readme files on github](https://github.com/astorm/magento-layout-no-frills/tree/main/magento-2/src) . 


Note that I am also reading in both Adobe docs (it is really not that beginner friendly) and the book Magento2 developer's guide (it has some obsolete concepts, but it is well structured)

____
# Regarding .gitignore file  
~~I tried to git track some folders in an untracked folder (the src dir specifically) but I couldn't do that . 
So I am sticking to `git add -f <dir-path>`.~~

~~I just wanted to note that `.gitignore` has some content that you needn't worry about~~ 

Now the .gitignore file is tracking src/app/code (which includes most of the custom modules code and is the dir that I want to track)

