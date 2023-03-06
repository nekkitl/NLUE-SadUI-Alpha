<?php global $curX, $curY, $formX, $formY;
c("settingsForm")->x = $formX - ( $curX - cursor_pos_x() );
c("settingsForm")->y = $formY - ( $curY - cursor_pos_y() );
