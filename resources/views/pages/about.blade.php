@extends('layout.app')
<head>
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>About - Sinergia Homeschooling | Sinergia Worldwide Education</title>
</head>
@section('content')

<div class="container" style="text-align: center;">
    <img  src="{{ asset('images/aboutpageimage.png') }}" alt="about page image">
</div>
<div class="container" id="textaboutpage">
    <p style="text-align: left">
        &nbsp; &nbsp; &nbsp; Sinergia Homeschooling is a program of Sinergia Wolrdwide Education to facilitate students whom want to study at home. Curriculum of the Homeschooling Program is based on curriculum with level start from Kindergarten, Primary, Secondary 1, O Level/IGCSE, and A/AS Level. Sinergia Worldwide Education gives services for all students, includes special needs.
    </p>
    <p style="text-align: left">
        &nbsp; &nbsp; &nbsp; We are available in all subjects from level kindergarten, primary, secondary 1, IGCSE, O level, and A/AS Level. With our perspectives “
        <em>
            To actively participate in improving the quality of national education through innovative and effective learning, and to increase the motivation of learning communities”, Sinergia Worldwide Education commit to give the best for the future education of your children.
        </em>
    </p>
</div>
@endsection