<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\PatientProfile;

class PatientProfileController extends Controller
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
        return view('patientprofile/create');
    }
    
    public function store(Request $request){
        $profile = new PatientProfile();
        $profile->name = $request->input('name');
        $profile->lastname = $request->input('lastname');
        if( $request->hasFile('profilepicture') ) {
            $file = $request->file('profilepicture') ;
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $profile->profilepicture = $fileName;
        }
        $profile->birthdate = $request->input('birthdate');
        $profile->bloodtype = $request->input('bloodtype');
        $profile->sex = $request->input('sex');
        $profile->location = $request->input('location');
        $profile->zip = $request->input('zip');
        $profile->curp = $request->input('curp');
        $profile->phone = $request->input('phone');
        $profile->user_id = \Auth::user()->id;
        $profile->save();
        return redirect()->route('patientprofile.index',['index' => $profile->id]);
    }  
    public function index($id){
       return view('patientprofile/index')->withProfile(PatientProfile::find($id)); 
    }
}
