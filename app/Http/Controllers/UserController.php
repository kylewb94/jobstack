<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
  // create
  public function create()
  {
    return view('users.create');
  }

  // store
  public function store(Request $request)
  {
    $formFields = $request->validate([
      'name' => 'required',
      'email' => ['required', 'email', Rule::unique('users', 'email')],
      'password' => 'required|confirmed|min:6'
    ]);

    // Hash password
    $formFields['password'] = bcrypt($formFields['password']);

    // Create user
    $user = User::create($formFields);

    // Login
    auth()->login($user);

    return redirect('/')->with('message', 'Account created successfully!');
  }

  // logout
  public function logout(Request $request)
  {
    auth()->logout();

    $request->session()->invalidate();
    $request->session()->regenerate();

    return redirect('/')->with('message', 'Logged out.');
  }

  // login
  public function login()
  {
    return view('users.login');
  }

  // authenticate
  public function authenticate(Request $request)
  {
    $formFields = $request->validate([
      'email' => ['required', 'email'],
      'password' => 'required'
    ]);

    if (auth()->attempt($formFields)) {
      $request->session()->regenerate();

      return redirect('/')->with('message', 'Logged in.');
    }

    return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
  }
}
