@extends('layouts.app')

@section('content')

  
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @foreach ($discussions as $discussion)
    
        <div class="card my-3">

          
            @include('partial.discussion-header')


            <div class="card-body ">

                <strong> {{ $discussion->title }}</strong>
            </div>
            
        </div>

    @endforeach
    {{ $discussions->appends(['channel'=>request()->query('channel')])->links() }}

@endsection
