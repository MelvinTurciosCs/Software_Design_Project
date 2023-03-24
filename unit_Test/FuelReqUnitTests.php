<?php

use PHPUnit\Framework\TestCase;

class FuelCalculationTest extends TestCase
{
    protected static $gallons;
    protected static $userloc;
    protected static $userhistory;
    protected static $usercpm;
    protected static $margin;
    protected static $price;

    public static function setUpBeforeClass(): void
    {
        // Generate a unique username and password for testing
        //gallons from 0 to 1,000,000
        self::$gallons = rand(0, 100000);
        //userloc from 0 to 1 (0 = in state, 1 = out of state)
        self::$userloc = rand(0, 1);
        //userhistory from 0 to 1 (0 = no history, 1 = history)
        self::$userhistory = rand(0, 1);
        //usercpm from 0 to 1, .1 increments 
        self::$usercpm = rand(0, 10)/10;
    }
    
    public static function TestFuelCalculation(){
        //Tests the fuel calculation formula from Fuel_Req_Form.php
        //check if within texas, if yes; $margin += .2, if not; $margin += .4
        if(self::$userloc == 0){
            self::$margin = .2;
        }
        else{
            self::$margin = .4;
        }
        //check for previous history, if no; $margin += .1, if yes; $margin += 0
        if(self::$userhistory == 0){
            self::$margin += .1;
        }
        else{
            self::$margin += 0;
        }
        //calculate final margin, if >1000 gallons; $margin += .02, if <1000 gallons; $margin += .03
        if(self::$gallons > 1000){
            self::$margin += .02;
        }
        else{
            self::$margin += .03;
        }
        //calculate final price
        self::$price = self::$margin * self::$gallons;
        return self::$price;
        
    }

}
?>
