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
        <form method="post" action="{{ route('opportunity.update', ['id' => $opportunity->id]) }}">
            {{ method_field('PUT') }}
            <hr>
            <div class="form-group row" align="">
                <label class="col-sm-offset-3 col-form-label col-form-label-lg">Basic Information</label>
            </div>
            <hr>

            <div class="form-group row {{ $errors->has('name') ? ' has-error' : '' }}">
                {{csrf_field()}}
                <label for="Opportunity_Fname" class="col-sm-2 col-form-label col-form-label-lg">Opportunity Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg" id="Opportunity_Name"
                           placeholder="Opportunity Name"
                           name="name"
                           value="{{ $opportunity->name }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('address1') ? ' has-error' : '' }}">
                <label for="Opportunity_Address" class="col-sm-2 col-form-label col-form-label-lg">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg" id="Opportunity_Address"
                           placeholder="Address"
                           name="address1"
                           value="{{ $opportunity->address1 }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('address2') ? ' has-error' : '' }}">
                <label for="Opportunity_Address2" class="col-sm-2 col-form-label col-form-label-lg">Address 2</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg" id="Opportunity_Address2"
                           placeholder="Address 2"
                           name="address2"
                           value="{{ $opportunity->address2 }}">
                </div>
            </div>

            <div class="form-group row {{ $errors->has('city') ? ' has-error' : '' }}">
                <label for="city" class="col-sm-2 col-form-label col-form-label-lg">City</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_City"
                           placeholder="City"
                           name="city"
                           value="{{ $opportunity->city }}"
                           required>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('volunteer_center') ? ' has-error' : '' }}">
                <label for="Opportunity_Location" class="col-sm-2 col-form-label col-form-label-lg">Location Center</label>
                <div class="col-sm-3">
                    <select class="form-control form-control-lg" id="Opportunity_Location" name="volunteer_center"
                            required>
                        <option value="All"
                                @if($opportunity->volunteer_center == "All")
                                selected
                                @endif
                        >No Preference</option>
                        <option value="Kings Landing"
                                @if($opportunity->volunteer_center == "Kings Landing")
                                selected
                                @endif
                        >Kings Landing</option>
                        <option value="Midgar"
                                @if($opportunity->volunteer_center == "Midgar")
                                selected
                                @endif
                        >Midgar</option>
                        <option value="San Andreas"
                                @if($opportunity->volunteer_center == "San Andreas")
                                selected
                                @endif
                        >San Andreas</option>
                        <option value="Shadow Moses Island"
                                @if($opportunity->volunteer_center == "Shadow Moses Island")
                                selected
                                @endif
                        >Shadow Moses Island</option>
                    </select>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('state') ? ' has-error' : '' }}">
                <label for="Opportunity_State" class="col-sm-2 col-form-label col-form-label-lg">State</label>
                <div class="col-sm-3">
                    <select class="form-control form-control-lg" id="Opportunity_State" name="state" required>
                        <option value="">-- Select a State --</option>
                        @foreach(config('states') as $abbr => $state)
                            @if($opportunity->state == $abbr)
                                <option value="{{ $abbr }}" selected>{{ $state }}</option>
                            @else
                                <option value="{{ $abbr }}">{{ $state }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row {{ $errors->has('licenses') ? ' has-error' : '' }}">
                <label for="Opportunity_Licenses" class="col-sm-2 col-form-label col-form-label-lg">Licenses Required</label>
                <div class="col-sm-3">
                    <select class="form-control form-control-lg" id="Opportunity_Licenses" name="licenses" required>
                        <option value="None"
                                @if($opportunity->licenses == "None")
                                selected
                                @endif
                        >None</option>
                        <option value="Medical License"
                                @if($opportunity->licenses == "Medical License")
                                selected
                                @endif
                        >Medical License</option>
                        <option value="Education License"
                                @if($opportunity->licenses == "Education License")
                                selected
                                @endif
                        >Educational License</option>
                        <option value="Cosmetic License"
                                @if($opportunity->licenses == "Cosmetic License")
                                selected
                                @endif
                        >Cosmetic License</option>
                        <option value="Child Care License"
                                @if($opportunity->licenses == "Child Care License")
                                selected
                                @endif
                        >Child Care License</option>
                        <option value="Technology License"
                                @if($opportunity->licenses == "Technology License")
                                selected
                                @endif
                        >Technology License</option>
                        <option value="Cooking License"
                                @if($opportunity->licenses == "Cooking License")
                                selected
                                @endif
                        >Cooking License</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="weekday_availability_start" class="col-sm-2 col-form-label col-form-label-lg">Weekday Availability</label>
                <div class="col-sm-3 input-group" style="width: 278px; padding-left: 15px;">
                    <select class="form-control form-control-lg" id="Opportunity_Weekday_Availability"
                            name="weekday_availability_start"
                            required>
                        @foreach(['AM', 'PM'] as $ampm)
                            @for($i=1;$i<=12;$i++)
                                @if($opportunity->weekday_availability_start == $i.$ampm)
                                    <option value="{{ $i . $ampm }}" selected>{{ $i }} {{ $ampm }}</option>
                                @else
                                    <option value="{{ $i . $ampm }}">{{ $i }} {{ $ampm }}</option>
                                @endif
                            @endfor
                        @endforeach
                    </select>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                    <select class="form-control form-control-lg" id="Opportunity_Weekday_Availability"
                            name="weekday_availability_end"
                            required>
                        @foreach(['AM', 'PM'] as $ampm)
                            @for($i=1;$i<=12;$i++)
                                @if($opportunity->weekday_availability_end == $i.$ampm)
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
                    <select class="form-control form-control-lg" id="Opportunity_Weekend_Availability"
                            name="weekend_availability_start"
                            required>
                        @foreach(['AM', 'PM'] as $ampm)
                            @for($i=1;$i<=12;$i++)
                                @if($opportunity->weekend_availability_start == $i.$ampm)
                                    <option value="{{ $i . $ampm }}" selected>{{ $i }} {{ $ampm }}</option>
                                @else
                                    <option value="{{ $i . $ampm }}">{{ $i }} {{ $ampm }}</option>
                                @endif
                            @endfor
                        @endforeach
                    </select>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-minus"></i></span>
                    <select class="form-control form-control-lg" id="Opportunity_Weekend_Availability"
                            name="weekend_availability_end"
                            required>
                        @foreach(['AM', 'PM'] as $ampm)
                            @for($i=1;$i<=12;$i++)
                                @if($opportunity->weekend_availability_end == $i.$ampm)
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
                <label for="Opportunity_Skills" class="col-sm-2 col-form-label col-form-label-sm">Opportunity's Skills</label>
                <div class="col-sm-3">
                    <select class="form-control form-control-lg" id="Opportunity_Skills" name="skills" required>
                        <option value="None"
                                @if($opportunity->skills == "None")
                                selected
                                @endif
                        >None</option>
                        <option value="Drawing"
                                @if($opportunity->skills == "Drawing")
                                selected
                                @endif
                        >Drawing</option>
                        <option value="Programming"
                                @if($opportunity->skills == "Programming")
                                selected
                                @endif
                        >Programming</option>
                        <option value="Baby Sitting"
                                @if($opportunity->skills == "Baby Sitting")
                                selected
                                @endif
                        >Baby Sitting</option>
                        <option value="Cooking"
                                @if($opportunity->skills == "Cooking")
                                selected
                                @endif
                        >Cooking</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <a href="{{ route('opportunity.index') }}">
                    <input type="button" class="btn btn-danger" value="Cancel">
                </a>
                <div class="col-md-7"></div>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
        <form method="post" action="{{ route('opportunity.destroy', ['id' => $opportunity->id]) }}">
            <div class="form-group row">
                <div class="col-sm-0"></div>
                <input type="submit" class="btn btn-danger" value="Delete Opportunity">
                {{ method_field('DELETE') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
        </form>
    </div>
@endsection