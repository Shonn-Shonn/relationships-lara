<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3 class="text-center page-title">
         User found: {{$user->name}}
    </h3> 
    <b>Email</b>: {{$user->email}}
    <br>
    <b>Registered on</b>: {{$user->created_at}}
</body>
</html>