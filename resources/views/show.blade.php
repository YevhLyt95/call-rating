@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Деталі карти оцінки</h2>

    <table class="table table-bordered mt-3">
        <tr>
            <th>ID дзвінка/чату</th>
            <td>{{ $card->call_id }}</td>
        </tr>
        <tr>
            <th>SIP</th>
            <td>{{ $card->sip }}</td>
        </tr>
        <tr>
            <th>Тип карти</th>
            <td>{{ $card->card_type }}</td>
        </tr>
        <tr>
            <th>Мова</th>
            <td>{{ $card->language }}</td>
        </tr>
        <tr>
            <th>Дата дзвінка</th>
            <td>{{ \Carbon\Carbon::parse($card->call_at)->format('d.m.Y') }}</td>
        </tr>
        <tr>
            <th>Дата заповнення</th>
            <td>{{ $card->created_at->format('d.m.Y') }}</td>
        </tr>
    </table>

    <h4 class="mt-4">Оцінка:</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Питання</th>
                <th>Значення</th>
            </tr>
        </thead>
        <tbody>
            @php
                $content = json_decode($card->content, true);
            @endphp
            @foreach($content as $key => $value)
                <tr>
                    <td>{{ ucfirst(str_replace('_', ' ', $key)) }}</td>
                    <td>{{ is_array($value) ? json_encode($value) : $value }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('my_calls') }}" class="btn btn-secondary mt-3">← Назад до списку</a>
</div>
@endsection
