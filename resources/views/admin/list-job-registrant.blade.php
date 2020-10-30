@extends('layout.app')
<head>
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>List Job Registrant - Sinergia Homeschooling</title>
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
    </style>
</head>
@section('content')


<div class="headregistration">
    <p style="margin-top: 45px; margin-left: 25px;">List Job Registrant</p>
</div>

<div class="container" style="margin-top: 25px; ">
    <div style="overflow-x: scroll;">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">date and place of birth</th>
                    <th scope="col">Last Education</th>
                    <th scope="col">School</th>
                    <th scope="col">Major</th>
                    <th scope="col">Domicile Address</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Work Experience</th>
                    <th scope="col">Marital Status</th>
                    <th scope="col">Religion</th>
                    <th scope="col">Expected Salary</th>
                    <th scope="col">Working Area</th>
                    <th scope="col">Type Of Job</th>
                    <th scope="col">Vacancy Information</th>
                    <th scope="col">Last GPA</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
    
    
            @foreach($jobRegistrants as $index => $job)
                <tr>
                    <td>{{ $jobRegistrants->firstItem() + $index }}</td>
                    <td>{{ $job->name }}</td>
                    <td>
                        @foreach ($jobs as $position)
                            @if ($position->id == $job->id_job_position)
                                {{ $position->job_name }}
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $job->date_and_place_of_birth }}</td>
                    <td>
                        @foreach ($educations as $education)
                            @if ($education->id == $job->id_last_education)
                                {{ $education->education_name }}
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $job->school }}</td>
                    <td>{{ $job->major }}</td>
                    <td>{{ $job->domicile_address }}</td>
                    <td>{{ $job->phone_number }}</td>
                    <td>{{ $job->email }}</td>
                    <td>{{ $job->work_experience }}</td>
                    <td>
                        @foreach ($maritalStatus as $status)
                            @if ($status->id == $job->id_marital_status)
                                {{ $status->marital_status_name }}
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $job->religion }}</td>
                    <td>{{ $job->expected_salary }}</td>
                    <td>
                        @foreach ($workingAreaRegistrant as $areaRegistrant)
                            @if ($areaRegistrant->id_job_registrant == $job->id)
                                @foreach ($workingArea as $area)
                                    @if ($area->id == $areaRegistrant->id_working_area)
                                        {{ $area->working_area_name }}
                                        <br><br>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach ($jobType as $type)
                            @if ($type->id == $job->id_type_of_job)
                                {{ $type->job_type_name }}
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $job->vacancy_information }}</td>
                    <td>{{ $job->last_GPA }}</td>
                    <td><a href="{{route('download-cv', [$job->id])}}" class="btn btn-primary">Download CV</a></td>
                </tr>
            @endforeach
        </table>
        {{ $jobRegistrants->links() }}
    </div>
    <br>

</div>

@endsection