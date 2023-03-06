<?php global $curX, $curY, $formX, $formY, $formid;

$formid = c("Main");  // название формы

$curX = cursor_pos_x();
$curY = cursor_pos_y();
$formX = $formid->x;
$formY = $formid->y;
c("move")->enable = true;
if ( c("moveShow")->enable ){
    c("moveShow")->enable = false;
}
c("moveHide")->enable = true;
