<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Request and create bank accounts for each user
        $users = User::all();

        foreach ($users as $user) {
            $accessToken = $this->requestToken($user->username, '12345678'); // Replace 'password' with the user's login password

            if ($accessToken) {
                $this->createBankAccount($user->id, $accessToken);
            }
        }
    }

    private function requestToken($username, $password)
    {
        $response = Http::post('http://34.101.154.14:8175/hackathon/user/auth/token', [
            'username' => $username,
            'loginPassword' => $password,
        ]);

        $json = json_decode($response->getBody(), true);
        if ($response->getStatusCode() === 200 && $json['success']) {
            return $json['data']['accessToken'];
        }

        return null;
    }

    private function createBankAccount($userId, $accessToken)
    {
        $response = Http::withHeaders(['Authorization' => 'Bearer ' . $accessToken])
            ->post('http://34.101.154.14:8175/hackathon/bankAccount/create', [
                'balance' => 100000, // Set the initial balance for the bank account
            ]);

        $json = json_decode($response->getBody(), true);
        if ($response->getStatusCode() === 200 && $json['success']) {
            // Insert the bank account data into your local database
            Account::create([
                'accountNo' => $json['data']['accountNo'],
                'user_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
