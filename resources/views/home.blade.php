@extends('layouts.app')

@section('content')
<div class="container">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
         @foreach($courses as $cours)
                 <h1>{{$cours->course_name}}</h1>
            @endforeach
</div>
@endsection
