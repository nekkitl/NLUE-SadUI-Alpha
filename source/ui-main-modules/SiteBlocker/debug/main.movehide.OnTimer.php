<?php global $formid;
$formid->alphaBlendValue -= 5;
if ( $formid->alphaBlendValue <= 175 ){
    $formid->alphaBlendValue = 175;
    $self->enable = false;
}
