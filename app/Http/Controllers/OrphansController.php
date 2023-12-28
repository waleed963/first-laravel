<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orphan;

class OrphansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('orphans.index')
        ->with('orphans', Orphan::all());
        /*->with('orphans', Orphan::all());*/
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orphans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'guardian' => 'required',
            'sponsor' => 'required',
            'date' => 'required',
            'amount' => ['required','integer' ],
            'card_id' => ['required','integer' ],
            'last_amount' => 'required',
            'phonenumber' => ['required','integer' ],
        ]);

        Orphan::create([
            'name' => $request->input('name'),
            'guardian' => $request->input('guardian'),
            'sponsor' => $request->input('sponsor'),
            'date' => $request->input('date'),
            'amount' => $request->input('amount'),
            'card_id' => $request->input('card_id'),
            'last_amount' => $request->input('last_amount'),
            'phonenumber' => $request->input('phonenumber'),
            'note' => $request->input('note'),

        ]);
        return redirect()->route('orphans.index');

        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $orphan)
    {
        return view('orphans.show',
         ['orphan' => Orphan::FindorFail($orphan)]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $orphan)
    {
        return view('orphans.edit', ['orphan' => Orphan::findorfail($orphan)]);

       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $orphan)
    {
       //dd($orphan);
        $request->validate([
            'name' => 'required',
            'guardian' => 'required',
            'sponsor' => 'required',
            'date' => 'required',
            'amount' => ['required','integer' ],
            'card_id' => ['required','integer' ],
            'last_amount' => 'required',
            'phonenumber' => ['required','integer' ],
        ]);

        $orphan = Orphan::where('id',$orphan)->update([
            'name' => $request->input('name'),
            'guardian' => $request->input('guardian'),
            'sponsor' => $request->input('sponsor'),
            'date' => $request->input('date'),
            'amount' => $request->input('amount'),
            'card_id' => $request->input('card_id'),
            'last_amount' => $request->input('last_amount'),
            'phonenumber' => $request->input('phonenumber'),
            'note' => $request->input('note'),

        ]);
        return redirect()->route('orphans.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $orphan)
    {
        Orphan::findorfail($orphan)->delete();
        return redirect()->route('orphans.index');
    }
}
