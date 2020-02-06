<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add Post</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                {!! Form::open(array('route' => 'post.store', 'data-parsley-validate' => '')) !!}

                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', NULL, array('class' => 'Form-control', 'required' => '', 'maxlength' => '225')) }}

                {{ Form::label('body', 'Body') }}
                {{ Form::textarea('body', NULL, array('class' => 'Form-control', 'required' => '')) }}

                {{ Form::submit('Add Post', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 20px'))}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</body>
</html>