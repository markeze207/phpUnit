<?php


use App\Controllers\UserController;
use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private UserController $userController;
    private User $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = new User();
        $this->userController = new UserController($this->user);
    }

    public function testEmail()
    {
        $this->assertEquals(true, $this->userController->registration('admin@gmail.com'));
    }
    public function testName()
    {
        $this->assertEquals('Mihail', $this->user->prepareName('mihail'));
    }
}
