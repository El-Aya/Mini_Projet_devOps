<?php
require_once __DIR__ . '/Greeter.php';

$greeter = new Greeter();
echo "<h1>" . $greeter->greet("DevOps") . "</h1>";