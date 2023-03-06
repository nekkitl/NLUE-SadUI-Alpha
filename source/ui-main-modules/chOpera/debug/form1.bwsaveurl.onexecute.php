<?php global $lastClickURL;

c("saveAs")->title = 'Сохранить по ссылке';
$tmp = explode('/',$lastClickURL);
$last = (strlen($tmp[sizeof($tmp)-1])==0 and sizeof($tmp)>1)?$tmp[sizeof($tmp)-2]:$tmp[sizeof($tmp)-1];
c("saveAs")->fileName = $last;
c("saveAs")->filter = 'Все файлы (*.*)|(*.*)';
if(c("saveAs")->execute()){
   /* c("downloader")->url = $lastClickURL;
    c("downloader")->path = c("saveAs")->fileName;
    c("downloader")->thread = true;
    c("downloader")->start();*/
    addDownload($lastClickURL, basename(c("saveAs")->fileName), dirname(c("saveAs")->fileName));
}
