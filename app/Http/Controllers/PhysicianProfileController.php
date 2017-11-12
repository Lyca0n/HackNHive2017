<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PhysicianProfile;

class PhysicianProfileController extends Controller
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
    
    public function create(){
        return view('physicianprofile/create');
    }
    
    public function store(Request $request){
        $profile = new PhysicianProfile();
        $profile->name = $request->input('name');
        $profile->lastname = $request->input('lastname');
        $profile->birthdate = $request->input('birthdate');
        $profile->bloodtype = $request->input('bloodtype');
        $profile->sex = $request->input('sex');
        $profile->location = $request->input('location');
        $profile->zip = $request->input('zip');
        $profile->curp = $request->input('curp');
        $profile->phone = $request->input('phone');
        $profile->user_id = \Auth::user()->id;
        $profile->save();
        return redirect()->route('patientprofile.index');
    }  
    public function index(){
       return view('patientprofile/index'); 
    }
}
