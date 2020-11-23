@extends('layouts.app')

@section('content')


    <div class="card">
        <div class="card-header"><strong>{{ $discussion->title }}</strong></div>

        <div class="card-body">
            {!! $discussion->content !!}
        </div>
    </div>
    <div  class="card my-2">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>

        @endif

@foreach($discussion->replies()->paginate(3) as $reply )
<div class="card" my-2>
    <div class="card-header">
    <img src="{{Gravatar::src($reply->owner->email)}}" alt="" style="border-radius:50%" height="40px" width="40px" >
    <span style="">{{$reply->owner->name}}</span>
    </div>
    <div class="card-body">
        {!!$reply->content!!}
    </div>
</div>
    
@endforeach
{{$discussion->replies()->paginate(3)->links()}}

        <div class="card-header">
            Add a reply
        </div>
        <div class="card-body">
            @auth
                <form action="{{ route('replies.store', $discussion->slug) }}" method="POST">
                    @csrf
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content"></trix-editor>


                    <button class="btn btn-info btn-sm my-2" type="submit">
                        Add Reply
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}">Sign in to Add Reply</a>
            @endauth

        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.css"
        integrity="sha512-EQF8N0EBjfC+2N2mlaH4tNWoUXqun/APQIuFmT1B+ThTttH9V1bA0Ors2/UyeQ55/7MK5ZaVviDabKbjcsnzYg=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.min.css"
        integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA=="
        crossorigin="anonymous" />

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.js"
        integrity="sha512-S9EzTi2CZYAFbOUZVkVVqzeVpq+wG+JBFzG0YlfWAR7O8d+3nC+TTJr1KD3h4uh9aLbfKIJzIyTWZp5N/61k1g=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix-core.js"
        integrity="sha512-CbStBpljvPgo8jIJkWQeuvKa5O9BeXIg8LBwE30WqZCslH21AQk7SnL8alDwx9ecKJ8uukzLvR5TJoQESJkBCw=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix-core.min.js"
        integrity="sha512-6C0JJHOrwdlZ6YMongpJax0kXCfu23TIbEETNjBpoCHJVSw+2NL8eE/CQ0ZNdPbdzrJ/T0HgXhUbBtJl1jyEXQ=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.min.js"
        integrity="sha512-9JcmG1JOs44Iob11CgdOsTJdYnzXVlZsEmt5hsX+4uQYCKkitcCuwgSIkHpm0ATqBgvdSA1pJsYwt9HdPEb1Nw=="
        crossorigin="anonymous"></script>

@endsection
