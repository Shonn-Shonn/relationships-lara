<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h3 class="text-center page-title">Search for user by ID</h3>
    @if (session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif

    <form action="{{route('users.search')}}" method="POST" class="mt-3  w-50 m-auto">
        @csrf
        <div class="form-group">
            <input id="user_id" class="form-control" name="user_id" type="text" value="{{old('user_id')}}" placeholder="User ID">   
        </div>

        <input class="btn btn-info mt-3" type="submit" value="Search">
    </form>
</body>
</html>

