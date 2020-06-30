<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'Jorge Martínez';
        $user->email = 'jorgemartiinez19@gmail.com';
        $user->password = Hash::make('secret');
        $user->profile_id = 1;
        $user->role_id = $role_admin->id;
        $user->save();
    }
}
