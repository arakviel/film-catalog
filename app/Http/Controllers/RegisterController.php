<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * Крута тема 👉 https://t.me/hamster_kombaT_bot/start?startapp=kentId732285103
     * Ну треба рефів фармити, тока так
     */
    public function store(StoreUserRequest $request)
    {
        $registeredUserArray = $request->validated();
        $registeredUserArray['password'] = Hash::make($registeredUserArray['password']);
        $user = User::query()->create($registeredUserArray);
        auth()->login($user);

        event(new Registered($user));

        return redirect('/profile');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
