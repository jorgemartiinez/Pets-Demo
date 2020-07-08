<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Http\Requests\AdRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::where('state', 1)->paginate(4);
        return view('ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ads.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdRequest $request)
    {
        if (request('user_id') == Auth::user()->id) {

            $imageArray = [];
            $imagePath = request('image')->store('img/pets', 'public');
            $image = Image::make(public_path("storage/${imagePath}"))->fit(650, 850); // intervention image
            $image->save();
            $imageArray = ['image' => $image->basename];

            $req = array_merge(
                $request->all(),
                $imageArray
            );

            $ad = Ad::create($req);

            return redirect('/ads/show');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ad = Ad::findOrFail($id);
        return view('ads.show', compact('ad'));
    }

    public function showForUser()
    {
        $ads = Ad::where('user_id', '=', Auth::user()->id)->get();
        return view('ads.show-user', compact('ads'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ad = Ad::findOrFail($id);
        return view('ads.create-edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Ad::findOrFail($id);
        if ($ad->user_id == Auth::user()->id) {
            $ad->delete();
        }
        return redirect('/ads/show');
    }
}
