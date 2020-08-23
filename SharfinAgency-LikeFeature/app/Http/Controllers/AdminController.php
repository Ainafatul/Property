<?php

namespace App\Http\Controllers;

use App\Account;
use App\Admin;
use App\Agent;
use App\Article;
use App\GuideLine;
use App\Mail\DeclineEmail;
use App\Mail\SendMail;
use App\Property_Update;
use App\PropertyRent;
use App\PropertySell;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function dashboard()
    {
        return view('admin.Dashboard', ['data' => AuthController::getData()]);
    }

    protected function newArticle()
    {
        return view('artikel.NewArtikel');
    }

    protected function newGuideline()
    {
        return view('guideline.NewGuideLine');
    }


    protected function validatorGuidelineRegister($data)
    {
        return Validator::make($data->all(), [
            'title' => ['required'],
            'author' => ['required'],
            'content' => ['required'],
            'image' => ['required'],
        ]);
    }

    protected function onNewGuideline(Request $request)
    {
        $data = [
            'title' => $request['title'],
            'author' => $request['author'],
            'content' => $request['content'],
            'image' => $request['image'],
        ];
        $validator = $this->validatorGuidelineRegister($request);
        if (!$validator->fails()) {
            $file = $request->file('image');
            $path = $file->storeAs('public/image/guideline', Carbon::now()->timestamp . '.' . $file->extension());
            $data['image'] = str_replace('public', 'storage', $path);
            GuideLine::create($data);
            return redirect()->route('Guidelines');
        }
        return redirect()->back()->withErrors($validator);
    }

    protected function validatorArticleRegister($data)
    {
        return Validator::make($data->all(), [
            'title' => ['required'],
            'author' => ['required'],
            'content' => ['required'],
            'image' => ['required'],
        ]);
    }

    protected function onNewArticle(Request $request)
    {
        $data = [
            'title' => $request['title'],
            'author' => $request['author'],
            'content' => $request['content'],
            'image' => $request['image'],
        ];
        $validator = $this->validatorGuidelineRegister($request);
        if (!$validator->fails()) {
            $file = $request->file('image');
            $path = $file->storeAs('public/image/article', Carbon::now()->timestamp . '.' . $file->extension());
            $data['image'] = str_replace('public', 'storage', $path);
            Article::create($data);
            return redirect()->route('MyArticle');
        }
        return redirect()->back()->withErrors($validator);
    }

    /////////////////////////////
    //    Approve Agent
    /////////////////////////////

    function approveAgent()
    {
        $datas = Agent::where('approve', null)->get();
        return view('admin.ApproveAgent')->with('datas', $datas);
    }

    function onAgentApproved(Request $request)
    {

        $agent = Agent::find($request->id);
        $agent->approve = Carbon::now();
        $agent->save();
        $details = [
            'title' => 'Mail from Sharfin Agency',
            'body' => 'Agent Telah di Approve'
        ];

        Mail::to(Account::find($agent->id)->email)->send((new SendMail()));

        return redirect()->back();
    }

    function declineAgent($id)
    {
        $agent = Agent::find($id);
        $account = Account::find($id);
        Mail::to(Account::find($agent->id)->email)->send((new DeclineEmail()));
        Agent::destroy($id);
        Account::destroy($id);
        return redirect()->back();
    }

    /////////////////////////////
    //    New Admin
    /////////////////////////////

    function newAdmin()
    {
        return view('admin.RegisterAdmin');
    }


    protected function validatorAdminRegister($data)
    {
        return Validator::make($data->all(), [
            'name' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:accounts'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    function onAdminRegister(Request $request)
    {
        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'role' => 'Admin',
            'password' => Hash::make($request['password']),
            'picture' => $request['picture'],
        ];
        $validator = $this->validatorAdminRegister($request);
        if (!$validator->fails()) {
            Account::create($data);
            $data['id'] = Account::latest()->first()->id;
            $path = $request->file('picture')->storeAs('public/image/users', Carbon::now()->timestamp . '.' . $request->file('picture')->extension());
            $data['picture'] = str_replace('public','storage',$path);
            Admin::create($data);
            return redirect(route('SignIn'));
        } else {
            return redirect(route('AdminRegister'))->withErrors($validator);
        }
    }

    static function PropertyHistory($isSell)
    {
        if($isSell == true){
            $property = Property_Update::where('isSell', '!=', null)->get()->all();
        }else{
            $property = Property_Update::where('isRent', '!=', null)->get()->all();
        }
        return count($property);
    }

    static function AgentHistory()
    {
        $property = Agent::where('approve','!=',null)->get()->all();
        return count($property);
    }

    function sold()
    {
        return view('admin.Sold')->with('datas', Property_Update::all());
    }

    function leased()
    {
        return view('admin.Leased')->with('datas', Property_Update::all());
    }

    static function PriceCount()
    {
        $datas = Property_Update::all();
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
