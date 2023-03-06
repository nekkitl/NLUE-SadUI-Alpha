<?php $xpos = c("notification")->x;
//c("notification")->x = $xpos + 5;
if($xpos > c("top")->w) { $self->enable = false; }
