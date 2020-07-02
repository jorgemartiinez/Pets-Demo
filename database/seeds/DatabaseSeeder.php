<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // * reset
        Model::unguard();

        // * seeds
        $this->call(ProfileSeed::class);
        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
        $this->call(AdSeed::class);

        Model::reguard();
    }
}
