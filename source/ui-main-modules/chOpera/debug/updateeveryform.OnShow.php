<?php $active = c("Form1->pages1")->activePage;
if($active->reload!==false){
    c("sec")->text = $active->reload['time'];
}
else c("sec")->text = 30;
