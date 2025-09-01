<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ShopsController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('pages.shop', [
            'items' => $items,
        ]);
    }
}
