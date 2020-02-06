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
                <h1>Add Posts</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Create At</th>
                        <th class="text-center" width="130px"><a href="#" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus"></i></a></th>
                    </thead>
                    <tbody>
                        @foreach ($blog as $key => $value)
                            <tr>
                                <th></th>
                                <td>{{ $value->title }}</td>
                                <td>{{ substr($value->body, 0, 40) }} {{ strlen($value->body) > 40 ? "...." : "" }}</td>
                                <td>{{ date('M J, Y', strtotime($value->created_at)) }}</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm"> <span class="glyphicon glyphicon-eye-open"></span></a>
                                    <a href="" class="btn btn-warning btn-sm"> <span class="glyphicon glyphicon-eye-penicl"></span></a>
                                    <a href="" class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-eye-trash"></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>