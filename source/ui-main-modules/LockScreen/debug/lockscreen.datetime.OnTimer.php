<?php $timeh = date("H") - 1;
c("Time")->caption = $timeh." ".date("i");
c("ClickToUnlock")->caption = date("d M Y");

if( c("LockScreen")->h == 0){
app::close();
}
