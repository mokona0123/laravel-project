<?php

namespace App\Http\Controllers;

use App\Models\Fund;
use Illuminate\Http\Request;

class FundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Fund::latest()->paginate(5);

        return view('fund.index', compact('data'))
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
        return view('fund.createFund');
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
            'resource_funds' => 'required',
            'funds_category' => 'required',
            'fiscal_year' => 'required'
        ]);

        Fund::create($request->all());

        return redirect()->route('fund.index')
        ->with('success','Fund created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function show(Fund $fund)
    {
        //
        return view('fund.show',compact('fund'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function edit(Fund $fund)
    {
        //
        return view('fund.edit',compact('fund'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fund $fund)
    {
        //
        $request->validate([
            'resource_funds' => 'required',
            'funds_category' => 'required',
            'fiscal_year' => 'required'
        ]);

        $fund->update($request->all());

        return redirect()->route('fund.index')
            ->with('success', 'Fund updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fund $fund)
    {
        //
        $fund->delete();
        return redirect()->route('fund.index')
        ->with('success','Fund deleted successfully');
    }
}
