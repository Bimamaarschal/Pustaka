<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Artikel;
use App\Models\Jurnal;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $itemsPerPage = 6;
        $statusdis = ['Artikel telah di review', 'artikel khusus'];

        $artikels = Artikel::whereIn('review', $statusdis)
            ->latest()
            ->paginate($itemsPerPage);

        return view('artikel.index', compact('artikels'));
    }

    public function create(): View
    {
        return view('artikel.create');
    }

    public function store(Request $request): RedirectResponse
    {

        $this->validate($request, [
            'image'                      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'noartikel'                  => 'required',
            'judul'                      => 'required|max:300',
            'penulis'                    => 'required',
            'email'                      => 'required',
            'instansi'                   => 'required',
            'tanggal'                    => 'required',
            'jenis'                      => 'required',
            'kataketerangan'             => 'required|max:350',
            'abstrak'                    => 'required|max_words:350',
            'katakunci'                  => 'required',
            'latarbelakang'              => 'required',
            'metode'                     => 'required',
            'hasil'                      => 'required',
            'pembahasan'                 => 'required',
            'simpulan'                   => 'required',
            'saran'                      => 'required',
        ], [
            'image.required'             => 'Mohon untuk tambahkan gambar format jpeg, png, jpg, gif, svg, maksimal 2048mb.',
            'image.image'                => 'Mohon untuk tambahkan gambar dengan format jpeg, png, jpg, gif, svg.',
            'image.mimes'                => 'Mohon untuk tambahkan gambar dengan format jpeg, png, jpg, gif, svg.',
            'image.max'                  => 'Ukuran gambar tidak boleh lebih dari 2048mb.',
            'judul.required'             => 'Judul tidak boleh kosong.',
            'judul.max'                  => 'Judul tidak boleh lebih dari :max karakter.',
            'penulis.required'           => 'Nama penulis tidak boleh kosong.',
            'jenis.required'             => 'Jenis jurnal tidak boleh kosong.',
            'kataketerangan.required'    => 'Kata keterangan tidak boleh kosong.',
            'kataketerangan.max'         => 'Kata pendahulu tidak boleh lebih dari :max kata.',
            'abstrak.required'           => 'Abstrak tidak boleh kosong.',
            'abstrak.max_words'          => 'Abstrak standar 300-350 kata.',
        ]);

        $review = "Belum di review";

        $user = Auth::user();

        $image = $request->file('image');
        $image->storeAs('public/artikel', $image->hashName());

        $newPost = Artikel::create([
            'image' => $image->hashName(),
            'noartikel' => $request->noartikel,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'email' => $request->email,
            'instansi' => $request->instansi,
            'tanggal' => $request->tanggal,
            'jenis' => $request->jenis,
            'kataketerangan' => $request->kataketerangan,
            'abstrak' => $request->abstrak,
            'katakunci' => $request->katakunci,
            'latarbelakang' => $request->latarbelakang,
            'metode' => $request->metode,
            'hasil' => $request->hasil,
            'pembahasan' => $request->pembahasan,
            'simpulan' => $request->simpulan,
            'saran' => $request->saran,
            'review' => $review,
        ]);

        if (!$newPost) {
            return abort(404);
        }

        return redirect()->route('artikel.review', ['id' => $newPost->id])->with('success', 'Data Berhasil Disimpan!');
    }


}
