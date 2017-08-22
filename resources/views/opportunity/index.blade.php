<!-- index.blade.php -->

@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Manage Opportunity</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-1">
                                <a href="{{ route('opportunity.create') }}">
                                    <input type="button" class="btn btn-primary" value="Create New Opportunity">
                                </a>
                            </div>
                        </div>
                        <div class="row" style="margin: 25px 0px 0px 0px">
                            <table id="opportunityTable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Opportunity Name</th>
                                    <th>Location Center</th>
                                    <th>Licenses</th>
                                    <th>Skills</th>
                                    <th>Date Created</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($opportunities as $opportunity)
                                    <tr>
                                        <td>{{ $opportunity->name }}</td>
                                        <td>{{ $opportunity->volunteer_center }}</td>
                                        <td>{{ $opportunity->licenses }}</td>
                                        <td>{{ $opportunity->skills }}</td>
                                        <td>{{ $opportunity->created_at }}</td>
                                        <td>
                                            <a href="{{ route('opportunity.show', ['id' => $opportunity->id]) }}">
                                                <button class="btn btn-xs btn-primary">View</button>
                                            </a>
                                            <a href="{{ route('opportunity.edit', ['id' => $opportunity->id]) }}">
                                                <button class="btn btn-xs btn-success">Edit</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Opportunity Name</th>
                                    <th>Location Center</th>
                                    <th>Licenses</th>
                                    <th>Skills</th>
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
            $('#opportunityTable').DataTable( {
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