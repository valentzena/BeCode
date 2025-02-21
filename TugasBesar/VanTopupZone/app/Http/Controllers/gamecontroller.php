<?php

namespace App\Http\Controllers;

use App\Models\gamemodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class gamecontroller extends Controller
{
    public function index()
    {
        $game = gamemodel::all(); // Inisialisasi variabel $layanan
        return view('game', ['game' => $game]);
    }    
    public function tambah()
    {
        return view('tambah');
    }
    public function simpan(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar ke dalam folder public/images
        $imagePath = $request->file('gambar')->store('images', 'public');

        // Simpan path gambar ke dalam database
        gamemodel::create([
            'nama' => $request->nama,
            'gambar' => $imagePath, // Menyimpan path gambar yang baru saja diunggah
        ]);

        return redirect('game');
    }
    public function edit($id)
    {
        $game  = gamemodel::find($id);
        return view('edit', ['game' => $game]);
    }
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $game = gamemodel::findOrFail($id);
    
        $game->nama = $request->nama; // Perbarui judul
        // Update field image jika ada file baru
        if ($request->hasFile('gambar')) {
            if ($game->image) {
                Storage::delete('public/' . $game->image);
            }
    
            $imagePath = $request->file('gambar')->store('public/images');
            $game->gambar = str_replace('public/', '', $imagePath);
        }
        // Simpan perubahan
        $game->save();
    
        return redirect('game');
    }
    public function hapus($id)
    {
        $game = gamemodel::find($id);

        // Hapus gambar terkait dari penyimpanan jika ada
        if ($game->image) {
            Storage::delete('public/' . $game->image);
        }
        // Hapus entri layanan dari basis data
        $game->delete();
    
        return redirect('/game');
    }
}
