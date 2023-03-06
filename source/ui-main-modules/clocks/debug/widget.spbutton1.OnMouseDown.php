<?php global $sx, $sy, $fx, $fy;
$sx = cursor_pos_x();
$sy = cursor_pos_y();
$fx = c('Widget')->x;
$fy = c('Widget')->y;
c('timer1')->enable = true;
