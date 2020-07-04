<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswerModel;
use App\Models\QuestionModel;
use DateTime;

class JawabanController extends Controller
{
    public function index($id)
    {
        $data = AnswerModel::get_answer($id);
        $data2 = QuestionModel::get($id);
        return view('interact.answer', compact('data', 'data2'));
    }
    public function create()
    {
        return view('items.form');
    }
    public function store(Request $request, $id)
    {
        $data = $request->validate([
            'isi' => ['required', 'max:255'],
        ]);
        $data = $request->all();
        unset($data["_token"]);
        date_default_timezone_set("Asia/Jakarta");
        foreach ($data as $key => $value) {
            $data['created_at'] = date("Y-m-d H:i:s");
            $data['updated_at'] = date("Y-m-d H:i:s");
        }
        $item = AnswerModel::create_answer($data);

        if ($item) {
            return redirect("/jawaban/{$id}");
        }
    }
}