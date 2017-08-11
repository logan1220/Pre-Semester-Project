<!-- create.blade.php -->

@extends('layouts.app')
@section('content')
<div class="container">
  <form method="post" action="{{ url('volunteer') }}">

    <div class="form-group row">
      {{csrf_field()}}
      <label for="volfnameid" class="col-sm-2 col-form-label col-form-label-lg">Volunteer Name</label>
      <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="volfname" placeholder="First Name" name="volfname" required autofocus>
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="volfname" placeholder="Last Name" name="vollname" required autofocus>
      </div>
    </div>

    <div class="form-group row">
      <label for="voladdid" class="col-sm-2 col-form-label col-form-label-lg">Address</label>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="voladdid" placeholder="Address" name="voladd" required autofocus>
      </div>
    </div>

    <div class="form-group row">
    <label for="voleduid" class="col-sm-2 col-form-label col-form-label-lg">Educational Background</label>
    <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="voleduid" placeholder="Education" name="voledu" required autofocus>
      </div>
    </div>

    <div class="form-group row">
    <label for="vollicid" class="col-sm-2 col-form-label col-form-label-lg">Current Licenses</label>
    <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="vollicid" placeholder="Licenses" name="vollic" required autofocus>
      </div>
    </div>

    <div class="form-group row">
      <label for="volaccinfoid" class="col-sm-2 col-form-label col-form-label-lg">Account Information</label>
      <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="volaccinfoid" placeholder="Username" name="volaccinfofirst" required autofocus>
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="volaccinfoid" placeholder="Password" name="volaccinfolast" required autofocus>
      </div>
    </div>
    <div class="form-group row">
    <label for="volcontactid" class="col-sm-2 col-form-label col-form-label-lg">Contact Methods</label>
    </div>

    <div class="form-group row">
    <label for="volcontactid" class="col-sm-2 col-form-label col-form-label-lg">Phone Number and Email Address</label>
    <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="volcontactid" placeholder="Phone Number" name="volphone" required autofocus>
      </div>
    <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="volcontactid" placeholder="Email" name="volemail" required autofocus>
      </div>
    </div>


    <div class="form-group row">
      <label for="voldriverid" class="col-sm-2 col-form-label col-form-label-lg">Copy of Drivers License</label>
      <div class="col-sm-2">
        <input type="text" class="form-control form-control-lg" id="voldriverid" placeholder="Yes / No" name="voldriver" required autofocus>
      </div>
    </div>

    <div class="form-group row">
      <label for="volssnid" class="col-sm-2 col-form-label col-form-label-lg">Copy of Social Security</label>
      <div class="col-sm-2">
        <input type="text" class="form-control form-control-lg" id="volssnid" placeholder="Yes / No" name="volssn" required autofocus>
      </div>
    </div>

    <div class="form-group row">
      <label for="vollocid" class="col-sm-2 col-form-label col-form-label-lg">Preferred Locations</label>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="vollocid" placeholder="Centers where volunteer prefers to work" name="volloc" required autofocus>
      </div>
    </div>

    <div class="form-group row">
    <label for="volstatusid" class="col-sm-2 col-form-label col-form-label-lg">Status</label>
    <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="volstatusid" placeholder="Approved/Pending Approval/Disapproved/Inactive" name="volstatus" required autofocus>
      </div>
    </div>

    <div class="form-group row">
    <label for="volavailidweekday" class="col-sm-2 col-form-label col-form-label-lg">Weekday Availability</label>
    <div class="col-sm-1">
        <input type="text" class="form-control form-control-lg" id="volavailidweekday" placeholder="From" name="volavailweekdafrom" required autofocus>
      </div>
    <div class="col-sm-1">
        <input type="text" class="form-control form-control-lg" id="volavailidweekday" placeholder="To" name="volavailweekdayto" required autofocus>
      </div>
    </div>

    <div class="form-group row">
    <label for="volavailidweekend" class="col-sm-2 col-form-label col-form-label-lg">Weekend Availability</label>
    <div class="col-sm-1">
        <input type="text" class="form-control form-control-lg" id="volavailidweekend" placeholder="From" name="volavailidweekendfrom" required autofocus>
      </div>
    <div class="col-sm-1">
        <input type="text" class="form-control form-control-lg" id="volavailidweekend" placeholder="To" name="volavailidweekendto" required autofocus>
      </div>
    </div>

    <div class="form-group row">
    <label for="volemergencyid" class="col-sm-2 col-form-label col-form-label-lg">Emergency Contact Information</label>
    </div>

    <div class="form-group row">
    <label for="volemergencyid" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
    <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="volemergencyid" placeholder="Emergency Contact's Name" name="volemergencyname" required autofocus>
      </div>
    </div>

    <div class="form-group row">
    <label for="volemergencyaddressid" class="col-sm-2 col-form-label col-form-label-lg">Address</label>
    <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="volemergencyaddressid" placeholder="Emergency Contact's Address" name="volemergencyaddress" required autofocus>
      </div>
    </div>

    <div class="form-group row">
    <label for="volemergencycontactid" class="col-sm-2 col-form-label col-form-label-lg">Phone Number and Email Address</label>
    <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="volemergencycontactid" placeholder="Emergency Phone Number" name="volemergencycontactphone" required autofocus>
      </div>
    <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="volemergencycontactid" placeholder="Emergency Email" name="volemergencycontactemail" required autofocus>
      </div>
    </div>

    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Volunteer's Skills and Interests</label>
      <div class="col-sm-10">
        <textarea name="post" rows="8" cols="74"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-7"></div>
      <input type="submit" class="btn btn-primary" required autofocus>
    </div>
  </form>
</div>
@endsection