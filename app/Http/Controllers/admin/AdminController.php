<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Nette\Utils\Validators;
use Validator;
use Session;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user() && Auth::user()->role_id == 1){
            return redirect('admin/dashboard');   
        }else{
            return  view('admin.login');
        }
    }


    public function login(Request $request)
    {   
        $request->validate([
            'email' => 'bail|string|required|email|max:255',
            'password' => 'required'
        ]);
        // dd($pas);
        // dd($request->all());
        // dd(Auth::attempt([
        //     'email' => $request->email,
        //     'password' => $request->password
        // ]));
        
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])){
            $userID = auth()->user()->id;
            $user = User::find($userID);
            // dd(session()->all());
            return  view('admin.dashboard');
        }else{
            return back()->with('error', 'Email and Password is incorrect');
        }
        
    
    }

    public function register()
    {
        return view('admin.register');
    }

    public function registration(Request $request)
    {
        
        $request->validate([
            'name' => 'string|required',
            'email' => 'bail|string|required|email|max:255',
            'phone' => 'required|numeric',
            'role' => 'required|numeric',
            'password' => 'required'
        ]);
        $password = Hash::make($request->password);
        // dd($password);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role_id' => $request->role,
            'password' => $password

        ];

        $createUser = User::create($data);
        return redirect('/admin/register')->with('success','User register successfully');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
