<?php

class sampleTest extends PHPUnit\Framework\TestCase
{

    function testHappy()
    {
        self::assertTrue(true);
    }

    function testSad()
    {
        self::assertTrue(false);
    }
}