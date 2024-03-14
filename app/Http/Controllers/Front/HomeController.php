<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Redirect to Home Page
    public function index(){
        return view('front.index');
       }

    public function aboutUs(){
    return view('front.about_us');
    }

    public function attendees(){
        return view('front.attendees');
        }

    public function date(){
        return view('front.date');
        }

    public function paperSubmission(){
        return view('front.paper_submission');
        }

    // public function registration(){
    //     return view('front.registration');
    //     }

    public function contactUs(){
        return view('front.contact_us');
        }
}
