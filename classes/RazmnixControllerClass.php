<?php

namespace Razm;

use RazmE\RazmnixElementor;

class RazmnixControllerClass
{
    public function __construct()
    {
        new RazmnixGetOptions();
        new RazmnixEnqueue();
        new RazmnixPostType();
        new RazmnixAction();
        new RazmnixMegaMenu();
        new RazmnixElementor();
//		new RazmnixDefaultWidget();


    }
}