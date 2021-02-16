<?php

namespace App\Http\Controllers\Metamask;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MetamaskController extends Controller
{
    /**
     * Metamask Payment Page
     *
     * @return void
     */
    public function index()
    {
        $response['transactions'] = Transaction::all();
        return view('Pages.Metamsk.metamask')->with($response);
    }
    /**
     * create New Transaction
     *
     * @param  mixed $request
     * @return void
     */
    public function create(Request $request)
    {
        return  Transaction::create([
            "txHash" => $request->txHash,
            "amount" => $request->amount,
        ]);
    }
}
