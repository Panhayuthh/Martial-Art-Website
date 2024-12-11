<?php

namespace App\Http\Controllers;

use App\Models\Event;  // Make sure Event model is included
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch events and paginate them (15 items per page)
        $events = Event::paginate(15);

        // Return the view and pass the $events variable
        return view('admin.adminDashboard', compact('events'));
    }
    
    //public function showRegisterForm()
    //{
        //return view('auth.register');
    //}

    //public function register(Request $request)
    //{
        // Validate the input
        //$request->validate([
            //'email' => 'required|email|unique:users,email',
            //'password' => 'required|string|confirmed|min:8', // password confirmation field
        //]);

        // Hash the password
        //$hashed_password = Hash::make($request->password);

        // Save the user in the database
        //$user = new User();
        //$user->email = $request->email;
        //$user->password = $hashed_password;

        //$user->save();

        // Redirect with success message
        //return redirect()->route('login')->with('success', 'Registration successful! You can now log in.');
    //}
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect(route('admin.dashboard'));
        } else {
            return redirect()->route('login')->with('error', 'Incorrect email or password!');
        }
    }
    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect(route('login'));
}

}