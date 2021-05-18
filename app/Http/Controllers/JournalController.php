<?php

namespace App\Http\Controllers;

use App\Models\Journals;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Journals::first()->paginate(5);

        return view('journals.index', compact('data'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('journals.createJournals');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Journals::create($request->all());

        return redirect()->route('journals.index')
        ->with('success','Journal created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Journals  $journals
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $journals=Journals::find($id);
        return view('journals.show',compact('journals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Journals  $journals
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $journals=Journals::find($id);
        return view('journals.edit',compact('journals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Journals  $journals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $journals=Journals::find($id);
        $journals->update($request->all());

        return redirect()->route('journals.index')
            ->with('success', 'Journal updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Journals  $journals
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $journals=Journals::find($id);
        $journals->delete();
        return redirect()->route('journals.index')
        ->with('success','Journal deleted successfully');
    }
}
