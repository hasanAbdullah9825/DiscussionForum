@extends('layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header">
        Add discussion
    </div>
    <div class="card-body">
    <form action="{{route('discussions.create')}}">
            <div class="form-group">
                <label for="">Title</label>
                <input type="title" class="form-control">
               
                
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">Select Channels</label>
                <select name="channel" id="" class="form-control">
                   @foreach($channels as $channel)
                <option value="{{$channel->id}}" class="form-control">{{$channel->name}}</option>
                       
                   @endforeach
                </select>
            </div>

        </form>
    </div>
</div>
@endsection