<?php

namespace App\Http\Controllers;

use App\Http\Components\Traits\ApiHelperTrait;
use App\Http\Components\Traits\ValidateApiTrait;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, ApiHelperTrait;
}
