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
            'image'                      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
            'noartikel'                  => 'required',
            'judul'                      => 'required|max:80|regex:/^(?:\b[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}\b\s?)+[.\?]?[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}$/',
            'penulis'                    => 'required',
            'email'                      => 'required',
            'instansi'                   => 'required|max:200|regex:/^(?:\b[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}\b\s?)+[.\?]?[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}$/',
            'tanggal'                    => 'required',
            'jenis'                      => 'required',
            'kataketerangan'             => 'required|max:200|regex:/^(?:\b[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}\b\s?)+[.\?]?[\w\s()\/\\:\'\-?&@#=\+!~%$\_"]{0,15}$/',
            'abstrak'                    => 'required|max:1600',
            'katakunci'                  => 'required|max:200',
            'latarbelakang'              => 'required',
            'metode'                     => 'required',
            'hasil'                      => 'required',
            'pembahasan'                 => 'required',
            'simpulan'                   => 'required',
            'saran'                      => 'required',
            'referensi'                  => 'required',
        ], [
            'image.required'             => 'Mohon untuk tambahkan gambar format jpeg, png, jpg, gif, svg, maksimal 2048mb.',
            'image.image'                => 'Mohon untuk tambahkan gambar dengan format jpeg, png, jpg, gif, svg.',
            'image.mimes'                => 'Mohon untuk tambahkan gambar dengan format jpeg, png, jpg, gif, svg.',
            'image.max'                  => 'Ukuran gambar tidak boleh lebih dari 2048mb.',

            'noartikel.required'         => 'No artikel tidak boleh kosong.',

            'judul.required'             => 'Judul tidak boleh kosong.',
            'judul.max'                  => 'Judul tidak boleh lebih dari :max karakter.',
            'judul.regex'                => 'Perhatikan penulisan judul Anda',

            'penulis.required'           => 'Nama penulis tidak boleh kosong, pastikan data pada profil sudah benar.',

            'email.required'             => 'Nama penulis tidak boleh kosong, pastikan data pada profil sudah benar.',
            
            'instansi.required'          => 'Instansi tidak boleh kosong.',
            'instansi.max'               => 'Instansi tidak boleh lebih dari :max karakter.',
            'instansi.regex'             => 'Perhatikan penulisan data instansi Anda',

            'tanggal.required'           => 'Tanggal penulisan tidak boleh kosong, pastikan data sudah benar.',

            'jenis.required'             => 'Jenis jurnal tidak boleh kosong.',

            'kataketerangan.required'    => 'Kata keterangan tidak boleh kosong.',
            'kataketerangan.max'         => 'Kata keterangan tidak boleh lebih dari :max karakter.',
            'kataketerangan.regex'       => 'Perhatikan penulisan kata keterangan Anda',

            'abstrak.required'           => 'Kata abstrak tidak boleh kosong.',
            'abstrak.max'                => 'Kata abstrak tidak boleh lebih dari :max karakter.',

            'katakunci.required'         => 'Kata kunci abstrak tidak boleh kosong.',
            'katakunci.max'              => 'Kata kunci abstrak tidak boleh lebih dari :max karakter.',

            'latarbelakang.required'     => 'Latar belakang tidak boleh kosong.',

            'metode.required'            => 'Metode tidak boleh kosong.',

            'hasil.required'             => 'Hasil tidak boleh kosong.',

            'pembahasan.required'        => 'Pembahasan tidak boleh kosong.',

            'simpulan.required'          => 'Simpulan tidak boleh kosong.',

            'saran.required'             => 'Saran tidak boleh kosong.',

            'referensi.required'         => 'Referensi tidak boleh kosong.',
        ]);

        
        $review = "Belum di review";

        $image = $request->file('image');
        $image->storeAs('public/artikel', $image->hashName());

        $newPost = Artikel::create([
            'image'                     => $image->hashName(),
            'noartikel'                 => $request->noartikel,
            'judul'                     => $request->judul,
            'penulis'                   => $request->penulis,
            'email'                     => $request->email,
            'instansi'                  => $request->instansi,
            'tanggal'                   => $request->tanggal,
            'jenis'                     => $request->jenis,
            'kataketerangan'            => $request->kataketerangan,
            'abstrak'                   => $request->abstrak,
            'katakunci'                 => $request->katakunci,
            'latarbelakang'             => $request->latarbelakang,
            'metode'                    => $request->metode,
            'hasil'                     => $request->hasil,
            'pembahasan'                => $request->pembahasan,
            'simpulan'                  => $request->simpulan,
            'saran'                     => $request->saran,
            'referensi'                 => $request->referensi,
            'review'                    => $review,
        ]);

        if (!$newPost) {
            return abort(404);
        }

        return redirect()->route('artikels.review', ['id' => $newPost->id])->with('success', 'Data Artikel Anda');
    }

    public function review(string $id): View
    {
        $artikel = Artikel::findOrFail($id);
        if (!$artikel) {
            return abort(404);
        }

        return view('artikel.review', ['artikel' => $artikel]);
    }


}
