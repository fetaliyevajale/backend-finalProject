@extends('admin.layout')

@section('content')
<h1>Admin Girişi</h1>

@if ($errors->any())
    <div class="error-messages">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('admin.login') }}">
    @csrf
    <input type="email" name="email" required placeholder="Email">
    <input type="password" name="password" required placeholder="Şifrə">
    <button type="submit">Giriş</button>
</form>
@endsection
