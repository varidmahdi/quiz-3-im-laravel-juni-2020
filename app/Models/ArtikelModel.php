<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ArtikelModel
{
    public static function get_all()
    {
        $items = DB::table('artikels')->get();
        return $items;
    }

    public static function save()
    {
        $item = DB::table('artikels')->insert();
        return $item;
    }
}
