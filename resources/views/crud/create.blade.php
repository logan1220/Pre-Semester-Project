<!-- create.blade.php -->

@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{url('crud')}}">

    <div class="form-group row">
      {{csrf_field()}}
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Volunteer Name</label>
      <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="First Name" name="title">
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Last Name" name="title">
      </div>
    </div>

    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Address</label>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Address" name="title">
      </div>
    </div> 

    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Account Information</label>
      <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Username" name="title">
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Password" name="title">
      </div>
    </div>

    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Copy of Drivers License</label>
      <div class="col-sm-2">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Yes / No" name="title">
      </div>
    </div>

    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Copy of Social Security</label>
      <div class="col-sm-2">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Yes / No" name="title">
      </div>
    </div>

    <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Preferred Locations</label>
      <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Centers where volunteer prefers to work" name="title">
      </div>
    </div>

    <div class="form-group row">
    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Status</label>
    <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Approved/Pending Approval/Disapproved/Inactive" name="Status">
      </div>
    </div>

    <div class="form-group row">
    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Weekday Availability</label>
    <div class="col-sm-1">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="From" name="Status">
      </div>
    <div class="col-sm-1">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="To" name="Status">
      </div>
    </div>

    <div class="form-group row">
    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Weekend Availability</label>
    <div class="col-sm-1">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="From" name="Status">
      </div>
    <div class="col-sm-1">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="To" name="Status">
      </div>
    </div>

    <div class="form-group row">
    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Contact Methods</label>
    </div>

    <div class="form-group row">
    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Phone Number and Email Address</label>
    <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Phone Number" name="Status">
      </div>
    <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Email" name="Status">
      </div>
    </div>

    <div class="form-group row">
    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Educational Background</label>
    <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Education" name="Status">
      </div>
    </div>

    <div class="form-group row">
    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Current Licenses</label>
    <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Licenses" name="Status">
      </div>
    </div>

    <div class="form-group row">
    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Emergency Contact Information</label>
    </div>

    <div class="form-group row">
    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
    <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Emergency Contact's Name" name="Status">
      </div>
    </div>

    <div class="form-group row">
    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Address</label>
    <div class="col-sm-6">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Emergency Contact's Address" name="Status">
      </div>
    </div> 

    <div class="form-group row">
    <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Phone Number and Email Address</label>
    <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Emergency Phone Number" name="Status">
      </div>
    <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Emergency Email" name="Status">
      </div>
    </div>

    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Skills and Interests</label>
      <div class="col-sm-10">
        <textarea name="post" rows="8" cols="74"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-7"></div>
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>
@endsection