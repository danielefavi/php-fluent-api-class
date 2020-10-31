<?php

class MagicTest
{
    public function __call($method, $args)
    {
        echo 'The call fell back to the method __call<br>';
    }

    public static function definedMethod()
    {
        echo 'The definedMethod has been triggered!<br>';
    }
}

$instance = new MagicTest;

// it outputs: The definedMethod has been triggered!
$instance->definedMethod();

// it outputs: The call fell back to the method __call
$instance->aMethodThatDoesNotExists();
