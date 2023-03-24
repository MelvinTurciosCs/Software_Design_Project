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

    //These 2 are for fuel req form
    public function testEmptyInputGallons()
    {
        require_once 'functions.php';
        $this->assertTrue(emptyInputGallons(null));
        $this->assertTrue(emptyInputGallons(''));
        $this->assertFalse(emptyInputGallons('5'));
    }

    public function testFuelCalc()
    {
        require_once 'functions.php';
        $con = null; // mock database connection
        $this->assertEquals(fuelCalc($con, 100), 1967.20);
        $this->assertEquals(fuelCalc($con, 200), 3934.40);
        $this->assertEquals(fuelCalc($con, 300), 5901.60);
    }
} 

?>