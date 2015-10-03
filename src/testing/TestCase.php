<?php

namespace blink\testing;

use PHPUnit_Framework_TestCase;

abstract class TestCase extends PHPUnit_Framework_TestCase
{
    protected $app;

    abstract public function createApplication();

    public function setUp()
    {
        if (!$this->app) {
            $this->app = $this->createApplication()->bootstrap();
        }
    }

    public function tearDown()
    {
        $this->app->shutdown();
        $this->app = null;
    }
}
