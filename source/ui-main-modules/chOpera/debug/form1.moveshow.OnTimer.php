<?php $form = c("Form1");
$form->alphaBlendValue += 5;
if ( $form->alphaBlendValue >= 250 ){
    $form->alphaBlendValue = 255;
    $self->enable = false;
}
