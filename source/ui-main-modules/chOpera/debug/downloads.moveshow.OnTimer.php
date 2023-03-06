<?php $form = c("downloads");
$form->alphaBlendValue += 5;
if ( $form->alphaBlendValue >= 250 ){
    $form->alphaBlendValue = 250;
    $self->enable = false;
}
