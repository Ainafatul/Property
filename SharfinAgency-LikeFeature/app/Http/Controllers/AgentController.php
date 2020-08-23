<?php

namespace App\Http\Controllers;

use App\Agent;
use App\Property_Update;
use App\PropertyRent;
use App\PropertySell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{

    function dashboard()
    {
        return view('agent.Dashboard', ['data' => AuthController::getData()]);
    }

    function newProperty()
    {

        return view('agent.NewProperty', ['data' => AuthController::getData()]);
    }

    function list()
    {
        return view('public.AgentList', ['agents' => Agent::all()]);
    }

    function detail($id)
    {
        return view('public.AgentDetail', ['agent' => Agent::find($id)]);
    }

    function detailAgent($id)
    {
        return view('admin.AgentDetail', ['agent' => Agent::find($id)]);
    }

    function show()
    {
        return view('admin.MyApprove', ['agents' => Agent::all()]);
    }

    function filter(Request $request)
    {
        $filter = [];
        $filter[] = ['agency', 'LIKE', '%' . $request->agency . '%'];
        return view('public.AgentList')->with('agents', Agent::where($filter)->get());
    }

    static function PropertyHistory($isSell)
    {
        if ($isSell == true) {
            $filter = ['agent' => Auth::id(),
                ['isSell', '!=', null]];
        } else {
            $filter = ['agent' => Auth::id(),
                ['isRent', '!=', null]];
        }
        $property = Property_Update::where($filter)->get()->all();
        return (count($property));
    }

    static function PriceCount()
    {
        $datas = Property_Update::where('agent', Auth::id())->get()->all();
        $sold = 0;
        $leased = 0;
        foreach ($datas as $data) {
            $sell = PropertySell::find($data->isSell);
            if ($sell != null) $sold += $sell->price;
            $rent = PropertyRent::find($data->isRent);
            if ($rent != null) $leased += $rent->price;
        }
        return [$sold, $leased];
    }



}
