<?php global $curX, $curY, $formX, $formY;
$curX = cursor_pos_x();
$curY = cursor_pos_y();
$formX = c("aboutme")->x;
$formY = c("aboutme")->y;
c("move")->enable = true;
if ( c("moveShow")->enable ){
    c("moveShow")->enable = false;
}
c("moveHide")->enable = true;
