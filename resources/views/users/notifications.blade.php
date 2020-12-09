@extends('layouts.app')

@section('content')


<div class="card">
    <div class="card-header">Notifications</div>
    

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <ul class="list-group">
           @foreach($notifications as $notification)
               <li class="list-group-item">
                  @if($notification->type=='App\Notifications\NewReplyAdded')
                 
                  <div class="justify-content-between">
                      <div class="div">
                        @if($notification->type=='App\Notifications\NewReplyAdded')
                 
                        A new reply was added to your discussion
                        <strong>{{ $notification->data['discussion']['title'] }}</strong>
                        
                       
     
                        @endif
                        @if($notification->type=='App\Notifications\ReplyMarkedAsBestReply')
                      Your Reply  to <strong>{{$notification->data['discussion']['title']}}</strong> is marked as best Reply
      
                        <a href="{{ route('discussions.show', $notification->data['discussion']['title']) }}" class="btn btn-sm btn-success float-right">
                            View Discussion
                        </a>
                        @endif
                      </div>
                      <div class="div">

                      </div>
                  </div>
                      
                  @endif
                  @if($notification->type=='App\Notifications\ReplyMarkedAsBestReply')
                Your Reply  to <strong>{{$notification->data['discussion']['title']}}</strong> is marked as best Reply

                  <a href="{{ route('discussions.show', $notification->data['discussion']['title']) }}" class="btn btn-sm btn-success float-right">
                      View Discussion
                  </a>
                  @endif

               </li>
           @endforeach

        </ul>

        
    </div>
</div>
@endsection
