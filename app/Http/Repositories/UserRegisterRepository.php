<?php

namespace App\Http\Repositories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserRegisterRepository
{

    public function formData()
    {
        $request = request();
        
        return [
            "name"          => $request->name,
            "date_of_birth" => "1990-01-01",
            "gender"        => $request->gender,
            "phone_number"  => $request->phone_number,
            "country_id"    => $request->country,
            "email"         => $request->email,
            "password"      => Hash::make(
                $request->password
            ),
            "email_verified_at" => now(),
            "remember_token"    => Str::random(10)
        ];
    }
}
