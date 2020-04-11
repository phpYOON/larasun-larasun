<?php

use Illuminate\Foundation\Application;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function ignore()
    {
        $app = new Application();
        $app->register($provider);
    }
}
