<?php
require_once 'C:\xampp2\htdocs\app\vendor\Autoload.php';
include 'C:\xampp2\htdocs\app\ressources\database\db_connection.php';

use PHPUnit\Framework\TestCase;

class monTest extends TestCase
{
    public function testConnexion()
    {
        $x = OpenCon();
        $this->assertNotNull($x);
        CloseCon($x);

    }
}
?>