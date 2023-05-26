<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function About(){
        return view('frontend.about');
    }

    public function Services(){
        return view('frontend.services');
    }

    public function Contact(){
        return view('frontend.contact');
    }
    
    public function Appointment(){
        return view('frontend.appointment');
    }
    public function ElearningPatient(){
        return view('frontend.elearning_patient');
    }
    public function ElearningHealthCare(){
        return view('frontend.elearning_healthcare');
    }
}
