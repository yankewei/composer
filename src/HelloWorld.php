<?php

namespace Yankewei\Composer;

class HelloWorld 
{
    public function greet(string $name) 
    {
        return "hello {$name}";
    }

    public function greetV2(string $name)
    {
        return "Hello {$name} V2";
    }
}