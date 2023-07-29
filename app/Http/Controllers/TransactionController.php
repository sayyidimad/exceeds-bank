<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    function index()
    {
        return view('transfer');
    }

    function index2(Request $request)
    {
        $receiverAccountNumber = $request->query('norek');
        $user = User::whereHas('accounts', function ($query) use ($receiverAccountNumber) {
            $query->where('accountNo', $receiverAccountNumber);
        })->first();

        if ($user) {
            return view('transfer-2', ['user' => $user, 'receiver' => $receiverAccountNumber]);
        } else {
            return redirect()->route('transfer')->with('error', 'User not found for the provided account number.');
        }
    }

    public function store(Request $request)
    {
        // Validate the request data as per your requirements
        $request->validate([
            'sender' => 'required|string',
            'receiver' => 'required|string',
            'amount' => 'required|numeric|min:0',
        ]);

        // Create a new Transaction instance
        $transaction = new Transaction();
        $transaction->sender = $request->input('sender');
        $transaction->receiver = $request->input('receiver');
        $transaction->amount = $request->input('amount');

        // Save the transaction using the custom model method
        $response = $transaction->save();
        if (empty($response)) {
            return redirect()->route('logout');
        }

        $json = json_decode($response->getBody(), true);
        if ($response->getStatusCode() === 200 && $json['success']) {
            // Transaction sent successfully
            return redirect()->route('mutation')->with('success', 'Transaction successful.');
        } else {
            // Transaction failed to send
            dd([$response, $json]);
            return redirect()->route('transfer')->with('error', 'Transaction failed. Please try again later.');
        }
    }
}
