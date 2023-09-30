<?php

namespace App\Http\Controllers\Journal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Journal_category;

class JournalCategoryController extends Controller
{


    function __construct()
    {
         $this->middleware('permission:journalcategory-list|journalcategory-create|journalcategory-edit|journalcategory-delete', ['only' => ['index','store']]);
         $this->middleware('permission:journalcategory-create', ['only' => ['create','store']]);
         $this->middleware('permission:journalcategory-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:journalcategory-delete', ['only' => ['destroy']]);
    }


    public function index()
    {

        $data = Journal_category::all();
        return view('journalcategory.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if (Journal_category::where('journal_category', $request->journal_category)->exists()) {
            return redirect()->route('journalcategory.index')
                    ->with('danger',$request->journal_category.' created already');

        } else {
            $input = $request->all();
            Journal_category::create($input);
            return redirect()->route('journalcategory.index')
                        ->with('success','Journal category created successfully');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jcat = Journal_category::find($id);
        return view('journalcategory.edit',compact('jcat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'journal_category' => 'required',
        ]);
        $input = $request->all();
        $jcat = Journal_category::find($id);
        $jcat->update($input);
        return redirect()->route('journalcategory.index')
        ->with('success','journal Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Journal_category::find($id)->delete();
        return redirect()->route('journalcategory.index')
                        ->with('success','Category deleted successfully');
    }
}
