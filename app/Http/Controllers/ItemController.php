<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;

class ItemController extends Controller
{
    public function index()
    {
        $items = ItemModel::get_all();

        return view('items.index', compact('items'));
    }
    public function create()
    {
        return view('items.form');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        $item = ItemModel::save($data);
        if ($item) {
            return redirect('/item');
        }
    }
}