<?php

use App\Profile;
use Illuminate\Database\Seeder;

class ProfileSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // * PERFIL USUARIO JORGE
        $profile = new Profile();
        $profile->phone = '605515468';
        $profile->city = 'Alcoy';
        $profile->province = 'Alicante';
        $profile->save();
    }
}
