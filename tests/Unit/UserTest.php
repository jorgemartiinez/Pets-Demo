<?php

namespace Tests\Unit;

use App\Profile;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function create_user_role_user_check_relationships()
    {
        $role = Role::where('name', 'user');
        $profile = Profile::create([
            'name' => ''
        ]);
        $user = User::create([
            'name' => 'User',
            'email' => 'test@test.com',
            'password' => Hash::make('1234');
        ]);
    }
}
