@extends('layouts.app')

@section('content')

<div class="home-banner">
    <h3>User Profile</h3>
</div>

<div class="home-body">
    <form method="POST" action="{{ route('homeUpdate') }}">
        @csrf
        <label>Name</label><br>
        <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}"><br>
        <label>Surname</label><br>
        <input type="text" name="surname" value="{{ old('surname', Auth::user()->surname) }}"><br>
        <label>Email</label><br>
        <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}"><br>
        <button type="submit">Submit</button>
    </form>
</div>

@endsection
