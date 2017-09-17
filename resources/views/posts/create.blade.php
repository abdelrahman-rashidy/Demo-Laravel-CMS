@extends('/layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>

                <div class="panel-body">
                   <form action="/post/store" method="POST">
       {{--         for image
            <div class="form-group">
                <label for="imageInput">File input</label>
                <input data-preview="#preview" name="input_img" type="file" id="imageInput">
                <img class="col-sm-6" id="preview"  src="" ></img>
                <p class="help-block">Example block-level help text here.</p>
            </div>--}}
            
                       {{ csrf_field() }}
                       <h3>title</h3>
                       <input class="form-control" type="text" name="title" required>
                       <h3>body</h3>
                       <textarea class="form-control" name="body" id="" cols="30" rows="10" required> </textarea>
                       <br>
                    <button type="submit" class="btn btn-primary">publish</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
