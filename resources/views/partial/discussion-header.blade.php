<div class="d-flex justify-content-between">
   <div>
    <img style="height:45px; width: 45px; border-radius: 50%;" src="{{ Gravatar::src($discussion->author->email) }}" alt="">
    <strong class="ml-2">{{ $discussion->author->name }}</strong>
   </div>
   <div>
       <div >
       <a href="{{route('discussions.show',$discussion->slug)}}"class="btn btn-success btn-sm my-1 mx-1"> View</a>
       </div>
   </div>
</div>