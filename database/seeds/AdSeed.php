<?php

use App\Ad;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class AdSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ad = new Ad();
        $ad->title = 'Se busca dueño para mi gatito';
        $ad->description = 'A veces se calienta pero es bastante cute, así que no tendrás problema con él';
        $ad->animal = 'gato';
        $ad->name = 'Mike';
        $ad->gender = 'male';
        $ad->age = 1.2;
        $ad->birthday = '2018-02-07';
        $ad->weight = 4.5;
        $ad->image = 'example.jpg';
        $ad->user_id = 1;
        $ad->save();

        $ad = new Ad();
        $ad->title = 'Se busca dueño para mi perrita';
        $ad->description = 'Perra muy fiel, no puedo hacerme cargo de él porque me mudo a otro país';
        $ad->animal = 'perro';
        $ad->name = 'Karla';
        $ad->gender = 'female';
        $ad->age = 0.8;
        $ad->birthday = '2019-10-12';
        $ad->weight = 5.2;
        $ad->image = 'bb.jpg';
        $ad->user_id = 1;
        $ad->save();
    }
}
