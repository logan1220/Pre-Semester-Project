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
        <form method="post" action="{{ url('volunteer') }}">

            <hr>
            <div class="form-group row" align="">
                <label class="col-sm-offset-4 col-form-label col-form-label-lg">Basic Information</label>
            </div>
            <hr>

            <div class="form-group row {{ $errors->has('fname') ? ' has-error' : '' }}">
                {{csrf_field()}}
                <label for="fname" class="col-sm-2 col-form-label col-form-label-lg">Volunteer Name</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Fname"
                           placeholder="First Name"
                           name="fname"
                           value="{{ old('fname') }}"
                           required>
                </div>
                <div class="col-sm-3 {{ $errors->has('lname') ? ' has-error' : '' }}">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Lname"
                           placeholder="Last Name"
                           name="lname"
                           value="{{ old('lname') }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('address1') ? ' has-error' : '' }}">
                <label for="address" class="col-sm-2 col-form-label col-form-label-lg">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Address"
                           placeholder="Address"
                           name="address1"
                           value="{{ old('address1') }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('address2') ? ' has-error' : '' }}">
                <label for="address2" class="col-sm-2 col-form-label col-form-label-lg">Address 2</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Address2"
                           placeholder="Address 2"
                           name="address2"
                           value="{{ old('address2') }}">
                </div>
            </div>

            <div class="form-group row {{ $errors->has('city') ? ' has-error' : '' }}">
                <label for="city" class="col-sm-2 col-form-label col-form-label-lg">City</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_City"
                           placeholder="City"
                           name="city"
                           value="{{ old('city') }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('state') ? ' has-error' : '' }}">
                <label for="state" class="col-sm-2 col-form-label col-form-label-lg">State</label>
                <div class="col-sm-3">
                    <select class="form-control form-control-lg" id="Volunteer_State" name="state" required>
                        <option value="">-- Select a State --</option>
                        @foreach(config('states') as $abbr => $state)
                            @if(old('state') == $abbr)
                                <option value="{{ $abbr }}" selected>{{ $state }}</option>
                            @else
                                <option value="{{ $abbr }}">{{ $state }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('zip') ? ' has-error' : '' }}">
                <label for="zip" class="col-sm-2 col-form-label col-form-label-lg">Zip</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Zip"
                           placeholder="Zip"
                           name="zip"
                           value="{{ old('zip') }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('education') ? ' has-error' : '' }}">
                <label for="education" class="col-sm-2 col-form-label col-form-label-lg">Educational Background</label>
                <div class="col-sm-6">
                    <select class="form-control form-control-lg" id="Volunteer_Education" name="education" required>
                        <option value ="None"
                                @if(old('education') == "None")
                                selected
                                @endif
                        >None</option>
                        <option value="High School Diploma"
                                @if(old('education') == "High School Diploma")
                                selected
                                @endif
                        >High School Diploma</option>
                        <option value="Associates of Arts or Sciences"
                                @if(old('education') == "Associates of Arts or Sciences")
                                selected
                                @endif
                        >Associates of Arts or Sciences</option>
                        <option value="Bachelors Degree"
                                @if(old('education') == "Bachelors Degree")
                                selected
                                @endif
                        >Bachelors Degree</option>
                        <option value="Masters Degree"
                                @if(old('education') == "Masters Degree")
                                selected
                                @endif
                        >Masters Degree</option>
                        <option value="Doctorate"
                                @if(old('education') == "Doctorate")
                                selected
                                @endif
                        >Doctorate</option>
                    </select>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('licenses') ? ' has-error' : '' }}">
                <label for="licenses" class="col-sm-2 col-form-label col-form-label-lg">Current Licenses</label>
                <div class="col-sm-6">
                    <select class="form-control form-control-lg" id="Volunteer_Licenses" name="licenses" required>
                        <option value="None"
                                @if(old('licenses') == "None")
                                selected
                                @endif
                        >None</option>
                        <option value="Medical License"
                                @if(old('licenses') == "Medical License")
                                selected
                                @endif
                        >Medical License</option>
                        <option value="Education License"
                                @if(old('licenses') == "Education License")
                                selected
                                @endif
                        >Educational License</option>
                        <option value="Cosmetic License"
                                @if(old('licenses') == "Cosmetic License")
                                selected
                                @endif
                        >Cosmetic License</option>
                        <option value="Child Care License"
                                @if(old('licenses') == "Child Care License")
                                selected
                                @endif
                        >Child Care License</option>
                        <option value="Technology License"
                                @if(old('licenses') == "Technology License")
                                selected
                                @endif
                        >Technology License</option>
                        <option value="Cooking License"
                                @if(old('licenses') == "Cooking License")
                                selected
                                @endif
                        >Cooking License</option>
                    </select>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="username" class="col-sm-2 col-form-label col-form-label-lg">Account Information</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Account_Info"
                           placeholder="Username"
                           name="username"
                           value="{{ old('username') }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <input type="password" class="form-control form-control-lg" id="Volunteer_Account_Info"
                           placeholder="Password"
                           name="password"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <input type="password" class="form-control form-control-lg" id="Volunteer_Account_Info"
                           placeholder="Confirm Password"
                           name="password_confirmation"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('phone_home') ? ' has-error' : '' }}">
                <label for="phone_home" class="col-sm-2 col-form-label col-form-label-lg">Home Phone</label>
                <div class="col-sm-3">
                    <input type="tel" class="form-control form-control-lg" id="Volunteer_Phone"
                           placeholder="904-123-4567"
                           name="phone_home"
                           value="{{ old('phone_home') }}">
                </div>
            </div>

            <div class="form-group row {{ $errors->has('phone_cell') ? ' has-error' : '' }}">
                <label for="phone_cell" class="col-sm-2 col-form-label col-form-label-lg">Cell Phone</label>
                <div class="col-sm-3">
                    <input type="tel" class="form-control form-control-lg" id="Volunteer_Phone"
                           placeholder="904-123-4567"
                           name="phone_cell"
                           value="{{ old('phone_cell') }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('phone_work') ? ' has-error' : '' }}">
                <label for="phone_work" class="col-sm-2 col-form-label col-form-label-lg">Work Phone</label>
                <div class="col-sm-3">
                    <input type="tel" class="form-control form-control-lg" id="Volunteer_Work_Phone"
                           placeholder="904-123-4567"
                           name="phone_work"
                           value="{{ old('phone_work') }}">
                </div>
            </div>

            <div class="form-group row {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-sm-2 col-form-label col-form-label-lg">Email Address</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Email"
                           placeholder="Email"
                           name="email"
                           value="{{ old('email') }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('drivers_license') ? ' has-error' : '' }}">
                <label for="drivers_license" class="col-sm-2 col-form-label col-form-label-lg">Drivers License</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Driver"
                           placeholder="Drivers License"
                           name="drivers_license"
                           value="{{ old('drivers_license') }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('ssn') ? ' has-error' : '' }}">
                <label for="ssn" class="col-sm-2 col-form-label col-form-label-lg">Social Security</label>
                <div class="col-sm-3">
                    <input type="password" class="form-control form-control-lg" id="Volunteer_SSN"
                           placeholder="Social Security"
                           name="ssn"
                           value="{{ old('ssn') }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('volunteer_centers') ? ' has-error' : '' }}">
                <label for="volunteer_centers" class="col-sm-2 col-form-label col-form-label-lg">Preferred Locations</label>
                <div class="col-sm-3">
                    <select class="form-control form-control-lg" id="Volunteer_Location" name="volunteer_centers" required>
                        <option value="All"
                                @if(old('volunteer_centers') == "All")
                                selected
                                @endif
                        >No Preference</option>
                        <option value="Kings Landing"
                                @if(old('volunteer_centers') == "Kings Landing")
                                selected
                                @endif
                        >Kings Landing</option>
                        <option value="Midgar"
                                @if(old('volunteer_centers') == "Midgar")
                                selected
                                @endif
                        >Midgar</option>
                        <option value="San Andreas"
                                @if(old('volunteer_centers') == "San Andreas")
                                selected
                                @endif
                        >San Andreas</option>
                        <option value="Shadow Moses Island"
                                @if(old('volunteer_centers') == "Shadow Moses Island")
                                selected
                                @endif
                        >Shadow Moses Island</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="weekday_availability_start" class="col-sm-2 col-form-label col-form-label-lg">Weekday Availability</label>
                <div class="col-sm-3 input-group" style="width: 278px; padding-left: 15px;">
                    <select class="form-control form-control-lg" id="Volunteer_Weekday_Availability" name="weekday_availability_start" required>
                        @foreach(['AM', 'PM'] as $ampm)
                            @for($i=1;$i<=12;$i++)
                                @if(old('weekday_availability_start') == $i.$ampm)
                                    <option value="{{ $i . $ampm }}" selected>{{ $i }} {{ $ampm }}</option>
                                @else
                                    <option value="{{ $i . $ampm }}">{{ $i }} {{ $ampm }}</option>
                                @endif
                            @endfor
                        @endforeach
                    </select>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                    <select class="form-control form-control-lg" id="Volunteer_Weekday_Availability" name="weekday_availability_end" required>
                        @foreach(['AM', 'PM'] as $ampm)
                            @for($i=1;$i<=12;$i++)
                                @if(old('weekday_availability_end') == $i.$ampm)
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
                    <select class="form-control form-control-lg" id="Volunteer_Weekend_Availability" name="weekend_availability_start" required>
                        @foreach(['AM', 'PM'] as $ampm)
                            @for($i=1;$i<=12;$i++)
                                @if(old('weekend_availability_start') == $i.$ampm)
                                    <option value="{{ $i . $ampm }}" selected>{{ $i }} {{ $ampm }}</option>
                                @else
                                    <option value="{{ $i . $ampm }}">{{ $i }} {{ $ampm }}</option>
                                @endif
                            @endfor
                        @endforeach
                    </select>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                    <select class="form-control form-control-lg" id="Volunteer_Weekend_Availability" name="weekend_availability_end" required>
                        @foreach(['AM', 'PM'] as $ampm)
                            @for($i=1;$i<=12;$i++)
                                @if(old('weekend_availability_end') == $i.$ampm)
                                    <option value="{{ $i . $ampm }}" selected>{{ $i }} {{ $ampm }}</option>
                                @else
                                    <option value="{{ $i . $ampm }}">{{ $i }} {{ $ampm }}</option>
                                @endif
                            @endfor
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('skills') ? ' has-error' : '' }}">
                <label for="skills" class="col-sm-2 col-form-label col-form-label-sm">Volunteer's Skills</label>
                <div class="col-sm-3">
                    <select class="form-control form-control-lg" id="Volunteer_Skills" name="skills" required>
                        <option value="None"
                                @if(old('skills') == "None")
                                selected
                                @endif
                        >None</option>
                        <option value="Drawing"
                                @if(old('skills') == "Drawing")
                                selected
                                @endif
                        >Drawing</option>
                        <option value="Programming"
                                @if(old('skills') == "Programming")
                                selected
                                @endif
                        >Programming</option>
                        <option value="Baby Sitting"
                                @if(old('skills') == "Baby Sitting")
                                selected
                                @endif
                        >Baby Sitting</option>
                        <option value="Cooking"
                                @if(old('skills') == "Cooking")
                                selected
                                @endif
                        >Cooking</option>
                    </select>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('approval_status') ? ' has-error' : '' }}">
                <label for="ssn" class="col-sm-2 col-form-label col-form-label-lg">Approval Status</label>
                <div class="col-sm-3">
                    <select class="form-control form-control-lg" id="Volunteer_Status" name="approval_status" required>
                        <option value="Approved"
                                @if(old('approval_status') == "Approved")
                                selected
                                @endif
                        >Approved</option>
                        <option value="Pending Approval"
                                @if(old('approval_status') == "Pending Approval")
                                selected
                                @endif
                        >Pending Approval</option>
                        <option value="Disapproved"
                                @if(old('approval_status') == "Disapproved")
                                selected
                                @endif
                        >Disapproved</option>
                        <option value="Inactive"
                                @if(old('approval_status') == "Inactive")
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

            <div class="form-group row ">
                <label for="emergency_fname" class="col-sm-2 col-form-label col-form-label-lg">Contact Name</label>
                <div class="col-sm-3 {{ $errors->has('emergency_fname') ? ' has-error' : '' }}">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_Fname"
                           placeholder="Emergency Contact's First Name"
                           name="emergency_fname"
                           value="{{ old('emergency_fname') }}"
                           required>
                </div>
                <div class="col-sm-3 {{ $errors->has('emergency_lname') ? ' has-error' : '' }}">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_Lname"
                           placeholder="Emergency Contact's Last Name"
                           name="emergency_lname"
                           value="{{ old('emergency_lname') }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('emergency_address1') ? ' has-error' : '' }}">
                <label for="emergency_address1" class="col-sm-2 col-form-label col-form-label-lg">Contact Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_Address"
                           placeholder="Emergency Contact's Address"
                           name="emergency_address1"
                           value="{{ old('emergency_address1') }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('emergency_address2') ? ' has-error' : '' }}">
                <label for="emergency_address2" class="col-sm-2 col-form-label col-form-label-lg">Address 2</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_Address2"
                           placeholder="Address 2"
                           name="emergency_address2"
                           value="{{ old('emergency_address2') }}">
                </div>
            </div>

            <div class="form-group row {{ $errors->has('emergency_city') ? ' has-error' : '' }}">
                <label for="emergency_city" class="col-sm-2 col-form-label col-form-label-lg">City</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_City"
                           placeholder="City"
                           name="emergency_city"
                           value="{{ old('emergency_city') }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('emergency_states') ? ' has-error' : '' }}">
                <label for="emergency_state" class="col-sm-2 col-form-label col-form-label-lg">State</label>
                <div class="col-sm-3">
                    <select class="form-control form-control-lg" id="Volunteer_Emergency_State" name="emergency_state" required>
                        <option value="">-- Select a State --</option>
                        @foreach(config('states') as $abbr => $state)
                            @if(old('emergency_state') == $abbr)
                                <option value="{{ $abbr }}" selected>{{ $state }}</option>
                            @else
                                <option value="{{ $abbr }}">{{ $state }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('emergency_zip') ? ' has-error' : '' }}">
                <label for="emergency_zip" class="col-sm-2 col-form-label col-form-label-lg">Zip</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_Zip"
                           placeholder="Zip"
                           name="emergency_zip"
                           value="{{ old('emergency_zip') }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('emergency_phone_home') ? ' has-error' : '' }}">
                <label for="emergency_phone_home" class="col-sm-2 col-form-label col-form-label-lg">Contact Home Number</label>
                <div class="col-sm-3">
                    <input type="tel" class="form-control form-control-lg" id="Volunteer_Emergency_Phone_Home"
                           placeholder="Emergency Home Number"
                           name="emergency_phone_home"
                           value="{{ old('emergency_phone_home') }}">
                </div>
            </div>

            <div class="form-group row {{ $errors->has('emergency_ohone_cell') ? ' has-error' : '' }}">
                <label for="emergency_phone_cell" class="col-sm-2 col-form-label col-form-label-lg">Contact Cell Number</label>
                <div class="col-sm-3">
                    <input type="tel" class="form-control form-control-lg" id="Volunteer_Emergency_Phone_Cell"
                           placeholder="Emergency Cell Number"
                           name="emergency_phone_cell"
                           value="{{ old('emergency_phone_cell') }}"
                           required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-7"></div>
                <a href="{{ route('volunteer.create') }}">
                    <input type="button" class="btn btn-danger" value="Cancel">
                </a>
                <div class="col-md-7"></div>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection