<?php
use PHPUnit\Framework\TestCase;

class login_Test extends TestCase
{
    private $conn;

    protected function setUp(): void
    {
        // Establish a database connection
        $this->conn = new PDO('mysql:host=localhost;dbname=fuel_db', 'root', '');
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    protected function tearDown(): void
    {
        // Close the database connection
        $this->conn = null;
    }

    public function testLogin(): void
    {
        // Simulate a form submission to login.php
        $_POST['username'] = 'hello';
        $_POST['pwd'] = '1';
        $_POST["submit"] = true;

        //make a request to Login.php with user input
        ob_start();
        include __DIR__ . '/../../includes/config/login.inc.php';
        $response = ob_get_clean();

        // Check that the response contains the expected content
        $this->assertStringContainsString('Welcome, testuser!', $response);
    }
}


?>