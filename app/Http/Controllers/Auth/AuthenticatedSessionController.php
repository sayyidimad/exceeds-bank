<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(Request $request): RedirectResponse
    {
        // Prepare the request data
        $requestData = [
            'username' => $request->username,
            'loginPassword' => $request->password,
        ];

        $response = Http::post('http://34.101.154.14:8175/hackathon/user/auth/token', [
            'username' => $request->username,
            'loginPassword' => $request->password,
        ]);
        $json = json_decode($response->getBody(), true);

        // Check if the API request was successful
        if ($response->getStatusCode() === 200 && $json['success']) {
            config(['session.lifetime' => 15]);

            // Save the accessToken to the cache (you can set the cache expiration time as per your requirement)
            if (auth()->attempt(['name' => $request->username, 'password' => $request->password])) {
                $token = $json['data']['accessToken'];
                Cache::put('access_token', $token, now()->addMinutes(15)); // For example, cache it for 60 minutes

                // Authenticate the user in your application
                $request->session()->regenerate();

                return redirect()->intended(RouteServiceProvider::HOME);
            }
        } else {
            // Handle API request error
            return back()->withErrors('Invalid credentials. Please try again.');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        // Clear the cached access token when the user logs out
        Cache::forget('access_token');

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    function username()
    {
        return 'username';
    }
}
