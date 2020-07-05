<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ItemController extends Controller
{
    public function index()
    {
        $artikels = ArtikelModel::get_all();
        return view('pages.artikel', compact('artikels'));
    }

    public function create()
    {
        return view('pages.form_artikel');
    }
}
