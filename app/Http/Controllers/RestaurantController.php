<?php

namespace App\Http\Controllers;

use App\Address;
use App\Category;
use App\District;
use App\Provind;
use App\Restaurant;
use App\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('restaurant.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $provind = Provind::all();
        $district = District::all();
        $ward = Ward::all();

        return view('restaurant.create', compact('category','provind','district','ward'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required',
                'avartar' => 'required',
                'phone' => 'required',
                'openTime' => 'required',
                'closeTime' => 'required',
                'shortDescription' => 'required',
            ]

        );
        $restaurant = new Restaurant();
        $restaurant -> categoryID = Input::get('category');
        $restaurant -> name = Input::get('name');
        $restaurant -> avartar = Input::get('avartar');
        $address = new Address();
        $address -> provindID = Input::get('provind');
        $address -> districtID = Input::get('district');
        $address -> wardID = Input::get('ward');
        $address -> save();
        $restaurant -> addressID = $address->id;
        $restaurant -> phone = Input::get('phone');
        $restaurant -> openTime = Input::get('openTime');
        $restaurant -> closeTime = Input::get('closeTime');
        $restaurant -> shortDescription = Input::get('shortDescription');
        $restaurant -> description = Input::get('description');
        $restaurant -> status = Input::get('status');
        $restaurant ->save();
        return 'OK';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
