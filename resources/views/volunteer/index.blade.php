<!-- index.blade.php -->

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Manage Volunteers</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-1">
                                <a href="{{ route('volunteer.create') }}">
                                    <input type="button" class="btn btn-primary" value="Create New Volunteer">
                                    <!-- Start DataTable -->
                                </a>
                            </div>
                            <div class="col-md-offset-8" style="width: 300px;">
                                <form id="oppf">
                                    <label for="opportunityMatches" class="control-label">Filter by Matched Opportunities</label>
                                    <select class="form-control" name="opp" onchange="$('#oppf').submit()">
                                        <option>-- Select an Opportunity --</option>
                                        @foreach($opportunities as $opportunity)
                                            <option value="{{ $opportunity->id }}">{{ $opportunity->name }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="row" style="margin: 25px 0px 0px 0px">
                            <table id="volunteerTable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Cell Phone</th>
                                        <th>Status</th>
                                        <th>Date Created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($volunteers as $volunteer)
                                    <tr>
                                        <td>{{ $volunteer->fname . " " . $volunteer->lname }}</td>
                                        <td>{{ $volunteer->email }}</td>
                                        <td>{{ $volunteer->phone_cell }}</td>
                                        <td>{{ $volunteer->approval_status }}</td>
                                        <td>{{ $volunteer->created_at }}</td>
                                        <td>
                                            <a href="{{ route('volunteer.show', ['id' => $volunteer->id]) }}">
                                                <button class="btn btn-xs btn-primary">View</button>
                                            </a>
                                            <a href="{{ route('volunteer.edit', ['id' => $volunteer->id]) }}">
                                                <button class="btn btn-xs btn-success">Edit</button>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Cell Phone</th>
                                        <th>Status</th>
                                        <th>Date Created</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#volunteerTable').DataTable( {
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        if (column.index() == 5) return;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo( $(column.footer()).empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search( val ? '^'+val+'$' : '', true, false )
                                    .draw();
                            } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }
            } );
        } );
    </script>
@endsection