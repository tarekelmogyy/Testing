<?php
use PHPUnit\Framework\TestCase;
require_once 'src/user.php';

class UserTest extends TestCase {

    public function testName()
    {
        $user= new User("mogy", "elmogyt266@gmail.com");
        $this->assertEquals("mogy", $user->name());
        $testName= "mahmoud";
        $this->assertSame($testName, $user->name($testName));

    } 

    public function testEmail()
    {
        $user= new User("mogy", "elmogyt266@gmail.com");
        $this->assertEquals("elmogyt266@gmail.com", $user->email());
        $testEmail= "mahmoud@gmail.com";
        $this->assertEquals($testEmail, $user->email($testEmail));

    } 
}
?>