<?php

// app/Http/Controllers/TextController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jurusan; // Gantilah TextModel dengan model yang sesuai

class TextController extends Controller
{
    public function showInputForm()
    {
        return view('inputan');
    }

    public function storeText(Request $request)
    {
        $text = new jurusan; // Gantilah TextModel dengan model yang sesuai
        $text->text_content = $request->input('text_content');
        $text->save();

        return redirect()->route('input.form')->with('success', 'Teks berhasil disimpan!');
    }
}
