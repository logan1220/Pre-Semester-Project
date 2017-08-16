<!-- create.blade.php -->

@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post" action="{{ url('volunteer') }}">

            <hr>
            <div class="form-group row" align="">
                <label class="col-sm-offset-4 col-form-label col-form-label-lg">Basic Information</label>
            </div>
            <hr>

            <div class="form-group row">
                {{csrf_field()}}
                <label for="Volunteer_Fname" class="col-sm-2 col-form-label col-form-label-lg">Volunteer Name</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Fname" placeholder="First Name" name="Volunteer_Fname" required>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Lname" placeholder="Last Name" name="Volunteer_Lname" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_Address" class="col-sm-2 col-form-label col-form-label-lg">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Address" placeholder="Address" name="Volunteer_Address" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_Address2" class="col-sm-2 col-form-label col-form-label-lg">Address 2</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Address2" placeholder="Address 2" name="Volunteer_Address2" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_City" class="col-sm-2 col-form-label col-form-label-lg">City</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_City" placeholder="City" name="Volunteer_City" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_State" class="col-sm-2 col-form-label col-form-label-lg">State</label>
                <div class="col-sm-3">
                    <select class="form-control form-control-lg" id="Volunteer_State" name="Volunteer_State" required>
                        <option>Florida</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_Education" class="col-sm-2 col-form-label col-form-label-lg">Educational Background</label>
                <div class="col-sm-6">
                    <select class="form-control form-control-lg" id="Volunteer_Education" name="Volunteer_Education" required>
                        <option>High School Diploma</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_Licenses" class="col-sm-2 col-form-label col-form-label-lg">Current Licenses</label>
                <div class="col-sm-6">
                    <select class="form-control form-control-lg" id="Volunteer_Licenses" name="Volunteer_Licenses">
                        <option>None</option>
                        <option>Mecical License</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_Account_Info" class="col-sm-2 col-form-label col-form-label-lg">Account Information</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Account_Info" placeholder="Username" name="Volunteer_Username" required>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Account_Info" placeholder="Password" name="Volunteer_Password" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="Volunteer_Phone" class="col-sm-2 col-form-label col-form-label-lg">Phone Number</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Phone" placeholder="Phone Number" name="Volunteer_Phone" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_Email" class="col-sm-2 col-form-label col-form-label-lg">Email Address</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Email" placeholder="Email" name="Volunteer_Email" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_Driver" class="col-sm-2 col-form-label col-form-label-lg">Copy of Drivers License</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Driver" placeholder="Drivers License" name="Volunteer_Driver" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_SSN" class="col-sm-2 col-form-label col-form-label-lg">Copy of Social Security</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_SSN" placeholder="Social Security" name="Volunteer_SSN" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_Location" class="col-sm-2 col-form-label col-form-label-lg">Preferred Locations</label>
                <div class="col-sm-3">
                    <select class="form-control form-control-lg" id="Volunteer_Location" name="Volunteer_Location" required>
                        <option>Jacksonville</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_Availability" class="col-sm-2 col-form-label col-form-label-lg">Availability</label>
                <div class="col-sm-3">
                    <select class="form-control form-control-lg" id="Volunteer_Availability" name="Volunteer_Availability" required>
                        <option>6AM - 6PM</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_Skills" class="col-sm-2 col-form-label col-form-label-sm">Volunteer's Skills</label>
                <div class="col-sm-3">
                    <select class="form-control form-control-lg" id="Volunteer_Skills" name="Volunteer_Skills" required>
                        <option>Many Skillz</option>
                    </select>
                </div>
            </div>

            <hr>
            <div class="form-group row">
                <label for="Volunteer_E" class="col-sm-offset-4 col-form-label col-form-label-lg">Emergency Contact Information</label>
            </div>
            <hr>

            <div class="form-group row">
                <label for="Volunteer_Emergency_Fname" class="col-sm-2 col-form-label col-form-label-lg">Contact Name</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_Fname" placeholder="Emergency Contact's First Name" name="Volunteer_Emergency_Fname">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_Lname" placeholder="Emergency Contact's Last Name" name="Volunteer_Emergency_Lname" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_Emergency_Address" class="col-sm-2 col-form-label col-form-label-lg">Contact Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_Address" placeholder="Emergency Contact's Address" name="Volunteer_Emergency_Address">
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_Emergency_Phone" class="col-sm-2 col-form-label col-form-label-lg">Contact Phone Number</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_Phone" placeholder="Emergency Phone Number" name="Volunteer_Emergency_Phone">
                </div>
            </div>

            <div class="form-group row">
                <label for="Volunteer_Emergency_Email" class="col-sm-2 col-form-label col-form-label-lg">Contact Email Address</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-lg" id="Volunteer_Emergency_Email" placeholder="Emergency Email" name="Volunteer_Emergency_Email">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-7"></div>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection