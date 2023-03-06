<?php if(c("site")->text != null){
    Hosts::Block();
    Hosts::Get();
}else{
    c("site")->text = "Enter site!";
}
