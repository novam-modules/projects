@extends('projects::layouts.master')

@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title">Current Projects</h4>
        <p class="card-category">New employees on 15th September, 2016</p>
    </div>
    <div class="card-body table-responsive">
        <table class="table table-hover datatable">
            <thead class="text-success">
                <tr><th>ID</th>
                <th>Job</th>
                <th>Customer</th>
                <th>Manager</th>
                <th>Estimator</th>
                <th>Submitted</th>
            </tr>
        </thead>
            <tbody>
                @php
                    $Mock = Faker\Factory::create(); $count = 20
                @endphp
                @for ($i = 1; $i <= $count; $i++)
                <tr>
                    <td>{{$i}}</td>
                    <td>
                        <a href="/admin/projects/{{$i}}">{{$Mock->Company}}</a>
                    </td>
                    <td>{{$Mock->Company}}</td>
                    <td>{{$Mock->Name}}</td>
                    <td>{{$Mock->Name}}</td>
                    <td>{{$Mock->date('M d, Y')}}</td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection
