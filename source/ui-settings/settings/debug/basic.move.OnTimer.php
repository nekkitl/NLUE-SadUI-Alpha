<?php global $curX, $curY, $formX, $formY, $formid;
$formid->x = $formX - ( $curX - cursor_pos_x() );
$formid->y = $formY - ( $curY - cursor_pos_y() );
