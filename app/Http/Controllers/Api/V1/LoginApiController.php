<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Components\Traits\ApiHelperTrait;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginApiController extends Controller
{
    
    use ApiHelperTrait;


    public function __invoke()
    {
        return $this->apiSuccess("success", [
            'a' => 'b'
        ]);


    }

}
