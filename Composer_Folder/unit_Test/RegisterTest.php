<?php
use PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
{
    const JOHNDOE_USERNAME = 'johndoe';
    const JANEDOE_USERNAME = 'janedoe';

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
        $_POST["username"] = self::JOHNDOE_USERNAME;
        $_POST["pwd"] = 'password123';
        $_POST["pwdrepeat"] = 'password123';
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
