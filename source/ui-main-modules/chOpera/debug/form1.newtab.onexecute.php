<?php ini::read("main", "newtab", $newtab);
switch($newtab){
    case 'home':
        ini::read("main", "homepage", $homepage);
        addPage(urldecode($homepage));
    break;
    default:
        addPage('about:blank');
}

