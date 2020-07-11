<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//model custom
use App\Models\ItemModel;
//model eloquent
use App\Item;
use Illuminate\Support\Facades\Redis;
use App\Category;

class ItemController extends Controller
{
    public function show_update($id)
    {
        $data = Item::where('id', '=', $id)->get();
        // dd($data);
        return view('items.form-update', compact('data'));
    }
    public function store_update(Request $request)
    {
        // dd($request["description"]);
        $updated_item = Item::find($request["id"]);
        $updated_item->name = $request["name"];
        $updated_item->description = $request["description"];
        $updated_item->stock = $request["stock"];
        $updated_item->price = $request["price"];
        $updated_item->save();
        return redirect('/');
    }
    public function index()
    {
        // $items = ItemModel::get_all();
        // dd($items);
        $items =  Item::all();
        $category =  Category::all();
        // dd($items);
        return view('items.index', compact('items', 'category'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('items.form', compact('categories'));
    }
    public function store(Request $request)
    {
        //custom model 
        // $data = $request->all();
        // unset($data["_token"]);
        // $item = ItemModel::save($data);
        //eloquent model
        // dd($request["id"]);
        // $new_item = new Item;
        // $new_item->name = $request["name"];
        // $new_item->description = $request["description"];
        // $new_item->stock = $request["stock"];
        // $new_item->price = $request["price"];
        // $new_item->save();
        //mass assignment 
        $new_item = Item::create([
            "name" => $request["name"],
            "description" => $request["description"],
            "stock" => $request["stock"],
            "price" => $request["price"],
            "category_id" => $request["category_id"],
        ]);
        // dd($new_item);
        if ($new_item) {
            return redirect('/item');
        }
    }
}