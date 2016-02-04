<?php
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        } 
    }
}

class B
{
    function bar()
    {
        // Note: the next line will issue a warning if E_STRICT is enabled.
        A::foo();
    }
}

$a = new A();
$a->foo();

// Note: the next line will issue a warning if E_STRICT is enabled.
A::foo();
$b = new B();
$b->bar();

// Note: the next line will issue a warning if E_STRICT is enabled.
B::bar();



/**
 * Instantiate a class using a string:
 */
class Hello {

    public function __construct() {
        echo "Say hello";
    }
    
    public function createInstance () {
        
        /**
         * Example creating a new instance using $this inside the class context.
         */
        new $this;
    }

}
$string = "Hello";
$class = new $string;
$class->createInstance();

/**
 * Object Assignment
 */

$assigned = $class;
$reference =& $class;

$class->var = "assigned will have this value";
$class = null; // $instance and $reference become null

var_dump($class);
var_dump($reference);
var_dump($assigned);


?> 
