@extends ('layouts.app')

@section('content')
    <div style="padding: 20px; max-width: 400px; margin: auto;">
        <h2>Вхід</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label>Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div>
                <label>Пароль:</label>
                <input type="password" name="password" required>
            </div>

            @error('email')
                <p style="color:red;">{{ $message }}</p>
            @enderror

            <button type="submit">Увійти</button>
        </form>
    </div>

@endsection