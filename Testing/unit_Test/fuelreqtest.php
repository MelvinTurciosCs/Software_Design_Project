<?php

require_once 'PHPUnit/Framework/TestCase.php';
require_once 'functions.php';

class FuelReqFormTest extends PHPUnit_Framework_TestCase {

    public function testEmptyInputGallons()
    {
        $this->assertTrue(emptyInputGallons(null));
        $this->assertTrue(emptyInputGallons(''));
        $this->assertFalse(emptyInputGallons('5'));
    }

    public function testFuelCalc()
    {
        $con = null; // mock database connection
        $this->assertEquals(fuelCalc($con, 100), 1967.20);
        $this->assertEquals(fuelCalc($con, 200), 3934.40);
        $this->assertEquals(fuelCalc($con, 300), 5901.60);
    }
}
?>