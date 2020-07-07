<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = Auth::user();
        $provincias = [
            'Álava', 'Albacete', 'Alicante', 'Almería', 'Asturias', 'Avila', 'Badajoz', 'Barcelona', 'Burgos', 'Cáceres',
            'Cádiz', 'Cantabria', 'Castellón', 'Ciudad Real', 'Córdoba', 'A Coruña', 'Cuenca', 'Gerona', 'Granada', 'Guadalajara',
            'Guipúzcoa', 'Huelva', 'Huesca', 'Islas Baleares', 'Jaén', 'León', 'Lérida', 'Lugo', 'Madrid', 'Málaga', 'Murcia', 'Navarra',
            'Ourense', 'Palencia', 'Las Palmas', 'Pontevedra', 'La Rioja', 'Salamanca', 'Segovia', 'Sevilla', 'Soria', 'Tarragona',
            'Santa Cruz de Tenerife', 'Teruel', 'Toledo', 'Valencia', 'Valladolid', 'Vizcaya', 'Zamora', 'Zaragoza'
        ];
        return view('profile.index', compact('user', 'provincias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request)
    {
        $user = Auth::user();

        $requestImg = request('image');
        $imageArray = [];

        if ($requestImg) {
            $imagePath = request('image')->store('img/profiles', 'public');
            $image = Image::make(public_path("storage/${imagePath}"))->fit(350, 300); // intervention image
            $image->save();
            $imageArray = ['image' => $image->basename];
        }

        $user->update($request->all());
        $user->profile->update(array_merge(
            $request->all(),
            $imageArray ?? [] // este sobreescribe al anterior
        )); // proteccion para solo actualizar el usuario autenticado, no cualquiera que recibas



        return redirect('/profile/');
    }
}
