@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Створити карту оцінки</h2>
    <form action="{{ route('cards.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="call_id" class="form-label">ID Дзвінка</label>
            <input type="text" class="form-control" id="call_id" name="call_id" required>
        </div>

        <div class="mb-3">
            <label for="sip" class="form-label">SIP (користувач sale)</label>
            <input type="number" class="form-control" id="sip" name="sip" required>
        </div>

        <div class="mb-3">
            <label for="editor_id" class="form-label">Editor ID</label>
            <input type="number" class="form-control" id="editor_id" name="editor_id" required>
        </div>

        {{-- Можна додати поля категорій, наприклад --}}
        <div class="mb-3">
            <label for="category_a" class="form-label">Категорія A</label>
            <input type="number" class="form-control" id="category_a" name="category_a" min="0" max="10" required>
        </div>

        <button type="submit" class="btn btn-primary">Зберегти карту</button>
    </form>
</div>
@endsection
