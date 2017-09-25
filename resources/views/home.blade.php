@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button type="submit" class="btn btn-outline-danger"><a class="" href=" {{ route('PostIndex')  }}"> Posts</a></button>
                    <button type="submit" class="btn btn-outline-danger"><a class="" href="{{ route('CreatePage') }}"> Create Post</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
