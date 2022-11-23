<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchedProfileController extends Controller
{
    /**
     * It shows list of
     * matched profiles
     * 
     */

    public function index()
    {

        

        return view("admin.matched_profiles.index");
    }


}
