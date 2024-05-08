<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/users.css') }}">
    <title>Inazuma</title>
</head>

<body>
    <a href="{{ route('users.create') }}">Create</a>
    <hr>
    <h1 class="m-3">Users List</h1>
    <br><br>
    @foreach ($users as $user)
        <ul>
            <li>{{ $user->first_name }} {{ $user->last_name }} |
                <a href="{{ route('users.edit', ['user'=>$user->id]) }}">Edit</a> |
                <a href="{{ route('users.show', ['user' => $user->id]) }}">Show</a>
            </li>
        </ul>
    @endforeach
</body>

</html>
