<?php

namespace App\Http\Controllers;

use App\Models\KelasX; // Sesuaikan dengan namespace yang benar
use Illuminate\Http\Request;

class KelasXController extends Controller
{
    public function update(Request $request, KelasX $kelas)
    {
        // Perbarui model dengan nilai baru
        $kelas->classX = $request->input('classX');
        $kelas->roomteacherX = $request->input('roomteacherX');
        $kelas->majorX = $request->input('majorX');
       


        // Simpan perubahan
        $kelas->save();

        return redirect('kelas');
    }

    public function index()
    {
        // Kode untuk menampilkan daftar sumber daya Kelas
        $kelasXList = KelasX::all(); // Contoh: Ambil semua rekaman Kelas
        return view('kelas', ['kelasXList' => $kelasXList]);
    }

    public function input()
    {
        return view('input'); // Ganti 'input' dengan nama view yang sebenarnya
    }

    public function store(Request $request)
    {
        // Validasi permintaan
        $request->validate([
            'classX' => 'required',
            'roomteacherX' => 'required',
            'majorX' => 'required',
        ]);

        // Buat instansi baru dari model Kelas
        $kelas = new KelasX();

        // Atur atribut model
        $kelas->classX = $request->input('classX');
        $kelas->roomteacherX = $request->input('roomteacherX');
        $kelas->majorX = $request->input('majorX');


        // Simpan model
        $kelas->save();

        return redirect('kelas');
    }
}
