@extends('layouts.app')

@section('content')

<div class="home-banner">
    <h3>User Profile</h3>
</div>

<div class="home-body">
    <form method="POST" action="{{ route('homeUpdate') }}">
        @csrf
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}">
        <label>Surname</label>
        <input type="text" name="surname" value="{{ old('surname', Auth::user()->surname) }}">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}">
        <button type="submit">Submit</button>
    </form>
</div>

@endsection
