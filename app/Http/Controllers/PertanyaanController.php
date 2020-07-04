<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;
use App\Models\QuestionModel;
use App\Models\AnswerModel;

class PertanyaanController extends Controller
{
    public function index()
    {
        $items = QuestionModel::get_all();
        return view('interact.question', compact('items'));
    }
    public function show($id)
    {
        $data = AnswerModel::get_answer($id);
        $data2 = QuestionModel::get($id);
        return view('interact.question_detail', compact('data', 'data2'));
        // var_dump($items2);
        // return view('interact.question_detail', compact('items', 'items2'));
    }
    public function showEdit($id)
    {
        $data = QuestionModel::get($id);
        return view('interact.question_edit', compact('data'));
        // var_dump($items2);
        // return view('interact.question_detail', compact('items', 'items2'));
    }
    public function insertEdit(Request $request, $id)
    {
        $data = $request->validate([
            'judul' => ['required', 'max:255'],
            'isi' => ['required', 'max:255'],
        ]);
        $data = QuestionModel::edit($data, $id);
        // return view('interact.question_edit', compact('data'));
        // var_dump($items2);
        return redirect('/pertanyaan');
    }
    public function create()
    {
        return view('interact.form_question');
    }
    public function delete($id)
    {
        QuestionModel::delete($id);
        return redirect('/pertanyaan');
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