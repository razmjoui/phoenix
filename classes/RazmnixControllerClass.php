<?php

namespace Razm;

use RazmE\RazmnixDefaultWidget;
use RazmE\RazmnixElementor;
use RazmE\RazmnixElementorPostType;
use RazmS\RazmnixSetting;
use RazmS\RazmnixSettings;

class RazmnixControllerClass
{
    public function __construct()
    {
//        new RazmnixSettings();
        new RazmnixSetting();
        new RazmnixEnqueue();
        new RazmnixElementorPostType();
        new RazmnixAction();
        new RazmnixMegaMenu();
        new RazmnixElementor();
		new RazmnixDefaultWidget();


    }
}