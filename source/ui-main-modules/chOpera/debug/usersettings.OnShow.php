<?php $data_dir = DOC_ROOT.'data/';
if(file_exists($data_dir.'settings.ini')){
    //Вкладки
    $action = array(
        0=>'home',          //Домаш
        1=>'empty',         //Пусто
        2=>'last'           //Вкладки предыдущего сеанса
    );
    
    
    ini::read("main", "homepage", $home);
    c("homeURL")->text = urldecode($home);

    ini::read("main", "newtab", $newTab);
    c("onNewTab")->itemIndex = array_search($newTab,$action);
    
    ini::read("main", "onstart", $onstart);
    c("afterStart")->itemIndex =  array_search($onstart,$action);
    
    //Далее

    ini::read("search", "url", $search);
    ini::read("search", "avaliable", $on);
    ini::read("safe", "avaliable", $safeURL);
    
    $search = urldecode($search);

    c("searchAvaliable")->checked = ($on=='1');
    c("safeURL")->checked = ($safeURL=='1');
    
    c("edit1")->text = $search;
    $ses = explode(PHP_EOL,file_get_contents($data_dir.'search.txt'));
    c("combobox1")->text = '';
    $add = array();
    foreach($ses as $k=>$v){
        $tmp = explode('|',$v);
        $add[] = trim($tmp[0]);
        if(trim($tmp[1])==$search){
            c("combobox1")->itemIndex = $k;
        }
    }
    c("combobox1")->text = implode(PHP_EOL,$add);
    
}
else{
    MessageBox("Восстановите удалённый файл settings.ini !", "Внимание ");
    die();
}
