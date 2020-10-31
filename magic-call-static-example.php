<?php

class MagicStaticTest
{
    public static function __callStatic($method, $args)
    {
        echo 'The call fell back to the method __callStatic<br>';
    }

    public static function definedMethod()
    {
        echo 'The definedMethod has been triggered!<br>';
    }
}

// it outputs: The definedMethod has been triggered!
MagicStaticTest::definedMethod();

// it outputs: The call fell back to the method __callStatic
MagicStaticTest::notExistingMethod();
