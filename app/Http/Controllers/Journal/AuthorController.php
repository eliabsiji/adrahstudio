<?php

namespace App\Http\Controllers\Journal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AuthorController extends Controller
{


    function __construct()
    {
         $this->middleware('permission:author-list|author-create|author-edit|author-delete', ['only' => ['index','store']]);
         $this->middleware('permission:author-create', ['only' => ['create','store']]);
         $this->middleware('permission:author-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:author-delete', ['only' => ['destroy']]);
    }



    public function index(Request $request)
    {

        $data = User::whereHas('roles', function($q){ $q->where('name', '=','Author'); })->get();

        return view('journalauthors.index',compact('data'))
        ->with('i', ($request->input('page', 1) - 1) * 5);

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $user = User::find($id);
        return view('journalauthors.journallists',compact('user'));
    }


    /**
     * Display the specified resource.
     */
    public function showreview(string $id)
    {
        $user = User::find($id);
        return view('journalauthors.journalreview',compact('user'));
    }




    /**
     * Display the specified resource.
     */
    public function showjournal(string $id)
    {
        $user = User::find($id);
        return view('journalauthors.journal',compact('user'));
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
