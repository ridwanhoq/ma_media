<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $data['collection'] = User::get();

        

        return view("admin.matched_profiles.index", compact('data'));
    }


}
