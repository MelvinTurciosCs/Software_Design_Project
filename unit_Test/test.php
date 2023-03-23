<?php

use PHPUnit\Framework\TestCase;

class AccountCreationTest extends TestCase
{
    protected static $username;
    protected static $password;

    public static function setUpBeforeClass(): void
    {
        // Generate a unique username and password for testing
        self::$username = 'testuser' . rand(100, 999);
        self::$password = 'testpass' . rand(100, 999);
    }

    public function testAccountCreation()
    {
        // Make an HTTP request to create a new account
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://example.com/create-account',
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => array(
                'username' => self::$username,
                'password' => self::$password,
                'confirm_password' => self::$password
            )
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        // Check that the account was successfully created
        $this->assertEquals('Account created successfully', $response);
    }

    public function testPasswordMismatch()
    {
        // Make an HTTP request to create a new account with mismatched passwords
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://example.com/create-account',
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => array(
                'username' => self::$username,
                'password' => self::$password,
                'confirm_password' => 'incorrectpassword'
            )
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        // Check that the account was not created due to password mismatch
        $this->assertEquals('Passwords do not match', $response);
    }
} 

class FuelCalculationTest extends TestCase
{
    protected static $gallons;
    protected static $userloc;
    protected static $userhistory;
    protected static $usercpm;

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
    

}


?>
