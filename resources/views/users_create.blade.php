<h2>User Create</h2>

@if(@session()->has('message'))
    {{ session()->get('message') }}
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="text" name="first_name" placeholder="Your first name">
    <input type="text" name="last_name" placeholder="Your last name">
    <input type="number" name="age" placeholder="Your age">
    <input type="text" name="email" placeholder="Your e-mail">
    <input type="text" name="password" placeholder="Your password">
    <button type="submit">Create</button>
</form>
