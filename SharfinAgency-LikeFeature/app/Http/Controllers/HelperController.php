<?php

namespace App\Http\Controllers;

use App\City;
use App\District;
use App\Province;
use App\SubDistrict;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    static function uploadImages($folder, $files)
    {
        $images = '';
        $i = 0;
        foreach ($files as $file) {
            $path = $file->storeAs('public/image/' . $folder, Carbon::now()->timestamp . $i . '.' . $file->extension());
            if ($i != 0) $images .= ',';
            $images .= str_replace('public', 'storage', $path);
            $i++;
        }
        return $images;
    }

    static function uploadImage($folder, $file)
    {
        $path = $file->storeAs('public/image/' . $folder, Carbon::now()->timestamp . '.' . $file->extension());
        $images = str_replace('public', 'storage', $path);
        return $images;
    }

    static function parseLocation($input)
    {
        $location = explode(',', $input);
        return Province::find($location[0])->name . ', ' . City::find($location[1])->name . ', ' . District::find($location[2])->name . ', ' . SubDistrict::find($location[3])->name . ', ';
    }

    static function parseGender($code)
    {
        if ($code) return "Laki-Laki";
        else return "Perempuan";
    }

    public function getAutocompleteData(Request $request)
    {
        return City::where('name', 'like', '%' . $request->input('term') . '%')->get('name');
    }
}
