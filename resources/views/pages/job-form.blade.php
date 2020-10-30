@extends('layout.app')
<head>
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>Job Form - Sinergia Homeschooling</title>
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

        .form{
            padding: 29px 0;    
        }

        .form p{
            text-align: left;
        }

        #btn-regis:hover{
            background-color: #ea9400;
            color: #ffffff;
        }

        #btn-regis{
            width: 100%; color: #ea9400; border-color: #ea9400;
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
    <p style="margin-top: 45px; margin-left: 25px;">Job Form</p>
</div>

<div class="container" style="margin-top: 25px;">
    @if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
    </div>
    @endif
    <div>
        <div class="form" style="text-align: center;">
            <form method="POST" action="submit-job-registrant" enctype="multipart/form-data">
                @csrf
                <p>Name (Nama) :<input type="text" name="name" class="form-control {{ $errors->has('name') ? 'error' : '' }}" placeholder="Your answer"></p>
                @if ($errors->has('name'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif

                @csrf
                <p>Which position are you interested in? (Posisi yang diminati?)
                <select class="form-control-lg {{ $errors->has('id_job_position') ? 'error' : '' }}" style="width: 100%;" name="id_job_position" id="id_job_position" required>
                    <option selected="selected">Choose...</option>
                    @foreach($jobs as $job)
                        <option value="{{$job->id}}">{{$job->job_name}}</option>
                    @endforeach
                </select>
                </p>
                @if ($errors->has('id_job_position'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif
                
                @csrf
                <p>Date and place of birth (Tempat dan tanggal lahir) :<input type="text" name="date_and_place_of_birth" class="form-control {{ $errors->has('date_and_place_of_birth') ? 'error' : '' }}" placeholder="Your answer"></p>
                @if ($errors->has('date_and_place_of_birth'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif

                @csrf
                <p>Last Education (Pendidikan terakhir) :
                    <select class="form-control-lg {{ $errors->has('id_last_education') ? 'error' : '' }}" style="width: 100%;" name="id_last_education" id="id_last_education" required>
                        <option selected="selected">Choose...</option>
                        @foreach($educations as $education)
                            <option value="{{$education->id}}">{{$education->education_name}}</option>
                        @endforeach
                    </select>
                </p>
                @if ($errors->has('id_last_education'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif

                @csrf
                <p>University / School (Universitas / Sekolah) :<input type="text" name="school" class="form-control {{ $errors->has('school') ? 'error' : '' }}" placeholder="Your answer"></p>
                @if ($errors->has('school'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif

                @csrf
                <p>Major (Jurusan) :<input type="text" name="major" class="form-control" placeholder="Your answer"></p>

                @csrf
                <p>Domicile Address (Alamat Domisili) :<input type="text" name="domicile_address" class="form-control {{ $errors->has('domicile_address') ? 'error' : '' }}" placeholder="Your answer"></p>
                @if ($errors->has('domicile_address'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif

                @csrf
                <p>Phone number (Nomer Handphone) :<input type="text" name="phone_number" class="form-control {{ $errors->has('phone_number') ? 'error' : '' }}" placeholder="Your answer"></p>
                @if ($errors->has('phone_number'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif

                @csrf
                <p>Email :<input type="email" name="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"></p>
                @if ($errors->has('email'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif

                @csrf
                <p>Work Experience, write in detail - position, company, year (Pengalaman kerja, tulis dengan detail - posisi, perusahaan, tahun) :<textarea name="work_experience" class="form-control {{ $errors->has('work_experience') ? 'error' : '' }}" placeholder="Your answer" rows="5"></textarea></p>
                @if ($errors->has('work_experience'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif

                <p>Marital Status (Status) :
                    <select class="form-control-lg {{ $errors->has('id_marital_status') ? 'error' : '' }}" style="width: 100%;" name="id_marital_status" id="id_marital_status" required>
                        <option selected="selected">Choose...</option>
                        @foreach($maritalstatus as $status)
                            <option value="{{$status->id}}">{{$status->marital_status_name}}</option>
                        @endforeach
                    </select>
                </p>
                @if ($errors->has('id_marital_status'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif

                @csrf
                <p>Religion (Agama) :<input type="text" name="religion" class="form-control {{ $errors->has('religion') ? 'error' : '' }}" placeholder="Your answer" ></p>
                @if ($errors->has('religion'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif

                @csrf
                <p>Expected salary? (Gaji yang diharapkan?) :<input type="text" name="expected_salary" class="form-control {{ $errors->has('expected_salary') ? 'error' : '' }}" placeholder="Your answer" ></p>
                @if ($errors->has('expected_salary'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif
 
                @csrf
                <p>Preferred working area (Area kerja yang diinginkan) :
                    <br>
                    @foreach($workingArea as $area)
                    <div style="text-align: left; padding: 0px 20px;">
                        <input class="form-check-input" name="working_area[]" type="checkbox" id="{{$area->id}}" value="{{$area->id}}">
                        <label class="form-check-label" for="{{$area->id}}">{{$area->working_area_name}}</label>
                    </div>
                    @endforeach
                </p>

                <p>Desired type of job? (Tipe pekerjaan yang diinginkan?) :
                    <select class="form-control-lg {{ $errors->has('id_type_of_job') ? 'error' : '' }}" style="width: 100%;" name="id_type_of_job" id="id_type_of_job" required>
                        <option selected="selected">Choose...</option>
                        @foreach($jobType as $type)
                            <option value="{{$type->id}}">{{$type->job_type_name}}</option>
                        @endforeach
                    </select>
                </p>
                @if ($errors->has('id_type_of_job'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif

                @csrf
                <p>Get vacancy information from? if from the internet or social media mention the site (Mendapatkan informasi lowongan dari? bila dari internet atau sosial media sebutkan site nya) :
                <input type="text" name="vacancy_information" class="form-control {{ $errors->has('vacancy_information') ? 'error' : '' }}" placeholder="Your answer" ></p>
                @if ($errors->has('vacancy_information'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif

                @csrf
                <p>Last GPA (IPK terakhir) :<input type="text" name="last_GPA" class="form-control {{ $errors->has('last_GPA') ? 'error' : '' }}" placeholder="Your answer" ></p>
                @if ($errors->has('last_GPA'))
                    <div class="error">
                        <p>please fill the field</p>
                    </div>
                @endif

                @csrf
                <p>Submit your Curriculum Vitae "Maximum file size 10 MB" (Upload CV "maksimal 10 MB") :
                <input type="file" name="CV_path_file" class="form-control-file {{ $errors->has('CV_path_file') ? 'error' : '' }}" placeholder="Your answer" ></p>
                @if ($errors->has('CV_path_file'))
                    <div class="error">
                        <p>please input the file</p>
                    </div>
                @endif
                <button id="btn-regis" type="submit" class="btn btn-outline-warning">Submit</button>
            </form>
        </div>
    </div>
    
</div>

@endsection