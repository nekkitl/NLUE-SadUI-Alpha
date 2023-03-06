<?php $data_dir = DOC_ROOT.'data/';
if(file_exists($data_dir.'settings.ini')){
    //ini::open($data_dir.'settings.ini');
    ini::write("search", "url", urlencode(c("edit1")->text),true);
    ini::write("search", "avaliable", (c("searchAvaliable")->checked?'1':'0'),true);
    ini::write("safe", "avaliable", (c("safeURL")->checked?'1':'0'),true);
    
    //Вкладки
     $action = array(
        0=>'home',          //Домаш
        1=>'empty',         //Пусто
        2=>'last'           //Вкладки предыдущего сеанса
    );

    ini::write("main", "homepage", urlencode(c("homeURL")->text),true);
    ini::write("main", "newtab", $action[c("onNewTab")->itemIndex],true);
    ini::write("main", "onstart", $action[c("afterStart")->itemIndex],true);
    
    
    HideForm(c("userSettings"), SW_SHOWMODAL);
    ini::open($data_dir.'settings.ini');
}
else{
    MessageBox("Восстановите удалённый файл settings.ini !", "Внимание ");
    die();
}
