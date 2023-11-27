<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function update(Request $request, Jurusan $jurusan)
    {
        // Validate the request
        $request->validate([
            'nama_jurusan' => 'required',
            'bidang' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg',
        ]);
       
        // Update the model with the new values
        $jurusan->nama_jurusan = $request->input('nama_jurusan');
        $jurusan->bidang = $request->input('bidang');

        if ($request->hasFile('gambar')) {
            // Process and update the image if a new one is provided
            $gambar = $request->file('gambar');
            $filename = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('path_ke_direktori_gambar'), $filename);
            $jurusan->gambar = $filename;
        }

        // Save the changes
        $jurusan->save();

        return redirect('jurusan');
    }

    public function index()
    {
        // Code to display a listing of Jurusan resources
        $jurusanList = Jurusan::all(); // Example: Fetch all Jurusan records
        return view('jurusan', ['jurusanList' => $jurusanList]);
        
    }

    public function input()
    {
        return view('content.inputjurusan');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'nama_jurusan' => 'required',
            'bidang' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg',
        ]);



     



        // Process and save the images
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $filename = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('gambar_jurusan'), $filename);

            // Create a new Jurusan instance and save it to the database
            $content = new Jurusan;
            $content->nama_jurusan = $request->input('nama_jurusan');
            $content->bidang = $request->input('bidang');
            $content->gambar = $filename;

            if ($content->save()) {
                return redirect('jurusan');
            }
        }
    }
}
