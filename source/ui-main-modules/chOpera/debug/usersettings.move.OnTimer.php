<?php global $curX, $curY, $formX, $formY;
c("userSettings")->x = $formX - ( $curX - cursor_pos_x() );
c("userSettings")->y = $formY - ( $curY - cursor_pos_y() );
