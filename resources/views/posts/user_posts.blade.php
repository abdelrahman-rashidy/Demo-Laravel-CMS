@extends('/layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> {{-- {{ $UserName}} --}} </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($posts as $post)
            
                    <h2>
                        <a href=" {{ url('/post/')}}{{ '/' .$post->id }} ">{{$post->title}}</a> 
                    </h2>
                    <span> by <a href=" {{ url('user/'). '/' .$post->user->id }} ">{{ $post->user->name}} </a> </span>
                    , at <span>{{$post->created_at->toFormattedDateString()}}</span>
                    <br>
                    {{$post->body}}
                    <hr>
                    

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
