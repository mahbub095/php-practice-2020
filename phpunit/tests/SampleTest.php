<?php 

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase{

    function testSomething(){
        $result =2+6;
        $this->assertEquals(4,$result);
    }
    function testAnotherThing(){
        $result =2+2;
        $this->assertEquals(false,$result);
    }
}