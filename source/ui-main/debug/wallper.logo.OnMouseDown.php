<?php $cmenu = c("top->cur_menu");

if( $button == 1){
$cmenu->y = cursor_pos_y();
$cmenu->x = cursor_pos_x();
$cmenu->visible = true;
}
