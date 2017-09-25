@extends('/layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>

                <div class="panel-body">
                   <form action=" {{ route('UpdatePost') }} " method="POST">

                      {{ method_field('patch') }}
                      {{ csrf_field() }}
                       <h3>title</h3>
                       <input class="form-control" type="text" name="title" value="{{$post->title}}" required>
                       <h3>body</h3>
                       <textarea class="form-control" name="body" id="" cols="30" rows="10" required> {{$post->body}}</textarea>
                       <br>
                    <button type="submit" class="btn btn-primary">publish</button>
                    
                    <input type="hidden" name="post_id" value="{{ $post->id }}"> 
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
