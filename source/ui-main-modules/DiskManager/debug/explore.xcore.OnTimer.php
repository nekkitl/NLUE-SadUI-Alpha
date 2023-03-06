<?php $mipo = c("path")->caption;
switch ($mipo){
    case 'C:/': c("path")->caption = "C:\\"; $files = scandir("C:\\"); c("files")->text = $files; break;
    case '/': c("path")->caption = "C:\\"; $files = scandir("C:\\"); c("files")->text = $files; break;
    case '\\': c("path")->caption = "C:\\"; $files = scandir("C:\\"); c("files")->text = $files; break;
}
