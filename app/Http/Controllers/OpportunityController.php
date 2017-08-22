<?php

namespace App\Http\Controllers;

use App\Opportunity;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opportunities = Opportunity::all();

        return view('opportunity.index', compact('opportunities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('opportunity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:200',
            'address1' => 'required|max:100',
            'address2' => 'max:100',
            'city' => 'required|max:100',
            'state' => 'required|max:100',
            'volunteer_center' => 'required|max:100',
            'licenses' => 'required|max:100',
            'skills' => 'required|max:100',
            'weekday_availability_start' => 'required|max:100',
            'weekday_availability_end' => 'required|max:100',
            'weekend_availability_start' => 'required|max:100',
            'weekend_availability_end' => 'required|max:100',
        ]);

        Opportunity::create($request->all());

        return redirect('/opportunity');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $opportunity = Opportunity::find($id);

        return view('opportunity.view', compact('opportunity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opportunity = Opportunity::find($id);

        return view('opportunity.edit', compact('opportunity', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|max:200',
            'address1' => 'required|max:100',
            'address2' => 'max:100',
            'city' => 'required|max:100',
            'state' => 'required|max:100',
            'volunteer_center' => 'required|max:100',
            'licenses' => 'required|max:100',
            'skills' => 'required|max:100',
            'weekday_availability_start' => 'required|max:100',
            'weekday_availability_end' => 'required|max:100',
            'weekend_availability_start' => 'required|max:100',
            'weekend_availability_end' => 'required|max:100',
        ]);



        Opportunity::find($id)->update($request->all());
        return redirect('/opportunity');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Opportunity::find($id)->delete();

        return redirect('/opportunity');
    }
}
