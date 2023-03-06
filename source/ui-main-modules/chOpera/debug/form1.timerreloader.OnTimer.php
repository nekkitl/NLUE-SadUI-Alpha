<?php $pages = c("Form1->pages1")->pages();
if(!is_array($pages))return;
foreach($pages as $k=>$page){
    if($page->reload!==false){
        $time = time();
        if(($time - $page->reload['time']) > $page->reload['last']){
            $page->chrom->reloadIgnoreCache();
            $page->reload['last'] = time();
        }
    }
    
}
