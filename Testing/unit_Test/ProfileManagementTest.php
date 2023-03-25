<?php

use PHPUnit\Framework\TestCase;

class ProfileManagementTest extends TestCase
{
    private $db;

    protected function setUp(): void
    {
        session_start(); //Start a session
        $this->db = new mysqli('localhost', 'root', '', 'fuel_db');

        // check for connection error
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    protected function tearDown(): void
    {
        $this->db->close();
    }

    public function testValidProfileUpdate()
    {
        // simulate valid user input
        $_POST["name"] = 'John Doe';
        $_POST["address_1"] = '123 Main St';
        $_POST["address_2"] = 'Apt 1';
        $_POST["city"] = 'New York';
        $_POST["state"] = 'NY';
        $_POST["zip"] = '10001';
        $_POST["email"] = 'johndoe@email.com';
        $_POST["cpm"] = '1.50';
        $_POST["submit"] = true;

        // Add session id to $_POST array
        $_POST["session_id"] = session_id();

        // make request to update_profile.php with user input
        ob_start();
        include __DIR__ . "/../../includes/config/profileMan.inc.php";
        $response = ob_get_clean();

        // check if profile update succeeded
        $this->assertStringContainsString("Profile updated successfully", $response);

        // check if user's profile was updated in database
        $result = $this->db->query("SELECT * FROM client WHERE email='johndoe@email.com'");
        $this->assertEquals(1, $result->num_rows);
    }

    public function testInvalidProfileUpdate()
    {
        // simulate invalid user input (missing required fields)
        $_POST["name"] = '';
        $_POST["address_1"] = '';
        $_POST["city"] = '';
        $_POST["state"] = '';
        $_POST["zip"] = '';
        $_POST["email"] = '';
        $_POST["cpm"] = '';
        $_POST["submit"] = true;

        // Add session id to $_POST array
        $_POST["session_id"] = session_id();

        // make request to update_profile.php with user input
        ob_start();
        include __DIR__ . "/../../includes/config/profileMan.inc.php";
        $response = ob_get_clean();

        // check if profile update failed
        $this->assertStringContainsString("Please fill in all required fields", $response);

        // check that user's profile was not updated in database
        $result = $this->db->query("SELECT * FROM client WHERE email=''");
        $this->assertEquals(0, $result->num_rows);
    }
}
