<?php

namespace App\Tests;

use Demo\Main;

class MainTest
{
    public function TestMainClasss()
    {
        $this->main = new Main;
        $this->main->HelloWorld();
        }
}
