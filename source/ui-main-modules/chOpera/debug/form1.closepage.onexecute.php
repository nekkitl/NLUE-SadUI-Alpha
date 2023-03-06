<?php $page = c("Form1->pages1")->activePage;
$page->chrom->free();
$page->free();
unset($page);

if(count( c("Form1->pages1")->pages() ) == 0){
    newTab();
}


switchTab();
