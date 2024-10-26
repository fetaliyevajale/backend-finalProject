@extends('admin.layout')

@section('content')
<h1>Admin Girişi</h1>
<form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <input type="email" name="email" required placeholder="Email">
    <input type="password" name="password" required placeholder="Şifrə">
    <button type="submit">Giriş</button>
</form>
@endsection
