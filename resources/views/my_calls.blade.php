@extends('layouts.app')
@section('title', 'Мої дзвінки')
@section('content')
<h1>Мої дзвінки</h1>
@if(session('role')==='editor')
    <p>Ось карти, які ви зберегли</p>
@elif(session('role') === 'sale')
    <p>Ось оцінки ваших дзвінків</p>
@endif

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>Номер телефона або чат</th>
            <th>Sip</th>
            <th>Дата внесення</th>
            <th>Тип карти</th>
            <th>Мова</th>
            <th>Дата дзвінка</th>
        </tr>
    </thead>
    <tbody>
        @forelse($cards as $card)
            <tr>
                <td>{{ $card->call_id }}</td>
                <td>{{ $card->sip }}</td>
                <td>{{ $card->created_at->format('d.m.Y') }}</td>
                <td>{{ $card->card_type }}</td>
                <td>{{ $card->call_at->fortmat('d.m.Y') }}</td>
                <td>
                    <a href="{{ route('cards_show', $card->id) }}">Переглянути</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">У вас немає карт</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection