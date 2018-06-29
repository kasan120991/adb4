@extends('sales.layout.department')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3">
            <div class="card">
                <div class="card-header">
                    Welcome, {{auth()->user()->name}} <span class="float-right">{{$date->format('l, F d ')}}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-sm table-hover mb-0">
                        <thead>
                        <tr>
                            <th>ID#</th>
                            <th>Status</th>
                            <th>Company Name</th>
                            <th>Contact</th>
                            <th>Reason</th>
                            <th>Employee</th>
                            <th>Assigned</th>
                            <th>Timestamp</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection