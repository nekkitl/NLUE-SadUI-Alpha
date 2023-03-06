<?php global $curX, $curY, $formX, $formY;
c("console")->x = $formX - ( $curX - cursor_pos_x() );
c("console")->y = $formY - ( $curY - cursor_pos_y() );
