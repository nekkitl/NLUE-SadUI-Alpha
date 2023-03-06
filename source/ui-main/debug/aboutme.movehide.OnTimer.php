<?php c("aboutme")->alphaBlendValue -= 5;
if ( c("aboutme")->alphaBlendValue <= 175 ){
    c("aboutme")->alphaBlendValue = 175;
    $self->enable = false;
}
