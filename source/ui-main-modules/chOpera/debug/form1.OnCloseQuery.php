<?php onBrowserUnload();

$pages = c("Form1->pages1")->pages();
foreach($pages as $page){
    $page->chrom->stopLoad();
    $page->chrom->free();
    $page->free();
}

die();
