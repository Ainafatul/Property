<?php

namespace App\Http\Controllers;

use App\Account;
use App\Agent;
use App\City;
use App\GuideLine;
use App\Like;
use App\Property;
use App\Property_Update;
use App\PropertyRent;
use App\PropertySell;
use App\Review;
use App\Transaction;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Integer;

class PropertyController extends Controller
{

    function MySell()
    {
        $property = Property::where('agent', Auth::id())->get()->all();

        return view('property.Sell', ['datas' => $property]);
    }

    function MyRent()
    {
        $property = Property::where('agent', Auth::id())->get()->all();

        return view('property.Rent', ['datas' => $property]);
    }

    function chart()
    {
        $datas = Like::where('user', Auth::id())->get()->all();
        $result = [];
        foreach ($datas as $data) {
            if (Property::find($data->property) != null) {
                $result[] = Property::find($data->property);
            }
        }
        return view('user.MyChart', ['datas' => $result]);
    }

    function new()
    {
        return view('property.NewProperty');
    }

    function filter(Request $request)
    {
        $filter = [];
//        $data->isSell = PropertySell::find($data->isSell);
//        $data->isRent = PropertyRent::find($data->isRent);
        $city = City::where('name', 'LIKE', '%' . $request->location . '%')->get()->first();
        if (isset($_GET['location']) && $_GET['location'] != '') $filter[] = ['location', 'LIKE', '%' . $city->id . '%'];
        if (isset($_GET['type']) && $_GET['type'] == "Beli") $filter[] = ['isSell', '!=', null];
        if (isset($_GET['type']) && $_GET['type'] == "Sewa") $filter[] = ['isRent', '!=', null];
        if (isset($_GET['km']) && $_GET['km'] != 0 && $_GET['km'] != 99) $filter[] = ['bath_room', $_GET['km']];
        if (isset($_GET['kamar']) && $_GET['kamar'] != 0 && $_GET['kamar'] != 99) $filter[] = ['bed_room', $_GET['kamar']];
        if (isset($_GET['land']) && $_GET['land'] != 0 && $_GET['land'] != 99) $filter[] = ['land_area', '<', $_GET['land']];
//        if (isset($_GET['location']) && $_GET['location'] != '') $filter[] = ['address', 'LIKE', '%' . $_GET['location'] . '%'];
//        $properties = Property::where($filter)->get();
//        if (isset($_GET['maxPrice']) && isset($_GET['minPrice']) && (int)$_GET['minPrice'] != 0 && (int)$_GET['maxPrice'] != 0 >= $_GET['minPrice']) $properties = $this->priceFilter($properties, $request->minPrice, $request->maxPrice);
        $properties = Property::where($filter)->get();
        if (isset($request->maxPrice) && isset($request->minPrice) && $request->minPrice != null && $request->maxPrice != null >= $_GET['minPrice']) $properties = $this->priceFilter($properties, $request->minPrice, $request->maxPrice);
        return view('public.PropertyFilter')->with('properties', $properties);
    }


    function priceFilter($properties, $min, $max)
    {
        $result = [];
        foreach ($properties as $property) {
            if ($property->isSell != null) $property->price = PropertySell::find($property->isSell)->price;
            else$property->price = PropertyRent::find($property->isRent)->price;
            if ($min <= $property->price && $property->price <= $max) $result[] = $property;
        }
        return $result;
    }

    function filter2(Request $request)
    {

        $filter = [];
        $city = City::where('name', 'LIKE', '%' . $request->location . '%')->get()->first();
        if (isset($_GET['location']) && $_GET['location'] != '') $filter[] = ['location', 'LIKE', '%' . $city->id . '%'];
        if (isset($_GET['type']) && $_GET['type'] == "Beli") $filter[] = ['isSell', '!=', null];
        if (isset($_GET['type']) && $_GET['type'] == "Sewa") $filter[] = ['isRent', '!=', null];

        $properties = Property::where($filter)->get();
        if (isset($request->maxPrice) && isset($request->minPrice) && $request->minPrice != null && $request->maxPrice != null >= $_GET['minPrice']) $properties = $this->priceFilter($properties, $request->minPrice, $request->maxPrice);

        return view('public.PropertyFilter')->with('properties', $properties);
    }

    function detail($id)
    {
        return view('public.PropertyDetail', ['property' => Property::find($id)]);
    }

    protected function validator($data)
    {
        return Validator::make($data->all(), [
            'category' => ['required'],
//            'isSell' => ['required'],
//            'isRent' => ['required'],
            'name' => ['required'],
            'bath_room' => ['required'],
            'bed_room' => ['required'],
            'stories' => ['required'],
            'land_area' => ['required'],
            'building_area' => ['required'],
//            'location' => ['required'],
            'address' => ['required'],
        ]);
    }

