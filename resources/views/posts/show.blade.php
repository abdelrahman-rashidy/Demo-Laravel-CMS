@extends('/layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>
                    
                <div class="panel-body">
                    <h2>{{$post->title}}</h2>

                    @if (auth::check())
                        <span> <a href="{{ $post->id . '/' .'edit' }}">edit</a></span>
                        <br>
                    @endif
                    by <span> <a href="{{ url('user/') . '/' .$post->user->id }}"> {{ $post->user->name}} </a>  </span>, at <span>{{ $post->created_at->toFormattedDateString() }}</span>
                    <br>
                    {{$post->body}}
                    <hr>
                </div>
                <h3>Comments</h3>
                <div class="">
                    @foreach ($comments as $comment)
                         <div class="media-body">
                              <div class="well well-lg">
                                  <h4 class="media-heading text-uppercase reviews"><a href=" {{ url('user'). '/' .$comment->user->id }} ">{{ $comment->user->name}} </a> </h4>
                                  <ul class="media-date text-uppercase reviews list-inline">    
                                        {{$comment->created_at->diffForHumans()}}     
                                  </ul>
                                  <p class="media-comment">
                                    {{ $comment->body }}
                                  </p>
                              </div>
                            </div>
                        <br>
                    @endforeach
                </div>
                @guest
                    <form action="{{ $post->id }}/comments" method="POST" class="form-horizontal" id="commentForm" role="form"> 
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Comment</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" name="body" id="addComment" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-block btn-circle text-uppercase"  type="submit" id="submitComment" disabled="true" ></span> sumit your comment</button>
                            </div>
                        </div>            
                        <input type="hidden" name="post_id" value="{{ $post->id }}"> 
                    </form>
                @else
                    <form action="{{ $post->id }}/comments" method="POST" class="form-horizontal" id="commentForm" role="form"> 
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Comment</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" name="body" id="addComment" rows="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment">sumit your comment</button>
                            </div>
                        </div>            
                        <input type="hidden" name="post_id" value="{{ $post->id }}"> 
                    </form>
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection
