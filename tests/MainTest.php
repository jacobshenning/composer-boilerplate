<?php

namespace App\Tests;

use Demo\Main;

class MainTest
{
    public function TestMainClasss()
    {
        $this->main = new Main;
        $temp = $this->main->HelloWorld();
        echo $temp;
        return $temp;
    }
}
