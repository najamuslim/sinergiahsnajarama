@extends('layout.app')
<head>
    <link rel="icon" href="{{ asset('images/logo sinergia no backg.png') }}"/>
    <title>Registration Form - Sinergia Homeschooling</title>
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
    <p style="margin-top: 45px; margin-left: 25px;">Create a new post</p>
</div>
<div class="container">
        <div class="row">
            <div class="col-md-10 offset-1 mt-4">
                <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
    CKEDITOR.replace('wysiwyg-editor', {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

@endsection