@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Мої дзвінки</h4>
        </div>
        <div class="card-body">
            @auth
                <p>Вітаємо, {{ auth()->user()->name }}!</p>
                @if (auth()->user()->role === 'editor')
                    <p class="text-success">Ви можете редагувати карти оцінки.</p>
                @elseif (auth()->user()->role === 'sale')
                    <p class="text-info">Ви можете переглядати свої дзвінки.</p>
                @endif
            @endauth
            <!-- Тут може бути таблиця з дзвінками -->
        </div>
    </div>
</div>
@endsection
