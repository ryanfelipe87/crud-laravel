<h2>User - {{ $user->first_name }}</h2>
<form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Delete</button>
</form>
