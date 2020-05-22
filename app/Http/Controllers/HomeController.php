<?php

namespace App\Http\Controllers;

use App\Wash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user=Auth::user();
        if ($user->rolename=='client') {
            $washes=Wash::where('Clientid','=',$user->id)->get();

            return view('client.index', compact('user','washes'));
        }
        if ($user->rolename=='store') {
            $washes=Wash::where('Storeid','=',$user->id)->get();

            return view('store.index', compact('user','washes'));
        }
        if ($user->rolename=='admin') {


            return view('admin.index',compact('user'));
        }
    }
}
