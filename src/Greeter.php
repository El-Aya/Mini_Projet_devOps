<?php

class Greeter
{
    public function greet(string $name): string
    {
        return "Bonjour " . $name;
    }

    public function goodbye(string $name): string
    {
        return "Au revoir " . $name;
    }
}