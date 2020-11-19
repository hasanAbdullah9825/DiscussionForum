@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-end my-2">
   
<a href="{{route('discussions.create')}}"> <button class="btn btn-info">
    Add Discussion
</button></a>
</div>
@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif
@foreach ($discussions as $discussion)
<div class="card">
    <div class="card-header">{{$discussion->title}}</div>
        
    
        <div class="card-body">
            
    
           {!!$discussion->content!!}
        </div>
    </div>
    
@endforeach
{{$discussions->links()}}

@endsection
