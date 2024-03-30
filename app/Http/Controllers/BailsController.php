<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Orphan;
use  App\Models\Bail;

class BailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bails = Bail::latest()->Paginate(5);
        return view('bails.index', compact('bails'))
        ->with('i', (request()->input('page',1)-1)*5);
        // ->with('bails', Bail::all());
        // ['bails' => Bail::all() ]
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bails.create')->with('orphans', Orphan::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bail = Bail::create([
            'orphanname' => $request->input('orphanname'),
            'oamount' => $request->input('oamount'),
            'bnote' => $request->input('bnote'),
            'guardianname' => $request->input('guardianname'),
            'cardid' => $request->input('cardid'),
            'olastdamount' => $request->input('olastdamount'),
            'ophonenumber' => $request->input('ophonenumber'),
            'chekbail' => $request->boolean('chekbail'),
            'orphan_id' => $request->string('orphan_id'),

        ]);

        // $bails = implode ($request->input('chekbail'));  it used for array
        $bail = var_dump ($request->boolean('chekbail'));
        return redirect()->route('bails.index');
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
    public function edit(string $bail)
    {
        return view('bails.edit', ['bail' => Bail::findorfail($bail)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $bail)
    {
        Bail::findorfail($bail)->delete();
        return redirect()->route('bails.index');
    }
}
