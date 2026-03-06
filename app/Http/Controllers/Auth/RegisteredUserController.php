<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request){

        //validate the request
        $validated = $request ->validate([
            'name'=>['required','string','max:255'],
            'email'=>['required', 'string','email', 'max:255', 'unique:users'],
            'password'=>['required',Password::default()],
            ]);

        //create the user IN THE DB
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        //log them in
        Auth::login($user);

        return redirect('/ideas');
        //redirect home
    }
}
