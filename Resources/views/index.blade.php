@extends('projects::layouts.master')

@section('content')
<h1>
    Projects
</h1>
<hr>
<div class="table-responsive">
    <table class="table table-hover table-sm datatable border shadow mb-3">
        <thead class="text-success">
            <tr>
                <th>
                    <input type="checkbox" name="ids">
                </th>
                <th>Job</th>
                <th>Customer</th>
                <th>Manager</th>
                <th>Estimator</th>
                <th>Submitted</th>
                <th>Status</th>
            </tr>
    </thead>
        <tbody>
            @php
                $Mock = Faker\Factory::create(); $count = 75;
                $success = ['active','pending','complete'];
                $class = ['success', 'warning', 'primary'];
            @endphp
            @for ($i = 1; $i <= $count; $i++)
            <tr>
                <td>
                    <input type="checkbox" name="id" name="{{$i}}"/>
                </td>
                <td>
                    <a href="/admin/projects/{{$i}}">{{$Mock->Company}}</a>
                </td>
                <td>{{$Mock->Company}}</td>
                <td>{{$Mock->Name}}</td>
                <td>{{$Mock->Name}}</td>
                <td>{{$Mock->date('M d, Y')}}</td>
                <td>
                    <span class="badge p-1 btn-block badge-{{$class[$n = mt_rand(0,2)]}}">
                        {{$success[$n]}}
                    </span>
                </td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>
@endsection
