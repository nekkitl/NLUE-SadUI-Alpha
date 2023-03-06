<?php $active = c("files")->items->selected.PHP_EOL;
c("files")->text = str_replace($active,'',c("files")->text);

c("button1")->enabled = false;
c("button2")->enabled = false;
c("button3")->enabled = false;
c("button4")->enabled = false;
