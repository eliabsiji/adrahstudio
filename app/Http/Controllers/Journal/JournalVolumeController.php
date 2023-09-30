<?php

namespace App\Http\Controllers\Journal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Journal_volumes;

class JournalVolumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     function __construct()
     {
          $this->middleware('permission:journalvolume-list|journalvolume-create|journalvolume-edit|journalvolume-delete', ['only' => ['index','store']]);
          $this->middleware('permission:journalvolume-create', ['only' => ['create','store']]);
          $this->middleware('permission:journalvolume-edit', ['only' => ['edit','update']]);
          $this->middleware('permission:journalvolume-delete', ['only' => ['destroy']]);
     }


    public function index()
    {
        $data = Journal_volumes::all();
        return view('journalvolume.index',compact('data'));
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
        if (Journal_volumes::where('journal_volume', $request->journal_volume)->exists()) {
                return redirect()->route('journalvolume.index')
                        ->with('danger',$request->journal_volume.' created already');

        } else {
            $input = $request->all();
            Journal_volumes::create($input);
            return redirect()->route('journalvolume.index')
                        ->with('success','Journal Volume created successfully');
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
        Journal_volumes::find($id)->delete();
        return redirect()->route('journalvolume.index')
                        ->with('success','Journal Category deleted successfully');
    }
}
