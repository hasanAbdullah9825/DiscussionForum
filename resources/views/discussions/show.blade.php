@extends('layouts.app')

@section('content')


<div class="card">
<div class="card-header"><strong>{{$discussion->title}}</strong></div>
    
    <div class="card-body">
      {!!$discussion->content!!}
    </div>
</div>
@endsection
