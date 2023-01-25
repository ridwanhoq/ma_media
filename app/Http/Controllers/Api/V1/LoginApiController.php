<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Components\Traits\ApiHelperTrait;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class LoginApiController extends Controller
{

    use ApiHelperTrait;


    public function loginRequires()
    {
        try {
        } catch (Exception $error) {

            

            return $this->apiOutput(
                config('app.catch_error_message')
            );
        }
    }
}
