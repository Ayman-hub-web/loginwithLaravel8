@extends('templates.main')
@section('content')
    <h1>Vrify email address</h1>
    <p>You must verify your email address to access this page.</p>
    <form action="{{ route('verification.send') }}" method="post">
        @csrf 
        <button type="submit" class="btn btn-primary">Resend verification email</button>
    </form>
@endsection