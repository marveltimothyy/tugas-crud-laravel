<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;
use App\Models\QuestionModel;

class PertanyaanController extends Controller
{
    public function index()
    {
        $items = QuestionModel::get_all();
        return view('interact.question', compact('items'));
    }
    public function create()
    {
        return view('interact.form_question');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => ['required', 'max:255'],
            'isi' => ['required', 'max:255'],
        ]);
        $data = $request->all();
        unset($data["_token"]);
        date_default_timezone_set("Asia/Jakarta");
        foreach ($data as $key => $value) {
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['updated_at'] = date("Y-m-d H:i:s");
        }
        $item = QuestionModel::store($data);
        if ($item) {
            return redirect('/pertanyaan');
        }
    }
}