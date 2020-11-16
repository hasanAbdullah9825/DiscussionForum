@extends('layouts.app')

@section('content')
    <div class="card card-default">
    <div class="card-header">
            Add discussion
        </div>
        <div class="card-body">
            <form action="{{ route('discussions.create') }}">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="title" class="form-control">


                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content"></trix-editor>
                   
                    
                </div>
                <div class="form-group">
                    <label for="">Select Channels</label>
                    <select name="channel" id="" class="form-control">
                        @foreach ($channels as $channel)
                            <option value="{{ $channel->id }}" class="form-control">{{ $channel->name }}</option>

                        @endforeach

                    </select>
                </div>

            </form>
        </div>
    </div>

@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.css" integrity="sha512-EQF8N0EBjfC+2N2mlaH4tNWoUXqun/APQIuFmT1B+ThTttH9V1bA0Ors2/UyeQ55/7MK5ZaVviDabKbjcsnzYg==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.min.css" integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA==" crossorigin="anonymous" />
    
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.js" integrity="sha512-S9EzTi2CZYAFbOUZVkVVqzeVpq+wG+JBFzG0YlfWAR7O8d+3nC+TTJr1KD3h4uh9aLbfKIJzIyTWZp5N/61k1g==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix-core.js" integrity="sha512-CbStBpljvPgo8jIJkWQeuvKa5O9BeXIg8LBwE30WqZCslH21AQk7SnL8alDwx9ecKJ8uukzLvR5TJoQESJkBCw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix-core.min.js" integrity="sha512-6C0JJHOrwdlZ6YMongpJax0kXCfu23TIbEETNjBpoCHJVSw+2NL8eE/CQ0ZNdPbdzrJ/T0HgXhUbBtJl1jyEXQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.min.js" integrity="sha512-9JcmG1JOs44Iob11CgdOsTJdYnzXVlZsEmt5hsX+4uQYCKkitcCuwgSIkHpm0ATqBgvdSA1pJsYwt9HdPEb1Nw==" crossorigin="anonymous"></script>
    
@endsection
