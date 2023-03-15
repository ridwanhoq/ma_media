<?php

namespace App\Http\Controllers;

use App\Events\SampleEvent;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        // event(new MyEvent('hello world'));
        event(new SampleEvent('This is test'));
        
    }
}
