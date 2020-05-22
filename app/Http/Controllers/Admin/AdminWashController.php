<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Wash;
use Illuminate\Http\Request;

class AdminWashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $washes=Wash::all();
        return (view('admin.ViewAllWashes',compact('washes')));
    }


}
