<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEducation extends Model
{
    use HasFactory;

    public static function rules(){
        return [
            "institution_name"  => "required",
            "degree"            => "unique:user_educations"
        ];
    }
}
