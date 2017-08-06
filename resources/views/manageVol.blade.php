@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Volunteers</div>

                <div class="panel-body">
                    Volunteer List<br><br>

                    @foreach($users as $user)               
                        {{ $user->name }}, 
                    @endforeach
                </div>



            </div>
        </div>
    </div>
</div>
@endsection
