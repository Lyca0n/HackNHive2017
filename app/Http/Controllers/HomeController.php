<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\PatientProfile;
use App\PhysicianProfile;
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $patient = PatientProfile::where('user_id', '=', \Auth::user()->id)->first();
            $doctor = PhysicianProfile::where('user_id', '=', \Auth::user()->id)->first();
        }catch(Exception $e){
            
        }
        
        if(isset($patient)){
            return redirect()->route('patientprofile.index',['index' => $patient->id]);        
        }elseif(isset($doctor)){
            return redirect()->route('physicianprofile.index',['index' => $doctor->id]);        
        }else{
            return view('home');
        }
        
    }
}
