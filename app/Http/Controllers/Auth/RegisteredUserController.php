<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    // Show registration form
    public function create(): View
    {
        return view('auth.register');
    }

    // Store new user
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => ['required','confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return back()->with('success', 'User registered successfully!');
    }

    // Show all users (Dashboard)
    public function index(): View
    {
        $users = User::all();
        return view('dashboard', compact('users'));
    }

    // Edit user
    public function edit($id): View
    {
        $user = User::findOrFail($id);
        return view('edit', compact('user'));
    }

    // Update user
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users,email,'.$id],
            'password' => ['nullable','confirmed'], // optional
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        // // Update password only if entered
        // if ($request->password) {
        //     $user->password = Hash::make($request->password);
        // }

        $user->save();

        return redirect()->route('users.index')->with('success','User updated successfully!');
    }

    // Delete user
    public function destroy($id): RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->delete();

        return back()->with('success','User deleted successfully!');
    }
}
