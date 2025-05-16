<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller{
    public function create()
    {
        return view('cards.create');
    }

    // Зберегти нову карту в базу
    public function store(Request $request)
    {
        $validated = $request->validate([
            'call_id' => 'required|string|max:255',
            'sip' => 'required|integer',
            'editor_id' => 'required|integer',
            'score1' => 'required|integer|min:0|max:10',
            'score2' => 'required|integer|min:0|max:10',
            'score3' => 'required|integer|min:0|max:10',
            'comment' => 'nullable|string',
            'created_at' => 'nullable|date',
        ]);

        $card = new Card($validated);
        $card->save();

        return redirect()->route('cards.show', $card->id)->with('success', 'Карта успішно створена!');
    }
    //show card to view
    public function show($id){
        //find card by id
        $card = Card::findOrFail($id);
        return view('cards.show', compact('card'));
    }
}