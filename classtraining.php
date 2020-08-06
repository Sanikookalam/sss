<?php
class TestClass
{
    public function test()
    {
        echo 'payam too class.';
    }
}

trait TestTrait
{
    public function test()
    {
        echo 'payam too trait.';
    }
}

class Testing extends TestClass
{
    use TestTrait;
}

$test = new Testing;

$test->test();

