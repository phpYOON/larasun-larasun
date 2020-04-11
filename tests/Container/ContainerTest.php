<?php
use PHPUnit\Framework\TestCase;

use Illuminate\Container\Container;

class ContainerTest extends TestCase
{
    public function test_app만_호출했을때()
    {
        $object = Container::getInstance();

        $this->assertInstanceOf(Container::class,$object);
    }

    public function test_app에_인자넣었을때()
    {
        
    }
}
