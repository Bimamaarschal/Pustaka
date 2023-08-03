<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class BeritaController extends Controller
{
    public function index(): View
    {
        $beritas = Berita::latest()->paginate(6);
        return view('beritas.index', compact('beritas'));
    }

    public function create(): View
    {
        return view('beritas.create');
    }

    public function store(Request $request): RedirectResponse
    {

        $this->validate($request, [
            'image'                 => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'judulberita'           => 'required|min:5',
            'penulis'               => 'required',
            'tanggal'               => 'required',
            'konten'                => 'required'
        ]);
        $image = $request->file('image');
        $image->storeAs('public/beritas', $image->hashName());

        Berita::create([
            'image'                 => $image->hashName(),
            'judulberita'           => $request->judulberita,
            'penulis'               => $request->penulis,
            'tanggal'               => $request->tanggal,
            'konten'                => $request->konten
        ]);

        return redirect()->route('beritas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $berita = Berita::findOrFail($id);

        return view('beritas.show', compact('berita'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        $berita = Berita::findOrFail($id);
        return view('beritas.edit', compact('berita'));
    }
    
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'image'                 => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'judulberita'           => 'required|min:5',
            'penulis'               => 'required',
            'tanggal'               => 'required',
            'konten'                => 'required',
        ]);

        $berita = Berita::findOrFail($id);

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $image->storeAs('public/beritas', $image->hashName());

            Storage::delete('public/beritas/'.$berita->image);

            $berita->update([
            'image'                 => $image->hashName(),
            'judulberita'           => $request->judulberita,
            'penulis'               => $request->penulis,
            'tanggal'               => $request->tanggal,
            'konten'                => $request->konten
            ]);

        } else {
            $berita->update([
                'judulberita'           => $request->judulberita,
                'penulis'               => $request->penulis,
                'tanggal'               => $request->tanggal,
                'konten'                => $request->konten
            ]);
        }
        return redirect()->route('beritas.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


    public function destroy($id): RedirectResponse
    {

        $berita = Berita::findOrFail($id);
        Storage::delete('public/beritas/'. $berita->image);
        $berita->delete();
        return redirect()->route('beritas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }


}
