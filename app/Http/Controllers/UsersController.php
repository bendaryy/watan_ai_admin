<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
    public function index()
    {
        $response = Http::withOptions(['verify' => false])->withHeaders([
            // 'Authorization' => 'Bearer YOUR_ACCESS_TOKEN',
            'AppKey' => env('AppKey'),
        ])
            ->get(env('BaseUrl') . '/allusers');
        $data = $response->json();

        if (isset($data) && is_array($data)) {

            $numberOfObjects = count($data);

        } else {
            echo "Invalid response format.";
        }
        // return $data;
        return view('users.index', compact('data', "numberOfObjects"));
    }
}
