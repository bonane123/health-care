<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function AddPatient(){
        return view('backend.pages.patient.add_patient');
    }
}
