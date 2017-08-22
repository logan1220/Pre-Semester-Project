@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome admin <b>{{ Auth::user()->name }}</b></div>
                    <div class="row">
                        <div class="panel-body">
                            <p style="padding-left:15px;">Please choose a following action:</p>

                            <div class="col-md-1">
                                <a href="{{ route('volunteer.index') }}"><button class="btn btn-success">Manage Volunteers</button></a>
                            </div>

                            <div class="col-md-offset-3">
                                <a href="{{ route('opportunity.index') }}"><button class="btn btn-success">Manage Opportunities</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
