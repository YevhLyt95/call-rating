<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller{
    //show card to view
    public function show($id){
        //find card by id
        $card = Card::findOrFail($id);
        return view('cards.show', compact('card'));
    }
}