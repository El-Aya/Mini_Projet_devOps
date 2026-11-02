<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Greeter.php';

class GreeterTest extends TestCase
{
    public function testGreetReturnsBonjour(): void
    {
        $greeter = new Greeter();
        $this->assertEquals("Bonjour Aya", $greeter->greet("Aya"));
    }

    public function testGoodbyeReturnsAuRevoir(): void
    {
        $greeter = new Greeter();
        $this->assertEquals("Au revoir Aya", $greeter->goodbye("Aya"));
    }
}