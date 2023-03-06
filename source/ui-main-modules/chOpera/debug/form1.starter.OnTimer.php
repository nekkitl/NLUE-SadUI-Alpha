<?php c("pages1")->pagesList = '';
ini::read("main", "onstart", $onstart);
switch($onstart){
    case 'last':
        $data_dir = DOC_ROOT.'data/';
        if(file_exists($data_dir.'tabs.txt')){
            $data = json_decode(file_get_contents($data_dir.'tabs.txt'),true);
            if(isset($data['pages'])){
                foreach($data['pages'] as $page){
                    $ch = addPage($page);
                }
                return c("Form1->pages1")->pageIndex = $data['active'];
            }
        }
    break;
    
    case 'home':
        ini::read("main", "homepage", $homepage);
        return addPage(urldecode($homepage));
    break;
    
}


addPage('about:blank');
