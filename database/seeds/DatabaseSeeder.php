<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    protected $toTruncate = ['users'];


    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // * reset
        Model::unguard();
        foreach ($this->toTruncate as $table) {
            DB::table($table)->truncate();
        }

        // * seeds
        $this->call(ProfileSeed::class);
        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);

        Model::reguard();
    }
}
