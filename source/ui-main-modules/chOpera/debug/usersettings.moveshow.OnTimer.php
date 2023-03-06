<?php $form = c("userSettings");
$form->alphaBlendValue += 5;
if ( $form->alphaBlendValue >= 250 ){
    $form->alphaBlendValue = 255;
    $self->enable = false;
}
