<?php

use sbacic\cctest\Foo;

class FooTest extends PHPUnit_Framework_TestCase {

  public static function setUpBeforeClass()
  {
    chdir('tests/unit');
  }

  public function testFun1()
  {
    $obj = new Foo();
    $this->assertTrue($obj->fun1());
  }
}
