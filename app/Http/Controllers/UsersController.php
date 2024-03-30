<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.index')->with('users', User::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // 'usertype' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->input('name'),
            // 'usertype' => $request->input('usertype'),
            'password' => $request->input('password'),
        ]);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $user)
    {
        $request->validate([
            'name' => 'required',
            // 'usertype' => 'required', 
            'password' => 'required',
        ]);

        $user = User::where('id',$user)->update([
            'name' => $request->input('name'),
            // 'usertype' => $request->input('usertype'),
            'password' => $request->input('password'),
        ]);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
