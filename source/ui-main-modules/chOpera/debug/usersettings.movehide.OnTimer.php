<?php $form = c("userSettings");
$form->alphaBlendValue -= 5;
if ( $form->alphaBlendValue <= 175 ){
    $form->alphaBlendValue = 175;
    $self->enable = false;
}
