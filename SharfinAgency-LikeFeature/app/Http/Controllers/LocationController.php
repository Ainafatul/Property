<?php

namespace App\Http\Controllers;

use App\City;
use App\District;
use App\Province;
use App\SubDistrict;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    static public function getProvinces()
    {
        return Province::all();
    }

    public function getCities($id)
    {
        return City::where('province_id', $id)->get();
    }

    public function getDistricts($id)
    {
        return District::where('city_id', $id)->get();
    }

    static public function getSubDistricts($id)
    {
        return SubDistrict::where('district_id', $id)->get();
    }

    static function toString($data)
    {
        $province = explode(",",$data)[0];
        $city = explode(",",$data)[1];
        $district = explode(",",$data)[2];
        $subDistrict = explode(",",$data)[3];
        return Province::find($province)->name .", ". City::find($city)->name .", ". District::find($district)->name .", ". SubDistrict::find($subDistrict)->name;
    }
}
