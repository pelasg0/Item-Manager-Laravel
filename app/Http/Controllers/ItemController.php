<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items', ['items' => $items]);
    }
    public function home()
    {
        $items = Item::all();
        return view('home', ['items' => $items]);
    }
    public function show($id)
    {
        $item = Item::find($id);
        return view('items.show', ['item' => $item]);
    }
}