    function onNew(Request $request)
    {
        $data = [
            'agent' => Auth::id(),
            'category' => $request['category'],
            'name' => $request['name'],
            'bath_room' => $request['bath_room'],
            'bed_room' => $request['bed_room'],
            'stories' => $request['stories'],
            'land_area' => $request['land_area'],
            'building_area' => $request['building_area'],
            'location' => $request['location'],
            'address' => $request['address'],
            'description' => $request['description'],
            'image' => HelperController::uploadImages('property', $request->file('image')),
        ];
        $data['location'] = $request['province'] . "," . $request['city'] . "," . $request['district'] . "," . $request['sub_district'];
        $data['main_image'] = explode(',', $data['image'])[0];
        $validator = $this->validator($request);
        if ($request['isSellSelected'] == 'on')
            if (isset($request['sellPrice'])) {
                PropertySell::create(['price' => $request->sellPrice]);
                $data['isSell'] = PropertySell::latest()->first()->id;
            }
        if ($request['isRentSelected'] == 'on')
            if (isset($request['rentPrice']) && ($request['minRent']) && ($request['typeRent'])) {
//            PropertyRent::create(['price'=>$request->rentPrice,'minRent'=>minRent,'timeType'=>typeRent]);
//            $data['isRent']= PropertyRent::latest()->first()->id;
                $rent = new PropertyRent();
                $rent->price = $request['rentPrice'];
                $rent->minRent = $request['minRent'];
                $rent->timeType = $request['typeRent'];
                $rent->save();
                $data['isRent'] = $rent->id;
            }
        if (!$validator->fails()) {
            if (count(explode(',', $data['image'])) > 7) return redirect()->back()->withErrors('Hanya 7 Gambar yang Diperbolehkan');
            $property = Property::create($data);
            if ($property->isSell != null) {
                return redirect()->route('MySellProperty');
            } else {
                return redirect()->route('MyRentProperty');
            }

        }
        return redirect()->back()->withErrors($validator);
    }

    function delete($id)
    {
        Property::destroy($id);
        return redirect()->back();
    }

    function update($id)
    {
        $data = Property::find($id);
        if (isset($data->isSell)) $data->isSell = PropertySell::find($data->isSell);
        if (isset($data->isRent)) $data->isRent = PropertyRent::find($data->isRent);
        return view('property.UpdateProperty')->with('data', $data);
//        print_r($data);
    }

    function onUpdate(Request $request, $id)
    {
        $property = Property::find($id);
        $property->name = $request['name'];
        $property->bath_room = $request['bath_room'];
        $property->bed_room = $request['bed_room'];
        $property->land_area = $request['land_area'];
        $property->building_area = $request['building_area'];
        if ($request['isSellSelected'] == 'on')
            if (isset($request['sellPrice'])) {
                $sell = PropertySell::find($property['isSell']);
                $sell->price = $request['sellPrice'];
                $sell->save();
            }
        if ($request['isRentSelected'] == 'on')
            if (isset($request['rentPrice']) && ($request['minRent']) && ($request['typeRent'])) {
                $rent = PropertyRent::find($property['isRent']);
                $rent->price = $request['rentPrice'];
                $rent->minRent = $request['minRent'];
                $rent->timeType = $request['typeRent'];
                $rent->save();
            }
        $property['main_image'] = explode(',', $property['image'])[0];
        if (isset($request['image']) != null) {
            $property->image = HelperController::uploadImages('property', $request->file('image'));
        }
        $property->save();

        if ($property->isSell != null) {
            return redirect()->route('MySellProperty');
        } else {
            return redirect()->route('MyRentProperty');
        }
    }

    function onLiked(Request $request)
    {
        $data = [];
        $data['user'] = Auth::id();
        $data['property'] = $request->id;
        Like::create($data);
        return redirect()->back();
    }

    function onUnliked(Request $request)
    {
        $user = Auth::id();
        $query = ['user' => $user, 'property' => $request->id];
        Like::where($query)->get()->first()->delete();
        return redirect()->back();
    }

    static function like($id)
    {
        $user = Auth::id();
        $query = ['user' => $user, 'property' => $id];
        $result = Like::where($query)->get();
        return count($result);
    }

    private static function comparator($object1, $object2)
    {
        return $object1->like < $object2->like;
    }

    static function RecommendedProperty()
    {
        $likes = Like::all();
        $result = [];
        foreach ($likes as $like) {
            $test = Property::find($like->property);
            if ($test != null)
                if (isset($result[$like->property])) {
                    $result[$like->property]->like++;
                } else {
                    $obj = new \stdClass();
                    $obj->like = 1;
                    $obj->id = $like->property;
                    $obj->property = Property::find($like->property);
                    if ($obj->property != null) {
                        $result[$like->property] = $obj;
                    }
                }
        }
        usort($result, array('App\Http\Controllers\PropertyController', 'comparator'));
        return array_slice($result, 0, 6);
    }

