<?php c("aboutme")->alphaBlendValue += 5;
if ( c("aboutme")->alphaBlendValue >= 250 ){
    c("aboutme")->alphaBlendValue = 255;
    $self->enable = false;
}
