<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{ 

    public function register(Request $request)
    {
        # All the forms must be filled by the request
        $incomingFields = $request->validate([

            /* You can also add multiple required stuffs in field in an array: 
        Example: the name must between the 3-10 characters long */
            'name' => ['required', Rule::unique('users', 'name')],
            'email' => ['required', Rule::unique('users', 'email')],
            'password' => 'required',
            'role' => ['required', Rule::unique('users','role')],
        ]);

        # bcrypt is a way to hash something, in this case the password is encrypted
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);

        # Logging in user 
        // Auth::login($user);
        return redirect('gebruiker');
    }


        public function index()
    {
        $users = User::all();
        return view('gebruiker', ['users' => $users]);
    }

}
