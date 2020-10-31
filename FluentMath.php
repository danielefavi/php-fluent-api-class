<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'FluentApi.php';



class FluentMath extends FluentApi
{
    private $result = 0;

    protected function _add($num)
    {
        $this->result += $num;

        return $this;
    }

    protected function _subtract($num)
    {
        $this->result -= $num;

        return $this;
    }

    public function result()
    {
        return $this->result;
    }
}
