<?php

namespace Agusn\AutoloadClass\TestClass;

class Product
{
    private $class;
    public function __construct()
    {
        $this->class = explode('\\', __CLASS__);
        echo "dijalankan pertama pada class " . end($this->class) . "<br>";
    }

    public function getProduct()
    {
        echo 'namespace ' . str_replace('\\' . end($this->class), '', __CLASS__) . ' class ' . end($this->class) . ' function ' . __FUNCTION__;
    }
}
