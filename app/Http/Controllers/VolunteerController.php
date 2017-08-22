<?php

namespace App\Http\Controllers;

use App\Opportunity;
use Illuminate\Http\Request;
use App\Volunteer;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $opportunities = Opportunity::all();

        if ($opportunityId = $request->input('opp')) {
            $opportunity = Opportunity::find($opportunityId);

            $volunteers = Volunteer::where(function ($query) use ($opportunity) {
                if ($opportunity->volunteer_center == 'All') return $query;

                $query->where('volunteer_centers', '=', 'All')
                    ->orWhere('volunteer_centers', '=', $opportunity->volunteer_center);
            })->where(function ($query) use ($opportunity) {
                if ($opportunity->skills == 'None') return $query;

                $query->where('skills', '=', 'None')
                    ->orWhere('skills', '=', $opportunity->skills);
            })->where(function ($query) use ($opportunity) {
                if ($opportunity->licenses == 'None') return $query;

                $query->where('licenses', '=', 'None')
                    ->orWhere('licenses', '=', $opportunity->licenses);
            });

            //dd($volunteers->toSql(), $volunteers->getBindings(), Volunteer::all());

            $volunteers = $volunteers->get();
        } else {
            $volunteers = Volunteer::all();
        }
        
        return view('volunteer.index', compact('volunteers', 'opportunities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('volunteer.create');
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
            'fname' => 'required|max:100',
            'lname' => 'required|max:100',
            'email' => 'required|email',
            'username' => 'required|max:100',
            'password' => 'required|confirmed',
            'address1' => 'required|max:100',
            'address2' => 'max:100',
            'city' => 'required|max:100',
            'state' => 'required',
            'zip' => 'required|max:20',
            'phone_home' => 'max:12',
            'phone_cell' => 'required|max:12',
            'phone_work' => 'max:12',
            'drivers_license' => 'required|max:100',
            'ssn' => 'required|max:100',
            'approval_status' => 'required|max:100',
            'volunteer_centers' => 'required|max:100',
            'skills' => 'required|max:100',
            'weekday_availability_start' => 'required|max:100',
            'weekday_availability_end' => 'required|max:100',
            'weekend_availability_start' => 'required|max:100',
            'weekend_availability_end' => 'required|max:100',
            'education' => 'required',
            'licenses' => 'required',
            'emergency_fname' => 'required|max:100',
            'emergency_lname' => 'required|max:100',
            'emergency_address1' => 'required|max:100',
            'emergency_address2' => 'max:100',
            'emergency_city' => 'required|max:100',
            'emergency_state' => 'required',
            'emergency_zip' => 'required|max:20',
            'emergency_phone_home' => 'max:12',
            'emergency_phone_cell' => 'required|max:12',
        ]);

        Volunteer::create($request->all());

        return redirect('/volunteer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $volunteer = Volunteer::find($id);

        return view('volunteer.view',compact('volunteer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $volunteer = Volunteer::find($id);

        return view('volunteer.edit', compact('volunteer', 'id'));
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
            'fname' => 'required|max:100',
            'lname' => 'required|max:100',
            'email' => 'required|email',
            'username' => 'required|max:100',
            'address1' => 'required|max:100',
            'address2' => 'max:100',
            'city' => 'required|max:100',
            'state' => 'required',
            'zip' => 'required|max:20',
            'phone_home' => 'max:12',
            'phone_cell' => 'required|max:12',
            'phone_work' => 'max:12',
            'drivers_license' => 'required|max:100',
            'ssn' => 'required|max:100',
            'approval_status' => 'required|max:100',
            'volunteer_centers' => 'required|max:100',
            'skills' => 'required|max:100',
            'weekday_availability_start' => 'required|max:100',
            'weekday_availability_end' => 'required|max:100',
            'weekend_availability_start' => 'required|max:100',
            'weekend_availability_end' => 'required|max:100',
            'education' => 'required',
            'licenses' => 'required',
            'emergency_fname' => 'required|max:100',
            'emergency_lname' => 'required|max:100',
            'emergency_address1' => 'required|max:100',
            'emergency_address2' => 'max:100',
            'emergency_city' => 'required|max:100',
            'emergency_state' => 'required',
            'emergency_zip' => 'required|max:20',
            'emergency_phone_home' => 'max:12',
            'emergency_phone_cell' => 'required|max:12',
        ]);

        Volunteer::find($id)->update($request->all());
        return redirect('/volunteer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Volunteer::find($id)->delete();

        return redirect('/volunteer');
    }
}
