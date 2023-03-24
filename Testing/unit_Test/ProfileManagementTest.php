<?php
use PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
{
    private $db;

    protected function setUp(): void
    {
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

    public function testValidRegistration()
    {
        // simulate valid user input
        $_POST["name"] = 'John Doe';
        $_POST["address_1"] = '123 Main St';
        $_POST["address_2"] = 'Apt 1';
        $_POST["city"] = 'New York';
        $_POST["state"] = 'NY';
        $_POST["zip"] = '10001';
        $_POST["email"] = 'tacobell_sucks@email.com';
        $_POST["cpm"] = '1.50';
        $_POST["submit"] = true;

        // make request to Register.php with user input
        ob_start();
        include __DIR__ . "/../../includes/config/register.inc.php";
        $response = ob_get_clean();

        // check if registration succeeded
        $this->assertStringContainsString("Registration successful", $response);

        // check if user was added to database
        $result = $this->db->query("SELECT * FROM client WHERE username='" . self::JOHNDOE_USERNAME . "'");
        $this->assertEquals(1, $result->num_rows);
    }

    public function testInvalidRegistration()
    {
        // simulate invalid user input (mismatched passwords)
        $_POST["username"] = self::JANEDOE_USERNAME;
        $_POST["pwd"] = 'password456';
        $_POST["pwdrepeat"] = 'password789';
        $_POST["submit"] = true;

        // make request to Register.php with user input
        ob_start();
        include __DIR__ . "/../../includes/config/register.inc.php";
        $response = ob_get_clean();

        // check if registration failed
        $this->assertStringContainsString("Passwords do not match", $response);

        // check that user was not added to database
        $result = $this->db->query("SELECT * FROM client WHERE username='" . self::JANEDOE_USERNAME . "'");
        $this->assertEquals(0, $result->num_rows);
    }
}
