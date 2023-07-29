<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Transaction
{
    protected $url = "http://34.101.154.14:8175/hackathon/bankAccount/transaction/create";
    public $sender, $receiver, $amount;

    public function save()
    {
        $accessToken = Cache::get('access_token');

        if ($accessToken) {
            $data = [
                'senderAccountNo' => $this->sender,
                'receiverAccountNo' => $this->receiver,
                'amount' => $this->amount,
            ];

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken, // Replace this with a method to get the access token
                'Content-Type' => 'application/json',
            ])->post($this->url, $data);

            return $response;
        } else {
            return null;
        }
    }
}
