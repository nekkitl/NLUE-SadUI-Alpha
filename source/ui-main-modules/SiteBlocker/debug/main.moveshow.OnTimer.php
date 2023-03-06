<?php global $formid;
$formid->alphaBlendValue += 5;
if ( $formid->alphaBlendValue >= 250 ){
    $formid->alphaBlendValue = 255;
    $self->enable = false;
}
