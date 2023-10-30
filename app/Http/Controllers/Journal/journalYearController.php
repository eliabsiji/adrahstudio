<?php

namespace App\Http\Controllers\journal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Journal_year;


class journalYearController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:journalyear-list|journalyear-create|journalyear-edit|journalyear-delete', ['only' => ['index','store']]);
         $this->middleware('permission:journalyear-create', ['only' => ['create','store']]);
         $this->middleware('permission:journalyear-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:journalyear-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $data  = Journal_year::all();
        return view('journalyear.index',compact('data'));
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
        if (Journal_year::where('journal_year', $request->journal_year)->exists()) {
            return redirect()->route('journalyear.index')
                    ->with('danger',$request->journal_year.' created already');

    } else {
        $input = $request->all();
        Journal_year::create($input);
        return redirect()->route('journalyear.index')
                    ->with('success','Journal Year created successfully');
    }
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
