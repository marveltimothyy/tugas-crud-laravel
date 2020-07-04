<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AnswerModel
{
    public static function get_answer($id)
    {
        $data = DB::table('answer')->where('question_id', '=', $id)->get();
        return $data;
    }
    public static function create_answer($data)
    {
        $new_data = DB::table('answer')->insert($data);
        // if ($new_data) {
        //     foreach ($data as $key => $value) {
        //         $foreign = DB::table('question')->where('id', '=', $value->id)->insert(['question_id' => $id]);
        //     }
        // }
        return $new_data;
    }
}