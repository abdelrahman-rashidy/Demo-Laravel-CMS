@extends('/layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>

                <div class="panel-body">
                    <h2>{{$post->title}}</h2>
                    <p>{{$post->created_at}}</p>
                    <br>
                    {{$post->body}}
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
