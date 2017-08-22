<!-- create.blade.php -->

@extends('layouts.app')
@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <hr>
        <div class="form-group row" align="">
            <label class="col-sm-offset-4 col-form-label col-form-label-lg">Basic Information</label>
        </div>
        <hr>

        <div class="form-group row">
            {{csrf_field()}}
            <label for="fname" class="col-sm-2 col-form-label col-form-label-lg">Volunteer Name</label>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-lg" id="Volunteer_Fname"
                       placeholder="First Name" name="fname"
                       value="{{ $volunteer->fname }}"
                       disabled>
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-lg" id="Volunteer_Lname"
                       placeholder="Last Name" name="lname"
                       value="{{ $volunteer->lname }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label col-form-label-lg">Address</label>
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-lg" id="Volunteer_Address"
                       placeholder="Address" name="address1"
                       value="{{ $volunteer->address1 }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="address2" class="col-sm-2 col-form-label col-form-label-lg">Address 2</label>
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-lg" id="Volunteer_Address2"
                       name="address2"
                       value="{{ $volunteer->address2 }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="city" class="col-sm-2 col-form-label col-form-label-lg">City</label>
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-lg" id="Volunteer_City"
                       placeholder="City" name="city"
                       value="{{ $volunteer->city }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="state" class="col-sm-2 col-form-label col-form-label-lg">State</label>
            <div class="col-sm-3">
                <select class="form-control form-control-lg" id="Volunteer_State" name="state" disabled>
                    <option value="">-- Select a State --</option>
                    @foreach(config('states') as $abbr => $state)
                        @if($volunteer->state == $abbr)
                            <option value="{{ $abbr }}" selected>{{ $state }}</option>
                        @else
                            <option value="{{ $abbr }}">{{ $state }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="zip" class="col-sm-2 col-form-label col-form-label-lg">Zip</label>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-lg" id="Volunteer_Zip"
                       placeholder="Zip" name="zip"
                       value="{{ $volunteer->zip }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="education" class="col-sm-2 col-form-label col-form-label-lg">Educational Background</label>
            <div class="col-sm-6">
                <select class="form-control form-control-lg" id="Volunteer_Education" name="education" disabled>
                    <option value ="None"
                            @if($volunteer->education == "None")
                            selected
                            @endif
                    >None</option>
                    <option value="High School Diploma"
                            @if($volunteer->education == "High School Diploma")
                            selected
                            @endif
                    >High School Diploma</option>
                    <option value="Associates of Arts or Sciences"
                            @if($volunteer->education == "Associates of Arts or Sciences")
                            selected
                            @endif
                    >Associates of Arts or Sciences</option>
                    <option value="Bachelors Degree"
                            @if($volunteer->education == "Bachelors Degree")
                            selected
                            @endif
                    >Bachelors Degree</option>
                    <option value="Masters Degree"
                            @if($volunteer->education == "Masters Degree")
                            selected
                            @endif
                    >Masters Degree</option>
                    <option value="Doctorate"
                            @if($volunteer->education == "Doctorate")
                            selected
                            @endif
                    >Doctorate</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="licenses" class="col-sm-2 col-form-label col-form-label-lg">Current Licenses</label>
            <div class="col-sm-6">
                <select class="form-control form-control-lg" id="Volunteer_Licenses" name="licenses" disabled>
                    <option value="None"
                            @if($volunteer->licenses== "None")
                            selected
                            @endif
                    >None</option>
                    <option value="Medical License"
                            @if($volunteer->licenses== "Medical License")
                            selected
                            @endif
                    >Medical License</option>
                    <option value="Education License"
                            @if($volunteer->licenses== "Education License")
                            selected
                            @endif
                    >Educational License</option>
                    <option value="Cosmetic License"
                            @if($volunteer->licenses== "Cosmetic License")
                            selected
                            @endif
                    >Cosmetic License</option>
                    <option value="Child Care License"
                            @if($volunteer->licenses== "Child Care License")
                            selected
                            @endif
                    >Child Care License</option>
                    <option value="Technology License"
                            @if($volunteer->licenses== "Technology License")
                            selected
                            @endif
                    >Technology License</option>
                    <option value="Cooking License"
                            @if($volunteer->licenses== "Cooking License")
                            selected
                            @endif
                    >Cooking License</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label col-form-label-lg">Account Information</label>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-lg" id="Volunteer_Account_Info"
                       placeholder="Username" name="username"
                       value="{{ $volunteer->username }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="phone_home" class="col-sm-2 col-form-label col-form-label-lg">Home Phone</label>
            <div class="col-sm-3">
                <input type="tel" class="form-control form-control-lg" id="Volunteer_Phone"
                       name="phone_home"
                       value="{{ $volunteer->phone_home }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="phone_cell" class="col-sm-2 col-form-label col-form-label-lg">Cell Phone</label>
            <div class="col-sm-3">
                <input type="tel" class="form-control form-control-lg" id="Volunteer_Phone"
                       name="phone_cell"
                       value="{{ $volunteer->phone_cell }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="phone_work" class="col-sm-2 col-form-label col-form-label-lg">Work Phone</label>
            <div class="col-sm-3">
                <input type="tel" class="form-control form-control-lg" id="Volunteer_Work_Phone"
                       name="phone_work"
                       value="{{ $volunteer->phone_work }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label col-form-label-lg">Email Address</label>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-lg" id="Volunteer_Email"
                       placeholder="Email" name="email"
                       value="{{ $volunteer->email }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="drivers_license" class="col-sm-2 col-form-label col-form-label-lg">Drivers License</label>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-lg" id="Volunteer_Driver"
                       placeholder="Drivers License" name="drivers_license"
                       value="{{ $volunteer->drivers_license }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="ssn" class="col-sm-2 col-form-label col-form-label-lg">Social Security</label>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-lg" id="Volunteer_SSN"
                       placeholder="Social Security" name="ssn"
                       value="{{ $volunteer->ssn }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="volunteer_centers" class="col-sm-2 col-form-label col-form-label-lg">Preferred Locations</label>
            <div class="col-sm-3">
                <select class="form-control form-control-lg" id="Volunteer_Location" name="volunteer_centers" disabled>
                    <option value="All"
                            @if($volunteer->volunteer_centers == "All")
                            selected
                            @endif
                    >No Preference</option>
                    <option value="Kings Landing"
                            @if($volunteer->volunteer_centers == "Kings Landing")
                            selected
                            @endif
                    >Kings Landing</option>
                    <option value="Midgar"
                            @if($volunteer->volunteer_centers == "Midgar")
                            selected
                            @endif
                    >Midgar</option>
                    <option value="San Andreas"
                            @if($volunteer->volunteer_centers == "San Andreas")
                            selected
                            @endif
                    >San Andreas</option>
                    <option value="Shadow Moses Island"
                            @if($volunteer->volunteer_centers == "Shadow Moses Island")
                            selected
                            @endif
                    >Shadow Moses Island</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="weekday_availability_start" class="col-sm-2 col-form-label col-form-label-lg">Weekday Availability</label>
            <div class="col-sm-3 input-group" style="width: 278px; padding-left: 15px;">
                <select class="form-control form-control-lg" id="Volunteer_Weekday_Availability" name="weekday_availability_start" disabled>
                    @foreach(['AM', 'PM'] as $ampm)
                        @for($i=1;$i<=12;$i++)
                            @if($volunteer->weekdat_availability_start == $i.$ampm)
                                <option value="{{ $i . $ampm }}" selected>{{ $i }} {{ $ampm }}</option>
                            @else
                                <option value="{{ $i . $ampm }}">{{ $i }} {{ $ampm }}</option>
                            @endif
                        @endfor
                    @endforeach
                </select>
                <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                <select class="form-control form-control-lg" id="Volunteer_Weekday_Availability" name="weekday_availability_end" disabled>
                    @foreach(['AM', 'PM'] as $ampm)
                        @for($i=1;$i<=12;$i++)
                            @if($volunteer->weekday_availability_end == $i.$ampm)
                                <option value="{{ $i . $ampm }}" selected>{{ $i }} {{ $ampm }}</option>
                            @else
                                <option value="{{ $i . $ampm }}">{{ $i }} {{ $ampm }}</option>
                            @endif
                        @endfor
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="weekend_availability_start" class="col-sm-2 col-form-label col-form-label-lg">Weekend Availability</label>
            <div class="col-sm-3 input-group" style="width: 278px; padding-left: 15px;">
                <select class="form-control form-control-lg" id="Volunteer_Weekend_Availability" name="weekend_availability_start" disabled>
                    @foreach(['AM', 'PM'] as $ampm)
                        @for($i=1;$i<=12;$i++)
                            @if($volunteer->weekend_availability_start == $i.$ampm)
                                <option value="{{ $i . $ampm }}" selected>{{ $i }} {{ $ampm }}</option>
                            @else
                                <option value="{{ $i . $ampm }}">{{ $i }} {{ $ampm }}</option>
                            @endif
                        @endfor
                    @endforeach
                </select>
                <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                <select class="form-control form-control-lg" id="Volunteer_Weekend_Availability" name="weekend_availability_end" disabled>
                    @foreach(['AM', 'PM'] as $ampm)
                        @for($i=1;$i<=12;$i++)
                            @if($volunteer->weekend_availability_end == $i.$ampm)
                                <option value="{{ $i . $ampm }}" selected>{{ $i }} {{ $ampm }}</option>
                            @else
                                <option value="{{ $i . $ampm }}">{{ $i }} {{ $ampm }}</option>
                            @endif
                        @endfor
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="skills" class="col-sm-2 col-form-label col-form-label-sm">Volunteer's Skills</label>
            <div class="col-sm-3">
                <select class="form-control form-control-lg" id="Volunteer_Skills" name="skills" disabled>
                    <option value="None"
                            @if($volunteer->skills == "None")
                            selected
                            @endif
                    >None</option>
                    <option value="Drawing"
                            @if($volunteer->skills == "Drawing")
                            selected
                            @endif
                    >Drawing</option>
                    <option value="Programming"
                            @if($volunteer->skills == "Programming")
                            selected
                            @endif
                    >Programming</option>
                    <option value="Baby Sitting"
                            @if($volunteer->skills == "Baby Sitting")
                            selected
                            @endif
                    >Baby Sitting</option>
                    <option value="Cooking"
                            @if($volunteer->skills == "Cooking")
                            selected
                            @endif
                    >Cooking</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="ssn" class="col-sm-2 col-form-label col-form-label-lg">Approval Status</label>
            <div class="col-sm-3">
                <select class="form-control form-control-lg" id="Volunteer_Status" name="approval_status" disabled>
                    <option value="Approved"
                            @if($volunteer->approval_status == "Approved")
                            selected
                            @endif
                    >Approved</option>
                    <option value="Pending Approval"
                            @if($volunteer->approval_status == "Pending Approval")
                            selected
                            @endif
                    >Pending Approval</option>
                    <option value="Disapproved"
                            @if($volunteer->approval_status == "Disapproved")
                            selected
                            @endif
                    >Disapproved</option>
                    <option value="Inactive"
                            @if($volunteer->approval_status == "Inactive")
                            selected
                            @endif
                    >Inactive</option>
                </select>
            </div>
        </div>

        <hr>
        <div class="form-group row">
            <label for="" class="col-sm-offset-4 col-form-label col-form-label-lg">Emergency Contact Information</label>
        </div>
        <hr>

        <div class="form-group row">
            <label for="emergency_fname" class="col-sm-2 col-form-label col-form-label-lg">Contact Name</label>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_Fname"
                       placeholder="Emergency Contact's First Name" name="emergency_fname"
                       value="{{ $volunteer->emergency_fname }}"
                       disabled>
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_Lname"
                       placeholder="Emergency Contact's Last Name" name="emergency_lname"
                       value="{{ $volunteer->emergency_lname }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="emergency_address1" class="col-sm-2 col-form-label col-form-label-lg">Contact Address</label>
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_Address"
                       placeholder="Emergency Contact's Address" name="emergency_address1"
                       value="{{ $volunteer->emergency_address1 }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="emergency_address2" class="col-sm-2 col-form-label col-form-label-lg">Address 2</label>
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_Address2"
                       placeholder="Address 2" name="emergency_address2"
                       value="{{ $volunteer->emergency_address2 }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="emergency_city" class="col-sm-2 col-form-label col-form-label-lg">City</label>
            <div class="col-sm-6">
                <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_City"
                       placeholder="City" name="emergency_city"
                       value="{{ $volunteer->emergency_city }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="emergency_state" class="col-sm-2 col-form-label col-form-label-lg">State</label>
            <div class="col-sm-3">
                <select class="form-control form-control-lg" id="Volunteer_Emergency_State" name="emergency_state"
                        disabled>
                    <option value="">-- Select a State --</option>
                    @foreach(config('states') as $abbr => $state)
                        @if($volunteer->emergency_state == $abbr)
                            <option value="{{ $abbr }}" selected>{{ $state }}</option>
                        @else
                            <option value="{{ $abbr }}">{{ $state }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="emergency_zip" class="col-sm-2 col-form-label col-form-label-lg">Zip</label>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_Zip"
                       placeholder="Zip" name="emergency_zip"
                       value="{{ $volunteer->emergency_zip }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="emergency_phone_home" class="col-sm-2 col-form-label col-form-label-lg">Contact Home Number</label>
            <div class="col-sm-3">
                <input type="tel" class="form-control form-control-lg" id="Volunteer_Emergency_Phone_Home"
                       placeholder="Emergency Home Number" name="emergency_phone_home"
                       value="{{ $volunteer->emergency_phone_home }}"
                       disabled>
            </div>
        </div>

        <div class="form-group row">
            <label for="emergency_phone_cell" class="col-sm-2 col-form-label col-form-label-lg">Contact Cell Number</label>
            <div class="col-sm-3">
                <input type="tel" class="form-control form-control-lg" id="Volunteer_Emergency_Phone_Cell"
                       placeholder="Emergency Cell Number" name="emergency_phone_cell"
                       value="{{ $volunteer->emergency_phone_cell }}"
                       disabled>
            </div>
        </div>
    </div>
@endsection