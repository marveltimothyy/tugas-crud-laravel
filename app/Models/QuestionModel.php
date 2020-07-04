<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class QuestionModel
{
    public static function get_all()
    {
        $data = DB::table('question')->get();
        return $data;
    }
    public static function get($id)
    {
        $data2 = DB::table('question')->where('id', '=', $id)->get();
        return $data2;
    }
    public static function store($data)
    {
        $new_data = DB::table('question')->insert($data);
        return $new_data;
    }
}