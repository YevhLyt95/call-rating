<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Card;
use Illuminate\Support\Facades\Auth;

class MyCallsController extends Controller
{
    public function index(Request $request)
    {
        $role = session('role'); //або Auth::user()->role, хоча так теж має працювати
        $userId = Auth::id();

        if($role === 'editor'){
            $cards = Card::where('editor_id', $userId)->get();
        }elseif($role === 'sale'){
            $cards = Card::where('sales_id', $userId)->get();
        }else{
            $cards = collect(); //порожня колекція, якщо введена роль не існує. Щоб прога не крашонулась
        }
        return view('my_calls', compact('cards'));
    }
}