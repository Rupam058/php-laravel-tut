<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller {

    public function create() {
        return view('auth.register');
    }

    public function store() {

        // Validate the Request
        $validated = request()->validate([
            'first_name' => ['required', 'max:50'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(6), 'confirmed'], // password_confirmation
        ]);

        // create the user
        $user = User::create($validated);

        // log in
        Auth::login($user);

        // redirect to the home page
        return redirect()->to('/jobs');
    }
}
