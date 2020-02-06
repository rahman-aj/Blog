<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bloger</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Blogs</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @foreach ($blog as $key => $value)
                    <h2>{{ $value->title }}</h2>
                    <h5>Published: {{ date('M J, Y', strtotime($value->created_at)) }}</h5>
                    <p>{{ substr($value->body, 0 , 200) }} {{ strlen($value->body) > 200 ? '....' : ""}}</p>
                    <a href="{{ route('blog.single', $value->id) }}" class="btn btn-primary">Read More</a>
                @endforeach
            </div>
        </div>

    </div>
</body>
</html>