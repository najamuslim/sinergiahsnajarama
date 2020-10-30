@extends('layout.app')
<head>
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>Job - Sinergia Homeschooling</title>
    <style>
        .headregistration{
            width: 100%;
            color: white;
            background-color: #ea9400;
            padding: 2% 0;
            position: relative;
            line-height: 0.25em;
            margin-bottom: 0;
            font-weight: bold;
            font-size: 30px;
            font-family: 'Abel', Helvetica, Arial, Lucida, sans-serif;
            margin-top: 95px;
        }

        .error p{
            color: red;
        }

        .form-control.error{
            border-color: red;
        }
    </style>
</head>
@section('content')


<div class="headregistration">
    <p style="margin-top: 45px; margin-left: 25px;">Job</p>
</div>

<div class="container" style="margin-top: 25px;">
    @if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
    </div>
    @endif
    <div>
        <h3>Add Job</h3>
        <div class="form">
            <form method="POST" action="submit-job">
                @csrf
                <p>Job Name :<input type="text" name="job_name" class="form-control {{ $errors->has('job_name') ? 'error' : '' }}" placeholder="Job Name"></p>
                @if ($errors->has('job_name'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif
                <button id="btn-regis" type="submit" class="btn btn-success">Add</button>
            </form>
        </div>
    </div>
    <br><br>
    <div style="width:100%;">
        <h3>List Job</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Job Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobs as $index => $job)
                    <tr>
                        <td>{{ $jobs->firstItem() + $index }}</td>
                        <td>{{ $job->job_name }}</td>
                        <td>
                            <form method="POST" action="{{ route('job-destroy', [$job->id]) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $jobs->links() }}
    </div>
    
</div>

@endsection