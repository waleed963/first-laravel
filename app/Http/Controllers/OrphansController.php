<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orphan;
use  App\Models\Bail;
use App\Http\Controllers\BailsController;

class OrphansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $title = 'Orphans';
        $orphans = Orphan::latest()->Paginate(5);
        return view('orphans.index', compact('orphans'))
        ->with('i', (request()->input('page', 1) -1 ) * 5 )
        ->with('bails', Bail::all());

        //
        // return view('orphans.index')
        // ->with('orphans', Orphan::all());

        //
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
            'sponsorname' => 'required',
            'slastdamount' => 'required',
            'samount' => ['required','integer' ],
            'sphonenumber' => ['required','integer' ],
            'fromdate' => 'required',
            'todate' => 'required',
            'orphanname' => 'required',
            'guardianname' => 'required',
            'dateofbirth' => 'required',
            'oamount' => ['required','integer' ],
            'cardid' => ['required','integer' ],
            'ophonenumber' => ['required','integer' ],
        ]);

        Orphan::create([
            'sponsorname' => $request->input('sponsorname'),
            'sphonenumber' => $request->input('sphonenumber'),
            'slastdamount' => $request->input('slastdamount'),
            'fromdate' => $request->input('fromdate'),
            'snote' => $request->input('snote'),
            'orphanname' => $request->input('orphanname'),
            'dateofbirth' => $request->input('dateofbirth'),
            'oamount' => $request->input('oamount'),
            'todate' => $request->input('todate'),
            'onote' => $request->input('onote'),
            'guardianname' => $request->input('guardianname'),
            'cardid' => $request->input('cardid'),
            'samount' => $request->input('samount'),
            'ophonenumber' => $request->input('ophonenumber'),

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

        $request->validate([
            'sponsorname' => 'required',
            'slastdamount' => 'required',
            'samount' => ['required','integer' ],
            'sphonenumber' => ['required','integer' ],
            'fromdate' => 'required',
            'todate' => 'required',
            'orphanname' => 'required',
            'guardianname' => 'required',
            'dateofbirth' => 'required',
            'oamount' => ['required','integer' ],
            'cardid' => ['required','integer' ],
            'ophonenumber' => ['required','integer' ],
        ]);
        $orphan = Orphan::where('id',$orphan)->update([
            'sponsorname' => $request->input('sponsorname'),
            'sphonenumber' => $request->input('sphonenumber'),
            'slastdamount' => $request->input('slastdamount'),
            'fromdate' => $request->input('fromdate'),
            'snote' => $request->input('snote'),
            'orphanname' => $request->input('orphanname'),
            'dateofbirth' => $request->input('dateofbirth'),
            'oamount' => $request->input('oamount'),
            'todate' => $request->input('todate'),
            'onote' => $request->input('onote'),
            'guardianname' => $request->input('guardianname'),
            'cardid' => $request->input('cardid'),
            'samount' => $request->input('samount'),
            'ophonenumber' => $request->input('ophonenumber'),

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
