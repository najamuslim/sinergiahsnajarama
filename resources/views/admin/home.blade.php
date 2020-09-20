@extends('layout.app')

@php
    /** @var \App\Registrant $registrants */
@endphp

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">

            @include('admin.list-registrant', $registrants)
            
        </div>
    </div>
</div>
@endsection
