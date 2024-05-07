<h2>User Edit</h2>

<form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <input type="text" name="firstName" value="{{ $user->first_name }}">
    <input type="text" name="lastName" value="{{ $user->last_name }}">
    <input type="text" name="email" value="{{ $user->email }}">
    <button type="submit">Update</button>
</form>
