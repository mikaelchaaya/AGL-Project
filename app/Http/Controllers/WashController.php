<?php

namespace App\Http\Controllers;

use App\User;
use App\Wash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $stores=User::where('rolename','=','store')->get()->pluck('name','id')->all();

//        $stores->where('rolename','=','store')->get();
//        $stores->pluck('name','id')->all();
        return view ('client.Createwash',compact('stores'));

    }


    public function store(Request $request)
    {
        $rules=[
            'Description'=>'required',
            'Storeid'=>'required',
        ];

        $this->validate($request,$rules);
        $wash=new Wash();
        $wash->Description=$request->Description;
        $wash->Clientid=Auth::user()->id;
        $wash->Storeid=$request->Storeid;
        $wash->Status='waiting for approval';
        $wash->save();
         return redirect('home');
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
        $wash=Wash::findorfail($id);
        $drivers=User::where('Storeid','=',Auth::user()->id)->pluck('name','id')->all();
        return view('store.edit',compact('wash','drivers'));
    }


    public function update(Request $request, $id)
    {

        $rules=[
            'Status'=>'required',
        ];

        $this->validate($request,$rules);
        $wash=Wash::findorfail($id);


        $wash->Status=$request->Status;
        if ($request->has('Driver'))
        {
            if ($wash->Status=='Accepted'){
                $wash->Driverid=$request->Driver;
            }

        }

        $wash->save();

        return redirect('/home');
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
