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
        // echo $data2;
        return $data2;
    }
    public static function edit($data, $id)
    {
        date_default_timezone_set("Asia/Jakarta");
        $date = date("Y-m-d H:i:s");
        $data2 = DB::table('question')->where('id', '=', $id)->update($data);
        $data2 = DB::table('question')->where('id', '=', $id)->update(['updated_at' => $date]);
        // echo $data2;
        return $data2;
    }
    public static function delete($id)
    {
        $data2 = DB::table('question')->where('id', '=', $id)->delete();
        return $data2;
    }
    public static function store($data)
    {
        $new_data = DB::table('question')->insert($data);
        return $new_data;
    }
}