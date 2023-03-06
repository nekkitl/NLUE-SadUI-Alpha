<?php
namespace dock\forms;

use gui\Ext4JphpWindows;
use std, gui, framework, dock;


class MainForm extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        $blur = new Ext4JphpWindows();
        $blur->addBlur($this);
    }
    
}