    function transaction(Request $request, $id)
    {
        $data = [];
        $data['agent'] = Auth::id();
        $data['property'] = $request->id;
        Transaction::create($data);

        $property = Property::where('id', $id)->get()->first();
        $name = $property->name;
        $agent = $property->agent;
        $category = $property->category;
        $isSell = $property->isSell;
        $isRent = $property->isRent;
        $bath_room = $property->bath_room;
        $bed_room = $property->bed_room;
        $stories = $property->stories;
        $land_area = $property->land_area;
        $building_area = $property->building_area;
        $location = $property->location;
        $address = $property->address;
        $description = $property->description;
        $main_image = $property->main_image;
        $image = $property->image;

        $update = new Property_Update();
        $update->property = $id;
        $update->name = $name;
        $update->agent = $agent;
        $update->category = $category;
        $update->category = $category;
        $update->bath_room = $bath_room;
        $update->bed_room = $bed_room;
        $update->stories = $stories;
        $update->land_area = $land_area;
        $update->building_area = $building_area;
        $update->isSell = $isSell;
        $update->isRent = $isRent;
        $update->location = $location;
        $update->address = $address;
        $update->description = $description;
        $update->main_image = $main_image;
        $update->image = $image;
        $update->save();
        $property->delete();

        return redirect()->back();
    }

    function sold()
    {
        $property = Property_Update::where('agent', Auth::id())->get()->all();

        return view('agent.Sold', ['datas' => $property]);
    }

    function leased()
    {
        $property = Property_Update::where('agent', Auth::id())->get()->all();

        return view('agent.Leased', ['datas' => $property]);
    }

    function AdminSellProperty()
    {
        return view('admin.Sell')->with('datas', Property::all());
    }

    function AdminRentProperty()
    {
        return view('admin.Rent')->with('datas', Property::all());
    }

    function AdminTransaction(Request $request, $id)
    {
        $data = [];
        $data['agent'] = $request->agent;
        $data['property'] = $request->id;
        Transaction::create($data);

        $property = Property::where('id', $id)->get()->first();
        $name = $property->name;
        $agent = $property->agent;
        $category = $property->category;
        $isSell = $property->isSell;
        $isRent = $property->isRent;
        $bath_room = $property->bath_room;
        $bed_room = $property->bed_room;
        $stories = $property->stories;
        $land_area = $property->land_area;
        $building_area = $property->building_area;
        $location = $property->location;
        $address = $property->address;
        $description = $property->description;
        $main_image = $property->main_image;
        $image = $property->image;

        $update = new Property_Update();
        $update->property = $id;
        $update->name = $name;
        $update->agent = $agent;
        $update->category = $category;
        $update->bath_room = $bath_room;
        $update->bed_room = $bed_room;
        $update->stories = $stories;
        $update->land_area = $land_area;
        $update->building_area = $building_area;
        $update->isSell = $isSell;
        $update->isRent = $isRent;
        $update->location = $location;
        $update->address = $address;
        $update->description = $description;
        $update->main_image = $main_image;
        $update->image = $image;
        $update->save();
        $property->delete();

        return redirect()->back();
    }

    static function AgentChart()
    {
        $datas = Agent::all();
        foreach ($datas as $data) {
            $date = self::getDate($data->approve);
            if (isset($index2[$date[1]]))
                $index2[$date[1]]->count += 1;
            else {
                $t = new \stdClass();
                $t->label = self::dateToString($date[1]);
                $t->date = (int)$date[1];
                $t->count = 1;
                $index2[$date[1]] = $t;
            }
        }
        $testtt = [];
        $testtt[] = ['test', 'Total', 'Penambahan'];
        foreach ($index2 as $test) {
            $testtt[] = [$test->label, $test->date, $test->count];
        }
        print_r(json_encode($testtt));
    }

    static function dateToString($mount)
    {
        switch ((int)$mount) {
            case 1:
                return 'January';
            case 2:
                return 'February';
            case 3:
                return 'March';
            case 4:
                return 'April';
            case 5:
                return 'May';
            case 6:
                return 'June';
            case 7:
                return 'July';
            case 8:
                return 'August';
            case 9:
                return 'September';
            case 10:
                return 'October';
            case 11:
                return 'November';
            case 12:
                return 'December';
        }
    }

    static function getDate($date)
    {
        return [substr($date, 8, 2), substr($date, 5, 2), substr($date, 0, 4)];
    }

    function PropertyChart()
    {
        $datas = Property_Update::all();
        $lists = [];
        foreach ($datas as $data) {
            if(!isset($lists[$data->created_at->format('m')])){
                $t = new \stdClass();
                $t->label = $data->created_at->format('M');
                $t->date = $data->created_at->format('m');
                $t->sell = 0;
                $t->rent = 0;
                $lists[$t->date] = $t;
            }

            if (isset($lists[$data->created_at->format('m')])) {
                if($data->isSell) $lists[$data->created_at->format('m')]->sell += 1;
                if ($data->isRent) $lists[$data->created_at->format('m')]->rent += 1;
            }
        }
        $testtt[] = ['test', 'Jual', 'Sewa'];
        foreach ($lists as $list) {
            $testtt[] = [$list->label,(int) $list->sell,(int) $list->rent];
        }
        print_r(json_encode($testtt));
    }

    function testimoni()
    {
        $datas = Review::all();
        return view('test')->with('datas', $datas);
    }

}

