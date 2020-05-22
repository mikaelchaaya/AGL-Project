<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
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
        $users=User::all();

        return view('admin.ViewAllUsers',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.CreateUser');
    }


    public function store(Request $request)
    {
        $rules=[
            'name'=>'required',
            'email'=>'required',
            'rolename'=>'required',
            'password'=>'required',

        ];

        $this->validate($request,$rules);
        User::create($request->all());
        return redirect('AdminViewAllUsers');
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
        $user = User::findOrFail($id);
  return view('admin.EditUser', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $rules=[
            'name'=>'required',
            'email'=>'required',
            'rolename'=>'required',


        ];

        $this->validate($request,$rules);
        if(trim($request->password) == '' ){

            $input = $request->except('password');
        }else{

            $input = $request->all();
            $input['password'] = bcrypt($request->password);
        }

        $user = User::findOrFail($id);


        $user->update($input);

        return redirect('AdminViewAllUsers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('AdminViewAllUsers');
    }
    public function logout()
    {
      Auth::logout();

        return redirect('home');
    }
}
