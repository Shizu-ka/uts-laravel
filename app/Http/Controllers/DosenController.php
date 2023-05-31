<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        // // Cek apakah pengguna sudah login
        // if (empty(session('app123_logged_in'))) {
        //     return redirect()->route('login');
        // }

        // Ambil semua data dosen dari model Dosen
        $dosens = Dosen::all();

        // Tampilkan view index.blade.php dengan data dosens
        return view('index', compact('dosens'));
    }

    public function edit($id)
    {
        // Cek apakah pengguna sudah login
        // if (empty(session('app123_logged_in'))) {
        //     return redirect()->route('login');
        // }

        // Cari data dosen berdasarkan ID
        $dosen = Dosen::find($id);

        // Tampilkan view edit.blade.php dengan data dosen
        return view('edit', compact('dosen'));
    }


    public function update(Request $request, $id)
    {
        // Cek apakah pengguna sudah login

        // Validasi input yang diterima dari form
        $validatedData = $request->validate([
            'nip' => 'required|max:20',
            'nama' => 'required|max:50',
            'fakultas' => 'required|max:50',
        ]);

        // Update data dosen dengan kueri manual
        DB::table('dosens')
            ->where('id', $id)
            ->update([
                'nip' => $validatedData['nip'],
                'nama' => $validatedData['nama'],
                'fakultas' => $validatedData['fakultas'],
            ]);

        // Redirect ke halaman index
        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil diperbarui');
    }



    public function delete($id)
    {
        // Cek apakah pengguna sudah login
        if (empty(session('app123_logged_in'))) {
            return redirect()->route('login');
        }

        // Cari data dosen berdasarkan ID
        $dosen = Dosen::find($id);

        // Hapus data dosen
        $dosen->delete();

        // Redirect ke halaman index
        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil dihapus');
    }

    public function destroy($id)
    {
        // Cek apakah pengguna sudah login
        // if (empty(session('app123_logged_in'))) {
        //     return redirect()->route('login');
        // }

        // Cari data dosen berdasarkan ID
        $dosen = Dosen::find($id);

        // Hapus data dosen
        $dosen->delete();

        // Redirect ke halaman index
        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil dihapus');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'fakultas' => 'required',
        ]);

        $nip = $request->input('nip');
        $nama = $request->input('nama');
        $fakultas = $request->input('fakultas');

        $insertData = [
            'nip' => $nip,
            'nama' => $nama,
            'fakultas' => $fakultas,
        ];

        DB::table('dosens')->insert($insertData);

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil ditambahkan.');
    }



    public function create()
    {
        return view('create');
    }
}
