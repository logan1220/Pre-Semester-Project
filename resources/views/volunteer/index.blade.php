<!-- index.blade.php -->

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Manage Volunteers</div>
                    <div class="panel-body">
                        <div class="col-sm-offset-9">
                            <a href="{{ route('volunteer.create') }}">
                                <input type="button" class="btn btn-primary" value="Create New Volunteer">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection