<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user = User::find(1);
        
        $transactions = $user->balanceTransactions();

        $data = [];

        foreach($transactions as $transaction){
            $data["amount"]     = $transaction->amount();
            $data["invoice"]    = $transaction->invoice();
        }

        dd($data);
    }
}
